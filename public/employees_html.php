
<!DOCTYPE html>
<html lang="en">

<?php require("./partial/head.php") ?>

<body>
    <?php include("./navbar.php")?>

    <p>
        <?php if(isset($_GET["message"])): ?>
            <p><?= $_GET["message"] ?></p>
        <?php endif; ?>
    </p>

    <table>
        <thead>
            <tr>
                <?php foreach($people[0] as $key => $person): ?>
                    <th><?= $key ?></th>
                <?php endforeach; ?>
                <th>actions</th>
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
                    <td><button class="employees-delete-button" value="delete" data-person='<?= json_encode($person) ?>'>Delete</button></td> <!-- utilizamos data-x y json_encode para pasar multiple informacion que nos pueda ser util usando solo un atributo para ello -->
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php 
        if (isset($_GET["id"])) {
            $query = "SELECT * FROM employees WHERE id= :id";
            $stm = $dbConnection->prepare($query);
            $stm->bindParam(":id", $_GET["id"]);
            $stm->execute();
            $currentPerson = $stm->fetch(PDO::FETCH_ASSOC);
        }
        var_dump($currentPerson);
    ?>

    <?php 
        $action = isset($currentPerson) ? "/employees_edit.php" : "/employees_add.php";
    ?>

    <form method="POST" action="<?= $action ?>" enctype="multipart/form-data">
        <?php if($currentPerson): ?>
            <input type="hidden" id="id" name="id" value="<?= $currentPerson['id']?>" required/>
        <?php endif; ?>
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" value="<?= $currentPerson['name']?>" required/>
        <br/>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?= $currentPerson['email']?>" required/>
        <br/>
        <label for="age">Edad</label>
        <input type="number" id="age" name="age" value="<?= $currentPerson['age']?>" required/>
        <br/>
        <label for="city">Ciudad</label>
        <input type="text" id="city" name="city" value="<?= $currentPerson['city']?>" />
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