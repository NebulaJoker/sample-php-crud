<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <a href="create.php" class="btn btn-dark">Add Inmate</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Inmate ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include ("mysql-connector.php");

                $selectQ = "SELECT * FROM inmate";
                $result = mysqli_query($connection, $selectQ);

                while ($rows = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $rows["inmate_id"] ?>
                        </th>
                        <td>
                            <?php echo $rows["name"] ?>
                        </td>
                        <td>
                            <?php echo $rows["age"] ?>
                        </td>
                        <td>
                            <?php echo $rows["gender"] ?>
                        </td>
                        <td>
                            <?php echo $rows["address"] ?>
                        </td>
                        <td>
                            <a href="contacts.php?id=<?php echo $rows['inmate_id']; ?>" class="btn btn-info">Ver
                                Contactos</a>
                            <a href="edit.php?id=<?php echo $rows['inmate_id']; ?>" class="btn btn-warning">Editar</a>
                            <a href="process.php?id=<?php echo $rows['inmate_id']; ?>&type=inmate"
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