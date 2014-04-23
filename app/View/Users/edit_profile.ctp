<div class="page-container">
	<div class="title">
		<h1>My Dashboard</h1>
	</div>
	<div class="colset col2 cf top-part">
		<div class="left">
			<div class="nav-box">
				<ul class="left-nav">
					<li> <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'portfolio'),true) ?>">PORTFOLIO</a></li>
					<li> <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'profile', $userProfile['id']),true) ?>">MY PROFILE</a></li>
					
					<li><a href="#">MY OFFER</a></li>
					<li> <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'followed_user'),true) ?>">FOLLOWED USERS</a></li>
					<li> <a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'commission'),true) ?>">COMMISSION</a></li>
				</ul>
			</div>
		</div>
		<div class="main">
			<div class="edit-profile cf">	
					<h2 class="sub-title bordered">Edit Profile Information</h2>			
				<?php echo $this->Form->create('User', array('type'=>'file', 'class'=>'hform'));?>
					<fieldset>
						<?php echo $this->Form->input('nickname',array('label'=>'Aka', 'type'=>'text', 'required' )); ?>
						<?php echo $this->Form->input('name',array('label'=>'First Name', 'type'=>'text', 'required')); ?>
						<?php echo $this->Form->input('middle_name',array('label'=>' Middle Name', 'type'=>'text')); ?>
						<?php echo $this->Form->input('last_name',array('label'=>' Last Name', 'type'=>'text', 'required')); ?>
						<?php echo $this->Form->input('dob',array('label'=>' Date Of Birth(dd/mm/yyyy)', 'type'=>'text', 'required')); ?>
						<?php echo $this->Form->input('username', array('label'=>' Email Address', 'type'=>'text', 'required')); ?>
						<?php echo $this->Form->input('address',array('label'=>'Address Line 1', 'type'=>'text' )); ?>
						<?php echo $this->Form->input('address1',array('label'=>'Address Line 2', 'type'=>'text')); ?>
						
						<?php echo $this->Form->input('city',array('label'=>'City', 'type'=>'text')); ?>
						<?php echo $this->Form->input('state',array('label'=>'State', 'type'=>'text')); ?>
						<?php echo $this->Form->input('zip', array('label'=>'Zip Code', 'type'=>'text')); ?>
						<?php 	echo $this->Country->select('country', array('label'=>'Selct your Country')); ?></li>
						<div class="profile-image input">
							<?php if($userProfile['image']!=NULL){
								$image='Users/home/'.$userProfile['image'];
								}else{
									$image="Profile.png";
								}
						echo $this->Html->image($image, array('class'=>'mainimg', 'style'=>'width:100px; border:1px solid #999;')); ?><br/>
							<?php echo $this->Form->file('image',array('label'=>'Profile Image', 'type'=>'text')); ?>
						</div>
						
						
						
						<?php echo $this->Form->submit('Update', array('class'=>'button primary')); ?>
					</fieldset>
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
</div>