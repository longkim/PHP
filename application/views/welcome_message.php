<?php date_default_timezone_set('Australia/Melbourne');?>
<div style="clear:left;width:90%;margin:auto;">
<div style="float:left;margin:20px">
	<h1 style="clear:left">Low Stock Products</h1>
	<table border="1">
		<tr>
			<th>Product ID</th>
			<th>Product Name</th>
			<th>Product Description</th>
			<th>Product Type</th>
			<th>Quantity</th>
			<th>Status</th>
		</tr>
	<?php foreach ($low as $l){?>
		<tr>
			<td><?php echo $l->p_id; ?></td>
			<td><?php echo $l->p_name; ?></td>
			<td><?php echo $l->p_description; ?></td>
			<td><?php echo $l->p_type; ?></td>
			<td><?php echo $l->quantity; ?></td>
			<td><?php echo $l->status; ?></td>
		</tr>
	<?php }?>
	</table>
	<button style="margin-top:10px" class="exportlow">Export to CSV</button>
</div>
<div style="float:left;margin:20px">
	<h1>All Products</h1>
	<table border="1">
		<tr>
			<th>Product ID</th>
			<th>Product Name</th>
			<th>Product Description</th>
			<th>Product Type</th>
			<th>Quantity</th>
			<th>Status</th>
		</tr>
	<?php foreach ($result as $res){?>
		<tr>
			<td><?php echo $res->p_id; ?></td>
			<td><?php echo $res->p_name; ?></td>
			<td><?php echo $res->p_description; ?></td>
			<td><?php echo $res->p_type; ?></td>
			<td><?php echo $res->quantity; ?></td>
			<td><?php echo $res->status; ?></td>
		</tr>
	<?php }?>
	</table>
	<button style="margin-top:10px" class="exportall">Export to CSV</button>
</div>
</div>
</body>
</html>
<script>
$(".exportlow").bind('click', function (e) {
	var filename = "Low_Stock_Product_"+"<?php echo date('d_F_Y_H_i_s');?>";
	var data = '<?php echo json_encode($lowCSV); ?>';
    $.post('<?php echo base_url(); ?>welcome/write_csv',
    	    {filename:filename,data:data        } ,
    	    function(response){
        alert(response);
  
});
})

$(".exportall").bind('click', function (e) {
	var filename = "All_Product_"+"<?php echo date('d_F_Y_H_i_s');?>";
	var data = '<?php echo json_encode($resCSV); ?>';
    $.post('<?php echo base_url(); ?>welcome/write_csv',
    	    {filename:filename,data:data        } ,
    	    function(response){
        alert(response);
      
});
})
   
</script>
  