<?php require_once("connecter.php"); ?>
<!DOCTYPE html>
<html>
<?php require_once("template_header.php"); ?>
<body>
    <br><br>
    <form calss="container" method="POST">
        <div class="mb-3">
            <input type="email" class="form-control" name="login" autocomplete="off" placeholder="Login">
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" name="password" autocomplete="off" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Se connecter</button>
        <button type="submit" class="btn btn-primary" name="inscription">S'inscrire</button>
    </form>
</body>
</html>