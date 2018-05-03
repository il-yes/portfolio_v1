<?php
/**
 * Created by PhpStorm.
 * User: manu
 * Date: 03/05/18
 * Time: 16:16
 */

namespace AppBundle\Ui\Controller;


use AppBundle\Ui\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class ExperienceController extends AbstractController
{

    /**
     * @Route("/admin/experiences", name="admin_experiences")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('Experience/index.html.twig');
    }
}