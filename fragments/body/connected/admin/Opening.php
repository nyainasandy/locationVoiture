<?php 
    require_once("data/Opening.class.php");

    $opening = new Opening();
    $allOpeningTimes = $opening->findAll();

    ?>
<div class="row ms-2 p-5">

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
            <tr id="f<?php echo $allOpeningTime['id']; ?>">
                <th scope="row"><?php echo $allOpeningTime["id"]; ?></th>
                <td><?php echo $allOpeningTime["jour"]; ?></td>
                <td>
                    <input id="morning" name="morning_0" id="morning_0" placeholder="Heure d'ouverture de la matinée" type="time" class="form-control" value="<?php echo $hourlyAm[0]; ?>" />
                </td>
                <td>
                    <input id="morning" name="morning_1" id="morning_1" placeholder="Heure d'ouverture de la matinée" type="time" class="form-control" value="<?php echo $hourlyAm[1]; ?>" />
                </td>
                <td>
                    <input id="jour" name="afternoon_0" id="afternoon_0" placeholder="Heure d'ouverture de l'après-midi" type="time" class="form-control" value="<?php echo $hourlyPm[0]; ?>"/>
                </td>
                <td>
                    <input id="jour" name="afternoon_1" id="afternoon_1" placeholder="Heure d'ouverture de l'après-midi" type="time" class="form-control" value="<?php echo $hourlyPm[1]; ?>"/>
                </td>
                <td class="text-center">
                    <button type="submit" class="btn p-0 m-0 text-dark"><i class="fa fa-floppy-disk fa-2x"></i></button>
                    <button type="reset" onclick="clearInput(<?php echo $allOpeningTime['id']; ?>)" class="btn p-0 m-0 text-dark"><i class="fa fa-door-closed fa-2x"></i></button>
                </td>
            </tr>
        </form>
            
<?php } ?>
        </tbody>
    </table>
        
</div>
<script type="text/javascript">
    function clearInput(id) {
        var inputs = document.querySelectorAll("#f" + id + " input");
        inputs.forEach(function(input) {
            console.log("INPUT : " + input.value)
            input.value = '19:00';
        });
    }
</script>