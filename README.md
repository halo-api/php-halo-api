# PHP Halo API [![Build Status](https://travis-ci.org/halo-api/php-halo-api.svg?branch=master)](https://travis-ci.org/halo-api/php-halo-api)

A simple Object Oriented wrapper for Halo API

## Getting started

### Features

- Follows PSR-4 conventions and coding standard
- Light and fast by lazy loading of API classes
- Extensively tested
- Decoupled from specific HTTP transport protocols by using [HTTPlug](http://docs.php-http.org/en/latest/)

### Install

Then run the following command to require the library and install a http transport adapter:
```bash
composer require halo-api/halo-api php-http/guzzle6-adapter "^1.1"
```

### Usage

Example code on how to use the api client

```php
<?php

require_once '/vendor/autoload.php';

$guzzleClient = new \Http\Adapter\Guzzle6\Client();
$builder = new \HaloApi\HttpClient\Builder($guzzleClient);

// Constructing and passing the builder is optional. The client will use
// auto discovery of the available http client to construct the builder (See mininal example)
$client = new \HaloApi\Client('apikey', $builder);

$result = $client->halo5Metadata()->campaignMissions();

// Or with minimal setup (an httplug client adapter must be installed)
$client = new \HaloApi\Client('apikey');

$result = $client->halo5Metadata()->campaignMissions();
```

## Contribute

Please do! The source code is hosted at [GitHub](https://github.com/halo-api/halo-api). 
If you want a feature or discover a bug, [open an issue](https://github.com/halo-api/php-halo-api/issues/new) or a pull request.

For other updates, follow me on Twitter: [@jeroenthora](https://twitter.com/jeroenthora).

## License

This project is released under the [MIT License](LICENSE).
