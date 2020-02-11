# devnix/zip-exception

Dumb package to get a more verbose error mesagge from class `ZipArchive`

## Installation

```
composer install
```

## Usage

```php
<?php

$zip = new ZipArchive();

if (!$zipStatus = $zip->open($tmpZip)) {
    throw new ZipException($zipStatus);
}

// ...

```