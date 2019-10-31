<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Http\Client;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function fooAction()
    {
        // On définit l'url
        $url = 'https://www.google.com/search?q=google&oq=google&aqs=chrome..69i57j0j69i60l4.8190j0j4&sourceid=chrome&ie=UTF-8';

        // On crée un nouveau client
        $client = new Client($url);

        // On envoie la requête http
        $response = $client->send();


        return new ViewModel([
            'response' => $response
        ]);
    }

    public function testAction()
    {
        return new ViewModel();
    }
}
