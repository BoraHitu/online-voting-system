<?php
if(!isset($_SESSION)) 
{ 

session_start();

}

include "auth.php";
include "header_voter.php";

?>

<center><h3> Voting Result </h3></center>

<?php
include "connection.php";

$member = mysqli_query($con, 'SELECT * FROM voters' );

if (mysqli_num_rows($member)== 0 )
{
	
echo '<font color="red">No results found</font>';
}

else 
{
	
echo '<center><table><tr bgcolor="#FF6600">

<td width="30px">NAME</td>		

<td width="100px">LASTNAME</td>
<td width="100px">STATUS</td>

<td width="30px">VOTED</td>
</tr>';
while($mb=mysqli_fetch_object($member))
		
{	
		
$id=$mb->firstname;

$name=$mb->lastname;
	
$about=$mb->status;
			
$vote=$mb->voted;
		
echo '<tr bgcolor="#BBBEFF">';
	
echo '<td>'.$id.'</td>';		
	
echo '<td>'.$name.'</td>';
	
echo '<td>'.$about.'</td>';
	
echo '<td>'.$vote.'</td>';
	
echo "</tr>";
		
}

		echo'</table></center>';
	}
?>