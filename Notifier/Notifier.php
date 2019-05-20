<?php
/**
 * Created by PhpStorm.
 * User: Willem
 * Date: 29-1-2019
 * Time: 23:46
 */

namespace Tibisoft\Notifications\Notifier;

use Tibisoft\Notifications\Channel\ChannelInterface;
use Tibisoft\Notifications\Message\MessageInterface;

/**
 * Class Notifier
 * @package Tibisoft\Notifications\Notification
 */
class Notifier extends AbstractNotifier
{
    /**
     * @param MessageInterface $message
     * @return mixed|void
     */
    public function send(MessageInterface $message)
    {
        /** @var ChannelInterface $channel */
        foreach($this->channels as $channel) {
            if ($channel->canSend($message)) {
                $channel->send($message);
            }
        }
    }
}