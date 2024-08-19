
<!DOCTYPE html>
<html lang="en">
<?php require('includes/head.php');?>
<body style = "background-color : Gray;">
    <br></br>
    <form class = "container" method = "POST">
        <div class="mb-3">
            <label for="exampleInputpseudo" class="form-label">Pseudo</label>
            <input type="pseudo" class="form-control" placeholder = "Pseudo" name = "pseudo">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" placeholder = Password name = "password">
        </div>
        <button type="submit" class="btn btn-primary" name = "validate">Se connecter</button>
        <br></br>
        <a href="signUp.php">je n'ai pas un compte , je m'inscrit</a>
    </form>
</body>
</html>
