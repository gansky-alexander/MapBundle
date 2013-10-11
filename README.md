MapBundle
=========

How to install:
1. Update AppCernel.php
``` php
        $bundles = array(
            ...
            new JMS\AopBundle\JMSAopBundle(),
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new JMS\DiExtraBundle\JMSDiExtraBundle($this),
            new Gansky\MapBundle\GanskyMapBundle(),
        );
```

2. Update routing.yml

``` yaml
gansky_map:
  	  resource: "@GanskyMapBundle/Controller/"
  	  type:     annotation
  	  prefix:   /
```

3. composer.json
``` js
{
    ...
    "require": { 
        ...
        "jms/di-extra-bundle": "1.4.*@stable",
        "doctrine/doctrine-fixtures-bundle": "dev-master",
        "doctrine/data-fixtures": "dev-master"
    }
}
```
Bundle for map.
