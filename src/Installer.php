<?php

/**
 * @package GPL Cart composer module installer
 * @author Iurii Makukh <gplcart.software@gmail.com>
 * @copyright Copyright (c) 2017, Iurii Makukh <gplcart.software@gmail.com>
 * @license https://www.gnu.org/licenses/gpl.html GNU/GPLv3
 */

namespace Gplcart\Composer\ModuleInstaller;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class Installer extends LibraryInstaller
{

    /**
     * @param PackageInterface $package
     * @return string
     */
    public function getInstallPath(PackageInterface $package)
    {
        if (!file_exists(getcwd() . '/system/modules')) {
            throw new \LogicException('Module directory not found. You have to install modules from root directory');
        }

        $parts = explode('/', $package->getPrettyName(), 2);
        return "system/modules/{$parts[1]}";
    }

    /**
     * @param string $packageType
     * @return bool
     */
    public function supports($packageType)
    {
        return 'gplcart-module' === $packageType;
    }

}
