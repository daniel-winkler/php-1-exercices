<?php
    $people = [
    ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'age' => 20, 'city' => 'Benalmádena'],
    ['name' => 'Carmen', 'email' => 'carmen@correo.com', 'age' => 15, 'city' => 'Fuengirola'],
    ['name' => 'Carmelo', 'email' => 'carmelo@correo.com', 'age' => 17, 'city' => 'Torremolinos'],
    ['name' => 'Carolina', 'email' => 'carolina@correo.com', 'age' => 18, 'city' => 'Málaga'],
    ]; 
?>

<!DOCTYPE html>
<html lang="en">

<?php require("./partial/head.php") ?>

<body>
    <?php include("./navbar.php")?>
    <table>
        <thead>
            <tr>
            <?php foreach($people[0] as $key => $person) { ?>
                <th><?= $key ?></th>
            <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach($people as $person) { ?>
                <tr>
                    <td><?= $person['name']?></td>
                    <td><?= $person['email']?></td>
                    <td><?= $person['age']?></td>
                    <td><?= $person['city']?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- START SCRIPTS  -->
    <?php require("./partial/scripts.php")?>
    <!-- END SCRIPTS  -->
</body>
</html>