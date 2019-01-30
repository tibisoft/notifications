<?php
/**
 * Created by PhpStorm.
 * User: Willem
 * Date: 29-1-2019
 * Time: 23:46
 */

namespace Tibisoft\Notifications\Notification;


use Tibisoft\Notifications\Channel\ChannelInterface;
use Tibisoft\Notifications\Message\MessageInterface;

class Notification implements NotificationInterface
{
    public function send(MessageInterface $message)
    {
        //find sendable channels
        $channels = [];

        /** @var ChannelInterface $channel */
        foreach($channels as $channel) {
            if ($channel->canSend($message)) {
                $channel->send($message);
            }
        }
    }
}