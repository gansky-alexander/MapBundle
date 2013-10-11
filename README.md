MapBundle
=========

How to install:
1. Update AppCernel.php
        $bundles = array(
            ...
            new Gansky\MapBundle\GanskyMapBundle(),
        );

2. Update routing.yml
	gansky_map:
  	  resource: "@GanskyMapBundle/Controller/"
  	  type:     annotation
  	  prefix:   /

Bundle for map.
