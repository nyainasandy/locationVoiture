<?php
    require_once("/data/Connection.class.php");

    if(isset($_POST)) {
        $user = $_POST['user'];
        $password = $_POST['password'];

        $connection = new Connection();
        $user_to_check = $connection->findByUsernameAndPassword($user, $password);

        echo "Son mot de passe : $user_to_check[0]['password']";
    }
    
?>
<div class="row gradient">
    <div class="col-sm-6 text-black">

        <div class="d-flex align-items-center h-75 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

            <form style="width: 23rem;" class="pt-5 pe-5 border-end">

                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Se connecter</h3>

                <div class="form-outline mb-4">
                    <input type="email" id="user" name="user" class="form-control form-control-lg" placeholder="Email / nom d'utilisateur" />
                </div>

                <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Mot de passe" />
                </div>

                <div class="pt-1 mb-4">
                    <button class="btn btn-info btn-lg w-100" type="button">Se connecter</button>
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
    <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="/images/evoque.png" alt="Login image" class="w-100 vh-50 side" />
    </div>
</div>