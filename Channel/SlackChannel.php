<?php
/**
 * Created by PhpStorm.
 * User: Willem
 * Date: 29-1-2019
 * Time: 23:48
 */

namespace Tibisoft\Notifications\Channel;

use Tibisoft\Notifications\Message\MessageInterface;
use Tibisoft\Notifications\Message\SlackMessage;
use Tibisoft\Notifications\Notification\NotificationInterface;
use Symfony\Component\Intl\Exception\NotImplementedException;

/**
 * Class SlackChannel
 * @package App\Tibisoft\Notifications\Channel
 */
class SlackChannel implements ChannelInterface
{
    /**
     * @param NotificationInterface $notification
     *
     * @return bool
     */
    public function canSend(MessageInterface $message): bool
    {
        return $message instanceof SlackMessage;
    }

    /**
     * @param NotificationInterface $notification
     *
     * @return bool
     */
    public function send(MessageInterface $message): bool
    {
        throw new NotImplementedException("No sender for mail implemented");
    }
}