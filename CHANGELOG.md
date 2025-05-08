# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased](https://git.d3data.de/D3Public/PRGredirect/compare/2.0.0.0...rel_2.x)

## [2.0.0.0](https://git.d3data.de/D3Public/PRGredirect/compare/1.1.2.0...2.0.0.0) - 2025-05-08
### Added
- support for OXID 7
### Changed
- remove fnc url parameter from redirect 
### Removed
- support for OXID 6

## [1.1.2.0](https://git.d3data.de/D3Public/PRGredirect/compare/1.1.1.0...1.1.2.0) - 2023-09-27
### Fixed 
- incompatible type declarations on oxid-native-methods

## [1.1.1.0](https://git.d3data.de/D3Public/PRGredirect/compare/1.1.0.0...1.1.1.0) - 2023-09-27
### Added
- make installable in OXID 6.5 (CE 6.12 + 6.14)

## [1.1.0.0](https://git.d3data.de/D3Public/PRGredirect/compare/1.0.0.0...1.1.0.0) - 2022-07-26
### Added
- add custom url redirect for individual implementations

## [1.0.0.0](https://git.d3data.de/D3Public/PRGredirect/releases/tag/1.0.0.0) - 2022-07-25
### Added
- performs POST forwarding in the following controllers
  - Search
  - Article lists (categories, manufacturers, vendors)
  - Contact
- no forwarding in case of errors in the contact form