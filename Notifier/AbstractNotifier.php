<?php
/**
 * Created by PhpStorm.
 * User: Willem
 * Date: 31-1-2019
 * Time: 21:17
 */
namespace Tibisoft\Notifications\Notifier;

use Tibisoft\Notifications\Channel\ChannelInterface;

/**
 * Class AbstractNotifier
 * @package Tibisoft\Notifications\Notification
 */
abstract class AbstractNotifier implements NotifierInterface
{
    /** @var ChannelInterface[] */
    protected $channels;

    /**
     * @param ChannelInterface $channel
     */
    public function add(ChannelInterface $channel)
    {
        $this->channels[] = $channel;
    }
}
