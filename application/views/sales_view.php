<?php date_default_timezone_set('Australia/Melbourne');?>
<div style="clear:left;width:90%;margin:auto;">
<img class="pdf" src="<?php echo asset_url().'img/pdf.png';?>"/>
<div style="float:left;margin:20px">
	<h1 style="clear:left">All Sales</h1>
	<table border="1">
		<tr>
			<th>Sales ID</th>
			<th>Product ID</th>
			<th>Customer Name</th>
			<th>Gender</th>
			<th>Address</th>
			<th>Total Amount</th>
			<th>Balance</th>
			<th>Shipping Status</th>
			<th>Payment Status</th>
			<th>Date</th>
		</tr>
	<?php foreach ($result as $res){?>
		<tr>
			<td><?php echo $res->s_id; ?></td>
			<td><?php echo $res->p_id; ?></td>
			<td><?php echo $res->customer_name; ?></td>
			<td><?php echo $res->gender; ?></td>
			<td><?php echo $res->address; ?></td>
			<td><?php echo $res->amount; ?></td>
			<td><?php echo $res->balance; ?></td>
			<td><?php echo $res->shipping_status; ?></td>
			<td><?php echo $res->payment_status; ?></td>
			<td><?php echo $res->date; ?></td>
		</tr>
	<?php }?>
	</table>
	<button style="margin-top:10px" class="exportall">Export to CSV</button>
</div>

<!--Outstanding Sales-->
<div style="float:left;margin:20px">
	<h1 style="clear:left">All Outstanding Sales</h1>
	<table border="1">
		<tr>
			<th>Sales ID</th>
			<th>Product ID</th>
			<th>Customer Name</th>
			<th>Gender</th>
			<th>Address</th>
			<th>Total Amount</th>
			<th>Balance</th>
			<th>Shipping Status</th>
			<th>Payment Status</th>
			<th>Date</th>
		</tr>
	<?php foreach ($outstanding as $res){?>
		<tr>
			<td><?php echo $res->s_id; ?></td>
			<td><?php echo $res->p_id; ?></td>
			<td><?php echo $res->customer_name; ?></td>
			<td><?php echo $res->gender; ?></td>
			<td><?php echo $res->address; ?></td>
			<td><?php echo $res->amount; ?></td>
			<td><?php echo $res->balance; ?></td>
			<td><?php echo $res->shipping_status; ?></td>
			<td><?php echo $res->payment_status; ?></td>
			<td><?php echo $res->date; ?></td>
		</tr>
	<?php }?>
	</table>
	<button style="margin-top:10px" class="exportoutstanding">Export to CSV</button>
</div>

<!--Male Section -->
<div style="float:left;margin:20px">
	<h1 style="clear:left">All Male Customers Sales</h1>
	<table border="1">
		<tr>
			<th>Sales ID</th>
			<th>Product ID</th>
			<th>Customer Name</th>
			<th>Gender</th>
			<th>Address</th>
			<th>Total Amount</th>
			<th>Balance</th>
			<th>Shipping Status</th>
			<th>Payment Status</th>
			<th>Date</th>
		</tr>
	<?php foreach ($male as $m){?>
		<tr>
			<td><?php echo $m->s_id; ?></td>
			<td><?php echo $m->p_id; ?></td>
			<td><?php echo $m->customer_name; ?></td>
			<td><?php echo $m->gender; ?></td>
			<td><?php echo $m->address; ?></td>
			<td><?php echo $m->amount; ?></td>
			<td><?php echo $m->balance; ?></td>
			<td><?php echo $m->shipping_status; ?></td>
			<td><?php echo $m->payment_status; ?></td>
			<td><?php echo $m->date; ?></td>
		</tr>
	<?php }?>
	</table>
	<button style="margin-top:10px" class="exportmale">Export to CSV</button>
</div>

<!--Female Section -->
<div style="float:left;margin:20px">
	<h1 style="clear:left">All Female Customers Sales</h1>
	<table border="1">
		<tr>
			<th>Sales ID</th>
			<th>Product ID</th>
			<th>Customer Name</th>
			<th>Gender</th>
			<th>Address</th>
			<th>Total Amount</th>
			<th>Balance</th>
			<th>Shipping Status</th>
			<th>Payment Status</th>
			<th>Date</th>
		</tr>
	<?php foreach ($female as $m){?>
		<tr>
			<td><?php echo $m->s_id; ?></td>
			<td><?php echo $m->p_id; ?></td>
			<td><?php echo $m->customer_name; ?></td>
			<td><?php echo $m->gender; ?></td>
			<td><?php echo $m->address; ?></td>
			<td><?php echo $m->amount; ?></td>
			<td><?php echo $m->balance; ?></td>
			<td><?php echo $m->shipping_status; ?></td>
			<td><?php echo $m->payment_status; ?></td>
			<td><?php echo $m->date; ?></td>
		</tr>
	<?php }?>
	</table>
	<button style="margin-top:10px" class="exportfemale">Export to CSV</button>
