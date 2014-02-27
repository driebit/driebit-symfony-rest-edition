<?php

namespace Driebit\RestBundle\Entity;

use JMS\Serializer\Annotation as JMS;

/**
 * Demo
 *
 * @author Esther Weimann <esther@driebit.nl>
 * @copyright Copyright (c) 2014 Driebit BV (http://www.driebit.nl) 
 */ 
class Demo
{
    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

}
 