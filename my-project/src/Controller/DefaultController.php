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
use GuzzleHttp\Client;

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
        // Create a client with a base URI


        $form = $this->createForm(IngredientType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $search = $form->getData();

            $client = new Client();
            $response = $client->request('GET','http://www.thecocktaildb.com/api/json/v1/1/filter.php?i=' .$search['ingredient']);

            $response = \GuzzleHttp\json_decode($response->getBody()->getContents());



            return $this->render('form.html.twig', array(
                'response' => $response
            ));

        }

        return $this->render('index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}