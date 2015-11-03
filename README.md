EabImageFilterBundle
====================

##Summary

eZ Publish 5 bundle for image variation filters.

So far only 1 filter is provided: `thumbnailgravityfilter/center`.

##Copyright

Based on
[Image aliases and filters in eZ Publish 5.4+](http://www.mugo.ca/Blog/Image-aliases-and-filters-in-eZ-Publish-5.4).
Many thanks Thiago for this useful tutorial!

##License

Licensed under [GNU General Public License 2.0](http://www.gnu.org/licenses/gpl-2.0.html)

##Requirements

Requires eZ Publish 5.4 or above.

##Installation

1. Either install using composer:

        composer require --update-no-dev --prefer-dist eab/image-filter-bundle

    or install the source as a submodule using git:

        git submodule add https://github.com/eab-dev/ImageFilterBundle src/Eab/ImageFilterBundle

2. Edit the function `registerBundles()` in `ezpublish/EzPublishKernel.php` and add the line:

        new Eab\ImageFilterBundle\EabImageFilterBundle(),

    to the array of bundles. Save it.

##Usage

1. Configure your own image variations/aliases in your bundle's `image_variations.yml`.

For example:

```
system:
    default:
        image_variations:
            my_nice_thumbnail:
                reference: ~
                filters:
                    - { name: thumbnailgravityfilter/center, params: [300, 300] }
```

2. Use in your templates:

```
{% set thumbnail_image = ez_image_alias( content.getField( 'image' ), content.versionInfo, 'my_nice_thumbnail') %}
<img class="responsive" src="{{ thumbnail_image.uri }}">
```
