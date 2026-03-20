# Changelog

All notable changes to `blade-hugeicons` will be documented in this file

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## v2.0.0 - 2025-03-20

### Added

- **548** new SVG icons, generated from `@hugeicons/core-free-icons` **^4.0.0**
- **Laravel 13** support via `illuminate/support` **^13.0** and `orchestra/testbench` **^11.0** (dev)

### Changed

- Upgraded icon source from `@hugeicons/core-free-icons` v1.2.1 to **^4.0.0** and `@hugeicons/react` v1.1.4 to **^1.1.6**
- GitHub Actions test matrix: **PHP 8.3–8.5** × **Laravel 12–13**; `actions/checkout` updated to **v6**

### Fixed

- PHPUnit 12: replace deprecated `/** @test */` docblocks with `#[Test]` attributes in the test suite

### Notes

- This release aligns the published icon set with **Hugeicons Free v4**. If you upgrade from v1.x of this package, verify Blade `svg('hugeicons-…')` names against [`resources/svg`](resources/svg); upstream renames or removals can affect existing views.

## v1.0.3

### Added New 751 Icons

- Updated `@hugeicons/react` from v0.4.0 to v1.1.4
- Updated `@hugeicons/core-free-icons` from v1.0.11 to v1.2.1
- Added 751 new icons to the collection
- All new icons are now available for use in your Laravel Blade templates

## v1.0.2

### Added New 137 Icons

- Updated `@hugeicons/react` from v0.4.0 to v1.0.5
- Updated `@hugeicons/core-free-icons` from v1.0.11 to v1.0.14
- Added 137 new icons to the collection
- All new icons are now available for use in your Laravel Blade templates

## v1.0.1

### Laravel 12 Support

## v1.0.0

### Added New 235 Icons

- Updated `@hugeicons/react` from v0.3.0 to v1.0.4
- Added Hugeicons's new package `@hugeicons/core-free-icons` v1.0.11
- Added 235 new icons to the collection
- All new icons are now available for use in your Laravel Blade templates
- Some of the new icons include: [`add-female`](https://hugeicons.com/icon/add-female-stroke-rounded), [`add-male`](https://hugeicons.com/icon/add-male-stroke-rounded), [`add-team-02`](https://hugeicons.com/icon/add-team-02-stroke-rounded), [`add-to-list`](https://hugeicons.com/icon/add-to-list-stroke-rounded), [`ai-audio`](https://hugeicons.com/icon/ai-audio-stroke-rounded), [`ai-chemistry-01`](https://hugeicons.com/icon/ai-chemistry-01-stroke-rounded), [`ai-chemistry-02`](https://hugeicons.com/icon/ai-chemistry-02-stroke-rounded), [`ai-chemistry-03`](https://hugeicons.com/icon/ai-chemistry-03-stroke-rounded), [`ai-chip`](https://hugeicons.com/icon/ai-chip-stroke-rounded), [`ai-content-generator-01`](https://hugeicons.com/icon/ai-content-generator-01-stroke-rounded), [`ai-content-generator-02`](https://hugeicons.com/icon/ai-content-generator-02-stroke-rounded), [`ai-editing`](https://hugeicons.com/icon/ai-editing-stroke-rounded), [`ai-file`](https://hugeicons.com/icon/ai-file-stroke-rounded), [`ai-mic`](https://hugeicons.com/icon/ai-mic-stroke-rounded), [`ai-scan`](https://hugeicons.com/icon/ai-scan-stroke-rounded), [`ai-scheduling`](https://hugeicons.com/icon/ai-scheduling-stroke-rounded), [`ai-search-02`](https://hugeicons.com/icon/ai-search-02-stroke-rounded), [`ai-security-03`](https://hugeicons.com/icon/ai-security-03-stroke-rounded), [`ai-sheets`](https://hugeicons.com/icon/ai-sheets-stroke-rounded).

### Tests

- Added tests for new icons

## v0.0.4 - 2024-12-21

### Added New 222 Icons

- Added new icons: [`activity-01`](https://hugeicons.com/icon/activity-01-stroke-rounded), [`activity-02`](https://hugeicons.com/icon/activity-02-stroke-rounded), [`activity-03`](https://hugeicons.com/icon/activity-03-stroke-rounded), [`activity-04`](https://hugeicons.com/icon/activity-04-stroke-rounded), [`ai-beautify`](https://hugeicons.com/icon/ai-beautify-stroke-rounded), [`ai-browser`](https://hugeicons.com/icon/ai-browser-stroke-rounded), [`ai-cloud`](https://hugeicons.com/icon/ai-cloud-stroke-rounded), [`ai-eraser`](https://hugeicons.com/icon/ai-eraser-stroke-rounded), [`ai-game`](https://hugeicons.com/icon/ai-game-stroke-rounded), [`ai-generative`](https://hugeicons.com/icon/ai-generative-stroke-rounded), [`ai-idea`](https://hugeicons.com/icon/ai-idea-stroke-rounded), [`ai-image`](https://hugeicons.com/icon/ai-image-stroke-rounded), [`ai-magic`](https://hugeicons.com/icon/ai-magic-stroke-rounded), [`ai-mail-01`](https://hugeicons.com/icon/ai-mail-01-stroke-rounded), [`ai-mail-02`](https://hugeicons.com/icon/ai-mail-02-stroke-rounded), [`ai-programming`](https://hugeicons.com/icon/ai-programming-stroke-rounded), [`ai-setting`](https://hugeicons.com/icon/ai-setting-stroke-rounded), [`ai-user`](https://hugeicons.com/icon/ai-user-stroke-rounded), [`ai-video`](https://hugeicons.com/icon/ai-video-stroke-rounded), [`airplane-seat`](https://hugeicons.com/icon/airplane-seat-stroke-rounded), [`airport`](https://hugeicons.com/icon/airport-stroke-rounded), [`amazon`](https://hugeicons.com/icon/amazon-stroke-rounded), [`apple-vision-pro`](https://hugeicons.com/icon/apple-vision-pro-stroke-rounded), [`arrange-by-letters-az`](https://hugeicons.com/icon/arrange-by-letters-az-stroke-rounded), [`arrange-by-letters-za`](https://hugeicons.com/icon/arrange-by-letters-za-stroke-rounded), [`assignments`](https://hugeicons.com/icon/assignments-stroke-rounded), [`beach-02`](https://hugeicons.com/icon/beach-02-stroke-rounded), [`biometric-access`](https://hugeicons.com/icon/biometric-access-stroke-rounded), [`biometric-device`](https://hugeicons.com/icon/biometric-device-stroke-rounded), [`blocked`](https://hugeicons.com/icon/blocked-stroke-rounded), [`brandfetch`](https://hugeicons.com/icon/brandfetch-stroke-rounded), [`cafe`](https://hugeicons.com/icon/cafe-stroke-rounded), [`call-02`](https://hugeicons.com/icon/call-02-stroke-rounded), and more.

### Tests

- Added tests for all new icons

## v0.0.3 - 2023-07-05

### Changed

- Added compatibility for Laravel 10 by adding support for PHP 8.1 by @swapnilsarwe in #1

### New Contributors

- @swapnilsarwe made their first contribution in #1

## v0.0.2 - 2023-05-04

### Added

- Add missing menu-restaurant, trade-down and trade-up icons.

## v0.0.1 - 2023-04-14

### Added

- Initial release.
