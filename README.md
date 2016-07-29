# lists.web.wsu.edu

This repository contains the code, including phpList, that powers lists.web.wsu.edu.

## Plugins

These plugins are included with our deployment of PHP List:

* CKEditorPlugin - Used to ......................
* fckphplist - Used to .......................

## Upgrade Workflow

Extract the package and synchronize the `public_html/lists` directory with this repository's `www/lists` directory.

These changes to the core code should be double checked before deploying after a core upgrade.

* Delete `/plugins/` from the `admin/.gitignore` directory so that plugins are included in the changes.
* `$html['signature'] = '';` in `admin/sendemaillib.php` to remove the powered by message.
* `config/config.php` checks for a `config-custom.php` so that we can version control the primary config while keeping the rest secret on the server.
* `admin/ui/dressprow/rssfeed.php` has been altered to disable RSS feed checking completely. This was happening on every page view in the admin and possibly causing slow downs.
