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
<p> Your name: <input type="text" name="name" /> </p>
<p> Your surname: <input type="text" name="surname" /> </p>
<p> Your email: <input type="text" name="email" /> </p>
<p> Your prefered color: <input type="text" name="color" /> </p>
</p> 
<select name='size'>
<option>---</option>
<option> S</option>
<option> M</option>
<option> L</option>
<option> XL</option>
</select></p>
<p>Number ordered: <input type="text" name="numOrdered"/> </p>
<input type = 'submit' name='submit' value='submit'/>
</form>
<?php
if (isset($_POST["submit"]) ){
if($_POST["strTitle"] == "---")
echo"<p> Please select a title.</p>";
elseif($_POST["size"] == "---")
echo"<p> Please Select a size.<p>";
else{
$strTitle = $_POST["strTitle"];
echo "<p> Your title is $strTitle </p>";
}

}
?>
</html>

<html>
<?php
//Define variable and set to empty
$nameErr = $surNameErr = $emailErr = $colorErr = $sizeErr = $numOfShirtErr = "";
$name = $surName = $email = $color = $size = $numOfShirt = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        //Check id name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)){
            $nameErr = "Only letters and white space allowed"; 
        }
    }
    if(empty($_POST["surname"])){
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["surname"]);
        //Check id name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)){
            $nameErr = "Only letters and white space allowed";
    if(empty($_POST["email"])){
        $emailErr = "Email is required";
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email format";
        }
    }
    
    
}
?>
<form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>
Your name: <input type="text" name="name" /> 
<span class="error">* <?php echo $nameErr;?></span>
<br>
Your surname: <input type="text" name="surname" /> 
<span class="error">* <?php echo $surNameErr;?></span>
<br>
Your email: <input type="text" name="email" /> 
<span class="error">* <?php echo $emailErr;?></span>
<br>
<input type = 'submit' name='submit' value='submit'/>
</form>
</html>