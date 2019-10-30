<html>
<?php
//Define variable and set to empty
$nameErr =  $websiteErr = $emailErr = "";
$name = $website = $email = "";

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
    if(empty($_POST["website"])){
        $websiteErr = "Website Required";
        } else {
            $website = test_input($_POST["website"]);
            //Validate Website
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $websiteErr = "Invalid URL"; 
            }  
        }
    if(empty($_POST["email"])){
        $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            //Validate email
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "Invalid email format";
            }
        }  
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>
Your name: <input type="text" name="name" /> 
<span class="error">* <?php echo $nameErr;?></span>
<br>
Website: <input type="text" name="website" /> 
<span class="error">* <?php echo $websiteErr;?></span>
<br>
Your email: <input type="text" name="email" /> 
<span class="error">* <?php echo $emailErr;?></span>
<br>
<input type = 'submit' name='submit' value='submit'/>
</form>
</html>