<?php

namespace Insua\PhpcsGitPreCommit;

class Installer
{
    public static function postInstall()
    {
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            system('cmd /c vendor\insua\phpcs-git-pre-commit\src\setup.bat');
        } else {
            system('sh vendor/insua/phpcs-git-pre-commit/src/setup.sh');
        }
    }
}
