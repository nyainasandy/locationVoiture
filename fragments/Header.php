<div class="container-fluid header-img">
    
    <div class="container">

        <div class="d-flex align-items-start flex-column" style="height: 450px">
            <div class="m-auto">
                <div class="logo">Golden garage</div>
                <div>Vente d'occation, achat et réparation </div>
            </div>
            
            <div class="container pt-2 breadcrumb-header">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb ms-3">
                        <li class="breadcrumb-item">
                            <a href="/">Accueil</a>
                        </li>
                        <?php 
                        if(isset($_GET["new"])) {
                            echo "<li class='breadcrumb-item active' aria-current='page'>Ajouter nouvel véhicule</li>";
                        }
                            
                        ?>
                    </ol>
                </nav>
            </div>
            
        </div>
        
    </div>
</div>