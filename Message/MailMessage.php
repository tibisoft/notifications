<?php
/**
 * Created by PhpStorm.
 * User: Willem
 * Date: 29-1-2019
 * Time: 23:43
 */

namespace Tibisoft\Notifications\Message;

/**
 * Class MailMessage
 * @package Tibisoft\Notifications\Message
 */
class MailMessage implements MessageInterface
{
    /**
     * @var string
     */
    private $from;

    /**
     * @var array
     */
    private $to;

    /**
     * @var array
     */
    private $cc;

    /**
     * @var array
     */
    private $bcc;

    /**
     * @var string
     */
    private $subject;

    public function __construct()
    {
        $this->subject = '';
        $this->to = [];
        $this->cc = [];
        $this->bcc = [];
    }

    /**
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * @param string $from
     */
    public function setFrom(string $from): void
    {
        $this->from = $from;
    }

    /**
     * @return array
     */
    public function getTo(): array
    {
        return $this->to;
    }

    /**
     * @param array $to
     */
    public function setTo(array $to): void
    {
        $this->to = $to;
    }

    /**
     * @param string $email
     * @param string $name
     */
    public function addTo(string $email, string $name)
    {
        $this->to[] = [$email, $name];
    }

    /**
     * @return array
     */
    public function getCc(): array
    {
        return $this->cc;
    }

    /**
     * @param string $email
     * @param string $name
     */
    public function addCc(string $email, string $name)
    {
        $this->cc[] = [$email, $name];
    }

    /**
     * @param array $cc
     */
    public function setCc(array $cc): void
    {
        $this->cc = $cc;
    }

    /**
     * @return array
     */
    public function getBcc(): array
    {
        return $this->bcc;
    }

    /**
     * @param array $bcc
     */
    public function setBcc(array $bcc): void
    {
        $this->bcc = $bcc;
    }

    /**
     * @param string $email
     * @param string $name
     */
    public function addBcc(string $email, string $name)
    {
        $this->bcc[] = [$email, $name];
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }
}
