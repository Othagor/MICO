<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        header, footer {
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
        }

        .content {
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

    </style>
</head>
<body>

<?php
require_once "header.php";
?>

<div class="content">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $full_name = $_POST['full_name'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone_number = $_POST['phone_number'] ?? '';
        $message = $_POST['message'] ?? '';

        echo "<h1>Your form has been submitted successfully!</h1>";
    } else {
        header('Location: contact.php');
        exit();
    }
    ?>
</div>


<?php
require_once "footer.php";
?>

