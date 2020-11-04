<?php declare(strict_types=1);

namespace Codeal\Weather\Model\ResourceModel;

class Weather extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('codeal_weather_weather', 'weather_id');
    }
}

