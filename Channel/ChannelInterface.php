<?php
/**
 * Created by PhpStorm.
 * User: Willem
 * Date: 29-1-2019
 * Time: 23:41
 */

namespace Tibisoft\Notifications\Channel;


use Tibisoft\Notifications\Message\MessageInterface;
use Tibisoft\Notifications\Notification\NotificationInterface;

/**
 * Interface ChannelInterface
 * @package App\Tibisoft\Notifications\Channel
 */
interface ChannelInterface
{
    /**
     * @param MessageInterface $message
     *
     * @return bool
     */
    public function canSend(MessageInterface $message): bool;

    /**
     * @param MessageInterface $message
     *
     * @return bool
     */
    public function send(MessageInterface $message): bool;
}