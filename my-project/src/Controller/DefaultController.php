<?php
/**
 * Created by PhpStorm.
 * User: nam
 * Date: 20/02/2018
 * Time: 11:06
 */
namespace App\Controller;


use App\Form\IngredientType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @return mixed
     *
     * @Route("/", name="homepage")
     */
    public function indexAction(){

        return $this->render('index.html.twig');

    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route("form", name="form")
     */
    public function newAction(Request $request)
    {

        $form = $this->createForm(IngredientType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $search = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
//             $em = $this->getDoctrine()->getManager();
//             $em->persist($search);
//             $em->flush();

            return $this->render('homepage');
        }

        return $this->render('index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}