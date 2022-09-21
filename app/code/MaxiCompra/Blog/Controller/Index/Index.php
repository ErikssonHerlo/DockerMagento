<?php declare(strict_types=1);
namespace Maxicompra\Blog\Controller\Index;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Forward;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\Controller\Result\Redirect;
class Index implements HttpGetActionInterface
{
    public function __construct(
        //private ForwardFactory $forwardFactory,
        private RedirectFactory $redirectFactory
     ) {}
     public function execute(): Redirect
     {
         /** @var Forward $forward */
         $redirect = $this->redirectFactory->create();
        // $forward = $this->forwardFactory->create();
         //return $forward->setController('post')->forward('list');
         return $redirect->setPath('blog/post/list');
     }

    
}