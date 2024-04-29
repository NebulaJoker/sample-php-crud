<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Inmate</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <?php
        include ("mysql-connector.php");

        $id = $_GET["id"];
        $selectQ = "SELECT * FROM inmate WHERE inmate_id = $id";
        $result = mysqli_query($connection, $selectQ);
        $rows = mysqli_fetch_array($result);
        ?>

        <a href="index.php" class="btn btn-secondary">Back</a>

        <h1>Edit Inmate</h1>

        <form action="process.php" method="post">
            <!-- Name -->
            <div class="mb-3">
                <label for="inmate-name" value=>Name</label>
                <input type="text" class="form-control" name="inmate-name" id="inmate-name"
                    value="<?php echo $rows['name'] ?>">
                <div class="inmate-name" class="form-text">Name and surname of the new inmate.</div>
            </div>

            <!-- Age -->
            <div class="mb-3">
                <label for="inmate-age">Age</label>
                <input type="number" class="form-control" name="inmate-age" id="inmate-age" min="16" value=<?php echo $rows["age"] ?>>
            </div>

            <!-- Gender -->
            <div class="mb-3">
                Gender <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="M" <?php if ($rows["gender"] == 'M')
                        echo "checked"; ?>>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="F" <?php if ($rows["gender"] == 'F')
                        echo "checked"; ?>>
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label for="inmate-address">Address</label>
                <input type="text" class="form-control" name="inmate-address" id="inmate-address"
                    value="<?php echo $rows['address'] ?>">
            </div>

            <div class="mb3">
                <input type="submit" class="btn btn-primary" name="update-inmate" value="Update Inmate">
            </div>

            <input type='hidden' name='inmate_id' value='<?php echo $_GET['id']; ?>' />
    </div>
    </form>
    </div>

    <?php
    ?>

</body>

</html>