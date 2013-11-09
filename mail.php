<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $message = trim($_POST["message"]);

        if ($name == "" OR $email == "" OR $message == "") {
            $error_message = "Error! Error! Error! No name, email or message!";
        }

        require 'class.phpmailer.php';

        $mail = new PHPMailer();

        if (!isset($error_message)) {
            $email_body = "";
            $email_body = $email_body . "Name: " . $name . "<br>";
            $email_body = $email_body . "Email: " . $email . "<br>";
            $email_body = $email_body . "Message: " . $message;

            $mail->SetFrom($email, $name);
            $mail->AddAddress('diccfish@gmail.com', 'Floriduh');
            $mail->Subject = "Contact from Floriduh" . $name;
            $mail->MsgHTML($email_body); 

            if($mail->Send()) {
                header("Location: mail.php?status=thanks");
                exit;
            } else {
              $error_message = "Robot says: " . $mail->ErrorInfo;
            }
        }
    }
?><?php include('header.php');?>

    <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
            <section>
                <div>
                    <h1>thanks for the email!</h1>
                    <h2><a href="index.php">git back to the site <?php include('img/orange.svg'); ?></a></h2>
                </div>
            </section>
        <?php } else { ?>

        <?php
            if (!isset($error_message)) {
                echo '';
            } else {
                echo '<p class="message">' . $error_message . '</p>';
            }
        ?>
        
        <h1>Contact Us</h1>
        <h2>Any ideas, suggestions, or thoughts</h2>

            <form method="post" action="mail.php">
                <input placeholder="name" type="text" name="name" id="name" value="<?php if (isset($name)) { echo htmlspecialchars($name); } ?>">
                <input placeholder="email" type="text" name="email" id="email" value="<?php if (isset($name)) { echo htmlspecialchars($email); } ?>">
                <textarea placeholder="message" name="message" id="message"><?php if (isset($message)) { echo htmlspecialchars($message); } ?></textarea>
                <button type="submit" id="submit-button">submit</button>
            </form><?php } ?>