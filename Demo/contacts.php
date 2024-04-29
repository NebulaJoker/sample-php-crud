<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <a href="create-contact.php?id=<?php echo $_GET['id']; ?>" class="btn btn-dark">Add Contact</a>
        <a href="index.php" class="btn btn-secondary">Back</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Relationship</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include ("mysql-connector.php");

                $inmate_id = $_GET["id"];
                $selectQ = "SELECT * FROM contact WHERE inmate_id = $inmate_id";
                $result = mysqli_query($connection, $selectQ);

                while ($rows = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $rows["relationship"] ?>
                        </th>
                        <td>
                            <?php echo $rows["number"] ?>
                        </td>
                        <td>
                            <a href="edit-contact.php?id=<?php echo $rows['record']; ?>" class="btn btn-warning">Editar</a>
                            <a href="process.php?record=<?php echo $rows['record']; ?>&type=contact"
                                class="btn btn-danger">Apagar</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>