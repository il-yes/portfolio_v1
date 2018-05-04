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
use Symfony\Component\HttpFoundation\Request;


class ExperienceController extends AbstractController
{

    /**
     * @Route("/admin/experiences", name="admin_experiences_xp_list")
     */
    public function getXpAction()
    {

        // replace this example code with whatever you need
        return $this->render('Experience/index.html.twig');
    }


    /**
     * @Route("/admin/experiences/new-xp", name="admin_experiences_post_xp")
     */
    public function postXpAction(Request $request)
    {

        if(!empty($request->request)){
            $name   = $request->request->get('name');
            $techno = $request->request->get('techno');

            $experience = new CreateXp($name, $techno);
        }
        dump($request);

        // replace this example code with whatever you need
        return $this->render('Experience/post_xp.html.twig');
    }

    /**
     * @Route("/admin/experiences/new-img", name="admin_experiences_post_img")
     */
    public function postImageAction()
    {
        // replace this example code with whatever you need
        return $this->render('Experience/index.html.twig');
    }
}