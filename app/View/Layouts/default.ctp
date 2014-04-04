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

$cakeDescription = __d('cake_dev', 'Esmees');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
<link href='http://fonts.googleapis.com/css?family=Enriqueta' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:300,300italic' rel='stylesheet' type='text/css'>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('style');
		echo $this->Html->css('plugin.css');
		echo $this->Html->script('jquery.js');
		echo $this->Html->script('plugins.js');
		echo $this->Html->script('funcs.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

 
 
 
 
 
 
 
</head>
<body>

	<div>
        <div class="container">
            <div class="header_sectn">
                <div class="upr_sec">
                   <div class="left_sec">
                      <div class="logo"><a href="<?php echo $this->webroot; ?>"><img src="<?php echo $this->webroot; ?>img/logo.png" alt="logo" /></a></div>
                      <div class="image1"><a href="#"><img src="<?php echo $this->webroot; ?>img/img1.png" /></a></div>
                   
                   </div>
                   <div class="rgt_sec">
                      <div class="rgt_upr">
                         <ul>
						<?php if(isset($loggeduser) && $loggeduser){ ?>
                           <li>Welcome <?php echo $this->Html->link($loggeduser['nickname'], array('controller'=>'Users', 'action'=>'index')) ?></li>
                           <li><a href="<?php echo $this->Html->url(array('controller'=>'users', 'action'=>'logout'),true) ?>">Logout</a></li>
						<?php }else{?>
                           <li><a href="<?php echo $this->Html->url(array('controller'=>'users', 'action'=>'register'),true) ?>">Join </a></li>
                           <li><a href="<?php echo $this->Html->url(array('controller'=>'users', 'action'=>'login'),true) ?>">Log In</a></li>
						 <?php } ?>
                         </ul>
                      </div>
                      <div class="srch_div">
                        <?PHP echo $this->Form->Create('Search', array( 'url' => array( 'controller'=>'Products', 'action'=>'serach' ), 'type'=>'get' ) );
						echo $this->Form->input('keyword', array('placeholder'=>'Search Esmees', 'type'=>'text'));
						echo $this->Form->submit('Serach');
						echo $this->Form->end();
						?>
                      </div>
                   </div>
                </div>
                <div class="nav">
                   <ul>
                     <li><a href="<?php echo $this->Html->url(array('controller'=>'Products', 'action'=>'men'),true) ?>">Men</a></li>
                     <li><a href="<?php echo $this->Html->url(array('controller'=>'Products', 'action'=>'women'),true) ?>">Women</a></li>
					    <li>
					
						<a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'index'),true) ?>">DASHBOARD</a>
						
						 
						</li>
						
                     <li><a href="#">OFFERS</a></li>
                     <li><a href="#">HELP</a></li>
                   </ul>
                </div>
            
            </div>
            <div class="content">
				<?php echo $this->Session->flash(); ?>

				<?php echo $this->fetch('content'); ?>
			</div>
            <div class="footer_sec">
               <div class="fotr_lft">All Rights Recieved. Copyright @ Site Name Here 2012.</div>
               <div class="fotr_rgt">
                  <ul>
                    <li><a href="#">Terms & Condition</a></li>
                    <li>.<a href="#">Privacy Policy</a></li>
                    <li>.<a href="#">Contact Us</a></li>
                  </ul>
               
               </div>
            </div>
        
        <div class="clear"></div>
        </div>   
   </div>
   <?php //echo $this->element('sql_dump'); ?>
</body>
</Html>
