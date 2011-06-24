<?php 

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// ------------------------------------------------------------------------

/**
 * Core Config. 
 *
 * @note Don't add any new variables to this file. The only ones available are the ones below.    
 *
 * Usage:
 * {{{ 
 *     Everything is instantiated into to $splex->coreConfig. 
 *     To get all the properties do something like:
 *     var_dump($splex->coreConfig);
 * }}}
 *
 * @package     simplex
 * @subpackage  config
 * @version     1.0 beta 
 * @author      Ken Erickson AKA Bookworm http://www.bookwormproductions.net
 * @copyright   Copyright 2009 - 2010 Design BreakDown, LLC.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2       
 * please visit the Simplex site http://www.simplex.designbreakdown.com  for support. 
 * Do not e-mail (or god forbid IM or call) me directly.
 */        
class Simplex_Config
{   
  /**
   * Just Here Because Empty Constructors Prevent Others From Playing God 
   *  
   * @return void
   */             
  public function __construct() { }   
  
  //____ Configuration Optsion  
  
  /**
   * @var bool Wraps a module output with details about that module. 
   *  classname, suffixes etc. 
   *
   *  @note it only does this for Super Admins when they are logged in.
   **/
  var $moduleTools = true;           
 
  //____ Media Configuration Options    
  /**
   * Note: For the media class to work you must call $splex->media->initMediaGZIP(); in your template and after everything else.
   */
  
  /**
   * @var bool Enable or disable jquery. 
   * Only do this if your sure its the cause of conflicts or if you're sure you don't need jquery.
   **/
  var $jquery = false;
    
  /**
   * @var bool GZIP Compress CSS
   **/
  var $gzipCSS = false;      
  
  /**
   * @var bool GZIP CompressJS
   **/
  var $gzipJS = false;
  
  /**
   * @var bool Remove Duplicate CSS and JS.
   * Resource hog not suggested.
   **/
  var $removeDuplicatesMedia = false;
  
  /**
   * @var Resolve conflicts between JS libraries by forcibly moving mootools to top of head, and removing duplicate jquerys.
   * Resource hog not suggested.
   **/
  var $mediaConflictResolve = false;     
  
  /**
   * @var int How long to cache compressed files.
   **/ 
  var $mediaCacheTime = 60;        
  
  /**
   * @var array Array of files to ignore.
   * Paths should be relative to Joomla install.
   **/ 
  var $ignoredFiles = array();
                           
  //____ Stuff To Load  

  /**
   * @var array Array of enabled libraries    
   * The key is the name of the class and the value is the name of the file. e.g 'Hooks' => 'hooks.class'
   **/
  var $enabledLibraries = array('joomla', 'modules', 'browser',  'jmenu');

  /**
   * @var array Array of enabled helpers
   **/
  var $enabledHelpers = array('array', 'classes', 'file', 'joomla', 'string', 'markup', 'form'); 

  /**
   * @var array Array of custom template files to include
   **/
  var $customTemplateFiles = array('notepad_chromes');     
  
  /**
   * @var bool Enable and Disable Muwt.
   * @note Muwt stands for Markup Utilities Widgets and Templates. In the context of Simplex its used for the frontend
   * administration features.
   **/
  var $muwtEnabled     = false;   
 
  /**
   * @var string The storage mechanism to used for loading, storing and saving parameters. 
   *  options; yaml. Coming soon xml, sql (i.e joomla DB), mongodb.
   **/
  var $jpogStorageMech = 'yaml'; 
}