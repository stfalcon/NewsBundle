<?php

namespace Stfalcon\Bundle\NewsBundle\Tests\Entity;

use Stfalcon\Bundle\NewsBundle\Entity\News;

/**
 * test News entity
 */
class NewsEntityTest extends \PHPUnit_Framework_TestCase
{

    public function testEmptyNewsIdisNull()
    {
        $news = new News();
        $this->assertNull($news->getId());
    }

    public function testSetAndGetNewsPreviewText()
    {
        $text = "Design can help you improve your sustainability credentials, create products and services that make people happy and it has positive benefits on business's bottom line.";

        $news = new News();
        $news->setPreview($text);

        $this->assertEquals($text, $news->getPreview());
    }

    public function testSetAndGetNewsText()
    {
        $text = "Design can help you improve your sustainability credentials, create products and services that make people happy and it has positive benefits on business's bottom line.";

        $news = new News();
        $news->setText($text);

        $this->assertEquals($text, $news->getText());
    }

    public function testSetAndGetNewsSlug()
    {
        $news = new News();

        $slug = 'web-development';
        $news->setSlug($slug);

        $this->assertEquals($slug, $news->getSlug());
    }

    public function testGetAndAddNewsTitle()
    {
        $news = new News();

        $title = 'web-development';
        $news->setTitle($title);

        $this->assertEquals($title, $news->getTitle());

    }

    public function testGetAndNewsDate()
    {
        $news = new News();
        $date = new \DateTime;
        $news->setCreatedAt($date);

        $this->assertEquals($date, $news->getCreatedAt());

    }
}