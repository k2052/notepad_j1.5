<?php

class Notepad_Config
{  
  function __construct()
  {
    $this->headerModule    = array('name' => 'header',   'chrome' => 'clean',  'inner'  => false, 'raw' => true);
    $this->searchModule    = array('name' => 'search',   'chrome' => 'clean',  'inner'  => false, 'raw' => true);  
    $this->copyrightModule = array('name' => 'copright', 'chrome' => 'clean',  'inner'  => false, 'raw' => true);  
    $this->creditsModule   = array('name' => 'credits',  'chrome' => 'clean',  'inner'  => false, 'raw' => true);  
    $this->rightModule     = array('name' => 'right',    'chrome' => 'widget', 'inner'  => true, 'innerclass' => 'widgets');   	
  }
}