# lists.web.wsu.edu

This repository is used as a deployment vehicle for PHP List to lists.web.wsu.edu. Source code is modified as necessary, see the license section for details.

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
* `admin/languages.php` - a check for updated languages has been removed to avoid phplist.org calls.

## LICENSE

PHP List 3.x is Copyright (C) 2000-2015 Michiel Dethmers, phpList ltd and licensed as [AGPL](https://www.gnu.org/licenses/agpl-3.0.en.html) version 3.0 or later.

WSU has made modifications to the source files starting in July, 2016. A list of these files is available above. The modification of the PHP List source files retains the AGPL version 3.0 or later license.

```
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as
published by the Free Software Foundation, either version 3 of the
License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
```
