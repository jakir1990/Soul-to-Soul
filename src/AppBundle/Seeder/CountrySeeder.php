<?php
namespace AppBundle\Seeder;

use AppBundle\Entity\Country;
use Doctrine\Bundle\FixturesBundle\Fixture;
//use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class CountrySeeder extends Fixture
//class CitySeeder implements ORMFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        // create 10 Countries! Bam!
        for ($i = 1; $i <= 10; $i++) {
            $city = new Country();
            $city->setId('null');
            $city->setCountryName('Country '.$i);
            $manager->persist($city);
        }

        $manager->flush();
    }
}