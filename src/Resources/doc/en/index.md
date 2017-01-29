Getting starget with AtomUploaderBundle
===

Installation
---
```
composer require atom-php/uploader-bundle
```

Enable bundle
---

```php
# src/AppKernel.php
public function registerBundles()
{
    $bundles = [
        ...
        new Atom\UploaderBundle\AtomUploaderBundle(),
        ...
    ];
}
```

Usage
---

- [Using with doctrine embeddables][usage-with-doctrine-embeddables]
- [Using with doctrine entities][usage-with-doctrine-entities]

Related links
---

- [Configuration reference][reference]
- [Filename generators][namers]
- [Filesystem adapters][fs-adapters]
- [Events][events]
- [Data Storage Integration][datastore-integration]

[usage-with-doctrine-entities]: usage-with-doctrine-entities.md
[usage-with-doctrine-embeddables]: usage-with-doctrine-embeddables.md
[reference]: reference.md
[namers]: namers.md
[events]: events.md
[fs-adapters]: fs-adapters.md
[datastore-integration]: datastore-integration.md
