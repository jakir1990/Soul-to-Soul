<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\HttpFoundation\Response;

/**
 * User controller.
 *
 */
class UsersController extends Controller {
    
     /**
     * Lists Register.
     *
     */
    public function addUserAction(Request $request,UserPasswordEncoderInterface $passwordEncoder)
    {
        $usr = $this->getDoctrine()->getManager();
        $user = new Users();

        $password = $passwordEncoder->encodePassword($user,$request->request->get('password'));

        $role = 'ROLE_ADMIN';
        $full_name = $request->request->get('full_name');
        $user_name = $request->request->get('user_name');
        $phone_number = $request->request->get('phone_number');
        $birth_date = $request->request->get('birth_date');
        $country_id = $request->request->get('country_id');
        $city_id = $request->request->get('city_id');
        $music_id = $request->request->get('music_id');
        $film_id = $request->request->get('film_id');
        $pub_id = $request->request->get('pub_id');
        $is_active = "1";

        if (!$user_name || !$full_name || !$birth_date || !$country_id || !$city_id || !$music_id) {
            $this->addFlash('error', 'Please Complete Required Filed  !');
            return $this->redirectToRoute('login');
        }else {

            $repository = $this->getDoctrine()->getRepository(Users::class);
            $ex_data = $repository->findBy(['username' => $user_name]);

            if (count($ex_data) > 0) {
                $this->addFlash('error', 'Sorry This is Record is already existed.. !');
                return $this->redirectToRoute('login');
            } else {

                $user->setUserName($user_name);
                $user->setPassword($password);
                $user->setFullName($full_name);
                $user->setPhoneNumber($phone_number);
                $user->setBirthDate($birth_date);
                $user->setCountryId($country_id);
                $user->setCityId($city_id);
                $user->setMusicId($music_id);
                $user->setFilmId($film_id);
                $user->setPubId($pub_id);
                $user->setRoles($role);
                $user->setIsActive($is_active);

                $usr->persist($user);
                $usr->flush();

                $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
                $this->get('security.token_storage')->setToken($token);
                $val =  $this->get('session')->set('_security_main', serialize($token));

                $this->addFlash('success', 'Save Successfully!');
                return $this->redirectToRoute('profile');
            }
        }
    }

    /**
     * Lists Get Count country.
     *
     */

