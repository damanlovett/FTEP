<?php 
/**
 * Helper for outputing a state select list.
 *
 * Allows you to include a selec list of all states using 1 line of code.
 *
 * Revised by Eddie D. Lovett, II
 * Original Author: Tane Piper (digitalspaghetti@gmail.com)
 * URL: http://digitalspaghetti.me.uk
 *
 * PHP versions 4 and 5
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 */


class StateListHelper extends FormHelper
{
    
    var $helpers = array('Form');
    
    function select($fieldname, $label, $default="  ", $attributes = array())
    {
        $list = '<div class="input">';
        $list .= $this->Form->label($label);
        $list .= $this->Form->select($fieldname , array(
            '--' => 'None',
'Alabama'  => 'Alabama',
'Alaska'  => 'Alaska',
'Arizona'  => 'Arizona',
'Arkansas'  =>'Arkansas',
'California'  =>'California' ,
'Colorado'  =>'Colorado',
'Connecticut'  =>'Connecticut',
'Delaware'  =>'Delaware',
'District of Columbia'  =>'District of Columbia',
'Florida'  =>'Florida',
'Georgia'  =>'Georgia',
'Hawaii'  =>'Hawaii',
'Idaho'  =>'Idaho',
'Illinois'  =>'Illinois',
'Indiana'  =>'Indiana',
'Iowa'  =>'Iowa',
'Kansas'  =>'Kansas',
'Kentucky'  =>'Kentucky',
'Louisiana'  =>'Louisiana',
'Maine'  =>'Maine',
'Maryland'  =>'Maryland',
'Massachusetts'  =>'Massachusetts',
'Michigan'  =>'Michigan',
'Minnesota'  =>'Minnesota',
'Mississippi'  =>'Mississippi',
'Missouri'  =>'Missouri',
'Montana'  =>'Montana',
'Nebraska'  =>'Nebraska',
'Nevada'  =>'Nevada',
'New Hampshire'  =>'New Hampshire',
'New Jersey'  =>'New Jersey',
'New Mexico'  =>'New Mexico',
'New York'  =>'New York',
'North Carolina'  =>'North Carolina',
'North Dakota'  =>'North Dakota',
'Ohio'  =>'Ohio',
'Oklahoma'  =>'Oklahoma',
'Oregon'  =>'Oregon',
'Pennsylvania'  =>'Pennsylvania',
'Rhode Island'  =>'Rhode Island',
'South Carolina'  =>'South Carolina',
'South Dakota'  =>'South Dakota',
'Tennessee'  =>'Tennessee',
'Texas'  =>'Texas',
'Utah'  =>'Utah',
'Virginia'  =>'Virginia',
'Washington'  =>'Washington',
'West Virginia'  =>'Virginia',
'Wisconsin'  =>'Wisconsin',
'Wyoming'  =>'Wyoming'         
            ), $default, $attributes);
        $list .= '</div>';
        return $this->output($list);
    }

}
?>