<?php 
    require_once("data/Opening.class.php");

    $opening = new Opening();
    $allOpeningTimes = $opening->findAll();

    ?>
<div class="ms-2 p-5">

    <h3 class="h3 border-bottom pb-3 mb-3">Horaire d'ouverture</h3>

    <div class="mb-3">En tant d'<b>administrateur</b>, Vous avez la possibilité de <b>modifier les horaires d'ouverture</b> de l'atelier.</div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Jour</th>
                <th scope="col" colspan="2">Matinée</th>
                <th scope="col" colspan="2">Après-midi</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

    <?php
    foreach($allOpeningTimes as $allOpeningTime) {
        $hourlyAm = explode(" - ", $allOpeningTime["am"]);
        $hourlyPm = explode(" - ", $allOpeningTime["pm"]);
    ?>
    
        <form method="POST">
            <tr id="<?php echo $allOpeningTime['id']; ?>">
                <th scope="row"><?php echo $allOpeningTime["id"]; ?></th>
                <td><?php echo $allOpeningTime["jour"]; ?></td>
                <td>
                    <input id="am_0_<?php echo $allOpeningTime['id']; ?>" placeholder="Heure d'ouverture de la matinée" type="time" class="form-control" value="<?php echo $hourlyAm[0]; ?>" />
                </td>
                <td>
                    <input id="am_1_<?php echo $allOpeningTime['id']; ?>" placeholder="Heure d'ouverture de la matinée" type="time" class="form-control" value="<?php echo $hourlyAm[1]; ?>" />
                </td>
                <td>
                    <input id="pm_0_<?php echo $allOpeningTime['id']; ?>" placeholder="Heure d'ouverture de l'après-midi" type="time" class="form-control" value="<?php echo $hourlyPm[0]; ?>"/>
                </td>
                <td>
                    <input id="pm_1_<?php echo $allOpeningTime['id']; ?>" placeholder="Heure d'ouverture de l'après-midi" type="time" class="form-control" value="<?php echo $hourlyPm[1]; ?>"/>
                </td>
                <td class="text-center">
                    <a href="javascript: saveOpeningChange(<?php echo $allOpeningTime['id']; ?>)" class="btn p-0 m-0 text-dark">
                        <i class="fa-regular fa-floppy-disk fa-2x"></i>
                    </a>
                    <a href="javascript: clearInput(<?php echo $allOpeningTime['id']; ?>)" class="btn p-0 m-0 text-dark">
                        <i class="fa-regular fa-trash-can fa-2x"></i>
                    </a>
                </td>
            </tr>
        </form>
            
<?php } ?>
        </tbody>
    </table>
    
</div>

<div id="error" class="bg-danger"></div>
<div id="success" class="bg-success"></div>