SwaggerUIBundle
===============

A Symfony Bundle that integrates **SwaggerUI**

Installation
------------

Require the `ratza/swagger-ui-bundle` package in your composer.json and update your dependencies.

Also add the swagger-api repository in your repositories key of the composer.json file:
``` json
    "repositories": [
        {
            "type": "package",
            "package": {
                "name": "swagger-api/swagger-ui",
                "version": "2.0.24",
                "source": {
                    "url": "https://github.com/swagger-api/swagger-ui.git",
                    "type": "git",
                    "reference": "v2.0.24"
                }
            }
        }
    ]
```

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

For the Symfony 2.6 WebProfiler to correctly count and display the AJAX requests from the
SwaggerUI you need to:

1. Create override folder: `app/Resources/WebProfilerBundle/views/Profiler`
2. CD into the directory created in step 1
3. Symlink the file from this Bundle by running:
``` sh
$ ln -s ../../../../../vendor/ratza/swagger-ui-bundle/src/Ratza/SwaggerUIBundle/Resources/views/Profiler/base_js.html.twig
```

Reference Configuration
-----------------------
``` yaml
ratza_swagger_ui:
    force_xhr: true
    auth_key_prefix: "Bearer "
    auth_field_key: "Authorization"
    auth_field_location: "header"
    api_docs:
        route: false
        path: api/api-docs
```
