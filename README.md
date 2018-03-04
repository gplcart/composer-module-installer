[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gplcart/composer-module-installer/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/gplcart/composer-module-installer/?branch=master)

**GplCart composer module installer** is a [composer](https://getcomposer.org) plugin that allows developers to download GplCart modules into module directory using standard `composer require` command.

**Note**: you have to enable downloaded modules manually

To make your module available for this installer, be sure you have the following lines in composer.json

    {
    "type": "gplcart-module",
    "require": {
    	"gplcart/composer-module-installer": "^1"
    }



