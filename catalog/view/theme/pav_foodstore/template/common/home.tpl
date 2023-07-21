<?php 
/******************************************************
 * @package Pav Opencart Theme Framework for Opencart 1.5.x
 * @version 1.1
 * @author http://www.pavothemes.com
 * @copyright	Copyright (C) Augus 2013 PavoThemes.com <@emai:pavothemes@gmail.com>.All rights reserved.
 * @license		GNU General Public License version 2
*******************************************************/
require( DIR_TEMPLATE.$this->config->get('config_template')."/template/common/config.tpl" ); 
?>
<?php echo $header; ?>
		
<section class="col-sm-12 col-xs-12">         
	<div id="content">
	<?php echo $content_top; ?>
	<h1 style="display: none;"><?php echo $heading_title; ?></h1>
	<?php echo $content_bottom; ?>
	</div>
</section>
	
<?php echo $footer; ?>