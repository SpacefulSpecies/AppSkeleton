Species App Skeleton
====================

Skeleton for [species/app](https://github.com/SpacefulSpecies/App).


## How to create a new project

```bash
composer create-project species/app-skeleton my-project-directory
```

- edit name, description, autoloader, etc... in `/composer.json`
- run `composer update`
- remove or reuse example config in `/config`
- remove example template in `/resources/twig`
- remove example controller in `/src`
- remove or reuse `/web/favicon.ico` (transparent icon to stop 404 spam)
- setup `/web/.htaccess` (see .dist file)
- setup `/.env` (see .dist files)
- edit or remove this `/README.md` file
- run `git init`

Off you go!
