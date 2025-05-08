[![deutsche Version](https://logos.oxidmodule.com/de2_xs.svg)](README.md)
[![english version](https://logos.oxidmodule.com/en2_xs.svg)](README.en.md)

# D³ PRG Redirects for OXID eShop

For forms sent via the FORM method, the browser's back function can only be used after the form has been resent. Depending on the browser, prompts will be shown. The additional sending can trigger unwanted actions.

By applying an additional GET request to the source address, the additional sending is prevented at the first "back". (see [Wikipedia](https://en.wikipedia.org/wiki/Post/Redirect/Get))

## Installation

This package requires an Composer installed OXID eShop as defined in [composer.json](composer.json).

Open a command line interface and navigate to the shop root directory (parent of source and vendor). Execute the following command. Adapt the paths to your environment.

```bash
php composer require d3/prg-redirects:^2.0
``` 

Activate the module in the admin area of the shop in "Extensions -> Modules".

## Usage

In the "Settings" tab, activate all controllers that are to use this additional redirection.

## Extensibility

In principle, every controller can be equipped with this technology. If a controller is missing, it is welcome to add it. Note the handling of special cases, e.g. if the sending of the form was not successful and forwarding would interfere with error handling.

## Changelog

See [CHANGELOG](CHANGELOG.md) for further informations.

## Contributing

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue. Don't forget to give the project a star! Thanks again!

- Fork the Project
- Create your Feature Branch (git checkout -b feature/AmazingFeature)
- Commit your Changes (git commit -m 'Add some AmazingFeature')
- Push to the Branch (git push origin feature/AmazingFeature)
- Open a Pull Request

## Licence
(status: 2022-07-25)

Distributed under the GPLv3 license.

```
Copyright (c) D3 Data Development (Inh. Thomas Dartsch)

This software is distributed under the GNU GENERAL PUBLIC LICENSE version 3.
```

For full copyright and licensing information, please see the [LICENSE](LICENSE.md) file distributed with this source code.