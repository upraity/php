<!-- Q11. Wap to declared a cookies. -->
<?php
    // Set cookies
    setcookie("username", "SabkaCode", time() + (86400 * 30), "/"); // 86400 seconds = 1 day
    setcookie("email", "sabkacode@gmail.com", time() + (86400 * 30), "/"); // Cookie valid for 30 days
?>

    <!DOCTYPE html>
    <html>
        <head>
            <title>Cookies Example</title>
        </head>
        <body>

            <?php
                // Display a message indicating that the cookies have been set
                echo "<p>Cookies are set.</p>";

                // Retrieve and display the cookie values
                echo "<p>Username: " . $_COOKIE["username"] . "</p>";
                echo "<p>Email: " . $_COOKIE["email"] . "</p>";
            ?>

        </body>
    </html>
