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

namespace D3\PRGredirects\Modules\Application\Controllers;

use D3\PRGredirects\Application\Core\redirectControllerTrait;

class ManufacturerListController_PRGredirect extends ManufacturerListController_PRGredirect_parent
{
    use redirectControllerTrait;

    /**
     * @return string
     */
    public function render(): string
    {
        $template = parent::render();

        $this->d3DoPRGRedirect();

        return $template;
    }
}
