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

namespace D3\PRGredirects\Modules\Core;

use OxidEsales\Eshop\Core\Exception\StandardException;
use OxidEsales\Eshop\Core\Registry;

class Utils_PRGredirect extends Utils_PRGredirect_parent
{
    /**
     * @param string $url
     * @return void
     */
    public function d3PrgRedirect(string $url): void
    {
        $url         = str_ireplace("&amp;", "&", $url);
        $headerCode = "HTTP/1.1 303 See Other";

        try {
            $this->simpleRedirect($url, $headerCode);

            Registry::getSession()->freeze();
        } catch (StandardException $e) {
            $e->debugOut();
        }

        $this->showMessageAndExit('');
    }
}
