<?php
/**
* Tab Display Helper
* Manages display of simple tabs based upon JQuery UI tabs
* @author  Paul Earley
* @website http://www.earleyconsultancy.com
* @version 1.0.0
*/

class TabDisplayHelper extends AppHelper {
    var $helpers = array('Html', 'Javascript');

    function beforeRender() {
        $view = ClassRegistry::getObject('view');
        if (is_object($view)) {
            $view->addScript($this->Javascript->link('jquery.tabs.pack'));
            $view->addScript($this->Javascript->link('tab_enabler'));
            $view->addScript($this->Html->css('jquery.tabs'));
        }
    }

}
?>
