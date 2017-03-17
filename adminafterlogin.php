<?php
session_start();
?>
<html>
<head></head>
<body>
<p> Welcome <?php echo $_SESSION['user']?></p>
<?php
include_once('connection.php');
$result ="select * from userorder";
$res = mysqli_query($conn,$result);
$row =  mysqli_fetch_array($res);
$tprice[]=$row['tprice'];
$status[]=$row['status'];
 while ($row =  mysqli_fetch_array($res))
                {
                	/*$user[] = $row['user'];
                	$add[] = $row['address'];
                	$dish[] = $row['dish'];
                	$quantity[] = $row['quantity'];
                	$tprice[]=$row['tprice'];
                	$date[] = $row['time_date'];
                	$status[]=$row['status'];*/
                	echo $row['user'].'<br>';
                	echo $row['address'];
                	echo $row['dish'];
                	echo $row['quantity'];

                	//echo $row['Dish'];
                }
                echo '<br>'. "total price:". $tprice[0];
                echo '<br>'."status : ".$status[0];
?>
</body>
<form action="updatestatus.php">
<button onclick="abc ()">Completed</button>
</form>
<script type="text/javascript">
	        function abc (){

            $.ajax({
                type: 'POST',
                url: 'updatestatus.php',
                //dataType:'json', // add json datatype to get json
     
                success: function(data) {
                    alert(data);
                    

                }
            });
 }
</script>
</html>