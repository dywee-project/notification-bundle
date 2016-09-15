<?php

namespace Dywee\NotificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlertController extends Controller
{
    public function dropdownAction()
    {
        $em = $this->getDoctrine()->getManager();
        $ar = $em->getRepository('DyweeNotificationBundle:Alert');

        $as = $ar->findForDropdown();


        return $this->render('DyweeNotificationBundle:Alert:menu-dropdown.html.twig', array('alertList' => $as));
    }

    public function tableAction()
    {
        $em = $this->getDoctrine()->getManager();
        $ar = $em->getRepository('DyweeNotificationBundle:Alert');

        $as = $ar->findBy(array(), array('isReaded' => 'asc', 'createdAt' => 'desc'));

        return $this->render('DyweeNotificationBundle:Alert:table.html.twig', array('alertList' => $as));
    }
}
