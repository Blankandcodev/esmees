
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
	</ul>
</nav>
</header>
<?php echo $this->Session->flash(); ?>

<section class="wrapper">
	<?php echo $this->fetch('content'); ?>
</section>
<footer id="footer" class="cf">
	<div class="credits"><a href="http://blankandco.com">Built by <span>Blank & Co.</span></a></div>
</footer>
</body>
</html>
