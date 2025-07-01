<?php 
session_start();
include 'dbh.inc.php';
echo"pppp";
/*
$sql='select m.mcode,m.mname,m.mtitle,c.cname from member as m , committee as c,consist_of as f where c.ccode=f.ccode;';
$result= mysqli_query($conn,$sql);
if(mysqli_num_rows($result) ===0)
echo "done";

while($row =$result->fetch_assoc())
{
echo" <tr>
<td>".$row['mcode']."</td>
<td>..</td>
<td>..</td>
<td>..</td>
</tr>";
}
/*