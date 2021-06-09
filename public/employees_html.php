
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

    <!-- START SCRIPTS  -->
    <?php require("./partial/scripts.php")?>
    <!-- END SCRIPTS  -->
</body>
</html>