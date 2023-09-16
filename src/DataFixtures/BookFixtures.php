<?php

namespace App\DataFixtures;

use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class BookFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $book1 = new Book();
        $book1->setTitle('The Lord of the Rings');
        $book1->setDateOfPublication('1954');
        $book1->setImg('book1.jpg');
        $book1->setAuthor($this->getReference('author-Tolkien'));
        $book1->setEditor($this->getReference('editor-Allen'));
        $book1->setCategory($this->getReference('category-fantasy'));
        $manager->persist($book1);

        $book2 = new Book();
        $book2->setTitle('The Hobbit');
        $book2->setDateOfPublication('1937');
        $book2->setImg('book2.jpg');
        $book2->setAuthor($this->getReference('author-Tolkien'));
        $book2->setEditor($this->getReference('editor-Allen'));
        $book2->setCategory($this->getReference('category-fantasy'));
        $manager->persist($book2);

        $book3 = new Book();
        $book3->setTitle('Powet');
        $book3->setDateOfPublication('2012');
        $book3->setImg('book3.jpg');
        $book3->setAuthor($this->getReference('author-Greene'));
        $book3->setEditor($this->getReference('editor-Profile'));
        $book3->setCategory($this->getReference('category-self-help'));
        $manager->persist($book3);

        $book4 = new Book();
        $book4->setTitle('Sherlock Holmes');
        $book4->setDateOfPublication('1887');
        $book4->setImg('book4.jpg');
        $book4->setAuthor($this->getReference('author-Conan'));
        $book4->setEditor($this->getReference('editor-WardLock'));
        $book4->setCategory($this->getReference('category-thriller'));
        $manager->persist($book4);

        $book5 = new Book();
        $book5->setTitle('The Great Gatsby');
        $book5->setDateOfPublication('1925');
        $book5->setImg('book5.jpg');
        $book5->setAuthor($this->getReference('author-Fitzgerald'));
        $book5->setEditor($this->getReference('editor-CharlesScribner'));
        $book5->setCategory($this->getReference('category-romance'));
        $manager->persist($book5);

        $book6 = new Book();
        $book6->setTitle('The Picture of Dorian Gray');
        $book6->setDateOfPublication('1890');
        $book6->setImg('book6.jpg');
        $book6->setAuthor($this->getReference('author-Wilde'));
        $book6->setEditor($this->getReference('editor-Penguin'));
        $book6->setCategory($this->getReference('category-romance'));
        $manager->persist($book6);

        $book7 = new Book();
        $book7->setTitle('The Art of War');
        $book7->setDateOfPublication('1910');
        $book7->setImg('book7.jpg');
        $book7->setAuthor($this->getReference('author-Tzu'));
        $book7->setEditor($this->getReference('editor-Penguin'));
        $book7->setCategory($this->getReference('category-historical'));
        $manager->persist($book7);

        $book8 = new Book();
        $book8->setTitle('The 48 Laws of Power');
        $book8->setDateOfPublication('1998');
        $book8->setImg('book8.jpg');
        $book8->setAuthor($this->getReference('author-Greene'));
        $book8->setEditor($this->getReference('editor-Profile'));
        $book8->setCategory($this->getReference('category-self-help'));
        $manager->persist($book8);

        $book9 = new Book();
        $book9->setTitle('The Prince');
        $book9->setDateOfPublication('1532');
        $book9->setImg('book9.jpg');
        $book9->setAuthor($this->getReference('author-Machiavelli'));
        $book9->setEditor($this->getReference('editor-Profile'));
        $book9->setCategory($this->getReference('category-historical'));
        $manager->persist($book9);

        $book10 = new Book();
        $book10->setTitle('The 33 Strategies of War');
        $book10->setDateOfPublication('2006');
        $book10->setImg('book10.jpg');
        $book10->setAuthor($this->getReference('author-Greene'));
        $book10->setEditor($this->getReference('editor-Profile'));
        $book10->setCategory($this->getReference('category-self-help'));
        $manager->persist($book10);
        
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            AuthorFixtures::class,
            EditorFixtures::class,
            CategoryFixtures::class,
        ];
    }
}