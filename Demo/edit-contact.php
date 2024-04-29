<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <?php
        include ("mysql-connector.php");

        $id = $_GET["id"];
        $selectQ = "SELECT * FROM contact WHERE record = $id";
        $result = mysqli_query($connection, $selectQ);
        $rows = mysqli_fetch_array($result);
        ?>

        <a href="contacts.php?id=<?php echo $rows['inmate_id']; ?>" class=" btn btn-secondary">Back</a>

        <h1>Edit Contact</h1>



        <form action="process.php" method="post">

            <div class="mb-3">
                Familial Tie <br>
                <select class="form-select" name="family">
                    <option value="Father" <?php if ($rows["relationship"] == "Father")
                        echo "selected" ?>>Father</option>
                        <option value="Mother" <?php if ($rows["relationship"] == "Mother")
                        echo "selected" ?>>Mother</option>
                        <option value="Grandfather" <?php if ($rows["relationship"] == "Grandfather")
                        echo "selected" ?>>
                            Grandfather</option>
                        <option value="Grandmother" <?php if ($rows["relationship"] == "Grandmother")
                        echo "selected" ?>>
                            Grandmother</option>
                        <option value="Sister" <?php if ($rows["relationship"] == "Sister")
                        echo "selected" ?>>Sister</option>
                        <option value="Brother" <?php if ($rows["relationship"] == "Brother")
                        echo "selected" ?>>Brother
                        </option>
                        <option value="Cousin" <?php if ($rows["relationship"] == "Cousin")
                        echo "selected" ?>>Cousin</option>
                        <option value="Aunt" <?php if ($rows["relationship"] == "Aunt")
                        echo "selected" ?>>Aunt</option>
                        <option value="Uncle" <?php if ($rows["relationship"] == "Uncle")
                        echo "selected" ?>>Uncle</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="inmate-contact">Number</label>
                    <input type="number" class="form-control" name="inmate-contact" id="inmate-contact" min="210000000"
                        max="299999999" value=<?php echo $rows["number"]; ?>>
            </div>

            <input type='hidden' name='record' value='<?php echo $_GET['id']; ?>' />

            <div class="mb3">
                <input type="submit" class="btn btn-primary" name="update-contact" value="Update Contact">
            </div>

    </div>
    </form>
    </div>

    <?php
    ?>

</body>

</html>