<?php 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );   

  echo $splex->joomla->jHead();      
  echo $splex->loader->load_css(array('joomla', 'template', 'custom'));  
?>
</head>
<body <?php if(!module('right')): ?> class ="fullwidth"<?php endif;?>>
  <div id="header">  
	    <h1 id="logo">
	    	<a href="<?php echo JURI::base(); ?>"><?php echo $splex->joomla->siteName; ?></a> 
	    </h1>     
		<p class="description"><?php echo $splex->joomla->MetaDesc; ?></p>    
		<?php echo loadModule($splex->tconfig->headerModule)?>   
  		<?php $splex->jmenu->createMenu('mainmenu', 'Main Menu', 'dropdown', null, 'nav'); ?> 
		<?php echo loadModule($splex->tconfig->searchModule); ?>   
	</div>      
	<div id="wrapper">