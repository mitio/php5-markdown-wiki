PHP5 Markdown Wiki
==================

A simple Git-backed wiki built around the standard PHP Markdown class. Main features:

- All content is Markdown.
- Supports change history and comparison between all versions of a page.
- Simple interface.
- Internationalized (thanks to @seth--).

Currently available translations:

- English (@seth--)
- Bulgarian (@mitio)

Requirements:

- A PHP-enabled *NIX webserver (Windows is not currently supported).
- A filesystem to store pages on (not suitable for cloud-based platforms with ephemeral filesystems).
- Optional: Git, to support page history and versions comparison.
- No database backend required.

Installation
------------

Just checkout the Git repository of the project in a location which is accessible via your PHP-enabled web server. You can use the wiki even without Git. Git is required only if you want to preserve the history of changes on a page and to be able to compare different page revisions.

Currently this wiki doesn't support running on Windows-based servers.

If you need the history support, make sure you have Git installed and available somewhere in your webserver's `$PATH`. The wiki tries hard to look for the Git binary even if it is not in `$PATH`. Locations checked for the `git` command include, in this order:

- All paths in `$PATH`. This is the `PATH` environment variable, available to the PHP interpreter, running the wiki. In most cases, this `PATH` will be inherited from your Apache (or other webserver) processs.
- `/bin`
- `/usr/bin`
- `/usr/local/bin`
- `/sbin`
- `/usr/sbin`

Disclaimer
----------

Use this project at your own risk.

Contributors
------------

This project was originally initiated by Mike Davies (http://github.com/isofarro — see the fork info).

The first internationalized version was contributed by @seth--.
