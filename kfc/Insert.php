<html>
<head>
<link  rel="stylesheet" type=" text/css" href="a.css">
</head>
<body background="m.jpeg" width="1%" height="1%">
<align="center">
<table  height="500px" width="600px"   >


<form method="POST" action="hello.php">

<tr>
<td colspan="2" bgcolor="reds"><font color="blue" size="9px"  > <h1>Registration</h1></font></td>
</tr>
<tr>
<td>Name</td>
<td><input type="text"  name="name" required></td>
</tr>
<tr>
<td>Address</td>
<td><input type="Textarea"  cols="60" rows="4"  name="area" required/></td>
</tr>
<tr>
<td>Phone</td>
<td><input type="text" name="number"/></td>
</tr>
<tr>
<td>email</td>
<td><input type="text" name="email"></td>

</tr>
<tr>
<td>Gender</td>
<td>Male<input type="radio" name="gender">
Female<input type="radio" name="gender"></td>
</tr>
<tr>
<td>DOB</td>
<td><input type="date" name="db"</td>
</tr>
<tr>
<td>Qualification</td>
<td>
<select name="qualification">
<option value="1"> High_School </option>
<option value="2"> Intermediate </option>
<option value="3"> Graduate </option>
<option value="4"> Post_Graduate </option>
</select></td>
</tr>

<tr>
<td>Subject</td>
<td><input type="text" name="subject"></td>

</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass"></td>

</tr>
<tr>
<td> Confirm Password</td>
<td><input type="password" name="conpass"></td>

</tr>
<tr>
<td>Pincode</td>
<td><input type="number" name="pin"></td>

</tr>
<tr>
<td></td>
<td><input type="submit" value="Registration"/></td>
</tr>
</align>

</form>


</table>

</body></html>