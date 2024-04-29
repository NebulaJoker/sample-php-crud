<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <a href="contacts.php?id=<?php echo $_GET['id']; ?>" class="btn btn-secondary">Back</a>

        <h1>New Contact</h1>

        <form action="process.php" method="post">

            <div class="mb-3">
                Familial Tie <br>
                <select class="form-select" name="family">
                    <option value="Father" selected>Father</option>
                    <option value="Mother">Mother</option>
                    <option value="Grandfather">Grandfather</option>
                    <option value="Grandmother">Grandmother</option>
                    <option value="Sister">Sister</option>
                    <option value="Brother">Brother</option>
                    <option value="Cousin">Cousin</option>
                    <option value="Aunt">Aunt</option>
                    <option value="Uncle">Uncle</option>
                </select>
            </div>


            <div class="mb-3">
                <label for="inmate-contact">Number</label>
                <input type="number" class="form-control" name="inmate-contact" id="inmate-contact" min="210000000"
                    max="299999999">
            </div>

            <input type='hidden' name='inmate_id' value='<?php echo $_GET['id']; ?>' />

            <div class="mb3">
                <input type="submit" class="btn btn-primary" name="add-contact" value="Add Contact">
            </div>


    </div>
    </form>
    </div>

</body>

</html>