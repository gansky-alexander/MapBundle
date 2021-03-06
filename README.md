Update AppCernel.php
--------------------

``` php
        $bundles = array(
            ...
            new JMS\AopBundle\JMSAopBundle(),
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new JMS\DiExtraBundle\JMSDiExtraBundle($this),
            new Gansky\MapBundle\GanskyMapBundle(),
        );
```

Update routing.yml
------------------

``` yaml
gansky_map:
  	  resource: "@GanskyMapBundle/Controller/"
  	  type:     annotation
  	  prefix:   /
```

composer.json
-------------

```js
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

Load initial data
-----------------
```Shell
php app/console map:load-data cherkasy yes
php app/console map:load-data chernihiv yes
php app/console map:load-data chernivtsi yes
php app/console map:load-data dnipropetrovsk yes
php app/console map:load-data donetsk yes
php app/console map:load-data ivano-frankivsk
php app/console map:load-data kharkiv
php app/console map:load-data kherson yes
php app/console map:load-data khmelnytskyi
php app/console map:load-data kiev yes
php app/console map:load-data kirovohrad
php app/console map:load-data lugansk
php app/console map:load-data lutsk yes
php app/console map:load-data lviv yes
php app/console map:load-data mykolaiv yes
php app/console map:load-data odessa
php app/console map:load-data poltava yes
php app/console map:load-data rivne
php app/console map:load-data simferopol
php app/console map:load-data sumy
php app/console map:load-data ternopil
php app/console map:load-data uzhhorod yes
php app/console map:load-data vinnytsia yes
php app/console map:load-data zaporizhzhia
php app/console map:load-data zhytomyr
```
Data get from http://www.openstreetmap.org/browse/relation/72639,
http://open.mapquestapi.com/nominatim/v1/details.php?place_id=98167969
Bundle for map.

TODOS:
------
* ~~Показывать карту с отрисованными границами;~~
* ~~Назначение цветов для определенной отрисованной границы;~~
* ~~Расчет цветов областей в зависимости то некоторых статистических данных; (для реализации написан функция расчета попадания точки в полигон)~~
* Добавить возможность рисовать свои независимые границы;
* Добаввить возможность выыводить некоторую информацию по клику на область без перерисовки страницы;


