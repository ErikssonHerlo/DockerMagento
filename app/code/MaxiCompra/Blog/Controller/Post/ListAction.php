<?php declare(strict_types=1);
namespace MaxiCompra\Blog\Controller\Post;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\RequestInterface;
//use Magento\Customer\Model\Session;
class ListAction implements HttpGetActionInterface
{
    public function __construct(
        private PageFactory $pageFactory
        //private Session $session
    )  {}
    public function execute(): Page
    {
        //print_r('Esta es una prueba');
        //echo '<pre>';
        //var_dump($this->session->getData());
        //exit;
        return $this->pageFactory->create();
    }
}