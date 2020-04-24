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
        // Initialisation du tableau d'erreurs
        $erreurs = [];

        // Récupération des données du formulaire
        if($request->get('email') && $request->get('password') && $request->get('confirmpassword')) {
            $email = $request->get('email');
            $password = $request->get('password');
            $confirmpassword = $request->get('confirmpassword');

            // Validation du mail
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($erreurs, "L'adresse email n'est pas au bon format");
            }

            // Validation de la longueur du mot de passe
            if(strlen($password) < 5 || strlen($password) > 20) {
                array_push($erreurs, "Le mot de passe doit être entre 5 et 20 caractères");
            }

            // Validation de la confirmation du mot de passe
            if($password != $confirmpassword) {
                array_push($erreurs, "Les mots de passe ne sont pas identiques");
            }

            // Si les tests de validation ne pésentent pas d'erreurs
            if(empty($erreurs)) {
                // Création de l'utilisateur
                $user = new User();

                $user->setEmail($email);
                // Hash du mot de passe
                $user->setPassword($passwordEncoder->encodePassword($user, $password));

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();

                $this->addFlash('success', 'Votre compte a été crée avec succès, vous pouvez à présent vous connecter');

                // Redirection vers la page de connexion
                return $this->redirectToRoute('login');
            }
        }

        return $this->render('security/register.html.twig', ['erreurs' => $erreurs]);
    }
}
