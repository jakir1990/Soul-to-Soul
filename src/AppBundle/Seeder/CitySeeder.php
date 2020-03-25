<?php
namespace AppBundle\Seeder;

use AppBundle\Entity\City;
use Doctrine\Bundle\FixturesBundle\Fixture;
//use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class CitySeeder extends Fixture
//class CitySeeder implements ORMFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        // create 10 Cities! Bam!
        for ($i = 1; $i <= 10; $i++) {
            $city = new City();
            $city->setId('null');
            $city->setCityName('City '.$i);
            $manager->persist($city);
        }

        $manager->flush();
    }
}