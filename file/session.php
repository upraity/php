<!-- Q10. Wap to declare a session.-->
<?php
    // Start the session
    session_start();

    // Set session variables
    $_SESSION["username"] = "SabkaCode";
    $_SESSION["email"] = "sabkacode@gmail.com";
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <title>Session Example</title>
        </head>
        <body>

            <?php
                // Display a message indicating that the session has been set
                echo "<p>Session variables are set.</p>";

                // Display the session variables
                echo "<p>Username: " . $_SESSION["username"] . "</p>";
                echo "<p>Email: " . $_SESSION["email"] . "</p>";
            ?>
        </body>
    </html>
