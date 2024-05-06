<html>
    <head>
        <title>My Chat!</title>
        <?php $style = ($theme == "night") ? "style-night.css" : "style.css"; ?>
        <link rel="stylesheet" href="<?php echo($style); ?>">
    </head>
    <body>
        <form class="login_form" method="post">
            <label for="name_input">введите никнейм:</label>
            <input id="name_input" type="text" name="user_login"><br><br>
            <label for="captcha_input">подтвердите, что вы не робот:</label>
            <img src="<?php echo $captcha ?>"><br>
            <input id="captcha_input" type="text" name="captcha"><br>
            <input type="submit" value="Login">
        </from>
    </body>
</html>