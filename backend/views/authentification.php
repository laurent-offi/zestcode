<form method="post">

    <input type="test" name="username">

    <input type="password" name="password">

    <button type="submit" name="login">Se connecter</button>

    <?php if (isset($error['login'])) {
                                    echo "<li>" . $error['login'] . " </li>";
                                } ?>


</form>