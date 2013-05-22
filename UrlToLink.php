<?php

class UrlToLinkPlugin extends Omeka_Plugin_AbstractPlugin

{
    protected $_filters = array('UrlToLink' => array('Display', 'Item', 'Item Type Metadata', 'Local URL'));

    public function UrlToLink($text, $args)
    {
        return url_to_link($text);
    }
}

//This plugin changes website URLs to Links. 
//It appears you must have http:// for the plugin to recognize it needs to be changed
//Other than that, seems to work very well. 
