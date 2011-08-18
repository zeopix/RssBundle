<?php

namespace Iga\RssBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class RssController extends Controller
{
    public function getAction($url)
    {
    	
    	$rss = $this->get('iga_rss.rss');
    	
    	$rss->load($url);
    	
    	$items = $rss->getItems();
    
        return $rss;
    }
}
