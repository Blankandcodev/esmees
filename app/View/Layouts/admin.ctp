
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
	<?php echo $this->Html->meta('icon'); ?>
	
	<?php echo $this->Html->css('admin/layout.css');
		echo $this->Html->css('admin/plugin.css');
		echo $this->Html->script('admin/jquery.js');
		echo $this->Html->script('admin/plugins.js');
		echo $this->Html->script('admin/funcs.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<header class="cf" id="header">
<div class="logo">
	<a href="<?php echo $this->Html->url('/'); ?>"><img src="<?php echo $this->webroot; ?>img/admin/esmees.jpg" /></a>
</div>
<nav id="nav">
	<ul class="menu">
		<li><a href="#">Catalog</a>
			<ul>
				<li><?php echo $this->Html->link('Merchants', array('controller' => 'Admin', 'action' => 'view_adversiters')); ?>
					<ul>
						<li class=""><?php echo $this->Html->link('View Marchants', array('controller' => 'Admin', 'action' => 'view_adversiters')); ?></li>
						<li class=""><?php echo $this->Html->link('Add Marchants', array('controller' => 'Admin', 'action' => 'add_adversiters')); ?></li>
					</ul>
				</li>
				<li><?php echo $this->Html->link('Categories', array('controller' => 'Admin', 'action' => 'view_category')); ?>
					<ul>
						<li class=""><?php echo $this->Html->link('View Category', array('controller' => 'Admin', 'action' => 'view_category')); ?></li>
						<li class=""><?php echo $this->Html->link('Add Category', array('controller' => 'Admin', 'action' => 'add_category')); ?></li>
					</ul>
				</li>
				<li><?php echo $this->Html->link('Products', array('controller' => 'Admin', 'action' => 'view_products')); ?>
					<ul>
						<li class=""><?php echo $this->Html->link('View Products', array('controller' => 'Admin', 'action' => 'view_products')); ?></li>
						<li class=""><?php echo $this->Html->link('Add Products', array('controller' => 'Admin', 'action' => 'add_products')); ?></li>
					</ul>
				</li>
			</ul>
		</li>
		<li>
			<a href="#">CMS</a>
			<ul>
				<li><?php echo $this->Html->link('Pages', array('controller' => 'Admin', 'action' => 'pages')); ?>
					<ul>
						<li class=""><?php echo $this->Html->link('View Pages', array('controller' => 'Admin', 'action' => 'pages')); ?></li>
						<li class=""><?php echo $this->Html->link('Add Page', array('controller' => 'Admin', 'action' => 'add_page')); ?></li>
					</ul>
				</li>
				<li><?php echo $this->Html->link('Banners', array('controller' => 'Admin', 'action' => 'banners')); ?>
					<ul>
						<li class=""><?php echo $this->Html->link('All Banners', array('controller' => 'Admin', 'action' => 'banners')); ?></li>
						<li class=""><?php echo $this->Html->link('Add Banner', array('controller' => 'Admin', 'action' => 'add_banners')); ?></li>
					</ul>
				</li>
			</ul>
		</li>
		<li><?php echo $this->Html->link('Users', array('controller' => 'Admin', 'action' => 'view_user')); ?>
		
			
		
		</li>
		
		
	
				
		
		
		
		
		
		
		
		
		
		
		<li><?php echo $this->Html->link('Commissions', array('controller' => 'Admin', 'action' => 'member_commission')); ?>
			<ul>
				<li class=""><?php echo $this->Html->link('Withdraw Request', array('controller' => 'Admin', 'action' => 'widthdraw_request')); ?></li>
				<li class=""><?php echo $this->Html->link('Distributed Commission', array('controller' => 'Admin', 'action' => 'distributed_commission')); ?></li>
			</ul>
		</li>
		
		
		
		
		
		
		
		
		
		
		</li>
		<li>
		
		<?php echo $this->Html->link('Reports', array('controller' => 'Admin', 'action' => 'download_reports'), array('class'=>'')); ?>
			
		
		</li>
		
		<li><a href="#">Admin Account &nbsp;</a>
		<ul><li>
		<?php echo $this->Html->link('Cron Jobs', array('controller' => 'Admin', 'action' => 'cron_jobs'), array('class'=>'')); ?>
			
		
		</li>
		
			<li>
		
		<?php echo $this->Html->link('Account Setting', array('controller' => 'Admin', 'action' => 'account_setting'), array('class'=>'')); ?>
			
		
		</li>
		<li><?php echo $this->Html->link('Logout', array('controller' => 'Admin', 'action' => 'logout'), array('class'=>'')); ?></li>
		</ul></li>
	</ul>
</nav>
</header>
<?php echo $this->Session->flash(); ?>
<section class="wrapper">
	<?php echo $this->fetch('content'); ?>
</section>
<footer id="footer" class="cf">

</footer>
</body>
</html>
