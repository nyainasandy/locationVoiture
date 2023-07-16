<?php 
    require_once("data/User.class.php"); 
    $user = new User();

    $background = "bg-yellow";
    $color = "text-dark";

    if($user->isAdmin()) {
      $background = "bg-red";
      $color = "text-white";
    } else if($user->isEmployees()) {
      $background = "bg-green";
      $color = "text-white";
    } 
?>
<div class="row <?php echo $background.' '.$color; ?> me-0">
  <div class="col-6 p-2 mt-1">
    
    <div class="row ps-2">
      <div class="col-4">
        <?php echo "Bonjour ".$user->getName().","; ?>
      </div>
      <div class="col-4 border-start">Langage : (FR) <a class="btn <?php echo $color; ?>"><i class="fa fa-caret-down"></i></a></div>
    </div>
    
  </div>
  
  <div class="col-6 text-right d-flex flex-row-reverse p-2"> 
    <a class="btn <?php echo $color; ?>" href="/logout.php"><i class="fa fa-lock"></i></a>
    <a class="btn <?php echo $color; ?>" href="/?profile"><i class="fa fa-envelope"></i></a>
  </div>
</div>

<div class="row">

  <div class="col-lg-2 nav-left py-4">
    <div class="mb-2 text-center"><i class="fa-solid fa-id-card-clip fa-3x"></i></div>
    <div class="pb-2 text-center"><?php echo $user->getFullName(); ?></div>
    
    <div class="pb-2 pt-2 text-center">
      <span class="fw-bold"><u>Roles attribués :</u></span><br/>
      <?php 
      $roles = explode(",", $user->getRole());
      foreach($roles as $role) {
        echo $role."<br/>"; 
      }
      ?>
    </div>

    <hr class="hr"/>
    <div class="mb-3 ms-3">
      <a class="text-decoration-none text-white" href="/?profile">
        <i class="fa fa-envelope me-2"></i> Message
      </a>
    </div>

    <div class="mb-3 ms-3">
      <a class="text-decoration-none text-white" href="/?profile&new">
        <i class="fa fa-car-side me-2"></i> Nouvel véhicule
      </a>
    </div>

    <?php if($user->isAdmin()) { ?>
      <div class="mb-3 ms-3">
        <a class="text-decoration-none text-white" href="/?profile&opening">
          <i class="fa fa-calendar me-2"></i> Horaire d'ouverture
        </a>
      </div>
    <?php } ?>

    <div class="mb-3 ms-3">
      <a class="text-decoration-none text-white" href="/?profile&service">
        <i class="fa fa-toolbox me-2"></i> Service de réparation
      </a>
    </div>
  </div>

  <div class="col-lg-10 mt-2">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <!-- <li class="breadcrumb-item"><a href="/">Accueil</a></li> -->
        <?php
          if($user->isAdmin() && isset($_GET['opening'])) {
        ?> 
            <li class="breadcrumb-item"><a href="/?profile" class="text-decoration-none ms-2">Profil utilisateur</a></li>
            <li class="breadcrumb-item active" aria-current="page">Horaire d'ouverture</li> 
            <?php
          } else if(isset($_GET['service'])) {
            ?> 
            <li class="breadcrumb-item"><a href="/?profile" class="text-decoration-none ms-2">Profil utilisateur</a></li>
            <li class="breadcrumb-item active" aria-current="page">Service de réparation</li> 
            <?php
          } else if(isset($_GET['new'])) {
            ?> 
            <li class="breadcrumb-item"><a href="/?profile" class="text-decoration-none ms-2">Profil utilisateur</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nouvel véhicule</li> 
            <?php
          
          } else {
            ?> 
            <li class="breadcrumb-item active ms-2" aria-current="page">Profil utilisateur</li> 
            <?php
          }
        ?>
      </ol>
    </nav>
    
    <div class="mt-2">
      <?php 
        if($user->isAdmin() && isset($_GET['opening'])) {
          require("fragments/body/connected/admin/Opening.php"); 
        } else if(isset($_GET['service'])) {
          require("fragments/body/connected/admin/Service.php"); 

        } else if(isset($_GET['new'])) {
          //cs=ko&si=tb -> creation status (ok, ko) - size image (tb : too big)
          require("fragments/body/connected/New.php");
        
        } else {
          require("fragments/body/connected/Message.php");
        }
      
      ?>
    </div>
  </div>

</div>


