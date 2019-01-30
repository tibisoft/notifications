<?php
/**
 * Created by PhpStorm.
 * User: Willem
 * Date: 29-1-2019
 * Time: 23:43
 */

namespace Tibisoft\Notifications\Channel;

use Tibisoft\Notifications\Message\MailMessage;
use Tibisoft\Notifications\Message\MessageInterface;
use Symfony\Component\Intl\Exception\NotImplementedException;

class MailChannel implements ChannelInterface
{
    public function canSend(MessageInterface $message): bool
    {
        return $message instanceof MailMessage;
    }

    public function send(MessageInterface $message): bool
    {
        throw new NotImplementedException("No sender for mail implemented");
    }
}
