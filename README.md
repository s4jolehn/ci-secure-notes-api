# Codeigniter & Svelte Note Application

## Purpose

Part of a bachelor's thesis exploring the usage of single page applications and JWTs.

## Installation

- `composer update` to download PHP packages
- `npm install` to download JS dependencies

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings. As well as setting a JWT secret key `JWT_SECRET_KEY`

- run `php spark serve`
- run `npm run dev`
## Server Requirements

PHP version 7.3 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
