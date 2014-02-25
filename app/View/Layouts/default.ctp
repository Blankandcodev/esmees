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
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('style');

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
                      <div class="logo"><a href="#"><img src="<?php echo $this->webroot; ?>img/logo.png" alt="logo" /></a></div>
                      <div class="image1"><a href="#"><img src="<?php echo $this->webroot; ?>img/img1.png" /></a></div>
                   
                   </div>
                   <div class="rgt_sec">
                      <div class="rgt_upr">
                         <ul>
						<?php if(isset($loggeduser) && $loggeduser){ ?>
                           <li>Welcome <?php echo $loggeduser['name'] ?></li>
                           <li><a href="<?php echo $this->Html->url(array('controller'=>'users', 'action'=>'logout'),true) ?>">Logout</a></li>
						<?php }else{?>
                           <li><a href="<?php echo $this->Html->url(array('controller'=>'users', 'action'=>'register'),true) ?>">Join </a></li>
                           <li><a href="<?php echo $this->Html->url(array('controller'=>'users', 'action'=>'login'),true) ?>">Log In</a></li>
						 <?php } ?>
                         </ul>
                      </div>
                      <div class="srch_div">
						
                         <input type="text" value="Search Esmees" class="txt_box" />
                         <div class="srch_img"><a href="#"><img src="<?php echo $this->webroot; ?>img/img2.png" /></a></div>
                      
                      </div>
                   </div>
                </div>
                <div class="nav">
                   <ul>
                     <li><a href="<?php echo $this->Html->url(array('controller'=>'Products', 'action'=>'product_gallery_men'),true) ?>">Men</a></li>
                     <li><a href="<?php echo $this->Html->url(array('controller'=>'Products', 'action'=>'product_gallery_women'),true) ?>">Women</a></li>
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
   <?php // echo $this->element('sql_dump'); ?>
</body>
</Html>
