<?php  require_once '../view/header.php'; ?>
<h1>Register Process</h1>

<form action="" method="post">
    <input type="hidden" name="controllerRequest" value="register_user">
    <label>First Name: </label>
    <input type="text" name="firstName" ><br>
    <label>Last Name: </label>
    <input type="text" name="lastName" ><br>
    <label>Email: </label>
    <input type="text" name="email" ><br>
    <label>Password: </label>
     <input type="text" name="userName" ><br>
    <input type="password" name="password" ><br>
    <label>User Name</label>
    <input type="submit" value="Add user">
</form>
<?php require_once '../view/footer.php'; ?>