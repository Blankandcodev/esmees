
 <div align="center">
        <div class="container">
         
            <div class="content">
                <div class="content_div1">
                    <div class="div_lft">
                       <div class="div_txt">
                          <div class="titl">Shop by Hot Products</div>
                          <div class="txt1">Lorem Ipsum Standard text Portion for
Dummy Text Area Lorem Ipsum<br />
Standard text Portion<br />
for Dummy Text.</div>
                       
                       </div>
                       <div class="div_btn">
                          <input type="button" value="Buy Now!" class="btnn1" />
                       </div>
                    
                    </div>
                    <div class="div_rgt">
                       <div class="div_txt">
                          <div class="titl">Shop by Member Looks</div>
                          <div class="txt1">Lorem Ipsum Standard text Portion for
Dummy Text Area Lorem Ipsum<br />
Standard text Portion<br />
for Dummy Text.</div>
                       
                       </div>
                       <div class="div_btn">
                          <input type="button" value="Buy Now!" class="btnn1" />
                       </div>
                    
                    </div>
                
                </div>
                <div class="banr"></div>
                
                <div class="content_div2">
                  <div class="div_head">
                     <div class="txt_lft">#NewOnThe<span class="span2">Web</span></div>
                     <div class="txt_rgt"><a href="#">Men</a></div>
                  </div>
				  
                  <div class="list2">
				  
                    <ul>
				  <?php foreach ($products as $product): ?>
                      <li>
						
                        <div class="div_pic">
						
						
						
						
						
<?php echo $this->Html->link($this->Html->image($product['Product']['image_url'], array( 'alt' => 'Clear list')), array(
                                                    'controller' => 'Products',
                                                    'action' => 'product_details',
                                                    $product['Product']['id']
                                               ), array(
                                                    'escape' => false
                                                   
                                               )); ?>
						
						
						</div>
                        <div class="list_txt">
                           <div class="txt3"><?php echo  $product['Product']['name']; ?></div>
                           <div class="txtt3">$<?php echo  $product['Product']['price']; ?></div>
						
                        </div>
							
                      </li>
				  <?php endforeach; ?>
                     </ul>
                   
                  </div>
                </div>
                <div class="add_sec">Space for ADS</div>
            
            
            </div>
            
        
        <div class="clear"></div>
        </div>
   
   </div>
   
   <script>
    jQuery("#performAjaxLink").click(
            function()
            {                
                jQuery.ajax({
                    type:'POST',
                    async: true,
                    cache: false,
                    url: '<?php echo Router::Url(array('controller' => 'Products','admin' => FALSE, 'action' => 'helloAjax'), TRUE); ?>',
                    success: function(response) {
                        jQuery('#resultField').val(response);
                    },
                    data:jQuery('form').serialize()
                });
                return false;
            }
    );
</script>
  