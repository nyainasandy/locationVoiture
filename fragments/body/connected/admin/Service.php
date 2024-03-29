<?php

    require_once("data/Service.class.php");

    $services = new Service();
    $allServices = $services->findAll();

?>

<div class="p-5">
    <h3 class="h3 border-bottom pb-3 mb-3">Service</h3>

    <div class="mb-5">Vous pouvez modifier le service proposé.</div>

    <div class="w-75">
        <table class="table" id="services">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Service</th>
                <th scope="col">Prix (en &euro;)</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                foreach($allServices as $service) {
                    require("service.item.php");    
                } 
                ?>

            </tbody>
            <tfoot>
                <tr>
                    <td>#</td>
                    <td>
                        <input type="text" placeholder="Nom" id="label" class="form-control" />
                    </td>
                    <td>
                        <input type="text" placeholder="Prix" id="price" class="form-control" />
                    </td>
                    <td class="text-center">
                        <a class="btn btn-success" href="javascript: createService()">Add</a>
                    </td>
                </tr>
            </tfoot>
        </table>

        <div id="success" class="text-white bg-success ps-2 mt-2"></div>
        <div id="error" class="text-white bg-danger ps-2 mt-2"></div>
    </div>

    <div class="modal fade" id="deleteModalConfirmation" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModal">Confirmer la suppression</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="serviceId" value="" />
                Vous avez choisit le service :<br/>
                <div class="ms-3" id="label"></div>
                <div class="ms-3" id="price"></div>
                Etes-vous sur de vouloir le supprimer ?<br/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary" onclick="deleteService()" data-bs-dismiss="modal">Supprimer</button>
            </div>
            </div>
        </div>
    </div>

</div>