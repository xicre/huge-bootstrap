# HUGE - Bootstrap

[![Build status](https://ci.appveyor.com/api/projects/status/1ubs2v5ux5khorut/branch/master?svg=true)](https://ci.appveyor.com/project/afermon/huge-bootstrap/branch/master)
[![Code Climate](https://codeclimate.com/github/xicre/huge-bootstrap/badges/gpa.svg)](https://codeclimate.com/github/xicre/huge-bootstrap)
[![Build Status](https://travis-ci.org/xicre/huge-bootstrap.svg?branch=master)](https://travis-ci.org/xicre/huge-bootstrap)
[![Dependency Status](https://www.versioneye.com/user/projects/563fef2e4d415e001b0003de/badge.svg?style=flat)](https://www.versioneye.com/user/projects/563fef2e4d415e001b0003de)

### Features 
* built with the official PHP password hashing functions, fitting the most modern password hashing/salting web standards
* proper security features, like CSRF blocking (via form tokens), encryption of cookie contents etc.
* users can register, login, logout (with username, email, password)
* password-forget / reset
* remember-me (login via cookie)
* account verification via mail
* captcha (This fork will implement Google ReCaptcha)
* failed-login-throttling
* user profiles
* account upgrade / downgrade
* simple user types (type 1, type 2, admin)
* supports local avatars and remote Gravatars
* supports native mail and SMTP sending (via PHPMailer and other tools)
* uses PDO for database access for sure, has nice DatabaseFactory (in case your project goes big) 
* uses URL rewriting ("beautiful URLs")
* proper split of application and public files (requests only go into /public)
* uses Composer to load external dependencies (PHPMailer, Captcha-Generator, etc.) for sure
* fits PSR-0/1/2/4 coding guidelines
* uses [Post-Redirect-Get pattern](https://en.wikipedia.org/wiki/Post/Redirect/Get) for nice application flow
* masses of comments
* is actively developed, maintained and bug-fixed
* Bootstrap CSS

### Requirements <a name="requirements"></a>

Make sure you know the basics of object-oriented programming and MVC, are able to use the command line and have
used Composer before. This script is not for beginners.

* **PHP 5.5+**
* **MySQL 5** database (better use versions 5.5+ as very old versions have a [PDO injection bug](http://stackoverflow.com/q/134099/1114320)
* installed PHP extensions: pdo, gd, openssl (the install guideline shows how to do)
* installed tools on your server: git, curl, composer (the install guideline shows how to do)
* for professional mail sending: an SMTP account (I use [SMTP2GO](http://www.smtp2go.com/?s=devmetal))
* activated mod_rewrite on your server (the install guideline shows how to do)

### Installation

Since this is a fork of [Huge](https://github.com/panique/huge), please refer to [Huge](https://github.com/panique/huge) for instalation guides.

### License <a name="license"></a>

Licensed under [MIT](http://www.opensource.org/licenses/mit-license.php). 
Totally free for private or commercial projects.

Xicre Solutions 2015
