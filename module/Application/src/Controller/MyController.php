<?php

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class MyController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}