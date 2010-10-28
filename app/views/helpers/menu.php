<?php

class MenuHelper extends AppHelper {
		
    function admin ($value) {
    	
    	switch ($value) {
    	
    	case 1 ;
    		$menu = "$this->element('menuSuper')";
    		break;
    	case 2 ;
    		$menu = "$this->element('menuCoordinator')";
    		break;
    	case 3 ;
    		$menu = "$this->element('menuFTO')";
    		break;
    	case 4 ;
    		$menu = "$this->element('menuPreceptor')";
    		break;
    	case 5 ;
    	 	$menu = "$this->element('menuTrainee')";
    		break;
    	}	
    	return $menu;
    }
   
}

?>