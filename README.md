# codeTeaser
Get good looking teaser even if the code was trimmed.

![Build status](https://img.shields.io/circleci/project/trzczy/codeTeaser.svg?style=flat-square)
![Code Climate](https://img.shields.io/codeclimate/coverage/github/trzczy/codeTeaser.svg?style=flat-square)
## Installation
`composer require master/code-teaser`

## Usage example
```php
    require __DIR__ . '/vendor/autoload.php';
    $codeTeaserObject = new Mvc\Model\Domain\codeTeaser();
    $codeTeaser = $codeTeaserObject->build(50, '<p>Zażółć gęślą jaźń.</p><code script = "js">client.setCredentials("user", "passw0rd");</code>');
```