# AREA 17 SCSS

## Introduction

A series of plugins to enable/encourage systematised web design/development and some other useful utility classes.

AREA 17 strongly believes in design systems and then using these systems to build products for both ourselves and our clients. Utilities are a natural fit for us, but we wanted more "system" to the utilities to tie closer to our design methodology.

We also wanted to include a few utility classes that would simplify some common styling requirements.

## Requirements


## Setup

1. Install via npm:

```shell
$ npm install @area17/scss-utilities
```

2. Include plugins in your main `.scss` file (`application.scss` or similar):

```CSS
@import '~@area17/scss-utilities/a17-scss-utilities';
```

## Documentation and demos

* [scss-utilities.dev.area17.com](http://scss-utilities.dev.area17.com/)


## Contribution

## Writing a new utility

See [docs/README.md](https://github.com/area17/scss-utilities/blob/main/docs/README.md).

### Code of Conduct

AREA 17 is dedicated to building a welcoming, diverse, safe community. We expect everyone participating in the AREA 17 community to abide by our [Code of Conduct](CODE_OF_CONDUCT.md). Please read it. Please follow it.

### Bug reports and features submission

To submit an issue or request a feature, please do so on [Github](https://github.com/area17/scss-utilities/issues).

If you file a bug report, your issue should contain a title and a clear description of the issue. You should also include as much relevant information as possible and a code sample that demonstrates the issue. The goal of a bug report is to make it easy for yourself - and others - to replicate the bug and develop a fix.

Remember, bug reports are created in the hope that others with the same problem will be able to collaborate with you on solving it. Do not expect that the bug report will automatically see any activity or that others will jump to fix it. Creating a bug report serves to help yourself and others start on the path of fixing the problem.

## Versioning scheme

A17 SCSS follows [Semantic Versioning](https://semver.org/). Major releases are released only when breaking changes are necessary, while minor and patch releases may be released as often as every week. Minor and patch releases should never contain breaking changes.

When referencing A17 SCSS Utilities from your application, you should always use a version constraint such as `^1.0`, since major releases of A17 SCSS Utilities  will include breaking changes.
