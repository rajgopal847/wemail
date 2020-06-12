<br><style>.button {  border-radius: 4px;  background-color: #660066;  border: none;  color: #FFFFFF;  text-align: center;  font-size: 18px;  padding: 10px;  width: 100px;  transition: all 0.5s;  cursor: pointer;  margin: 5px;}.button {  cursor: pointer;  display: inline-block;  position: relative;  transition: 0.5s;}.button :after {  content: '\00bb';  position: absolute;  opacity: 0;  top: 0;  right: -20px;  transition: 0.5s;}.button:hover  {  padding-right: 25px;}.button:hover  {	background: #0000ff;color: #ffffff;   opacity: 1;  right: 0;}</style>
<?php
include_once('connection.php');

$id=$_SESSION['sid'];


$sql="SELECT * FROM trash where rec_id='$id'";
$dd=mysqli_query($con,$sql);

echo "<div>";

	echo "<table class='table'>";
	echo "<tr><th scope='col'>Check </th><th scope='col'>Sender </th><th scope='col'>Subject </th><th scope='col'>Date</th></tr>";
while(list($mid,$rid,$sid,$s,$m,$d)=mysqli_fetch_array($dd))
{
	echo "<tr>";
	echo "<form action='delete_msg_trash.php' method='post'>";
	echo "<td><input type='checkbox' name='ch[]' onclick = 'getcount()' value='$mid'/></td>";
	echo "<td>".$sid."</td>";
	echo "<td><a href='HomePage.php?coninb=$mid'>".$s."</a></td>";
	echo "<td>".$d."</td>";
	echo "</tr>";	
	}
	echo "</table>";
	


?>
<center><input type='submit' id="button" style="display: none;" class="button" value='Delete' name='delete'/></center>
</div></form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script type="text/javascript">
	function getcount () {

    var $checkboxes = $('input[type="checkbox"]');
        
        var countCheckedCheckboxes = $checkboxes.filter(':checked').length;
        // $('#count-checked-checkboxes').text(countCheckedCheckboxes);
       if(countCheckedCheckboxes > 0)
       {
         $('#button').show();
       }
       else
       {
       	$('#button').hide();
       }

}
</script>