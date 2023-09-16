<?php

namespace App\DataFixtures;

use App\Entity\Author;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AuthorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $authorTolkien= new Author();
        $authorTolkien->setFirstname('J.R.R.');
        $authorTolkien->setLastname('Tolkien');
        $manager->persist($authorTolkien);
        $this->addReference('author-Tolkien', $authorTolkien);

        $authorGreene= new Author();
        $authorGreene->setFirstname('Robert');
        $authorGreene->setLastname('Greene');
        $manager->persist($authorGreene);
        $this->addReference('author-Greene', $authorGreene);
        
        $authorConan= new Author();
        $authorConan->setFirstname('Artur');
        $authorConan->setLastname('Conan Doyle');
        $manager->persist($authorConan);
        $this->addReference('author-Conan', $authorConan);

        $authorFitzgerald= new Author();
        $authorFitzgerald->setFirstname('F. Scott');
        $authorFitzgerald->setLastname('Fitzgerald');
        $manager->persist($authorFitzgerald);
        $this->addReference('author-Fitzgerald', $authorFitzgerald);

        $authorWilde= new Author();
        $authorWilde->setFirstname('Oscar');
        $authorWilde->setLastname('Wilde');
        $manager->persist($authorWilde);
        $this->addReference('author-Wilde', $authorWilde);

        $authorTzu= new Author();
        $authorTzu->setFirstname('Sun');
        $authorTzu->setLastname('Tzu');
        $manager->persist($authorTzu);
        $this->addReference('author-Tzu', $authorTzu);
        
        $authorMachiavelli= new Author();
        $authorMachiavelli->setFirstname('Niccolo');
        $authorMachiavelli->setLastname('Machiavelli');
        $manager->persist($authorMachiavelli);
        $this->addReference('author-Machiavelli', $authorMachiavelli);

        $manager->flush();
    }
}
