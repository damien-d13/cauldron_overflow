<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{

    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('question/homepage.html.twig');
    }

    /**
     * @Route("/question/{slug}", name="app_question_show")
     */
    public function show($slug)
    {
        
        $answers = [
            'Make sure your cat is sitting purrfectly still',
            'honestly, i like furry shoes better than my cat',
            'Maybe... try saying the spell backwards ?'
        ];

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers,
        ]);

    }

}

?>