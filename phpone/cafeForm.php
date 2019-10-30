<!DOCTYPE html>
<html> 
    <head> 
        <title>Cafe Form</title> 
    </head> 
<body> 
    <header> 
        <img src = "placeholderbanner.png">
    </header> 
    <article > 
        Thank you for your feedback <?php echo htmlspecialchars($_POST['name']); ?>. <br>
        You are on campus <?php (double) $_POST['days']; ?> days per week.<br>
        You attend <?php echo htmlspecialchars($_POST['campus']); ?> campus.<br>
        You gave the food a rating of <?php echo (double)$_POST['rating']; ?> out of 5.<br>
        You spend $<?php echo (double)$_POST['spend']; ?> a week.<br>
        Your comment: <br> <?php echo htmlspecialchars($_POST['comment']); ?>.<br>
    </article> 
</body> 
</html> 