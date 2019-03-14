@echo off

if exist .git/hooks/pre-commit (
    rem file exists
) else (
    rem file doesn't exist
)

xcopy /s /f /y "vendor\insua\phpcs-pre-commit-hook\src\pre-commit" ".git\hooks\pre-commit"
