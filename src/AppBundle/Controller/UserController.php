<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * User controller.
 *
 */
class UserController extends Controller
{
    /**
     * @Route("/register", name="user_register_form")
     *
     * @Method("GET")
     */
    public function register()
    {
        $userForm = $this->createForm(UserType::class);
        return $this->render('user/register.html.twig',
            ['register_form' => $userForm->createView()]);
    }

    /**
     * @Route("/register", name="user_register_process")
     *
     * @Method("POST")
     */
    public function registerProcess(Request $request)
    {
        $user = new User();
        $userForm = $this->createForm(UserType::class, $user);
        $userForm->handleRequest($request);

        $encoder = $this->get('security.password_encoder');
        if ($userForm->isSubmitted())
        {
            $hashedPassword = $encoder->encodePassword(
                $user,
                $user->getPassword()
            );
            $user->setPassword($hashedPassword);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute("home");
        }

        return $this->render('user/register.html.twig',
            ['register_form' => $userForm->createView()]);
    }
}