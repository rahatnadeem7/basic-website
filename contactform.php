<?php

if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $mailFrom = $_POST['Email'];
    $name = $_POST['Name'];


    $mailTo = "rahatnadeem.53@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received a mail from".$name.".\n\n";

    mail($mailTo,$txt,$headers);
    header("Location: index.php?mailsend");
}
 