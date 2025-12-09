<?php

namespace PlasticStudio\Sitemap\Extensions;

use SilverStripe\Core\Extension;
use Silverstripe\Forms\FieldList;
use Silverstripe\Forms\CheckBoxField;

class SitemapSiteConfigExtension extends Extension {
     
	private static $db = [	
		'DoNotIndex' => 'Boolean'
    ];
     
	public function updateCMSFields(FieldList $fields)
	{
        $fields->addFieldToTab(
            'Root.Indexing', 
            CheckBoxField::create(
				'DoNotIndex', 
				'Exclude entire site from indexing robots (like Google etc)'
            )->setDescription('Checking this box will add a "robots no-index" tag to the head of every page, preventing search engine bots from crawling and indexing this site (assuming those bots are well-behaved and respect the tag)')
        );
    }
	
}