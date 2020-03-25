<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Users;
use AppBundle\Entity\Visit;
use AppBundle\Entity\UserRequest;

class UserRequestController extends Controller
{

    /**
     * Visit Content.
     *
     */
    public function indexAction()
    {
        $user_id = $this->getUser()->getId();
        $sql = "SELECT u.*,c.country_name,ct.city_name,f.film_name,m.music_name,p.pub_name  FROM `users` as u,`country` as c,`city` as ct,`films` as f,`music` as m,`pub` as p WHERE u.country_id = c.id AND u.city_id = ct.id AND u.film_id = f.id AND u.music_id = m.id AND u.pub_id = p.id AND u.id = '$user_id' ";
        $ur = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $ur->execute();
        $userInfo = $ur->fetchAll();

        $allsql = "SELECT u.*,c.country_name,ct.city_name,f.film_name,m.music_name,p.pub_name  FROM `users` as u,`country` as c,`city` as ct,`films` as f,`music` as m,`pub` as p WHERE u.country_id = c.id AND u.city_id = ct.id AND u.film_id = f.id AND u.music_id = m.id AND u.pub_id = p.id AND u.id != '$user_id' ORDER BY u.id DESC";
        $aur = $this->getDoctrine()->getManager()->getConnection()->prepare($allsql);
        $aur->execute();
        $all_user = $aur->fetchAll();

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

        return $this->render('userrequest/user_request_list.html.twig',array( 'user_info' => $userInfo,'all_user'=>$all_user,'totalvisit'=>$totalvisitor,'totalRqst'=>$totalRequest));
    }

}
