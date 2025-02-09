<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recaptcha_secret = "6Le3DNIqAAAAAPh5CsOtgPaqnKSLBYKB-MGOV9cH";
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptcha_secret}&response=" . $_POST["g-recaptcha-response"]);
    $responseKeys = json_decode($response, true);

    if ($responseKeys["success"]) {
               header("Location: https://chat.whatsapp.com/DZyWuUrR3nn46aYVwfJGoX");
        exit;
    } else {
        echo "verification failed. Please try again.";
    }
}
?>
