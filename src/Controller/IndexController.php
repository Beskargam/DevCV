<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", name="app_")
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('index/index.html.twig');
    }

    /**
     * @Route("/presentation", name="presentation")
     */
    public function presentation()
    {
        return $this->render('index/presentation.html.twig');
    }

    /**
     * @Route("/competence", name="skill")
     */
    public function skill()
    {
        return $this->render('index/skill.html.twig');
    }

    /**
     * @Route("/projet-professionnel", name="project")
     */
    public function project()
    {
        return $this->render('index/project.html.twig');
    }

    /**
     * @Route("/formation", name="formation")
     */
    public function formation()
    {
        return $this->render('index/formation.html.twig');
    }

    /**
     * @Route("/experience", name="experience")
     */
    public function experience()
    {
        return $this->render('index/experience.html.twig');
    }

    /**
     * @Route("/qualite-personnelle", name="personal")
     */
    public function personal()
    {
        return $this->render('index/personal.html.twig');
    }

    /**
     * @Route("/reseau-social", name="social")
     */
    public function social()
    {
        return $this->render('index/social.html.twig');
    }

    /**
     * @Route("/bonus", name="bonus")
     */
    public function bonus()
    {
        return $this->render('index/bonus.html.twig');
    }
}
