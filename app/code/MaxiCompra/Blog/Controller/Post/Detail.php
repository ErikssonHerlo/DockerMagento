<?php declare(strict_types=1);
namespace MaxiCompra\Blog\Controller\Post;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;
//use Magento\Customer\Model\Session;

class Detail implements HttpGetActionInterface
{
public function __construct(
        private PageFactory $pageFactory,
    ) {}
 
    public function execute():Page
    {
        return $this->pageFactory->create();
    }


}