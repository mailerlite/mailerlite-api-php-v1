# MailerLite REST API v1

Official PHP wrapper for MailerLite API

## Installation

### With Composer

Add `mailerlite/mailerlite_rest_v1` to `composer.json`.

```json
{
    "repositories": [
      {
        "url": "git@github.com:mailerlite/mailerlite-api-php-v1.git",
        "type": "vcs"
      }
    ],
    "require": {
        "mailerlite/mailerlite_rest_v1": "1.1.*"
    }
}
```

### Usage


```php
require_once 'vendor/autoload.php';
use MailerLite\Campaigns;
$campaigns = new Campaigns('xxxxxxxxxxxxxxxxxx');
$all = $campaigns->getAll();

```

## Contributors

https://github.com/paulschwarz/
https://github.com/eima/