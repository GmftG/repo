<html>
    <head>
        <title>My Chat!</title>
        <?php $style = ($theme == "night") ? "style-night.css" : "style.css"; ?>
        <link rel="stylesheet" href="<?php echo($style); ?>">
    </head>
    <body>
        <?php
            foreach ($messages as $message) {
                echo "<div class='message'>";
                echo "<div class='time'>" . date("d.m.Y H:i", $message['time']) . "</div>";
                echo "<div class='login'>" . htmlspecialchars($message['login']) . "</div>";
                echo "<div class='message-text'>" . htmlspecialchars($message['message']) . "</div>";
                echo "</div>";
            }
        ?>

        <form method="post">
            <input type="text" name="user_message">
            <input type="submit" value="Send">
        </from>
    </body>
</html>