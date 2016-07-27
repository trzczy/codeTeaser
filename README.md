# codeTeaser
Get good looking teaser even if the code was trimmed.

![Build status](https://img.shields.io/circleci/project/trzczy/codeTeaser.svg?style=flat-square)

## Instalation
`composer require master/code-teaser`

## Example usage
    <?php
    require __DIR__ . '/vendor/autoload.php';
    $codeTeaserObject = new Mvc\Model\Domain\codeTeaser();
    $codeTeaser = $codeTeaserObject->build(50, '<p>Zazółć gęślą jaźń</p><code script = "js">client.setCredentials("user", "passw0rd");</code>');