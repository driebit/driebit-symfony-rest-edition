<?php

namespace Driebit\RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * User
 *
 * @author Esther Weimann <esther@driebit.nl>
 * @copyright Copyright (c) 2014 Driebit BV (http://www.driebit.nl)
 *
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */ 
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
 