<?php

namespace C3\PhpDevServer;

class WebserverInstaller
{
    public static function isInstalled()
    {
        exec('"${HOME}/.symfony5/bin/symfony" php -r "echo PHP_INT_MAX;" 2>&1', $output);
        $output = (int)implode('', $output);

        return $output === PHP_INT_MAX;
    }

    public static function install()
    {
        passthru('curl -sS https://get.symfony.com/cli/installer | bash');
    }
}
