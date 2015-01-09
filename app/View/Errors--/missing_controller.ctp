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
 * @package       app.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<h2>File or Page Not Found (404)</h2>
<h3>Sorry, the page you were looking for doesn’t exist. <br></h3>
<p>We couldn't find that page. Would these links help you?</p>
<ul class="listing">
  <li><a href="<?php echo $this->Html->url(array('controller'=>'Pages', 'action'=>'index')); ?>">Esmees home page</a></li>
  <li><a href="<?php echo $this->Html->url(array('controller'=>'Products', 'action'=>'men')); ?>">Men</a></li>
  <li><a href="<?php echo $this->Html->url(array('controller'=>'Products', 'action'=>'women')); ?>">Women</a></li>
  <li><a href="<?php echo $this->Html->url(array('controller'=>'Looks', 'action'=>'gallery')); ?>">Trendsetters</a></li>
  <li><a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'index')); ?>">User Dashboard</a></li>
</ul>

<?php  // echo __d('cake', 'Error'); ?>: </strong>
	<?php /* printf(
		__d('cake', 'The requested address %s was not found on this server.'),
		"<strong>'{$url}'</strong>"
	); */ ?>
<?php /*
if (Configure::read('debug') > 0):
	echo $this->element('exception_stack_trace');
endif; */
?>
