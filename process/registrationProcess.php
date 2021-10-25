<?php
    require ('../verifemail/config.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    
    require '../verifemail/PHPMailer/src/Exception.php';
    require '../verifemail/PHPMailer/src/OAuth.php';
    require '../verifemail/PHPMailer/src/PHPMailer.php';
    require '../verifemail/PHPMailer/src/POP3.php';
    require '../verifemail/PHPMailer/src/SMTP.php';
    
    if(isset($_POST['register'])) {
            if(empty($_POST["nama"]) && empty($_POST["email"]) && empty($_POST["password"])) {
        echo"
            <script type='text/javascript'>
                alert('Nama, Email, and Password is required');
            </script>
            <script>
            window.location = '../page/registrationPage.php'
            </script>";
    }else if(empty($_POST["nama"]) && empty($_POST["email"])) {
        echo"
            <script type='text/javascript'>
                alert('Nama and Email is required');
            </script>
            <script>
            window.location = '../page/registrationPage.php'
            </script>";
    }else if(empty($_POST["nama"]) && empty($_POST["password"])) {
        echo"
            <script type='text/javascript'>
                alert('Nama and Password is required');
            </script>
            <script>
            window.location = '../page/registrationPage.php'
            </script>";
    }else if(empty($_POST["email"]) && empty($_POST["password"])) {
        echo"
            <script type='text/javascript'>
                alert('Email and Password is required');
            </script>
            <script>
            window.location = '../page/registrationPage.php'
            </script>";
    }else if(empty($_POST["nama"])) {
        echo"
            <script type='text/javascript'>
                alert('Nama is required');
            </script>
            <script>
            window.location = '../page/registrationPage.php'
            </script>";
    }else if(empty($_POST["email"])) {
        echo"
            <script type='text/javascript'>
                alert('Email is required');
            </script>
            <script>
            window.location = '../page/registrationPage.php'
            </script>";
    }else if(empty($_POST["password"])) {
        echo"
            <script type='text/javascript'>
                alert('Password is required');
            </script>
            <script>
            window.location = '../page/registrationPage.php'
            </script>";
    }else {
        if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
            echo"
                <script type='text/javascript'>
                    alert('Invalid Email format');
                </script>
                <script>
                window.location = '../page/registrationPage.php'
                </script>";
        } else {
            $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $code = md5($email.date('Y-m-d'));
    
        $sql = "SELECT * FROM users where email='$email'";
        $query = mysqli_query($con,$sql);
        if(mysqli_num_rows($query) > 0){
            echo '<script>alert("Email sudah terdaftar"); window.location = "../page/registrationPage.php"</script>';
        }else {
            $sql = "INSERT INTO users (nama,email,password,verif_code)VALUES('$nama','$email','$password','$code')";
            $query = mysqli_query($con,$sql);
    
            //Create a new PHPMailer instance
            $mail = new PHPMailer;
    
            //Tell PHPMailer to use SMTP
            $mail->isSMTP();
    
            //Enable SMTP debugging
            // SMTP::DEBUG_OFF = off (for production use)
            // SMTP::DEBUG_CLIENT = client messages
            // SMTP::DEBUG_SERVER = client and server messages
            $mail->SMTPDebug = SMTP::DEBUG_OFF;
    
            //Set the hostname of the mail server
            $mail->Host = 'smtp.gmail.com';
            // use
            // $mail->Host = gethostbyname('smtp.gmail.com');
            // if your network does not support SMTP over IPv6
    
            //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
            $mail->Port = 465;
    
            //Set the encryption mechanism to use - STARTTLS or SMTPS
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    
            //Whether to use SMTP authentication
            $mail->SMTPAuth = true;
    
            //Username to use for SMTP authentication - use full email address for gmail
            $mail->Username = 'aingmart8@gmail.com';
    
            //Password to use for SMTP authentication
            $mail->Password = 'pandemi789';
    
            //Set who the message is to be sent from
            $mail->setFrom('no-reply@aingmart.com', 'Aingmart');
    
            //Set an alternative reply-to address
            //$mail->addReplyTo('replyto@example.com', 'First Last');
    
            //Set who the message is to be sent to
            $mail->addAddress($email, $nama);
    
            //Set the subject line
            $mail->Subject = 'Verification Account - Aingmart';
    
            //Read an HTML message body from an external file, convert referenced images to embedded,
            //convert HTML into a basic plain-text alternative body
            $body = "Hi, ".$nama."<br>Plase verify your email before you can access our website : <br> http://aingmart.xyz/confirmEmail.php?code=".$code;
            $mail->Body = $body;
            //Replace the plain text body with one created manually
            $mail->AltBody = 'Verification Account';
    
            //send the message, check for errors
            if (!$mail->send()) {
                echo 'Mailer Error: '. $mail->ErrorInfo;
            } else {
                echo
                    '<script>alert("Registration Success, Check Your Email For Verification"); window.location = "../index.php"</script>';
                //Section 2: IMAP
                //Uncomment these to save your message in the 'Sent Mail' folder.
                #if (save_mail($mail)) {
                #    echo "Message saved!";
                #}
            }
    
        }
            }
    }
    }else {
        echo
            '<script>window.history.back()</script>';
    }

?>