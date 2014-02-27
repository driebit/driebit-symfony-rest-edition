<?php

namespace Driebit\RestBundle\Entity\OAuth;

use Doctrine\ORM\Mapping as ORM;

use FOS\OAuthServerBundle\Entity\AuthCode as BaseAuthCode;
use Driebit\RestBundle\Entity\User;

/**
 * AuthCode
 *
 * @ORM\Table(name="fos_auth_code")
 * @ORM\Entity
 */
class AuthCode extends BaseAuthCode
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $client;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="Driebit\RestBundle\Entity\User")
     */
    protected $user;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
