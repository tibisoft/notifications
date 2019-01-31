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

/**
 * Class MailChannel
 * @package Tibisoft\Notifications\Channel
 */
class MailChannel implements ChannelInterface
{
    private $mailer;

    /**
     * MailChannel constructor.
     * @param Mailer $mailer
     */
    public function __construct( $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @param MessageInterface $message
     * @return bool
     */
    public function canSend(MessageInterface $message): bool
    {
        return $message instanceof MailMessage;
    }

    /**
     * @param MessageInterface $message
     * @return bool
     */
    public function send(MessageInterface $message): bool
    {
        $subject = $message->getSubject();
        $from = $message->getFrom();
        $to = $message->getTo();
        $cc = $message->getCc();
        $bcc = $message->getBcc();

        $message = (new \Swift_Message($subject))
            ->setFrom($from)
            ->setTo($to)
            ->setBcc($cc)
            ->setBcc($bcc)
            ->setBody(
                'test!',
                'text/html'
            )
            /*
             * If you also want to include a plaintext version of the message
            ->addPart(
                $this->renderView(
                    'emails/registration.txt.twig',
                    ['name' => $name]
                ),
                'text/plain'
            )
            */
        ;

        $this->mailer->send($message);
        //        throw new NotImplementedException("No sender for mail implemented");
    }
}
