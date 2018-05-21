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
use AppBundle\Application\UseCase\Experience\CreateXpService;
use AppBundle\Application\UseCase\Experience\CreateXpRequest;
use AppBundle\Infrastructure\Persistence\Doctrine\DoctrineExperienceRepository;


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
        $CreateXpService = new CreateXpService(
            $this->get('app.xprience_doctrine_repository')       // for all technologies (e.g. MySQL, Redis, Elasticsearch)
        );


        try {
            $response = $CreateXpService->execute(
                new CreateXpRequest(
                    $request->request->get('name'),
                    $request->request->get('description'),
                    $request->request->get('technology'),
                    $request->request->get('language')
                )
            );
        } catch (ExperienceAlreadyExistsException $e) {
            return $this->render('error.html.twig', $response);
        }
        
        // replace this example code with whatever you need
        return $this->render('Experience/post_xp.html.twig', $response);
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