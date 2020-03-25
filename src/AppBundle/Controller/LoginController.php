<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use AppBundle\Entity\City;
use AppBundle\Entity\Country;
use AppBundle\Entity\Films;
use AppBundle\Entity\Music;
use AppBundle\Entity\Pub;


class LoginController extends Controller {

    public function loginAction(Request $request) {
        
        $authenticationUtils = $this->get('security.authentication_utils');
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $cun = $this->getDoctrine()->getRepository(Country::class);
        $country = $cun->findall();
        $ct = $this->getDoctrine()->getRepository(City::class);
        $city = $ct->findall();
        $fm = $this->getDoctrine()->getRepository(Films::class);
        $films = $fm->findall();
        $msc = $this->getDoctrine()->getRepository(Music::class);
        $music = $msc->findall();
        $pb = $this->getDoctrine()->getRepository(Pub::class);
        $pub = $pb->findall();

        return $this->render('security/home_page.html.twig', array(
                    'last_username' => $lastUsername,
                    'country' => $country,
                    'city' => $city,
                    'films' => $films,
                    'music' => $music,
                    'pub' => $pub,
                    'error' => $error,
        ));
    }

    public function profileAction(Request $request) {    
        
        $authenticationUtils = $this->get('security.authentication_utils');
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        $user_id = $this->getUser()->getId();

        $sql = "SELECT u.*,c.country_name,ct.city_name,f.film_name,m.music_name,p.pub_name  FROM `users` as u,`country` as c,`city` as ct,`films` as f,`music` as m,`pub` as p WHERE u.country_id = c.id AND u.city_id = ct.id AND u.film_id = f.id AND u.music_id = m.id AND u.pub_id = p.id AND u.id = '$user_id' ";
        $ur = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $ur->execute();
        $userInfo = $ur->fetchAll();

        $wsql = "SELECT * FROM `want_to_meet_for` ";
        $wm = $this->getDoctrine()->getManager()->getConnection()->prepare($wsql);
        $wm->execute();
        $wantMeet = $wm->fetchAll();

        $wrsql = "SELECT * FROM `user_to_want_to_meet` WHERE user_id = '$user_id'";
        $wrm = $this->getDoctrine()->getManager()->getConnection()->prepare($wrsql);
        $wrm->execute();
        $userWantMeet = $wrm->fetchAll();
        $arr = "";
        if(count($userWantMeet) > 0){
            $wantTomet =   $userWantMeet[0]['want_to_meet'];
            $arr = explode(",", $wantTomet);
        }else{
            $arr = "";
        }

        $vsql = "SELECT *  FROM `visit` WHERE  user_id = '$user_id'";
        $vst = $this->getDoctrine()->getManager()->getConnection()->prepare($vsql);
        $vst->execute();
        $visit = $vst->fetchAll();
        $totalvisitor = count($visit);

        $rsql = "SELECT *  FROM `user_request` WHERE  user_id = '$user_id' AND status = '0'";
        $rqst = $this->getDoctrine()->getManager()->getConnection()->prepare($rsql);
        $rqst->execute();
        $urqst = $rqst->fetchAll();
        $totalRequest = count($urqst);


        return $this->render('security/dashboard.html.twig', array(
                    'last_username' => $lastUsername,
                    'user_info' => $userInfo,
                    'wantMeet' => $wantMeet,
                    'wantToMeet' => $arr,
                    'totalvisit' => $totalvisitor,
                    'totalRqst' => $totalRequest,
                    'error' => $error,
        ));
    }

}
