<h2>Cadastro de Usuario</h2>
<form method="post" action="/controller/register.php">
    Email :<br>
    <input id="email" type="text" name="accountEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
    <br>
    Senha:<br>
    <input id="password" type="password" name="accountPassword" />
    <br>
    <input type="submit" name="add" value="ADD">
</form>