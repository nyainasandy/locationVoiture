<?php

    if(count($allFundings) > 0) {
        $first_funding = $allFundings[0]["mensualite"];
?>
        <div class="mt-2 d-flex align-items-center me-3 border p-3">
        À partir de &nbsp;<span class="fs-3 text-primary"><?php echo $first_funding; ?> &euro;&nbsp;/ mois</span>&nbsp;avec un crédit classique
        </div>

<?php } ?>