<?php declare(strict_types=1);

namespace Codeal\Weather\Model\ResourceModel\Weather;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'weather_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Codeal\Weather\Model\Weather::class,
            \Codeal\Weather\Model\ResourceModel\Weather::class
        );
    }
}
