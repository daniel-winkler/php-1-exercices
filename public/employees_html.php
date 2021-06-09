
<!DOCTYPE html>
<html lang="en">

<?php require("./partial/head.php") ?>

<body>
    <?php include("./navbar.php")?>
    <table>
        <thead>
            <tr>
                <?php foreach($people[0] as $key => $person): ?>
                    <th><?= $key ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach($people as $person): ?>
                <tr>
                    <?php foreach($person as $key => $data): ?>
                        <?php if ($key === "name") { ?>
                            <td><a href="/employees.php?id=<?= $person['id'] ?>"><?= $data ?></a></td>
                        <?php } else { ?>
                            <td><?= $data ?></td>
                        <?php } ?>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php if(isset($_GET["message"])): ?>
        <p><?= $_GET["message"] ?></p>
    <?php endif; ?>

    <form method="POST" action="/employees_add.php" enctype="multipart/form-data">
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required/>
        <br/>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required/>
        <br/>
        <label for="age">Edad</label>
        <input type="number" id="age" name="age" required/>
        <br/>
        <label for="city">Ciudad</label>
        <input type="text" id="city" name="city" />
        <br/>
        <label for="file">File</label>
        <input type="file" id="file" name="file" />
        <hr/>
        <input type="submit" value="Enviar"/>
    </form>

    <!-- START SCRIPTS  -->
    <?php require("./partial/scripts.php")?>
    <!-- END SCRIPTS  -->
</body>
</html>