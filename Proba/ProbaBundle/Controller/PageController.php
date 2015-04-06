<?php

namespace Proba\ProbaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PageController extends Controller
{
    /**
     * @Route("/impressum", name="page_impressum")
     * @Template()
     */
    public function impressumAction()
    {
        return $this->render('ProbaProbaBundle:Page/static:impressum.html.twig');
    }
}
