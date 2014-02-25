
   <div align="center">
        <div class="container">
            <div class="header_sectn">
               
               
            
            </div>
            <div class="content_fwd">
               
                <div class="content_flwd">
					<div class="bk"><span><a href="<?php echo $this->Html->url(array('controller'=>'Users', 'action'=>'index'),true) ?>"><img src="../img/arw.png" /></a></span>Back </div>
						
					
					<div class="cntnt_fwd_main">
						<div class="lft_hd">Followed Users</div>
							 <div class="rt_head">Edit Users</div>
					</div>
				
                 
                  <div class="list4">
				  <?php if(!empty($followerLists)){ ?>
                    <ul>
					
					 <?php 
					foreach($followerLists as $followerList){
                        /*$count = 0;
                        if(!empty($IdeaContest['ContestSubmission'])){
                                $count = count($IdeaContest['ContestSubmission']);
                        }*/?>
                      <li>
                        <div class="div_pic1_fwd">
						<a href="#"><?php echo $this->Html->image('Users/small/'.$followerList['User']['image']);?></a>
						</div>
                        <div class="list_txt">
                           <div class="txt_fwd"><?php echo  $followerList['User']['name']; ?></div>
                        </div>
                      </li>
					   <?php } ?>
                    
                    </ul>
					
			      </div>
                  <div class="more1">Load More...</div>
                </div>
                
                 <?php }else{
		echo '<div class="more1">You don\'t have any followers, yet!</div>';
	    } ?>
                
                
            
            
            </div>
           
        
        <div class="clear"></div>
        </div>
   
   </div>


</body>
</html>
