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

namespace D3\PRGredirects\Modules\Application\Controllers {

    use OxidEsales\Eshop\Application\Controller\ArticleListController;
    use OxidEsales\Eshop\Application\Controller\ContactController;
    use OxidEsales\Eshop\Application\Controller\ManufacturerListController;
    use OxidEsales\Eshop\Application\Controller\SearchController;
    use OxidEsales\Eshop\Application\Controller\VendorListController;

    class ArticleListController_PRGredirect_parent extends ArticleListController {}
    class ContactController_PRGredirect_parent extends ContactController {}
    class ManufacturerListController_PRGredirect_parent extends ManufacturerListController {}
    class SearchController_PRGredirect_parent extends SearchController {}
    class VendorListController_PRGredirect_parent extends VendorListController {}
}

namespace D3\PRGredirects\Modules\Core {

    use OxidEsales\Eshop\Core\Utils;

    class Utils_PRGredirect_parent extends Utils {}
}
