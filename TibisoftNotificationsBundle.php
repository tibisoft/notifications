<?php
/**
 * Created by PhpStorm.
 * User: Willem
 * Date: 29-1-2019
 * Time: 23:12
 */

namespace Tibisoft\Notifications;

use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Tibisoft\Notifications\Compiler\ChannelCompilerPass;

class TibisoftNotificationsBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new ChannelCompilerPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 50);

    }
}
