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
    	
    	case 4 ;
    		echo "Read Only";
    		break;
    	case 3 ;
    		echo "Read/Write";
    		break;
    	case 2 ;
    		echo "Read/Write/Delete";
    		break;
    	case 1 ;
    		echo "Full Access";
    		break;
    	default;
    		echo "n/a";
    		break;
    			

    	}	
    	
    }
    
    
    function groupLevel ($value) {
    	
    	switch ($value) {
    	
    	case 5 ;
    		echo "Trainee";
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