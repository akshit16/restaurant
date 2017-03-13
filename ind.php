<?php
include_once("Connection.php");
$sql="select id,Dish,Price from menu where Category='Indian'";
													$res = mysqli_query($conn,$sql);
													$count = 1;
													while ($row =  mysqli_fetch_array($res) ){
														echo '<tr><td>';
														echo $row['Dish'];
														echo '</td><td>';
														echo $row['Price'];
														echo '</td><td>';
														echo "<div class='addp'><span>";
														 echo'<button type="button"  class="minus"  name = "mi'.$count.'" id = "'.$row['id'].'">-</button>';
													    echo  '<span class="figure" id = "fi'. $count.'">0</span>';
														echo '<input type="hidden" name="figvalue" value="0" class="figvalue">';
														echo '<button type="button" class="plus"  name = "pi'.$count.'" >+</button>';
														echo '</span></div>';
														echo "</td></tr>";
														$count++;
														}
														?>