<?php
/**
 * Created by PhpStorm.
 * User: Willem
 * Date: 31-1-2019
 * Time: 20:42
 */

namespace Tibisoft\Notifications\Compiler;

use Symfony\Component\DependencyInjection\Alias;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Class ChannelCompilerPass
 * @package Tibisoft\Notifications\Compiler
 */
class ChannelCompilerPass implements CompilerPassInterface
{
    /**
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        //TODO: Maybe not needed to use a compiler pass?
        $mailChannelDefinition = new Definition('Tibisoft\Notifications\Channel\MailChannel');
        $mailChannelDefinition->addArgument(new Reference('mailer'));
        $mailChannelDefinition->addTag('tibisoft.notifications.channel');
        $container->setDefinition('tibisoft.notifications.channel.mail', $mailChannelDefinition);


        $notifier = new Definition('Tibisoft\Notifications\Notifier\Notifier');
        $container->setDefinition('tibisoft.notifications.notifier', $notifier);
        $notifierAlias = new Alias('tibisoft.notifications.notifier');
        $container->setAlias('Tibisoft\Notifications\Notifier\Notifier', $notifierAlias);

        $taggedServices = $container->findTaggedServiceIds('tibisoft.notifications.channel');
        foreach ($taggedServices as $id => $tagAttributes) {
            $notifier->addMethodCall('add', array(
                new Reference($id),
            ));
        }
    }
}
