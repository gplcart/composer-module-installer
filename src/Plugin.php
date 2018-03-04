<?php

/**
 * @package GPL Cart composer module istaller
 * @author Iurii Makukh <gplcart.software@gmail.com>
 * @copyright Copyright (c) 2017, Iurii Makukh <gplcart.software@gmail.com>
 * @license MIT
 */

namespace Gplcart\Composer\ModuleInstaller;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Plugin implements PluginInterface
{

    /**
     * @param Composer $composer
     * @param IOInterface $io
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new \Gplcart\Composer\ModuleInstaller\Installer($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }

}
