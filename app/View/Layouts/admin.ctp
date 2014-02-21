
<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Esmees'); ?>

			

<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
    <!--[if lt IE 9]>
	<?php echo $this->Html->css('admin/ie.css'); ?>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php echo $this->Html->meta('icon'); ?>
	
	<?php echo $this->Html->css('admin/layout.css');
		echo $this->Html->script('admin/jquery-1.5.2.min.js');
		echo $this->Html->script('admin/hideshow.js');
		echo $this->Html->script('admin/jquery.tablesorter.min.js');
		echo $this->Html->script('admin/jquery.equalHeight.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script type="text/javascript">
		$(document).ready(function() 
			{ 
			  $(".tablesorter").tablesorter(); 
		 } 
		);
		$(document).ready(function() {
	
		//When page loads...
		$(".tab_content").hide(); //Hide all content
		$("ul.tabs li:first").addClass("active").show(); //Activate first tab
		$(".tab_content:first").show(); //Show first tab content
	
		//On Click Event
		$("ul.tabs li").click(function() {
	
			$("ul.tabs li").removeClass("active"); //Remove any "active" class
			$(this).addClass("active"); //Add "active" class to selected tab
			$(".tab_content").hide(); //Hide all tab content
	
			var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
			$(activeTab).fadeIn(); //Fade in the active ID content
			return false;
		});
	
	});
		</script>
		<script type="text/javascript">
		$(function(){
			$('.column').equalHeight();
		});
	</script>
</head>
<body>
	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index.html">Website Admin</a></h1>
			<div class="btn_view_site right">
				<?php echo $this->Html->link('Visit Site', array('controller' => 'Pages', 'action' => 'index'), array('class'=>'left', 'target'=>'_blank')); ?>
				<?php echo $this->Html->link('Logout', array('controller' => 'Admin', 'action' => 'logout'), array('class'=>'left')); ?>
			</div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>Welcome Admin</p>
           
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
        <h3>Affiliate</h3>
		
		
		<ul class="toggle">
			
			
			<li class="icn_edit_article"><?php echo $this->Html->link('Add Marchants', array('controller' => 'Admin', 'action' => 'add_adversiters')); ?></li>
			
			<li class="icn_categories"><?php echo $this->Html->link('View Marchants', array('controller' => 'Admin', 'action' => 'view_adversiters')); ?></li>
			
			
			
	
		<h3>Category</h3>
		<ul class="toggle">
			<li class="icn_new_article"><?php echo $this->Html->link('Add Category', array('controller' => 'Admin', 'action' => 'add_subcategory')); ?></li>
			
			<li class="icn_new_article"><?php echo $this->Html->link('View Category', array('controller' => 'Admin', 'action' => 'view_category')); ?></li>
		</ul>
		<h3>Product</h3>
		<ul class="toggle">
			<li class="icn_new_article"><?php echo $this->Html->link('Add Product-CJ', array('controller' => 'Admin', 'action' => 'add_cjproduct')); ?></li>
			<li class="icn_new_article"><?php echo $this->Html->link('Add Product-LS', array('controller' => 'Admin', 'action' => 'add_linkshareproduct')); ?> 
			<li class="icn_new_article"><?php echo $this->Html->link('View Product', array('controller' => 'Admin', 'action' => 'view_productcj')); ?></li>
		</ul>
		
	
		
		<h3>Registered User</h3>
		<ul class="toggle">
			<li class="icn_new_article"><?php echo $this->Html->link('View all User', array('controller' => 'Admin', 'action' => 'view_user')); ?> </li>
			
			<li class="icn_new_article"><?php echo $this->Html->link('View all Looks', array('controller' => 'Admin', 'action' => 'view_looksimage')); ?> </li>
			
		
		</ul>
		
	</aside>
	
	<section id="main" class="column">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
		<?php // echo $this->element('sql_dump'); ?>
	</section>
</body>
</html>
