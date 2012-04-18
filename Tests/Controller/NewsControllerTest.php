<?php

namespace Stfalcon\Bundle\NewsBundle\Tests\Controller;

use Liip\FunctionalTestBundle\Test\WebTestCase;

/**
 * News controller test
 */
class NewsControllerTest  extends WebTestCase
{

    public function testBrowseNews()
    {
        $this->loadFixtures(array('Stfalcon\Bundle\NewsBundle\DataFixtures\ORM\LoadNewsData'));
        $crawler = $this->fetchCrawler($this->getUrl('news', array()), 'GET', true, true);
        $article = $crawler->filter('article');
        $this->assertEquals(1, $article->count());
        $this->assertEquals(1, $article->filter('h2 a:contains("This is test news title")')->count());
        $this->assertEquals(1, $article->filter('p:contains("This is test news preview")')->count());
    }

    public function testShowNewsDetails()
    {
        $crawler = $this->fetchCrawler($this->getUrl('news_show', array('slug' => 'testNews')), 'GET', true, true);
        $this->assertEquals(1, $crawler->filter('h2:contains("This is test news title")')->count());
        $this->assertEquals(1, $crawler->filter('#content table:contains("This is test news text")')->count());
        $this->assertEquals(1, $crawler->filter('#content table th:contains("Test content table")')->count());
    }
}