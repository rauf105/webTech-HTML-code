<!DOCTYPE html>
<html>
<head>
    <title>Submitted Information</title>
</head>
<body>

<h2>Registration Details</h2>

<table border="1" cellpadding="8">
<tr><th>Field</th><th>Value</th></tr>

<tr><td>First Name</td><td><?php echo $_POST['fname']; ?></td></tr>
<tr><td>Last Name</td><td><?php echo $_POST['lname']; ?></td></tr>
<tr><td>Gender</td><td><?php echo $_POST['gender']; ?></td></tr>
<tr><td>Father's Name</td><td><?php echo $_POST['father']; ?></td></tr>
<tr><td>Mother's Name</td><td><?php echo $_POST['mother']; ?></td></tr>
<tr><td>Blood Group</td><td><?php echo $_POST['blood']; ?></td></tr>
<tr><td>Religion</td><td><?php echo $_POST['religion']; ?></td></tr>

<tr><td>Email</td><td><?php echo $_POST['email']; ?></td></tr>
<tr><td>Phone</td><td><?php echo $_POST['phone']; ?></td></tr>
<tr><td>Website</td><td><?php echo $_POST['website']; ?></td></tr>
<tr><td>Country</td><td><?php echo $_POST['country']; ?></td></tr>
<tr><td>City</td><td><?php echo $_POST['city']; ?></td></tr>
<tr><td>Address</td><td><?php echo $_POST['address']; ?></td></tr>
<tr><td>Post Code</td><td><?php echo $_POST['postcode']; ?></td></tr>

<tr><td>Username</td><td><?php echo $_POST['username']; ?></td></tr>

</table>

</body>
</html>
