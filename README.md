MapBundle
=========

How to install:
1. Update AppCernel.php
        $bundles = array(
            ...
            new JMS\AopBundle\JMSAopBundle(),
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new JMS\DiExtraBundle\JMSDiExtraBundle($this),
            new Gansky\MapBundle\GanskyMapBundle(),
        );

2. Update routing.yml
	gansky_map:
  	  resource: "@GanskyMapBundle/Controller/"
  	  type:     annotation
  	  prefix:   /

3. composer.json
{
    "name": "gansky/map-bundle",
    "license": "MIT",
    "type": "project",
    "description": "Symfony2 bundle for map.",
    "autoload": {
        "psr-0": { "": "src/" }
    },
    "require": {
        "php": ">=5.3.3",
        "symfony/symfony": "2.3.*",
        "doctrine/orm": ">=2.2.3,<2.4-dev",
        "doctrine/doctrine-bundle": "1.2.*",
        "twig/extensions": "1.0.*",
        "symfony/assetic-bundle": "2.3.*",
        "symfony/swiftmailer-bundle": "2.3.*",
        "symfony/monolog-bundle": "2.3.*",
        "sensio/distribution-bundle": "2.3.*",
        "sensio/framework-extra-bundle": "2.3.*",
        "sensio/generator-bundle": "2.3.*",
        "incenteev/composer-parameter-handler": "~2.0",
        "jms/di-extra-bundle": "1.4.*@stable",
        "doctrine/doctrine-fixtures-bundle": "dev-master",
        "doctrine/data-fixtures": "dev-master"
    },
    "scripts": {
        "post-install-cmd": [
            "Incenteev\\ParameterHandler\\ScriptHandler::buildParameters",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::buildBootstrap",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::clearCache",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::installAssets",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::installRequirementsFile"
        ],
        "post-update-cmd": [
            "Incenteev\\ParameterHandler\\ScriptHandler::buildParameters",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::buildBootstrap",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::clearCache",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::installAssets",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::installRequirementsFile"
        ]
    },
    "config": {
        "bin-dir": "bin"
    },
    "minimum-stability": "stable",
    "extra": {
        "symfony-app-dir": "app",
        "symfony-web-dir": "web",
        "incenteev-parameters": {
            "file": "app/config/parameters.yml"
        },
        "branch-alias": {
            "dev-master": "2.3-dev"
        }
    }
}

Bundle for map.
