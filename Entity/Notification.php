<?php

namespace Dywee\NotificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notifications")
 * @ORM\Entity(repositoryClass="Dywee\NotificationBundle\Repository\NotificationRepository")
 */
class Notification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** @ORM\Column(name="content", type="string", length=255) */
    private $content;

    /** @ORM\Column(name="bundle", type="string", length=255) */
    private $bundle;

    /** @ORM\Column(name="type", type="string", length=255) */
    private $type;

    /** @ORM\Column(name="isReaded", type="boolean") */
    private $isReaded = false;

    /** @ORM\Column(name="argument1", type="string", length=255, nullable=true) */
    private $argument1;

    /** @ORM\Column(name="argument2", type="string", length=255, nullable=true) */
    private $argument2;

    /** @ORM\Column(name="createdAt", type="datetime") */
    private $createdAt;

    /** @ORM\Column(name="routingPath", type="string", length=255) */
    private $routingPath;

    /** @ORM\Column(name="routingArguments", type="text") */
    private $routingArguments;

    /** @ORM\ManyToOne(targetEntity="UserBundle\Entity\User") */
    private $user;



    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Notification
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    public function setBundle($bundle)
    {
        $this->bundle = $bundle;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getBundle()
    {
        return $this->bundle;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Notification
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set isReaded
     *
     * @param boolean $isReaded
     *
     * @return Notification
     */
    public function setIsReaded($isReaded)
    {
        $this->isReaded = $isReaded;

        return $this;
    }

    /**
     * Get isReaded
     *
     * @return boolean
     */
    public function getIsReaded()
    {
        return $this->isReaded;
    }

    /**
     * Set argument1
     *
     * @param string $argument1
     *
     * @return Notification
     */
    public function setArgument1($argument1)
    {
        $this->argument1 = $argument1;

        return $this;
    }

    /**
     * Get argument1
     *
     * @return string
     */
    public function getArgument1()
    {
        return $this->argument1;
    }

    /**
     * Set argument2
     *
     * @param string $argument2
     *
     * @return Notification
     */
    public function setArgument2($argument2)
    {
        $this->argument2 = $argument2;

        return $this;
    }

    /**
     * Get argument2
     *
     * @return string
     */
    public function getArgument2()
    {
        return $this->argument2;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Notification
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set routingPath
     *
     * @param string $routingPath
     * @return Notification
     */
    public function setRoutingPath($routingPath)
    {
        $this->routingPath = $routingPath;

        return $this;
    }

    /**
     * Get routingPath
     *
     * @return string 
     */
    public function getRoutingPath()
    {
        return $this->routingPath;
    }

    /**
     * Set routingArguments
     *
     * @param string $routingArguments
     * @return Notification
     */
    public function setRoutingArguments($routingArguments)
    {
        $this->routingArguments = serialize($routingArguments);

        return $this;
    }

    /**
     * Get routingArguments
     *
     * @return string 
     */
    public function getRoutingArguments()
    {
        return unserialize($this->routingArguments);
    }

    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }
}
