<?php

// If request is a form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
    $lastName = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
    $company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
    $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    $city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
    $state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
    $zip = filter_var($_POST['zip'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telephone = filter_var($_POST['telephone'], FILTER_SANITIZE_STRING);
    $comments = filter_var($_POST['comments'], FILTER_SANITIZE_STRING);

    $errors = array();

    // VALIDATION

    // Check first_name is not blank
    if (0 === preg_match("/\S+/", $firstName)) {
        $errors['firstName'] = "Please enter a first name.";
    }

    // Check last_name is not blank
    if (0 === preg_match("/\S+/", $lastName)) {
        $errors['lastName'] = "Please enter a last name.";
    }

    // Check first and last names for identical input
    if ($firstName == $lastName) {
        if (!empty($firstName) || !empty($lastName)) {
            $errors[] = "First and last names can not match.";
        }
    }

    // Check email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Please enter a valid email address.";
    }

    // If there are validation errors, render this HTML
    if (!empty($errors)) {
        ?><!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style type="text/css">
            .error-list {
                width: 475px;
                margin: 50px auto 0;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif;
                text-align: center;
            }
            ul {
                margin: 50px 0;
            }
            li {
                color: red;
                font-weight: bold;
            }
            .notice {
                font-size: 18px;
                text-transform: uppercase;
            }
            .action {
                font-weight: bold;
            }
            </style>
            <title>Your form has errors!</title>
        </head>
        <body>

            <div class="error-list">
                <p class="notice">Your form contained the following errors:</p>
                <ul>
                    <?php foreach($errors as $error) { ?>
                        <li><?php echo($error) ?></li>
                    <?php } ?>
                </ul>
                <p class="action">Press your browser's back button to correct your entries.</p>
            </div>

        </body>
        </html><?php
    } else { // If there are no errors

        // Email headers
        $headers   = array();
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        $headers[] = 'X-Mailer: PHP/' . phpversion();

        // From
        $headers[] = 'From: NAME <example@example.com>';

        // CC/BCC
        // $headers[] = 'Cc: Example CC <cc@example.com>';
        // $headers[] = 'Bcc: Example BCC <bcc@example.com>';

        // Reply-to
        $headers[] = "Reply-To: {$name} <{$email}>";

        // Recipients
        $to   = array();
        $to[] = "exmaple@example.com";
        $to[] = "exmaple2@example.com";

        // Subject
        $subject = "EMAIL SUBJECT HERE";

        // Email body. There must be NO WHITESPACE after <<<EOD and start of email HTML
        $message = <<<EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Title</title>
</head>
<body>
    <table width="99%" border="0" cellpadding="1" cellspacing="0" bgcolor="#EAEAEA">
        <tr>
            <td>
                <table width="100%" border="0" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">
                    <tr bgcolor="#EAF2FA">
                        <td colspan="2">
                            <font style="font-family: sans-serif; font-size:12px;"><strong>Name</strong></font>
                        </td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td width="20">&nbsp;</td>
                        <td>
                            <font style="font-family: sans-serif; font-size:12px;">$firstName $lastName</font>
                        </td>
                    </tr>
                    <tr bgcolor="#EAF2FA">
                        <td colspan="2">
                            <font style="font-family: sans-serif; font-size:12px;"><strong>Email</strong></font>
                        </td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td width="20">&nbsp;</td>
                        <td>
                            <font style="font-family: sans-serif; font-size:12px;"><a href="mailto:$email">$email</a></font>
                        </td>
                    </tr>
                    <tr bgcolor="#EAF2FA">
                        <td colspan="2">
                            <font style="font-family: sans-serif; font-size:12px;"><strong>Phone</strong></font>
                        </td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td width="20">&nbsp;</td>
                        <td>
                            <font style="font-family: sans-serif; font-size:12px;">$telephone</font>
                        </td>
                    </tr>
                    <tr bgcolor="#EAF2FA">
                        <td colspan="2">
                            <font style="font-family: sans-serif; font-size:12px;"><strong>Address</strong></font>
                        </td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td width="20">&nbsp;</td>
                        <td>
                            <font style="font-family: sans-serif; font-size:12px;">$address<br/>$city, $state $zip</font>
                        </td>
                    </tr>
                    <tr bgcolor="#EAF2FA">
                        <td colspan="2">
                            <font style="font-family: sans-serif; font-size:12px;"><strong>Comments</strong></font>
                        </td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td width="20">&nbsp;</td>
                        <td>
                            <font style="font-family: sans-serif; font-size:12px;">$comments</font>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
EOD;

        // Send mail
        $sent = mail(implode(',', $to), $subject, $message, implode("\r\n", $headers));

        // Result message
        if ($sent) {
            header('Location: thank-you.php');
        } else {
            echo "Mail failed to send.";
        }

    }

} ?>