<html>
<body>
<table border = 10 cellspacing = 5 cellpadding = 5 align = center>
<tr><th colspan = 8>Student Details</tr>
<tr>
<th>First name <th> Last Name <th>Age<th>Date Of Birth<th>Gender<th>Stream<th>Email<th>Contact Number
</tr>
<?php
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$myage = $_POST['age'];
$mydob = $_POST['dob'];
$mygender = $_POST['gender'];
$mystream = $_POST['stream'];
$myemail = $_POST['email'];
$mycontact = $_POST['cnumber'];

/*echo "<tr><th>First Name : " , $firstname, "<br></tr>";
echo "<tr><th>Last Name : " , $lastname,"<br></tr>";
echo "<tr><th>Age : " , $myage,"<br></tr>";
echo "<tr><th>Date Of Birth : " , $mydob,"<br></tr>";
echo "<tr><th>Gender : " , $mygender,"<br></tr>";
echo "<tr><th>Stream : " , $mystream,"<br></tr>";
echo "<tr><th>Email : " , $myemail, "<br></tr>";
echo "<tr><th>Contact Number : " , $mycontact,"</tr>";*/

echo "<tr><th>",$firstname,"<th>",$lastname,"<th>",$myage,"<th>",$mydob,"<th>",$mygender,"<th>",$mystream,"<th>",$myemail,"<th>",$mycontact,"</tr>";

?>
</table>
</body>
</html>
