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
        private Session $session,
        private RequestInterface $request,
    ) {}
 
    public function execute()
    {
        echo '<pre>';
        var_dump($this->session->getData());
        var_dump($this->request->getParams());
        die();
    }


}