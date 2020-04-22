<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder) {
        $erreurs = [];

        if($request->get('email') && $request->get('password') && $request->get('confirmpassword')) {
            $email = $request->get('email');
            $password = $request->get('password');
            $confirmpassword = $request->get('confirmpassword');

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($erreurs, "L'adresse email n'est pas au bon format");
            }

            if(strlen($password) < 5 || strlen($password) > 20) {
                array_push($erreurs, "Le mot de passe doit être entre 5 et 20 caractères");
            }

            if($password != $confirmpassword) {
                array_push($erreurs, "Les mots de passe ne sont pas identiques");
            }

            if(empty($erreurs)) {
                $user = new User();

                $user->setEmail($email);
                $user->setPassword($passwordEncoder->encodePassword($user, $password));

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();

                $this->addFlash('success', 'Votre compte a été crée avec succès, vous pouvez à présent vous connecter');

                return $this->redirectToRoute('login');
            }
        }

        return $this->render('security/register.html.twig', ['erreurs' => $erreurs]);
    }
}
