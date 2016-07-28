# codeTeaser
Get good looking teaser even if the code was trimmed.

![Build status](https://img.shields.io/circleci/project/trzczy/codeTeaser.svg?style=flat-square)
[![Coverage Status](https://coveralls.io/repos/github/trzczy/codeTeaser/badge.svg?branch=master)](https://coveralls.io/github/trzczy/codeTeaser?branch=master)

## Installation
`composer require master/code-teaser`

## Usage example
```php
    require __DIR__ . '/vendor/autoload.php';
    $codeTeaserObject = new Mvc\Model\Domain\codeTeaser();
    $codeTeaser = $codeTeaserObject->build(50, '<p>Zażółć gęślą jaźń</p><code script = "js">client.setCredentials("user", "passw0rd");</code>');
```