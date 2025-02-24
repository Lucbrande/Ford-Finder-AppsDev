<?php
require_once '../view/header.php';?>




<h1>User Registration</h1>

<h2>Registration Successful!</h2>

<p>Here is the information you entered:</p>

<p>First Name: <?php echo $users->getFirstName(); ?></p>
<p>Last Name: <?php echo $users->getLastName(); ?></p>
<p>Email: <?php echo $users->getEmail(); ?></p>



<?php require_once '../view/footer.php'; ?>