<?php
    /* Email address which will get the message */
    $to = "banket@bamboobar.su";

    /* subject (message theme) */
    $subject = 'Бронирование караоке';

    /* form fields (getting by attr name) */
    $name = $_POST['caraoke-name'];
    $phone = $_POST['caraoke-phone'];
    $people = $_POST['caraoke-number-of-people'];
    $date = $_POST['caraoke-date'];
    $time = $_POST['caraoke-time'];
    $comments = $_POST['caraoke-comments'];
    
    /* message */
    $body = '
        <html>
        <head>
         <title>' . $subject . '</title>
        </head>
        <body>'
           .' <p>Имя: <strong>' . $name . '</strong></p>'
           .' <p>Телефон: <strong>' . $phone . '</strong></p>'
           .' <p>Количество людей: <strong>' . $people . '</strong></p>'
           .' <p>Дата: <strong>' . $date . '</strong></p>'
           .' <p>Время: <strong>' . $time . '</strong></p>'
           .' <p>Комментарий: <strong>' . $comments . '</strong></p>'
        .'</body>
        </html>';

    /* For sending HTML email you can set up headers Content-type. */
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<b>Message send!</b>";
    } else {
        echo "Send error!";
    }
?>