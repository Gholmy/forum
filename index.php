<?php


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Free Bulma template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>

<body>

<!-- START NAV -->
<nav class="navbar is-light">
    <div class="container">
        <div class="navbar-brand">
            <div class="navbar-burger burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div id="navMenu" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="index.php">
                    Home
                </a>
            </div>

        </div>
    </div>
</nav>
<!-- END NAV -->
<div class="container">
    <div class="columns">
        <div class="column is-3 ">
            <aside class="menu is-hidden-mobile">

                <ul class="menu-list">
                    <li><a class="is-active">Raw data when is active</a></li>
                    <li><a>Raw data</a></li>
                    <li><a>Raw data</a></li>
                </ul>

            </aside>
        </div>
        <div class="column is-9">
            <section class="hero is-info welcome is-small">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">
                            Hello, $username.
                        </h1>
                        <h2 class="subtitle">
                            I hope you are having a great day!
                        </h2>
                    </div>
                </div>
            </section>
            <section class="info-tiles">
                <div class="tile is-ancestor has-text-centered">
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">Z tabulky číslo kolik je zaregistrovaných userů</p>
                            <p class="subtitle">Users</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">

                                <?php

                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "forum";

                                // Create connection
                                $conn = mysqli_connect($servername, $username, $password, $dbname);
                                // Check connection
                                if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                $sql = "SELECT COUNT(id) FROM thread";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        foreach ($row as $records){
                                            echo $records . "<br>";
                                        }
                                    }
                                } else {
                                    echo "0 results";
                                }

                                mysqli_close($conn);
                                ?>

                            </p>
                            <p class="subtitle">Threads</p>
                        </article>
                    </div>
                </div>
            </section>
            <div class="columns">
                <div class="column is-6">
                    <div class="card events-card">
                        <header class="card-header">
                            <p class="card-header-title">
                                Topics
                            </p>
                            <a href="#" class="card-header-icon" aria-label="more options">
                  <span class="icon">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </span>
                            </a>
                        </header>
                        <div class="card-table">
                            <div class="content">
                                <table class="table is-fullwidth is-striped">
                                    <tbody>

                                    <?php

                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "forum";

                                    // Create connection
                                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                                    // Check connection
                                    if (!$conn) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }

                                    $sql = "SELECT title FROM thread";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                            foreach ($row as $records){
                                                ?>
                                                <tr>
                                                    <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                    <td>
                                                        <?php echo $records . "<br>";?>
                                                    </td>
                                                    <td class="level-right"><a class="button is-small is-primary" href="#">Action</a></td>
                                                </tr>

                                                <?php
                                            }
                                        }
                                    } else {
                                        echo "0 results";
                                    }

                                    mysqli_close($conn);
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-6">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">
                                Search
                            </p>
                            <a href="#" class="card-header-icon" aria-label="more options">
                  <span class="icon">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </span>
                            </a>
                        </header>
                        <div class="card-content">
                            <div class="content">
                                <div class="control has-icons-left has-icons-right">
                                    <input class="input is-large" type="text" placeholder="">
                                    <span class="icon is-medium is-left">
                      <i class="fa fa-search"></i>
                    </span>
                                    <span class="icon is-medium is-right">
                      <i class="fa fa-check"></i>
                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script async type="text/javascript" src="../js/bulma.js"></script>
</body>

</html>