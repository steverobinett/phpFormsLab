<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Forms Lab</title>
</head>

<body>

    <main>
        <h3>PHP Forms Lab</h3>

        <form action="processContact.php" method="POST">
            <ul>
                <li>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="user_name" />
                </li>

                <li>
                    <label for="mail">Email:</label>
                    <input type="email" name="user_mail" id="email" />
                </li>

                <li>
                    <label for="msg">Message</label>
                    <textarea name="user_message" id="message" ></textarea>
                </li>
                <li>
                    <button type="submit">Send us a mssage!</button>
                </li>
            </ul>

        </form>
        <?php



        ?>

    </main>

</body>

</html>