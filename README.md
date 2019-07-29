# Magento 2 PHPStorm Preferences

This project is intended to setup useful PHPStorm Templates for Magento 2 Projects.

## Disclaimer

This project overrides the default file template `PHP Class.php` to add a specific header comments.
We need to edit this file instead of creating a new one because automatic Namespace only works on this specific template.
All other templates are custom ones with a naming prefix `2M` in order to make them unique.

## Installation

1. Clone the repository to your machine

    * `git clone https://github.com/nntoan/magento2-phpstorm-templates`

2. Copy `fileTemplates/includes/nntoan_variables.txt.dist` to `fileTemplates/includes/nntoan_variables.txt`

3. Copy or symlink all folders inside `<repo>/Preferences` to:

    * Windows: `<your home directory>/.<product name><version number>/config/`
    * Linux: `~\.<product name><version number>/config/`
    * Mac OS: `~/Library/Preferences/<product name><version number>/`

4. Set your personal configuration for comments on PHPStorm `Preferences -> Editor -> File and Code Templates -> nntoan_variables`

    ![Comments settings](docs/img/comments_settings.png)

## Available Templates

* [File Templates](docs/fileTemplates.md)
* [Live Templates](docs/liveTemplates.md)

## Usage

All file and live templates namings start with `2M` except `PHP Class.php`.
We need to use the default `PHP Class.php` because automatic Namespace only works on this specific template.

## Contribute

You can contribute with new templates following this manual:

* [Contribute manual](./docs/contribute.md)

## Demo

![Video Demo](docs/img/video-demo.gif)
