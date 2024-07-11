<?php
declare(strict_types=1);

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Event\EventInterface;

class RequestHandlerComponent extends Component
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        // Initialization code here
    }

    public function beforeRender(EventInterface $event)
    {
        $controller = $this->getController();
        if ($controller->getRequest()->is('ajax')) {
            $controller->viewBuilder()->setClassName('Json');
            $controller->set('_serialize', true);
        }
    }

    public function beforeRedirect(EventInterface $event, $url, $response)
    {
        $controller = $this->getController();
        if ($controller->getRequest()->is('ajax')) {
            $event->stopPropagation();
            $response = $response->withType('application/json')
                                 ->withHeader('Location', $url)
                                 ->withStatus(302);

            return $response;
        }
    }

    public function isAjax()
    {
        return $this->getController()->getRequest()->is('ajax');
    }

    public function isPost()
    {
        return $this->getController()->getRequest()->is('post');
    }

    public function isPut()
    {
        return $this->getController()->getRequest()->is('put');
    }

    public function isDelete()
    {
        return $this->getController()->getRequest()->is('delete');
    }

    public function isGet()
    {
        return $this->getController()->getRequest()->is('get');
    }
}
?>