</div>

<!--Payment Section -->
<div style="float:left;margin:20px">
	<h1 style="clear:left">All Pending Payment Sales</h1>
	<table border="1">
		<tr>
			<th>Sales ID</th>
			<th>Product ID</th>
			<th>Customer Name</th>
			<th>Gender</th>
			<th>Address</th>
			<th>Total Amount</th>
			<th>Balance</th>
			<th>Shipping Status</th>
			<th>Payment Status</th>
			<th>Date</th>
		</tr>
	<?php foreach ($payment as $m){?>
		<tr>
			<td><?php echo $m->s_id; ?></td>
			<td><?php echo $m->p_id; ?></td>
			<td><?php echo $m->customer_name; ?></td>
			<td><?php echo $m->gender; ?></td>
			<td><?php echo $m->address; ?></td>
			<td><?php echo $m->amount; ?></td>
			<td><?php echo $m->balance; ?></td>
			<td><?php echo $m->shipping_status; ?></td>
			<td><?php echo $m->payment_status; ?></td>
			<td><?php echo $m->date; ?></td>
		</tr>
	<?php }?>
	</table>
	<button style="margin-top:10px" class="exportpayment">Export to CSV</button>
</div>

<!--Shipping Section -->
<div style="float:left;margin:20px">
	<h1 style="clear:left">All Pending Shipping Sales</h1>
	<table border="1">
		<tr>
			<th>Sales ID</th>
			<th>Product ID</th>
			<th>Customer Name</th>
			<th>Gender</th>
			<th>Address</th>
			<th>Total Amount</th>
			<th>Balance</th>
			<th>Shipping Status</th>
			<th>Payment Status</th>
			<th>Date</th>
		</tr>
	<?php foreach ($shipping as $m){?>
		<tr>
			<td><?php echo $m->s_id; ?></td>
			<td><?php echo $m->p_id; ?></td>
			<td><?php echo $m->customer_name; ?></td>
			<td><?php echo $m->gender; ?></td>
			<td><?php echo $m->address; ?></td>
			<td><?php echo $m->amount; ?></td>
			<td><?php echo $m->balance; ?></td>
			<td><?php echo $m->shipping_status; ?></td>
			<td><?php echo $m->payment_status; ?></td>
			<td><?php echo $m->date; ?></td>
		</tr>
	<?php }?>
	</table>
	<button style="margin-top:10px" class="exportshipping">Export to CSV</button>
</div>
</div>
</body>
</html>
<script>
$(".exportall").bind('click', function (e) {
	var filename = "All_Sales_"+"<?php echo date('d_F_Y_H_i_s');?>";
	var data = '<?php echo json_encode($resCSV); ?>';
    $.post('<?php echo base_url(); ?>welcome/write_csv',
    	    {filename:filename,data:data        } ,
    	    function(response){
        alert(response);
      
});
})


$(".exportmale").bind('click', function (e) {
	var filename = "All_Male_Sales_"+"<?php echo date('d_F_Y_H_i_s');?>";
	var data = '<?php echo json_encode($maleCSV); ?>';
    $.post('<?php echo base_url(); ?>welcome/write_csv',
    	    {filename:filename,data:data        } ,
    	    function(response){
        alert(response);
      
});
})


$(".exportfemale").bind('click', function (e) {
	var filename = "All_Female_Sales_"+"<?php echo date('d_F_Y_H_i_s');?>";
	var data = '<?php echo json_encode($femaleCSV); ?>';
    $.post('<?php echo base_url(); ?>welcome/write_csv',
    	    {filename:filename,data:data        } ,
    	    function(response){
        alert(response);
      
});
})

$(".exportoutstanding").bind('click', function (e) {
	var filename = "All_Outstanding_Sales_"+"<?php echo date('d_F_Y_H_i_s');?>";
	var data = '<?php echo json_encode($outstandingCSV); ?>';
    $.post('<?php echo base_url(); ?>welcome/write_csv',
    	    {filename:filename,data:data        } ,
    	    function(response){
        alert(response);
      
});
})

$(".exportshipping").bind('click', function (e) {
	var filename = "All_Pending_Shipping_Sales_"+"<?php echo date('d_F_Y_H_i_s');?>";
	var data = '<?php echo json_encode($shippingCSV); ?>';
    $.post('<?php echo base_url(); ?>welcome/write_csv',
    	    {filename:filename,data:data        } ,
    	    function(response){
        alert(response);
      
});
})


$(".exportpayment").bind('click', function (e) {
	var filename = "All_Pending_Payment_Sales_"+"<?php echo date('d_F_Y_H_i_s');?>";
	var data = '<?php echo json_encode($paymentCSV); ?>';
    $.post('<?php echo base_url(); ?>welcome/write_csv',
    	    {filename:filename,data:data        } ,
    	    function(response){
        alert(response);
      
});
})


$(".pdf").bind('click', function (e) {
	
	location.href = "<?php echo base_url().'sales/analysis';?>";
});


</script>