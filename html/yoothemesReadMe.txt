These over-rides are originally by yoothemes.
http://www.yootheme.com/member-area/downloads/item/templates-15/template-overrides-15

We include them with the simplex example files so you have a good starting point for your over-rides. Yootheme over-rides are entirely tableless and much better than the default ones.

Important Notes:

When installing the template overrides do not overwrite any existing files of your current template.
If some of the files already exist your template is already using overrides.
If that is the case you need some serious Joomla, PHP, HTML and CSS skills to compare these files and merge them.
Make a copy of your current template before installing the YOOtheme template overrides.
Only use them on a live site after thorough testing.

How to install the YOOtheme template overrides for Jooma 1.5


1. Copy css/joomla.css and css/joomla-ie6.css to the CSS folder of your template.

2. Copy the html folder to your template.

3. Make sure your template loads the joomla.css file. For example: Edit the index.php file of your template and add the following line to its header. It is important you put it after(!) all other CSS files so that it loads last.  

It is probably preferable to do a import in your templates main css file, i.e adding @import 'joomla.css'; to the top of css/template.css. But you can also add it using the simplex css loader: 

$splex->loader->load_css('joomla.css');

4. Load the joomla-i6.css file only for IE6.     

Use

<!--[if lte IE 6]>
  $splex->loader->load_css('joomla-ie6.css');
<![endif]-->  

Or if you have the Simplex browser class loaded(check your simplex config file, splex_config.php) in your template you can use;
<?php if($splex->browser->isIE6()): ?>
  $splex->loader->load_css('joomla-ie6.css');
<?php endif; ?> 


Done!