    public function getTotCountryAction(Request $request,$id)
    {
        $sql = "SELECT *  FROM `users` WHERE country_id = '$id' ";
        $rpst = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $rpst->execute();
        $countInfo = $rpst->fetchAll();
        $totCont = count($countInfo);
        $response = new Response(json_encode($totCont));

        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


    /**
     * Lists Get Count City.
     *
     */

    public function getTotCityAction(Request $request,$id)
    {
        $sql = "SELECT *  FROM `users` WHERE city_id = '$id' ";
        $rpst = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $rpst->execute();
        $countInfo = $rpst->fetchAll();
        $totCity = count($countInfo);
        $response = new Response(json_encode($totCity));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * Lists Get Count Music.
     *
     */

    public function getTotMusicAction(Request $request,$id)
    {
        $sql = "SELECT *  FROM `users` WHERE music_id = '$id' ";
        $rpst = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $rpst->execute();
        $musicInfo = $rpst->fetchAll();
        $totMusic = count($musicInfo);
        $response = new Response(json_encode($totMusic));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * Lists Get Count Films.
     *
     */

    public function getTotFilmsAction(Request $request,$id)
    {
        $sql = "SELECT *  FROM `users` WHERE film_id = '$id' ";
        $rpst = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $rpst->execute();
        $filmInfo = $rpst->fetchAll();
        $totFilm = count($filmInfo);
        $response = new Response(json_encode($totFilm));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * Lists Get Count Pub.
     *
     */

    public function getTotPubAction(Request $request,$id)
    {
        $sql = "SELECT *  FROM `users` WHERE pub_id = '$id' ";
        $rpst = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $rpst->execute();
        $pubInfo = $rpst->fetchAll();
        $totPub = count($pubInfo);
        $response = new Response(json_encode($totPub));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    public function getTotDobAction(Request $request,$id)
    {
        $sql = "SELECT *  FROM `users` WHERE birth_date = '$id' ";
        $rpst = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $rpst->execute();
        $dobInfo = $rpst->fetchAll();
        $totDob = count($dobInfo);
        $response = new Response(json_encode($totDob));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * Privacy Policy.
     *
     */
    public function privacyPolicyAction()
    {
        return $this->render('policy/privacy_policy.html.twig');
    }

    /**
     * Cookie Policy.
     *
     */
    public function cookiePolicyAction()
    {
        return $this->render('policy/cookie_policy.html.twig');
    }

    /**
     * Matching Name.
     *
     */
    public function getTotNameAction(Request $request,$id)
    {
        $sql = "SELECT *  FROM `users` WHERE full_name LIKE '%$id%' ";
        $rpst = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $rpst->execute();
        $nameInfo = $rpst->fetchAll();
        $totName = count($nameInfo);
        $response = new Response(json_encode($totName));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * Lists Update Profile.
     *
     */
    public function updateUserAction(Request $request)
    {
        $usr = $this->getDoctrine()->getManager();
        $user = new Users();

        $user_id = $request->request->get('user_id');

        $wtm = $_POST['want_to_meet'];
        $chk1 = "";
        foreach ($wtm as $chk2) {
            $chk1 .= $chk2 . ",";
        }
        $want_to_meet = substr($chk1, 0, strlen($chk1) - 1);
        
//    What I Like Table Start

        $favorite_film = $request->request->get('favorite_film');
        $favorite_music = $request->request->get('favorite_music');
        $preferred_adv = $request->request->get('preferred_adv');
        $favorite_quote = $request->request->get('favorite_quote');
        $favorite_animal = $request->request->get('favorite_animal');
        $favorite_color = $request->request->get('favorite_color');

//    What I Like Table End

//    Agreements Table Start

        $sportsInLeisure = $request->request->get('sportsInLeisure');
        $associations = $request->request->get('associations');
        $volunteering = $request->request->get('volunteering');
        $passions = $request->request->get('passions');

//    Agreements Table End

//    Culture Table Start

        $music = $request->request->get('music');
        $musical_instrument = $request->request->get('musical_instrument');
        $literature = $request->request->get('literature');
        $cinema = $request->request->get('cinema');
        $tv_series = $request->request->get('tv_series');
        $documentaries = $request->request->get('documentaries');
        $arts = $request->request->get('arts');
        $sciences = $request->request->get('sciences');
        $photography = $request->request->get('photography');

//    Culture Table End

//    Complementerities Table Start

        $qualities = $request->request->get('qualities');
        $temperament = $request->request->get('temperament');
        $what_i_dont = $request->request->get('what_i_dont');
        $my_ideal = $request->request->get('my_ideal');

//    Complementerities Table End

//    Education Table Start

        $degree = $request->request->get('degree');
        $commitments = $request->request->get('commitments');
        $policies = $request->request->get('policies');
        $my_ideal = $request->request->get('my_ideal');

//    Education Table End

//    Instructions Table Start

        $professions = $request->request->get('professions');
        $degrees = $request->request->get('degrees');
        $school_curriculum = $request->request->get('school_curriculum');
        $languages = $request->request->get('languages');
        $curriculum_vitae = $request->request->get('curriculum_vitae');
        $cover_letter = $request->request->get('cover_letter');
        $portfolio = $request->request->get('portfolio');

//    Instructions Table End

//    Life Style Table Start

        $foods = $request->request->get('foods');
        $i_cook = $request->request->get('i_cook');
        $alcohol = $request->request->get('alcohol');
        $tabac = $request->request->get('tabac');
        $pet_animal = $request->request->get('pet_animal');
        $confessionsr = $request->request->get('confessions');
        $nationality = $request->request->get('nationality');
        $origin = $request->request->get('origin');

//    Life Style Table End

//    Expectations Table Start

        $projects = $request->request->get('projects');
        $dream = $request->request->get('dream');
        $others = $request->request->get('others');

//    Expectations Table End

        if (!$user_id) {
            $this->addFlash('error', 'Please Complete Required Filed  !');
            return $this->redirectToRoute('login');
        }else {

            $repository = $this->getDoctrine()->getRepository(Users::class);
            $ex_data = $repository->findBy(['username' => $user_name]);

            if (count($ex_data) > 0) {
                $this->addFlash('error', 'Sorry This is Record is already existed.. !');
                return $this->redirectToRoute('login');
            } else {

                $user->setUserName($user_name);
                $user->setPassword($password);
                $user->setFullName($full_name);
                $user->setPhoneNumber($phone_number);
                $user->setBirthDate($birth_date);
                $user->setCountryId($country_id);
                $user->setCityId($city_id);
                $user->setMusicId($music_id);
                $user->setFilmId($film_id);
                $user->setPubId($pub_id);
                $user->setRoles($role);
                $user->setIsActive($is_active);

                $usr->persist($user);
                $usr->flush();

                $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
                $this->get('security.token_storage')->setToken($token);
                $val =  $this->get('session')->set('_security_main', serialize($token));

                $this->addFlash('success', 'Save Successfully!');
                return $this->redirectToRoute('profile');
            }
        }
    }




}
