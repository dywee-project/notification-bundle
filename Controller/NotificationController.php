<?php

namespace Dywee\NotificationBundle\Controller;

use Dywee\NotificationBundle\Entity\Notification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NotificationController extends Controller
{
    public function dropdownAction()
    {
        $em = $this->getDoctrine()->getManager();
        $nr = $em->getRepository('DyweeNotificationBundle:Notification');

        $ns = $nr->getForDropdown($this->getUser());

        return $this->render('DyweeNotificationBundle:Notification:menu-dropdown.html.twig', array('notificationList' => $ns));
    }

    public function viewAction(Notification $notification)
    {
        $em = $this->getDoctrine()->getManager();
        $notification->setIsReaded(true);
        $em->persist($notification);
        $em->flush();

        return $this->redirect($this->generateUrl($notification->getRoutingPath(), $notification->getRoutingArguments()));
    }
}
