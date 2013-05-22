<?php

class UrlToLinkPlugin extends Omeka_Plugin_AbstractPlugin

{
    protected $_filters = array('UrlToLink' => array('Display', 'Item', 'Item Type Metadata', 'Local URL'));

    public function UrlToLink($text, $args)
    {
        return url_to_link($text);
    }
}

