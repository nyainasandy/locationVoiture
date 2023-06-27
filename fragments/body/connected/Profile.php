<?php 
    require_once("data/User.class.php"); 
    $user = new User();
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Accueil</a></li>
    <li class="breadcrumb-item active" aria-current="page">Profil utilisateur</li>
  </ol>
</nav>

<div class="row mt-2">

    <div class="col-lg-3 border p-3 text-center">
        <img src="/images/profile.png" alt="" width="128px" />
        <div class="mt-2 mb-3">Salut, <span class="fw-bold"><?php echo $user->getName(); ?></span></div>
        <a class="btn btn-danger" href="/logout.php">Se déconnecter</a>
    </div>

    <div class="col-lg-8 ms-3 border p-3">
        John Doe
    </div>
</div>