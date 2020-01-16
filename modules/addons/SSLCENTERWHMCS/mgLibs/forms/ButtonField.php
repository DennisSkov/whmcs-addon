<?php

namespace MGModule\SSLCENTERWHMCS\mgLibs\forms;
use MGModule\SSLCENTERWHMCS as main;

/**
 * Button Form Field
 *
 * @author Michal Czech <michael@modulesgarden.com>
 */
class ButtonField extends AbstractField{    
    public $icon;
    public $color   = 'success';
    public $type    = 'button';
    public $enableContent = true;
    public $textLabel = false;
}