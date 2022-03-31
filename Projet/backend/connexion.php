<?php 
    require_once('../frontend/template_header.php');
    require_once('connecter.php');
?>
    <br><br>
    <form method="POST">
        <div class="container">
            <div class="mb-3">
                <input type="email" class="form-control" name="login" autocomplete="off" placeholder="Login">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" autocomplete="off" placeholder="Password">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button type="submit" class="btn btn-dark" name="submit">Se connecter</button>
                <button type="submit" class="btn btn-dark" name="inscription">S'inscrire</button>
            </div>
        </div>
    </form>
</body>
</html>