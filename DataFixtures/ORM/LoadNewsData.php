<?php

namespace Stfalcon\Bundle\NewsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Stfalcon\Bundle\NewsBundle\Entity\News;

class LoadNewsData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $news = new News();
        $news->setSlug('testNews');
        $text = '<table style="width:100%"><tr><th>Test content table</th></tr><tr><td><a href="http://google.com">go to google</a></td></tr><tr><td>This is test news text</td></tr></table>';
        $news->setText($text);
        $news->setTitle('This is test news title');
        $news->setPreview('This is test news preview');
        $news->setCreatedAt(new \DateTime);
        $manager->persist($news);
        $manager->flush();
    }
}