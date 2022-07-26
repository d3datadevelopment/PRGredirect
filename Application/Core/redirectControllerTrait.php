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

namespace D3\PRGredirects\Application\Core;

use D3\PRGredirects\Modules\Core\Utils_PRGredirect;
use OxidEsales\Eshop\Core\Registry;

trait redirectControllerTrait
{
    /**
     * @return void
     */
    protected function d3DoPRGRedirect(): void
    {
        if ($this->d3ShouldDoPRGredirect()) {
            /** @var Utils_PRGredirect $utils */
            $utils = Registry::getUtils();

            $this->setFncName('');
            $utils->d3PrgRedirect($this->generatePageNavigationUrl());
        }
    }

    /**
     * @return bool
     */
    protected function d3ShouldDoPRGredirect(): bool
    {
        return strtoupper($_SERVER['REQUEST_METHOD']) === 'POST' &&
            Registry::getConfig()->getConfigParam('d3PRGredirect_'.$this->getClassKey()) === true;
    }
}
