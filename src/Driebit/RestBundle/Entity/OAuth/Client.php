<?php

namespace Driebit\RestBundle\Entity\OAuth;

use Doctrine\ORM\Mapping as ORM;

use FOS\OAuthServerBundle\Entity\Client as BaseClient;

/**
 * Client
 *
 * @ORM\Table(name="fos_client")
 * @ORM\Entity
 */
class Client extends BaseClient
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


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
