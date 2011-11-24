Introduction
============

This Bundle enables integration of the RSS-PHP library into your symfony2 project.
RSS_PHP: http://rssphp.net/


Installation
============

Downlad rssphp and to your ``vendor/`` dir and configure the app, just have to set up your config with the path to the 'rss.php' file.

Example in your ``config.yml``:

            iga_rss:
                file: %kernel.root_dir%/../vendor/rssphp/rss.php
       



Usage
============

Now, you have a service called "iga_rss.rss" that loads the rss_php class.
Code sample in a controller:

            $rss = $this->get('iga_rss.rss');
            $rss->load('http://www.elpais.com/rss/feed.html?feedId=1022');
            $items = $rss->getItems();
       

