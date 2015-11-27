<?php

namespace Desmay\monMenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Desmay\monMenuBundle\Entity\Category;

/**
 * Description of CategoryController
 *
 * @author Kevin Desmay
 */
class CategoryController extends Controller {

    public function AddAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $form = $this->createFormBuilder()
                ->add('wording', 'text')
                ->add('submit', 'submit')
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {

            $data = $form->getData();
            $category = new Category();
            $category->setWording($data['wording']);
            $category->setArchive(false);

            $em->persist($category);
            $em->flush();
        }

        $categories = $em->getRepository('DesmaymonMenuBundle:Category')->findAll();
        return $this->render('DesmaymonMenuBundle:Category:add.html.twig', array(
                    'form' => $form->createView(),
                    'categories' => $categories,
        ));
    }

}
