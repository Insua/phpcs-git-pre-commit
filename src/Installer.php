<?php

namespace Insua\PhpcsGitPreCommit;

class Installer
{
    public static function postInstall()
    {
        if (is_file("./git/hooks/pre-commit")) {
            unlink("./git/hooks/pre-commit");
        }
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            if (is_file("./git/hooks/pre-commit.ps1")) {
                unlink("./git/hooks/pre-commit.ps1");
            }
            copy("./vendor/insua/phpcs-git-pre-commit/src/pre-commit.win", "./.git/hooks/pre-commit");
            copy("./vendor/insua/phpcs-git-pre-commit/src/pre-commit.ps1", "./.git/hooks/pre-commit.ps1");
            chmod("./.git/hooks/pre-commit", 0777);
        } else {
            copy("./vendor/insua/phpcs-git-pre-commit/src/pre-commit", "./.git/hooks/pre-commit");
            chmod("./.git/hooks/pre-commit", 0777);
        }
    }
}
