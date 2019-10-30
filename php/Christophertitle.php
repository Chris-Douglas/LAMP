<html>
<form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>
</p> 
<select name='strTitle'>
<option>---</option>
<option> Mr</option>
<option> Dr</option>
<option> Mrs</option>
<option> Ms</option>
<option> Prof</option>
</select></p>
<input type = 'submit' name='submit' value='submit'/>
</form>
<?php
if (isset($_POST["submit"]) ){
if($_POST["strTitle"] == "---")
echo"<p> Please select a title.</p>";
else{
$strTitle = $_POST["strTitle"];
echo "<p> Your title is $strTitle </p>";
}
}
?>
</html>