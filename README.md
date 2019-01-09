# Example REST API based on [Symlex Core](https://github.com/symlex/symlex-core)

[![License: MIT](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)
[![Documentation](https://readthedocs.org/projects/symlex-docs/badge/?version=latest&style=flat)](https://docs.symlex.org/en/latest/)

Before you start, make sure you have PHP 7.1+, [Composer](https://getcomposer.org/) and [Docker](https://www.docker.com/) installed on your system 
([howto](https://docs.symlex.org/en/latest/osx/) for Mac OS X). 
Instead of using Docker, you can set up your own runtime environment based on the existing 
[Dockerfiles](https://github.com/symlex/rest-api/tree/master/app/docker).
We recommend using [Nginx](https://www.nginx.com/) with [PHP-FPM](http://php.net/manual/en/install.fpm.php)
and URL [rewrite rules](https://github.com/symlex/symlex/blob/master/app/docker/nginx/site.conf) similar to Symfony.

**Step 1:** Run `composer` to create a new project:

```
composer create-project symlex/rest-api myapp
```

Composer will ask for config values to generate `app/config/parameters.yml` for you.

Make sure `storage/cache` is writable so that cache files can be created by the app.

**Step 2:** Start nginx and PHP using `docker-compose`:

```
cd myapp
docker-compose up
```

*Note: This docker-compose configuration is for testing and development purposes only. 
You might need to tweak it if you run Docker with a different user for security reasons.
On OS X, the current release of Docker is [really slow](https://twitter.com/lastzero/status/829191426391027712) 
in executing PHP from the host's file system.*

**Step 3:** Open http://localhost:8088/example/123 in a browser ([source](src/Controller/ExampleController.php)).

To open a terminal, run `docker-compose exec php sh`.

YAML files located in `app/config` configure the app based on parameters and services.
The main config file is `app/config/rest.yml`.

If you add `localhost-debug` to your `/etc/hosts` and access the site with that, it will load in debug
mode (you'll see a stack trace and other debug information on the error pages).

Our complete framework documentation can be found on [docs.symlex.org](https://docs.symlex.org/en/latest/).

## About ##

Symlex is maintained by [Michael Mayer](https://blog.liquidbytes.net/about/) and
aims to simplify agile Web development by providing a working system that promotes best practices by example.
Michael released his [first PHP framework](http://freshmeat.sourceforge.net/projects/awf) in 2001 and 
has worked with various major framework vendors in the past.
Building this would not have been possible without a lot of prior work by other developers.
Thank you to those and everyone who contributed!

> Choice is the enemy of productivity. Put another way, if your solution does everything, 
> and has no opinions about anything, then it solves nothing. ― *Asim Aslam*

Feel free to send an e-mail to [hello@symlex.org](mailto:hello@symlex.org) if you have any questions, 
need [commercial support](https://blog.liquidbytes.net/contact/) or just want to say hello. 
We welcome contributions of any kind. If you have a bug or an idea, read our 
[guide](https://docs.symlex.org/en/latest/contribute/) before opening an issue.
