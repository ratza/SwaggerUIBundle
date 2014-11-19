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
