# Hello World Example Project

Every story must have a beginning and for development a **Hello World** example is the easiest way to introduce someone to the technology used.

This is a introduction to testing PHP code using PHPUnit.

## Requirements

This introduction is written for [PHP 7.1](https://secure.php.net/downloads.php) and [PHPUnit 6.3](https://phpunit.de/) where PHPUnit is added to the project using [Composer 1.5](https://getcomposer.org/). Please update your environment to support this PHP version or have a look at the official [PHP Docker images](https://hub.docker.com/_/php/).

## Getting started

Clone this repository locally, run composer install and run the unit tests from command line. We assume you have composer installed globally on your system, if not you can directly use the [latest composer.phar](https://getcomposer.org/composer.phar) as `php composer.phar` everytime we say `composer`.

```
git clone https://github.com/in2it/hello-world.git
cd hello-world/
composer install
./vendor/bin/phpunit
```

## License

We have licensed this project with [MIT License](LICENSE) as we want everyone to make use of it for learning and exploring purposes.
