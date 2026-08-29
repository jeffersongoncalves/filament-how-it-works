# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased](https://github.com/jeffersongoncalves/filament-how-it-works/commits/1.x/compare/1.0.0...1.x)

### Added

- `FilamentHowItWorksPlugin` with `StepResource` for Filament v3.
- Translatable `title`/`description` fields via `jeffersongoncalves/filament-translatable`.
- Drag-to-reorder support on the Steps table (`order` column).
- Config-based resource override (`filament-how-it-works.resources.step`) and navigation group.

### Known Issues

- `composer install` currently fails to resolve: `jeffersongoncalves/laravel-how-it-works` 1.0.0 requires `illuminate/*: ^12.0|^13.0`, which has no overlap with Filament v3's `illuminate/*: ^10.0` requirement. Blocked until `laravel-how-it-works` widens its Laravel constraint.

## [1.0.0](https://github.com/jeffersongoncalves/filament-how-it-works/commits/1.x/compare/1.x...1.0.0) - 2026-08-29

**Full Changelog**: https://github.com/jeffersongoncalves/filament-how-it-works/commits/1.0.0
