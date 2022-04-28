<form action="loginck.php" method="post">
<input type="" name="email" value="<?php if(isset($_COOKIE['email'])){ echo $_COOKIE['email']; } ?>" placeholder="Enter Email"><br><br>
<input type="" name="pass" value="<?php if(isset($_COOKIE['pass'])){ echo $_COOKIE['pass']; } ?>" placeholder="Enter Password"><br><br>
<input type="checkbox" name="c" value="check"> Remember Now<br>
<input type="submit" value="  Login  "><br><br>
</form>