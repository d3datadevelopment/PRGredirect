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
use Exception;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\EshopCommunity\Internal\Container\ContainerFactory;
use OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Bridge\ModuleConfigurationDaoBridge;
use OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Bridge\ModuleConfigurationDaoBridgeInterface;
use OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\DataObject\ModuleConfiguration;

trait redirectControllerTrait
{
    /**
     * @return void
     */
    protected function d3DoPRGSelfRedirect(): void
    {
        if ($this->d3SelfRedirectIsConfigured()) {
            $this->d3DoPRGCustomRedirect($this->generatePageNavigationUrl());
        }
    }

    /**
     * @param string $url
     * @return void
     */
    protected function d3DoPRGCustomRedirect(string $url): void
    {
        if ($this->d3IsPostRequest()) {
            /** @var Utils_PRGredirect $utils */
            $utils = Registry::getUtils();

            // remove fnc parameter
            $this->setFncName('');
            $search = '/fnc=\w*(&(amp;)?|$)/m';
            $url = preg_replace($search, "", $url);

            $utils->d3PrgRedirect($url);
        }
    }

    /**
     * @return bool
     */
    protected function d3IsPostRequest(): bool
    {
        return strtoupper($_SERVER['REQUEST_METHOD']) === 'POST';
    }

    protected function d3SelfRedirectIsConfigured(): bool
    {
        try {
            /** @var ModuleConfigurationDaoBridge $configurationBridge */
            $configurationBridge = ContainerFactory::getInstance()->getContainer()
                ->get( ModuleConfigurationDaoBridgeInterface::class );

            /** @var ModuleConfiguration $configuration */
            $configuration = $configurationBridge->get( 'd3PRGredirect' );

            return (bool) $configuration->getModuleSetting( 'd3PRGredirect_' . $this->getClassKey())
                ->getValue();
        } catch (Exception) {
            return false;
        }
    }
}
