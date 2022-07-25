<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * https://www.d3data.de
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author    D3 Data Development - Daniel Seifert <info@shopmodule.com>
 * @link      https://www.oxidmodule.com
 */

declare(strict_types=1);

use D3\PRGredirects\Modules\Application\Controllers\SearchController_PRGredirect;
use D3\PRGredirects\Modules\Core\Utils_PRGredirect;
use OxidEsales\Eshop\Application\Controller\SearchController;
use OxidEsales\Eshop\Core\Utils;

$sMetadataVersion = '2.1';

$sModuleId = 'd3PRGredirect';
$logo = '<img src="https://logos.oxidmodule.com/d3logo.svg" alt="(D3)" style="height:1em;width:1em">';

/**
 * Module information
 */
$aModule = [
    'id'          => $sModuleId,
    'title'       => $logo.' Form redirects after POST',
    'description' => [
        'de' => 'siehe https://de.wikipedia.org/wiki/Post/Redirect/Get',
        'en' => 'see https://en.wikipedia.org/wiki/Post/Redirect/Get',
    ],
    'version'     => '1.0.0.0',
    'author'      => 'D&sup3; Data Development (Inh.: Thomas Dartsch)',
    'email'       => 'support@shopmodule.com',
    'url'         => 'https://www.oxidmodule.com/',
    'extend'      => [
        Utils::class => Utils_PRGredirect::class,
        SearchController::class    => SearchController_PRGredirect::class
    ],
    'settings'    => [
        [
            'group'     => $sModuleId.'_general',
            'name'      => $sModuleId.'_search',
            'type'      => 'bool',
            'value'     => false,
        ],
        [
            'group'     => $sModuleId.'_general',
            'name'      => $sModuleId.'_articlelists',
            'type'      => 'bool',
            'value'     => false,
        ],
        [
            'group'     => $sModuleId.'_general',
            'name'      => $sModuleId.'_contact',
            'type'      => 'bool',
            'value'     => false,
        ],
    ]
];
