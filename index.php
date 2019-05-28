<form action="/controller/authenticate.php" method="post">
    <label for="email">Email address:</label>
    <input id="email" type="text" name="accountEmail" />

    <label for="password">Password:</label>
    <input id="password" type="text" name="accountPassword" />

    <input type="submit" name="login" value="Login" />
</form>

<?php
if (isset($_SESSION['accountId'])) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
    //echo '<h6>Bem Vindo : ' . $_SESSION['accountId'] . ' </h6>';
} else {
    echo '<img src="http://dancarbal.com/wp-content/uploads/2014/05/poster_moises.jpg" height="30%"  alt="">';
}
?>