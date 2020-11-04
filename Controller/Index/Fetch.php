<?php declare(strict_types=1);

namespace Codeal\Weather\Controller\Index;

use Codeal\Weather\Cron\WeatherFetcher;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Fetch extends Action
{

    protected $resultPageFactory;
    /**
     * @var WeatherFetcher
     */
    private $weatherFetcher;

    /**
     * Constructor
     *
     * @param Context  $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        WeatherFetcher $weatherFetcher
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
        $this->weatherFetcher = $weatherFetcher;
    }

    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $this->weatherFetcher->execute();
        return $this->resultPageFactory->create();
    }
}
