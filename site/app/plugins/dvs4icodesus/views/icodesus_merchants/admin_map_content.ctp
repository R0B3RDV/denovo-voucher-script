<table>
	<thead>
		<td>
			ICodesUS Merchant
		</td>
		
		<td>
			DVS Merchant
		</td>
		
		<td>
		</td>
		
		<td>
			Action
		</td>
	</thead>
	
<?php 
	foreach($icMerchants as $icMerchant)
	{
?>
	
	<tr>
		<td>
			<?php echo $icMerchant['IcodesusMerchant']['merchant']; ?>
		</td>
		
		<td>
			<?php 
			
			if(false == $icMerchant['IcodesusMerchant']['match']){ ?>
			
				N/A
				
			<?php }else{

				echo $icMerchant['IcodesusMerchant']['match']['Merchant']['title'];
				
			}
			?>
		</td>
		
		<td>
		</td>
		
		<td>
		</td>
	</tr>
	
<?php
	} 
?>	
	
</table>

<?php
	debug($icMerchants, true); 
?>
