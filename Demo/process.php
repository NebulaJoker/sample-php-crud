<?php

include ("mysql-connector.php");

if (isset($_POST["add-inmate"])) {
    $name = mysqli_real_escape_string($connection, $_POST["inmate-name"]);
    $age = mysqli_real_escape_string($connection, $_POST["inmate-age"]);
    $gender = mysqli_real_escape_string($connection, $_POST["gender"]);
    $address = mysqli_real_escape_string($connection, $_POST["inmate-address"]);

    $insert = "INSERT INTO inmate (name, age, gender, address) VALUES ('$name', $age, '$gender', '$address')";

    if(mysqli_query($connection, $insert)){
        echo "Inmate added";
        header("Location:index.php");
    }
    else{
        die("An error occured, and the inmade was not added.");
    }
}


else if (isset($_POST["update-inmate"])) {
    $name = mysqli_real_escape_string($connection, $_POST["inmate-name"]);
    $age = mysqli_real_escape_string($connection, $_POST["inmate-age"]);
    $gender = mysqli_real_escape_string($connection, $_POST["gender"]);
    $address = mysqli_real_escape_string($connection, $_POST["inmate-address"]);
    $id = mysqli_real_escape_string($connection, $_POST["inmate_id"]);

    $update = "UPDATE inmate SET name = '$name', age = $age, gender = '$gender', address='$address' WHERE inmate_id = $id";

    if(mysqli_query($connection, $update)){
        echo "Inmate updated";
        header("Location:index.php");
    }
    else{
        die("An error occured, and the inmade was not updated.");
    }
}


else if (isset($_POST["add-contact"])) {
    $number = mysqli_real_escape_string($connection, $_POST["inmate-contact"]);
    $inmate_id = mysqli_real_escape_string($connection, $_POST["inmate_id"]);
    $family = mysqli_real_escape_string($connection, $_POST["family"]);

    $insert = "INSERT INTO contact (inmate_id, relationship, number) VALUES ($inmate_id, '$family', $number)";

    if(mysqli_query($connection, $insert)){
        echo "Contact added";
        header("Location:index.php");
    }
    else{
        die("An error occured, and the contact was not added.");
    }
}


else if (isset($_POST["update-contact"])) {
    $number = mysqli_real_escape_string($connection, $_POST["inmate-contact"]);
    $record = mysqli_real_escape_string($connection, $_POST["record"]);
    $family = mysqli_real_escape_string($connection, $_POST["family"]);

    $update = "UPDATE contact SET relationship = '$family', number = $number WHERE record = $record";

    if(mysqli_query($connection, $update)){
        echo "Contact updated";
        header("Location:index.php");
    }
    else{
        die("An error occured, and the contact was not updated.");
    }
}


else if(isset($_GET["type"]) and $_GET["type"] == "contact"){
    $record = mysqli_real_escape_string($connection, $_GET["record"]);

    $deleteContact = "DELETE FROM contact WHERE record = $record";

    if(mysqli_query($connection, $deleteContact)){
        echo "Record deleted";
        header("Location:index.php");
    }
    else{
        die("An error occured, and the record was not deleted.");
    }
}


else if(isset($_GET["type"]) and $_GET["type"] == "inmate"){
    $inmate_id = mysqli_real_escape_string($connection, $_GET["id"]);

    $deleteInmate = "DELETE FROM inmate WHERE inmate_id = $inmate_id";

    if(mysqli_query($connection, $deleteInmate)){
        echo "Inmate deleted";
        header("Location:index.php");
    }
    else{
        die("An error occured, and the inmate  was not deleted.");
    }
}