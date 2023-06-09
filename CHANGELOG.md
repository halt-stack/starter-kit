# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.1.1] - 2023-06-26

### Changed
- Updated starter kit package base (both Composer and NPM).

## [1.1.0] - 2023-05-28

### Added

- Added `BaseRequest.php`: Introduced BaseRequest class to handle failed validation attempts for HTMX and return response with errors in a view.
- Added `@rollup/plugin-inject` to devDependencies.
- Added `@alpinejs/morph` to dependencies.
- Added `htmx-alpine-morph` extension to `vite.config.js` using `@rollup/plugin-inject`.

## [1.0.0] - 2023-05-23

### Added

- Added Alpine.js and Htmx.js libraries to the project and initialized Alpine.js in `app.js`.
- Added tailwindcss base, components, and utilities to `app.css`.
- Added content paths for `blade.php` and JS files in the resources directory to `tailwind.config.js`.
- Added postcss and tailwindcss configuration files.
- Added `alpinejs`, `axios`, `htmx.org`, `postcss`, and `tailwindcss` as devDependencies in `package.json`.

### Changed

- Updated project description in `composer.json` to reflect new technologies used in the starter kit.
- Changed project name from "laravel/laravel" to "halt-stack/starter-kit" in `composer.json`.
- Updated project description and keywords in `composer.json`.
- Updated introduction and added installation instructions, features, support, and sponsors sections in `README.md`.
