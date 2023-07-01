<?php
    require_once("data/Message.class.php");

    $m = new Message();
    $allMessages = $m->findAll();

    ?>
    <div class="me-2 p-5">
            
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Nom</th>
                <th scope="col">Telephone</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($allMessages as $message) { ?>

                    <tr>
                        <th scope="row"><?php echo $message['id_message']; ?></th>
                        <td><?php echo $message['date']; ?></td>
                        <td><?php echo $message['nom']; ?></td>
                        <td><?php echo $message['telephone']; ?></td>
                        <td><?php echo $message['mail']; ?></td>
                        <td><?php echo $message['message']; ?></td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>