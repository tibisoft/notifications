<?php
/**
 * Created by PhpStorm.
 * User: Willem
 * Date: 29-1-2019
 * Time: 23:42
 */

namespace Tibisoft\Notifications\Notification;


use Tibisoft\Notifications\Message\MessageInterface;

interface NotificationInterface
{
    public function send(MessageInterface $message);
}