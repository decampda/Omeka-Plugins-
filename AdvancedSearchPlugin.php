<!--This plugin must be saved in a file called "AdvancedSearch" in the plugins folder of 
  Omeka. This plugin must be titled "AdvancedSearchPlugin.php". I have added many of the
	Metadata categories that we have used so far, but we can add any others that we want 
	by adding categories to the array that starts at line 20.-->



<?php

class AdvancedSearchPlugin extends Omeka_Plugin_AbstractPlugin
{
    
    public $_filters = array('elements_select_options');
    
    public function filterElementsSelectOptions($elementSets)
    {
        //make this magic happen only on the advanced search page
        
        if(!is_admin_theme()) {
            $elementsWeWant = array('Title',
            						'Date',
            						'Text',
            						'Creator',
            						'Description',
            						'To',
            						'From',
            						'Email Body',
            						'Local URL',
            						'Date Published',
            						'Date Accessed',
            						'Contributor Name',
            						'Contributor Age',
            						'Contributor Gender',
            						'Contributor Race',
            						'Current Location',);
            											
            
            foreach($elementSets as $elementSet=>$elements) {
                foreach($elements as $id=>$element) {
                    if(!in_array($element, $elementsWeWant)) {
                        unset($elementSets[$elementSet][$id]);                    
                    }
                }
            }
        }
        return $elementSets;
    }
    
}
