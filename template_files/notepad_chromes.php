<?php

function chrome_clean($module, $params, $moduleClass, $moduleCSS = null)
{    
  	if(!$moduleCSS == null) $moduleCSS = "style=\"$moduleCSS\"";
	ob_start();
	?>
		<?php if ($module->showtitle != 0) : ?>
			<h2 class="modtitle"><?php echo $module->title; ?></h2>
		<?php endif; ?>              
		<?php echo $module->content; ?>    
	<?php
    return ob_get_clean();    
}

function chrome_widget($module, $params, $moduleClass, $moduleCSS = null)
{    
  	if(!$moduleCSS == null) $moduleCSS = "style=\"$moduleCSS\"";
	ob_start();
	?>  
		<div class="widget widget_text <?php echo $moduleClass; ?>">
		<?php if ($module->showtitle != 0) : ?>
			<h4 class="widgettitle <?php echo $moduleClass; ?>"><span class="hideTxt icon"></span><?php echo $module->title; ?></h4>
		<?php endif; ?> 
		<div class="textwidget">
			<?php echo $module->content; ?>  
		</div>         
		</div>  
	<?php
    return ob_get_clean();    
}