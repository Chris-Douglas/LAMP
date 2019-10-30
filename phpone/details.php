Hi <?php echo htmlspecialchars($_POST['name']); ?>.
Your surname is <?php echo htmlspecialchars ($_POST['surname']); ?>.
Your email is <?php echo htmlspecialchars($_POST['email']); ?>.
Your postcode is <?php echo (double)$_POST['postcode']; ?>.