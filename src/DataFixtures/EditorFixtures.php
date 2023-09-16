<?php

namespace App\DataFixtures;

use App\Entity\Editor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EditorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $editorAllen = new Editor();
        $editorAllen->setName('Allen & Unwin');
        $manager->persist($editorAllen);
        $this->addReference('editor-Allen', $editorAllen);

        $editorProfile = new Editor();
        $editorProfile->setName('Penguin Books');
        $manager->persist($editorProfile);
        $this->addReference('editor-Profile', $editorProfile);

        $editorWardLock = new Editor();
        $editorWardLock->setName('Ward, Lock & Co.');
        $manager->persist($editorWardLock);
        $this->addReference('editor-WardLock', $editorWardLock);

        $editorCharlesScribner = new Editor();
        $editorCharlesScribner->setName('Charles Scribner\'s Sons');
        $manager->persist($editorCharlesScribner);
        $this->addReference('editor-CharlesScribner', $editorCharlesScribner);

        $editorPenguin = new Editor();
        $editorPenguin->setName('Penguin Books');
        $manager->persist($editorPenguin);
        $this->addReference('editor-Penguin', $editorPenguin);

        $manager->flush();
    }
}
