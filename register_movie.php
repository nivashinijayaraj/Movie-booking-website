<?php include("movie ticket.html")
?>
<body>
<div class="Register">
<div class="r">
<form action="connect_movie.php" method="post">
<br><br>
<label for="username">UESRNAME</label>
<input type="text" size="30" name="n" placeholder="enter your name" required>
<br><br>
<label for="age">AGE</label>
<input type="number" size="2" name="a">
<br><br>
<label for="DOB">DOB</label>

<input type="date" name="d">
<br><br>
<label for="gender">GENDER</label>
<input type="radio" value="male" name="g">male
<input type="radio" value="female" name="g">female
<input type="radio" value="others" name="g">others
<br><br>
<label for="email">EMAIL</label>
<input type="email" name="e" size="40">
<br><br>
<label for="password">PASSWORD</label>
<input type="password" maxlength="8" min="4" name="p">
<br><br>
<label for="seat_count">SEAT_COUNT</label>
<input type="number" size="2" name="sc">
<br><br>
<label for="Movies">Movies</label>
<select name="s">
<option value="don">don</option>
<option value="three">three</option>
<option value="may be this is last">may be this is last</option>
<option value="your choise">your choise</option>
<option value="unnale unnale">unnale unnale</option>
</select>
<br><br>
<label for="theatre">theatre</label>
<select name="t">
<option value="walldon cinemas">walldon cinemas</option>
<option value="blawi shows">blawi shows</option>
<option value="ML">ML</option>
<option value="mani cinemas">mani cinemas</option>

</select>
<br><br>
<input type="submit" value="Register">
<input type="reset"  value="cancel">
</form>
</div>
</div>
</body>
<?php include("foot_movie.html")
?>`