<?php
    require_once("data/Connection.class.php");

    $error_connection = null;
    if(isset($_POST['user'])) {
        $user = $_POST['user'];
        $password = $_POST['password'];

        $connection = new Connection();
        $user_to_check = $connection->findByUsernameAndPassword($user, $password);

        if($user_to_check != null && count($user_to_check) > 0 && !is_null($user_to_check[0]['nom_utilisateur'])) {
            
            $_SESSION["utilisateur"] = $user_to_check[0]['nom_utilisateur'];
            $_SESSION["nom"] = $user_to_check[0]['nom'];
            $_SESSION["prenom"] = $user_to_check[0]['prenom'];
            $_SESSION["role"] = $user_to_check[0]['role'];

            header('location:/?profile');
        } else {
            $error_connection = "Le couple utilisateur/mot de passe n'est pas valide !!";
        }
    }
    
?>
<div class="row gradient">
    <div class="col-lg-6 px-0">
        <img src="/images/evoque.png" alt="Login image" class="img-fluid text-center" />
    </div>
    <div class="col-lg-6 text-black">

        <div class="h-75 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

            <form class="pt-5 pe-5" method="POST" action="/?login">

                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Se connecter</h3>

                <div class="form-outline mb-4">
                    <input type="text" id="user" name="user" class="form-control form-control-lg" placeholder="Email / nom d'utilisateur" />
                </div>

                <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Mot de passe" />
                </div>

                <?php
                    if(!is_null($error_connection)) {
                        ?>
                            <div class="text-danger">
                                Le couple utilisateur/mot de passe incorrecte !!
                            </div>
                        <?php
                    }
                ?>
                <div class="pt-1 mb-4">
                    <button class="btn btn-info btn-lg w-100" type="submit">Se connecter</button>
                </div>

                <p class="small mb-5 pb-lg-2 text-center">
                    <a class="text-muted" href="#!">Mot de passe oublié?</a>
                </p>
                <p class="text-center">
                    Pas encore inscrit ? <a href="#!" class="link-info">S'enregistrer</a>
                </p>

            </form>

        </div>

    </div>
</div>