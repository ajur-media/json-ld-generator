# JSON-LD Generator

Extremely simple JSON-LD generator.

AJUR Media fork, compatible with PHP7.4 & PHP 8.*

Original code:
- [JSON-LD Generator on Packagist](https://packagist.org/packages/torann/json-ld)
- [JSON-LD Generator on GitHub](https://github.com/Torann/json-ld)

## Installation

From the command line run

```
$ composer require ajur-media/json-ld-generator
```

## Methods

**/Context.php**

- `create($context, array $data = [])`
- `getProperties()`
- `generate($flags)`

## Context Types

- article
- audiobook
- beach
- blog_posting
- book
- breadcrumb_list
- contact_point
- corporation
- creative_work
- duration
- event
- geo_coordinates
- image_object
- invoice
- list_item
- local_business
- media_object
- music_album
- music_group
- music_playlist
- music_recording
- news_article
- offer
- order
- organization
- person
- place
- postal_address
- price_specification
- product
- rating
- recipe
- review
- sculpture
- search_box
- thing
- video_object
- web_page
- web_site

## Examples

### Quick Example

#### Business

```php
$context = \AJUR\Toolkit\JsonLd\Context::create('local_business', [
    'name' => 'Consectetur Adipiscing',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
    'telephone' => '555-555-5555',
    'openingHours' => 'mon,tue,fri',
    'address' => [
        'streetAddress' => '112 Apple St.',
        'addressLocality' => 'Hamden',
        'addressRegion' => 'CT',
        'postalCode' => '06514',
    ],
    'geo' => [
        'latitude' => '41.3958333',
        'longitude' => '-72.8972222',
    ],
]);

echo $context; // Will output the script tag
```

### News Article

```php
$context = \JsonLd\Context::create('news_article', [
    'headline' => 'Article headline',
    'description' => 'A most wonderful article',
    'mainEntityOfPage' => [
        'url' => 'https://google.com/article',
    ],
    'image' => [
        'url' => 'https://google.com/thumbnail1.jpg',
        'height' => 800,
        'width' => 800,
    ],
    'datePublished' => '2015-02-05T08:00:00+08:00',
    'dateModified' => '2015-02-05T09:20:00+08:00',
    'author' => [
        'name' => 'John Doe',
    ],
    'publisher' => [
        'name' => 'Google',
        'logo' => [
          'url' => 'https://google.com/logo.jpg',
          'width' => 600,
          'height' => 60,
        ]
    ],
]);

echo $context; // Will output the script tag
```

## Custom Context Type

The first argument for the `create($context, array $data = [])` method also accepts class names. This is helpful for custom context types.

```php
<?php

namespace App\JsonLd;

use JsonLd\ContextTypes\AbstractContext;

class FooBar extends AbstractContext
{
    /**
     * Property structure
     *
     * @var array
     */
    protected $structure = [
        'name' => null,
        'description' => null,
        'image' => null,
        'url' => null,
    ];
}
```

```php
$context = \JsonLd\Context::create(\App\JsonLd\FooBar::class, [
    'name' => 'Foo Foo headline',
    'description' => 'Bar bar article description',
    'url' => 'http://google.com',
]);

echo $context; // Will output the script tag
```

## Breadcrumbs

Breadcrumb trails on a page indicate the page's position in the site hierarchy. A user can navigate all the way up in the site
hierarchy, one level at a time, by starting from the last breadcrumb in the breadcrumb trail.

### Example

```php
$context = \JsonLd\Context::create('breadcrumb_list', [
    'itemListElement' => [
        [
            'url' => 'https://example.com/arts',
            'name' => 'Arts',
        ],
        [
            'url' => 'https://example.com/arts/books',
            'name' => 'Books',
        ],
        [
            'url' => 'https://example.com/arts/books/poetry',
            'name' => 'Poetry',
        ],
    ]
]);
```

**Output**

```javascript
<script type="application/ld+json">
{
  "@context": "http:\/\/schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "item": {
        "@id": "https:\/\/example.com\/arts",
        "name": "Arts"
      }
    },
    {
      "@type": "ListItem",
      "position": 2,
      "item": {
        "@id": "https:\/\/example.com\/arts\/books",
        "name": "Books"
      }
    },
    {
      "@type": "ListItem",
      "position": 3,
      "item": {
        "@id": "https:\/\/example.com\/arts\/books\/poetry",
        "name": "Poetry"
      }
    }
  ]
}
</script>
```

## Search Box

With Google Sitelinks search box, from search results. Search users sometimes use navigational queries, typing in the brand name or URL of a known site or app, only to do a more detailed search once they reach their destination. For example, users searching for pizza pins on Pinterest would type Pinterest or pinterest.com into Google Search--either from the Google App or from their web browser--then load the site or Android app, and finally search for pizza.

### Example

```php
$context = \JsonLd\Context::create('search_box', [
    'url' => 'https://www.example.com/',
    'potentialAction' => [
        'target' => 'https://query.example.com/search?q={search_term_string}',
        'query-input' => 'required name=search_term_string',
    ],
]);
```

**Output**

```javascript
<script type="application/ld+json">
{
  "@context": "http:\/\/schema.org",
  "@type": "WebSite",
  "url": "https:\/\/www.example.com\/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https:\/\/query.example.com\/search?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
```