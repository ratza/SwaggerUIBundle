SwaggerUIBundle
===============

A Symfony Bundle that integrates **SwaggerUI**

Installation
------------

Require the `ratza/swagger-ui-bundle` package in your composer.json and update your dependencies.

Register the bundle in `app/AppKernel.php`:

``` php
// app/AppKernel.php
public function registerBundles()
{
    return array(
        // ...
        new Ratza\SwaggerUIBundle\RatzaSwaggerUIBundle(),
    );
}
```

Import the bundle's config files into application's config.yml file
``` yaml
// app/config/config.yml
imports:
    // ...
    - { resource: @RatzaSwaggerUIBundle/Resources/config/config.yml }
```


Reference Configuration
-----------------------
``` yaml
ratza_swagger_ui:
    api_docs:
        route: false
        path: api/api-docs
```
