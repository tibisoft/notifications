<?php
/**
 * Created by PhpStorm.
 * User: Willem
 * Date: 29-1-2019
 * Time: 23:42
 */

namespace Tibisoft\Notifications\Notifier;

use Tibisoft\Notifications\Channel\ChannelInterface;
use Tibisoft\Notifications\Message\MessageInterface;

/**
 * Interface NotifierInterface
 * @package Tibisoft\Notifications\Notification
 */
interface NotifierInterface
{
    /**
     * @param ChannelInterface $channel
     */
    public function add(ChannelInterface $channel);

    /**
     * @param MessageInterface $message
     * @return mixed
     */
    public function send(MessageInterface $message);
}