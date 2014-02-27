<?php

namespace Driebit\RestBundle\DataFixtures;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;

/**
 * LoadDevData
 *
 * @author Esther Weimann <esther@driebit.nl>
 * @copyright Copyright (c) 2014 Driebit BV (http://www.driebit.nl) 
 */ 
class LoadDevData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        Fixtures::load(
            array(
                __DIR__ .'/../../Resources/fixtures/user.yml'
            ),
            $manager
        );
    }
}
 