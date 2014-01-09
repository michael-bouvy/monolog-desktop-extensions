Monolog Desktop Extensions
==========================

Desktop notifications extensions (handlers / formatters) : notify-send (Linux) and Growl (Mac OS) for Monolog PHP library.

These handlers are heavily inspired by Fabien Potencier's [Sismo](https://github.com/fabpot/Sismo) application's notifiers.

Usage
-----

See `examples/linux-notification.php`.

Handlers
--------

####NotifySend

Uses Linux's `libnotify`, check you have `libnotify-bin` installed locally.

####Growl

To come.

Install
-------

####Via composer

Just require the library in your `composer.json` :

```json
{
    "require": {
        "michael-bouvy/monolog-desktop-extensions": "dev-master"
    }
}
```