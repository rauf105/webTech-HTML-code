<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>

    <style>
        .container {
            display: flex;
            gap: 20px;
        }

        fieldset {
            width: 33%;
        }

        label {
            display: inline-block;
            width: 120px;
        }
    </style>
</head>
<body>

<h2>Registration</h2>

<form action="show.php" method="post">

<div class="container">



<fieldset>
<legend>General Information</legend>

<label>First Name:</label>
<input type="text" name="fname"><br><br>

<label>Last Name:</label>
<input type="text" name="lname"><br><br>

<label>Gender:</label>
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<br><br>

<label>Father's Name:</label>
<input type="text" name="father"><br><br>

<label>Mother's Name:</label>
<input type="text" name="mother"><br><br>

<label>Blood Group:</label>
<select name="blood">
    <option>A+</option>
    <option>A-</option>
    <option>B+</option>
    <option>B-</option>
    <option>O+</option>
    <option>O-</option>
    <option>AB+</option>
    <option>AB-</option>
</select>
<br><br>

<label>Religion:</label>
<select name="religion">
    <option>Islam</option>
    <option>Hindu</option>
    <option>Christian</option>
    <option>Buddhist</option>
</select>

</fieldset>



<fieldset>
<legend>Contact Information</legend>

<label>Email:</label>
<input type="email" name="email"><br><br>

<label>Phone/Mobile:</label>
<input type="text" name="phone"><br><br>

<label>Website:</label>
<input type="text" name="website"><br><br

<label>Present Address:</label><br>

<select name="country">
    <option>Bangladesh</option>
</select>
<select name="city">
    <option>Dhaka</option>
    <option>Chittagong</option>
</select>
<br><br>

<label>Address:</label>
<textarea name="address" rows="4" cols="25" placeholder="Road/Street/City"></textarea><br><br>


<input type="text" name="postcode" placeholder="Post Code">

</fieldset>



<fieldset>
<legend>Account Information</legend>

<label>Username:</label>
<input type="text" name="username"><br><br>

<label>Password:</label>
<input type="password" name="password"><br><br>

<label>Confirm Password:</label>
<input type="password" name="cpassword">

</fieldset>

</div>

<br>

<input type="submit" value="Register">

</form>

</body>
</html>
