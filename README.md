<h1 align="center"> phpcs-git-pre-commit </h1>

<p align="center"> Pure php phpcs git pre commit.</p>


## Installing

```shell
$ composer require insua/phpcs-git-pre-commit
```

## Usage

add scripts
```
"scripts": {
    "post-install-cmd": [
        "Insua\\PhpcsGitPreCommit\\Installer::postInstall"
    ],
    "post-update-cmd": [
        "Insua\\PhpcsGitPreCommit\\Installer::postInstall"
    ]
}
```

## License

MIT

## Alternatives

* [WickedReports/phpcs-pre-commit-hook](https://github.com/WickedReports/phpcs-pre-commit-hook)
