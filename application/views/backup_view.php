<h1 style="clear:left;text-align:center;padding-top:10px">People Health Pharmacy - Database Backup</h1>
<table border="1">
	<th>Table name</th>
	<th>Action</th>
	<?php foreach($table as $t){?>
		<tr>
			<td><?php echo $t;?></td>
			<td><button class="<?php echo $t;?>_backup" value="<?php echo $t;?>">Back up</button></td>
		</tr>
	<?php }?>
</table>
</body>
</html>

<script>
$(".p_products_backup").bind('click', function (e) {

	var $tablename = $(this).val();
    $.post('<?php echo base_url(); ?>backup/dumptable/',
    	    {tablename:$tablename      } ,
    	    function(response){
        alert(response);
      
});
})
$(".ie_user_backup").bind('click', function (e) {

	var $tablename = $(this).val();
    $.post('<?php echo base_url(); ?>backup/dumptable/',
    	    {tablename:$tablename      } ,
    	    function(response){
        alert(response);
      
});
})
$(".p_sales_backup").bind('click', function (e) {

	var $tablename = $(this).val();
    $.post('<?php echo base_url(); ?>backup/dumptable/',
    	    {tablename:$tablename      } ,
    	    function(response){
        alert(response);
      
});
})

</script>