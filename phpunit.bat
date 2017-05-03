@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
REM SET BIN_TARGET=%~dp0/../phpunit/phpunit/phpunit
SET BIN_TARGET=C:\phpunit\vendor\phpunit\phpunit\phpunit
php "%BIN_TARGET%" %*
