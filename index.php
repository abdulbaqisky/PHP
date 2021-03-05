<?php
    if( $_GET["location"] )
    {
    $location = $_GET["location"];
    header( "Location:$location" );
    exit();
    }
    setcookie("name", "John Watkin", time()+3600, "/","", 0);
    setcookie("age", "36", time()+3600, "/", "", 0);
    echo $_COOKIE["name"]. "<br />";
    /* is equivalent to */
    echo $HTTP_COOKIE_VARS["name"]. "<br />";
    echo $_COOKIE["age"] . "<br />";
    /* is equivalent to */
    echo $HTTP_COOKIE_VARS["name"] . "<br />";
    if( isset($_COOKIE["name"]))
    echo "Welcome " . $_COOKIE["name"] . "<br />";
    else
    echo "Sorry... Not recognized" . "<br />";
    setcookie("name");
    if( isset($_COOKIE["name"]))
    echo "Welcome " . $_COOKIE["name"] . "<br />";
    else
    echo "Sorry... Not recognized" . "<br />";
    session_start();
    if( isset( $_SESSION['counter'] ) )
    {
    $_SESSION['counter'] += 1;
    }
    else
    {
    $_SESSION['counter'] = 1;
    }
    $msg = "You have visited this page ". $_SESSION['counter'];
    $msg .= "in this session.";
    ?>
    <html>
    <body>
    <?php echo ( $msg ); ?>
    <p>Choose a site to visit :</p>
    <form action="<?php $_PHP_SELF ?>" method="GET">
    <select name="location">
    <option value="http://w3c.org">
    World Wise Web Consortium
    </option>
    <option value="http://www.google.com">
    Google Search Page
    </option>
    </select>
    <input type="submit" />
    </form>
    </body>
    </html>