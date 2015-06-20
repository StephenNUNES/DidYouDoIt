<?php

namespace Projects\DidYouDoItBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * OAuth Controller
 */
class OAuthController extends Controller
{
    public function connectionAction() {

        $googleClient = $this->get('persistance');

        return $this->redirect(filter_var($googleClient->createAuthUrl(), FILTER_SANITIZE_URL));


        // return $this->render('default/index.html.twig');
    }

    public function oauth2callbackAction(Request $request)
    {
        $googleClient = $this->get('persistance');
        // Ici tester si on obtient erreur ou code (slide 118 security)
        
        if ($request->query->get('code') !== null)
        {
            $googleClient->authenticate($request->query->get('code'));
            return $this->redirect($this->generateUrl('did_you_do_it_get_all_tasklist'));
        }
        else if ($request->query->get('error') !== null)
        {
            return $this->redirect($this->generateUrl('did_you_do_it_get_all_tasklist'));
            //Rediriger vers une page d'erreur
        }
    }
}
