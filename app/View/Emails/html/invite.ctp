
	
<html>
<body style="background:#ccc; margin:0; padding:0;">
<?php 
    $homeurl = 'http://www.esmees.blankandco.com';
    $url = $homeurl.'/Users/portfolio/';
	
	
?>

<div style="background:#cccccc; text-align:center; color:#333; font-family:Arial, Helvetica, sans-serif; font-size:12px; padding:50px;">
<center>
<table cellpadding="0" cellspacing="0" width="600" style="background:#fff; margin:0 auto; text-align:left; width:600px;">
<tr>
	<td style="padding:25px 20px; text-align:left; border-bottom:1px solid solid #000000; background:#000000">
		<img src="<?php echo $homeurl;?>/img/logo.png" height="51" width="259">
	</td>
</tr>
<tr>
	<td style="padding:25px; text-align:left;">
		<div style="min-height:300px; text-align:left;">
		
		<!-- ------------ CONTENT STARTS HERE ------- -->
			<h4 style="font-size:14px; font-family:Arial, Helvetica, sans-serif; margin:0 0 20px;">Purchase Order</h4>
			<p style="font-size:12px; font-family:Arial, Helvetica; line-height:18px; margin:0 0 15px;">Hello,<br>
			
            <p style="font-size:12px; font-family:Arial, Helvetica; line-height:18px; margin:0 0 15px;"></p>
			
		
                        <table width="100%" cellspacing="0" cellpadding="10" border="0" bgcolor="#FFFFFF" style="border: 1px  solid  #E0E0E0;">
                        	
                                <tr>
                                	<td>
                    					<table width="100%" cellspacing="0" cellpadding="0" border="0">
                                        	<thead>
                                            	<tr>
                                                	<th width="325" bgcolor="#EAEAEA" align="left" style="font-size: 13px; padding: 5px  9px  6px  9px; line-height: 1em;">User Information:</th>
                                                 	<th width="10"></th>
                                                 
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<tr>
                                                	<td valign="top" style="font-size: 12px; padding: 7px  9px  9px  9px; border-left: 1px  solid  #EAEAEA; border-bottom: 1px  solid  #EAEAEA; border-right: 1px  solid  #EAEAEA;">
                                                       <?php echo $data['name'];?> <?php echo $data['last_name'];?><br>
                                                       <?php echo $data['address1'];?><br>
                                                       <?php echo $data['city'];?><br>
                                                       <?php echo $data['state'];?><br>
                                                       <?php echo $data['country'];?><br>
                                                       
                                                    
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                        <table width="100%" cellspacing="0" cellpadding="0" border="0" style="border: 1px  solid  #EAEAEA;">
                                        	<thead>
                                            	<tr>
                                                	<th bgcolor="#EAEAEA" align="left" style="font-size: 13px; padding: 3px  9px;">Order No</th>
													<th bgcolor="#EAEAEA" align="right" style="font-size: 13px; padding: 3px  9px;">Order Date</th>
                                                    <th bgcolor="#EAEAEA" align="left" style="font-size: 13px; padding: 3px  9px;">Product SKU</th>
                                                
                                                    <th bgcolor="#EAEAEA" align="center" style="font-size: 13px; padding: 3px  9px;">Qty</th>
												    <th bgcolor="#EAEAEA" align="center" style="font-size: 13px; padding: 3px  9px;">Unit Price($)</th>
                                                    
                                                </tr>
                                            </thead>
											  <tbody>

											  <tr>
                                            
                                           <td valign="top" align="left" style="font-size: 11px; padding: 3px  9px; border-bottom: 1px  dotted  #CCCCCC;"><b style="font-size: 11px;" ><br> <?php echo $commi['order_id'];?></b></td>
										   
										      <td valign="top" align="left" style="font-size: 11px; padding: 3px  9px; border-bottom: 1px  dotted  #CCCCCC;"><b style="font-size: 11px;"><?php echo $commi['transaction_date'];?></b></td>
											  
										    <td valign="top" align="left" style="font-size: 11px; padding: 3px  9px; border-bottom: 1px  dotted  #CCCCCC;"><b style="font-size: 11px;"> <?php echo $commi['sku_number'];?></b></td>
											
											
											 
											  <td valign="top" align="left" style="font-size: 11px; padding: 3px  9px; border-bottom: 1px  dotted  #CCCCCC;"><b style="font-size: 11px;"><?php echo $commi['quantity'];?></b></td>
											  
											   <td valign="top" align="left" style="font-size: 11px; padding: 3px  9px; border-bottom: 1px  dotted  #CCCCCC;"><b style="font-size: 11px;"><?php echo $commi['sales'];?></b></td>
											  
											
                                                
                                              </tr>	
                                              
                                            </tbody>  
                                        </table>
                                    </td>
                                </tr>
                               
                                	<tr>
										<td style="padding:25px; border-top:1px solid #000000; text-align:left; #000000; background:#000000">
											
				<p style="margin:0 0 15px;">
	<a style="color:#05f; font-family: Arial,Helvetica,sans-serif;font-size: 22px;font-weight:normal;font-style:italic;text-align: left;" href="<?php echo $url; ?>">Upload Looks Image</a></p>
	
											
										</td>

                                </tr>
                            </tbody>
                        </table>
              
			

			
			
		<!-- ------------ CONTENT ENDS HERE ------- -->
		
		</div>
	</td>
</tr>
<tr>
	<td style="padding:25px; border-top:1px solid #ccc; text-align:left;">
		
	</td>
</tr>

</table>
</center>
</div>
</body>
</html>