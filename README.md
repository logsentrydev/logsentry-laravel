# LogSentry for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/logsentrydev/logsentry-laravel.svg?style=flat-square)](https://packagist.org/packages/logsentrydev/logsentry-laravel)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/logsentrydev/logsentry-laravel/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/logsentrydev/logsentry-laravel/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/logsentrydev/logsentry-laravel/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/logsentrydev/logsentry-laravel/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/logsentrydev/logsentry-laravel.svg?style=flat-square)](https://packagist.org/packages/logsentrydev/logsentry-laravel)

## [LogSentry.dev](https://logsentry.dev) 👋 

*Effortless log management—store, search, and secure your logs with ease!*

Effortlessly collect, monitor, and secure your logs in real time—we store them for you! Search live data, get full audit context, and safely archive logs with encryption. Need old logs? Restore them in a click! 🚀🔎🔒

> [!IMPORTANT]
> You’ll need [an account](https://logsentry.dev) and API key to get started—sign up and start logging in minutes! 🔑🚀

## Features

- 🚀 Seamless Log Collection – Easily gather logs from any app that can send a POST request. No complex setup required!
- 🔎 Real-Time Search & Monitoring – Instantly filter, search, and track your logs as they happen. Stay ahead of issues before they escalate!
- 🛡️ Complete Audit Trail – Collect valuable context with every log entry, making audits and debugging a breeze.
- 🔒 Secure Log Archiving – Encrypt and store old logs safely, ensuring compliance and long-term accessibility.
- ♻️ Instant Log Restoration – Need past logs? Restore them from the archive anytime with just a few clicks!

## Installation

You can install the package via composer:

```bash
composer require logsentrydev/logsentry-laravel
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="logsentry-config"
```

This is the contents of the published config file:

```php
return [
    'secret' => env('LOGSENTRY_SECRET'),
    'endpoint' => env('LOGSENTRY_ENDPOINT', 'https://logsentry.dev/api/v1/event'),
];
```

## Usage

> [!NOTE]
> In order to use this package you need a free [LogSentry](https://logsentry.dev) account. You also need to create an API key under your account.



1. Add the following to the `channels` key in your `config/logging.php` file
```php
use LogSentry\Laravel\LogSentryLogHandler;

...

'channels' => [
    'logsentry' => [
        'driver'  => 'monolog',
        'handler' => LogSentryLogHandler::class,
        'with' => [
        ],
    ],

    ....
],
```

2. Set your logging channel to `logsentry` in your `.env` file.

```
LOG_CHANNEL=logsentry
```

3. Add your API key to your .env file. For example:
```
LOGSENTRY_SECRET="1|APl3KOP8vKDRuNS2SwvCEjn3whO6lXWODlPOz9b44e9daf29"
```



## Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
