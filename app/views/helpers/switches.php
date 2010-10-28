<?php

class SwitchesHelper extends AppHelper {
	
    function onOff($value, $on = 'Yes', $off = 'No') {
        if ($value == 1) {
        	return $on;
		}else{
			return $off;
		     }
        }
		
    function accessLevel ($value) {
    	
    	switch ($value) {
    	
    	case 0 ;
    		echo "Read Only";
    		break;
    	case 1 ;
    		echo "Read/Write";
    		break;
    	case 2 ;
    		echo "Read/Write/Delete";
    		break;
    	case 3 ;
    		echo "Full Access";
    		break;
    	default;
    		echo "n/a";
    		break;
    			

    	}	
    	
    }
    
    
    function groupLevel ($value) {
    	
    	switch ($value) {
    	
    	case 6 ;
    		echo "Full-Time";
    		break;
    	case 5 ;
    		echo "Volunteer";
    		break;
    	case 4 ;
    		echo "Preceptor";
    		break;
    	case 3 ;
    		echo "FTO";
    		break;
    	case 2 ;
    		echo "Coordinator";
    		break;
    	case 1 ;
    		echo "Super Administrator";
    		break;
    	default;
    		echo "n/a";
    		break;
    			

    	}	
    	
    }
   
}

?>