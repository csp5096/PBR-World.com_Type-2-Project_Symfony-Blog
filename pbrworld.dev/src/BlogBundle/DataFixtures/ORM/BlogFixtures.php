<?php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Blog;

class BlogFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $blog1 = new Blog();
        $blog1->setTitle('South Africa Mothballs Pebble Bed Reactor');
		$blog1->setSlug('south africa mothballs pebble bed reactor');
		$blog1->setAuthor('admin');
        $blog1->setBlog('Source: http://www.southafrica.info/news/pbmr-mothballed.htm#.VoyCifkrLBQ');
        $blog1->setImage('Modular.jpg');
        $blog1->setTags('South Africa, PBR World, Pebble Bed Reactor');
        $blog1->setCreated(new \DateTime("2016-02-22 15:34:18"));
        $blog1->setUpdated($blog1->getCreated());
        $manager->persist($blog1);
		
        $manager->persist($blog1);

        $blog2 = new Blog();
        $blog2->setTitle('German Experimental Pebble Bed Reactor Decommissioned');
		$blog2->setSlug('julich pebble bed reactor decommisioned');
		$blog2->setAuthor('admin');
        $blog2->setBlog('Source: http://www.world-nuclear-news.org/WR-Julich-pilot-reactor-vessel-removed-10021501.html');
        $blog2->setImage('German_PBR.jpg');
        $blog2->setTags('Germany, Pebble Bed Reactor');
        $blog2->setCreated(new \DateTime("2016-02-23 06:12:33"));
        $blog2->setUpdated($blog2->getCreated());
        $manager->persist($blog2);

        $blog3 = new Blog();
        $blog3->setTitle('X-Energy Developing Pebble Bed Reactor');
		$blog3->setSlug('xe developing pebble bed reactor');
		$blog3->setAuthor('admin');
        $blog3->setBlog('Source: http://nextbigfuture.com/2015/05/us-startup-x-energy-developing.html');
        $blog3->setImage('Xe_Reactor_1.png');
        $blog3->setTags('United States, Pebble Bed Reactor');
        $blog3->setCreated(new \DateTime("2016-02-24 16:14:06"));
        $blog3->setUpdated($blog3->getCreated());
        $manager->persist($blog3);

        $blog4 = new Blog();
        $blog4->setTitle('X-Energy Completes Pebble Bed Reactor Integration Study');
		$blog4->setSlug('xe completes study');
		$blog4->setAuthor('admin');
        $blog4->setBlog('Source: http://nuclearstreet.com/nuclear_power_industry_news/b/nuclear_power_news/archive/2015/10/29/x_2d00_energy-and-sce_2600_g-complete-integration-study-for-xe_2d00_100-pebble_2d00_bed-reactor-102801.aspx#.Voir1vkrLBQ');
        $blog4->setImage('Xe_Pebble.png');
        $blog4->setTags('United States, Pebble Bed Reactor, Pebbles');
        $blog4->setCreated(new \DateTime("2016-02-25 18:54:12"));
        $blog4->setUpdated($blog4->getCreated());
        $manager->persist($blog4);

        $blog5 = new Blog();
        $blog5->setTitle('China Starts Construction Of Semi-Commercial Pebble Bed Reactor');
		$blog5->setSlug('china htr starts contruction');
		$blog5->setAuthor('admin');
        $blog5->setBlog('Source: http://nextbigfuture.com/2011/03/china-210-mwe-pebble-bed-reactor-starts.html');
        $blog5->setImage('PBR_1.jpg');
        $blog5->setTags('HTR-PM, Pebble Bed Reactor, China');
        $blog5->setCreated(new \DateTime("2016-02-26 15:34:18"));
        $blog5->setUpdated($blog5->getCreated());
        $manager->persist($blog5);
		
		$blog6 = new Blog();
        $blog6->setTitle('China Construction Progresses on 210 MWE Pebble Bed Reactor');
		$blog6->setSlug('china htr continues construction');
		$blog6->setAuthor('admin');
        $blog6->setBlog('Source: http://nextbigfuture.com/2011/07/china-well-underway-building-210-mwe.html');
        $blog6->setImage('PBR_Construction.png');
        $blog6->setTags('HTR-PM, Pebble Bed Reactor, China');
        $blog6->setCreated(new \DateTime("2016-02-29 15:34:18"));
        $blog6->setUpdated($blog6->getCreated());
        $manager->persist($blog6);
		
		$blog7 = new Blog();
        $blog7->setTitle('China Constructs Nuclear Pebble Manufacturing Facility');
		$blog7->setSlug('china builds pebble manufacturing plant');
		$blog7->setAuthor('admin');
        $blog7->setBlog('Source: http://nextbigfuture.com/2015/01/production-of-300000-fuel-pebbles-per.html');
        $blog7->setImage('Pebbles.png');
        $blog7->setTags('Pebble Production, Pebble Bed Reactor, China');
        $blog7->setCreated(new \DateTime("2016-03-01 15:34:18"));
        $blog7->setUpdated($blog7->getCreated());
        $manager->persist($blog7);
		
		$blog8 = new Blog();
        $blog8->setTitle('Helium Circulator Ready For Chain 210 MWE');
		$blog8->setSlug('helium circulator fan');
		$blog8->setAuthor('admin');
        $blog8->setBlog('Source: http://www.world-nuclear-news.org/NN-Helium-fan-produced-for-Chinese-HTR-PM-1908144.html');
        $blog8->setImage('Circulator.jpg');
        $blog8->setTags('HTR-PM, Pebble Bed Reactor, China, Circulator Fan');
        $blog8->setCreated(new \DateTime("2016-03-02 15:34:18"));
        $blog8->setUpdated($blog8->getCreated());
        $manager->persist($blog8);
		
		$blog9 = new Blog();
        $blog9->setTitle('First Commercial Pebble Bed Reactor Plant');
		$blog9->setSlug('first commercial pebble bed reactor plant');
		$blog9->setAuthor('admin');
        $blog9->setBlog('Source: http://www.globalconstructionreview.com/news/china-set-build-worlds-8f0i6r4s8t0-6f4o2u4r6t8h/');
        $blog9->setImage('Generation.jpg');
        $blog9->setTags('HTR Commercialization, Pebble Bed Reactor, China');
        $blog9->setCreated(new \DateTime("2016-03-03 15:34:18"));
        $blog9->setUpdated($blog9->getCreated());
        $manager->persist($blog9);

        $manager->flush();

	    $this->addReference('blog-1', $blog1);
        $this->addReference('blog-2', $blog2);
        $this->addReference('blog-3', $blog3);
        $this->addReference('blog-4', $blog4);
        $this->addReference('blog-5', $blog5);
        $this->addReference('blog-6', $blog6);
        $this->addReference('blog-7', $blog7);
		$this->addReference('blog-8', $blog8);
		$this->addReference('blog-9', $blog9);
    }
	
    public function getOrder()
    {
        return 1;
    }
}
