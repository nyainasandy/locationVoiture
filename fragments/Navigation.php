<?php require_once("data/User.class.php") ?>

<div class="container-fluid bg-dark">

    <nav class="navbar navbar-expand-lg navbar-dark d-flex align-items-center">
        
        <div class="container">
            
        <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="/"><i class="fa fa-home me-2"></i> Accueil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-calendar me-2"></i> Service</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#"><i class="fa fa-barcode me-2"></i> Prix</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="?new"><i class="fa fa-piggy-bank me-2"></i> Promotion</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#"><i class="fa fa-magnifying-glass me-3"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-envelope me-3"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#"><i class="fa fa-bell me-3"></i></a>
                    </li>

                    <?php 

                    $user = new User();
                    if($user->isConnected()) { ?>
                        
                        <li class="nav-item dropdown bg-dark">
                            <div class="btn-group">
                                <?php
                                
                                $background = "bg-yellow";
                                $color = "text-dark";

                                if($user->isAdmin()) {
                                    $background = "bg-red";
                                    $color = "text-white";

                                } else if($user->isEmployees()) {
                                    $background = "bg-green";
                                    $color = "text-white";
                                    
                                } ?>
                                <button type="button" class="btn <?php echo $background.' '.$color; ?>"><i class="fa fa-user me-2"></i></button>
                                <button type="button" class="btn <?php echo $background; ?> dropdown-toggle dropdown-toggle-split <?php echo $color; ?>" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/?profile">Page personnelle</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="logout.php">Se déconnecter</a></li>
                                </ul>
                            </div>
                        </li>

                    <?php } else { ?>
                        
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/?login"><i class="fa fa-user"></i></a>
                        </li>
                
                    <?php } ?>
                    
                </ul>

            </div>
        </div>
    </nav>
    
</div>