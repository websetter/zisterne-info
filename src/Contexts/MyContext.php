<?php
namespace CeresHermko\Contexts;

use IO\Helper\ContextInterface;
use Ceres\Contexts\SingleItemContext;
use Plenty\Modules\Item\Item\Contracts\ItemRepositoryContract;

use IO\Services\ItemSearch\Services\ItemSearchService;
use IO\Services\ItemSearch\SearchPresets\CrossSellingItems;

class MyContext extends SingleItemContext implements ContextInterface
{
	public $accessory;

	public function init($params)
	{
		parent::init($params);
		$options = array(
        			"itemId" => $this->item['documents'][0]['data']['item']['id'],
        			"relation" => "Accessory"      // Nutze die Liste Zubehoer
       		);
     		$searchfactory = CrossSellingItems::getSearchFactory( $options );
     		$searchfactory->setPage(1, 12); // Begrenze auf 4 Artikel
      		$result = pluginApp(ItemSearchService::class)->getResult($searchfactory);
      		$this->accessory = $result['documents'];
	}
}
