<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>100 Pages</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="https://portfolio.rickyweeksjr.opalstacked.com/">Portfolio</a>

    <!-- Toggler/collapsible Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/projects/myguests">My Guests</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/projects/movies">Movie Tracker</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/projects/100">100 Pages</a>
            <li class="nav-item">
                <a class="nav-link" href="/projects/states">50 States</a>
            </li>
        </ul>
    </div>
</nav>

<?php
if (!isset($_POST['generatepages'])) {
?>

<form action="index.php" method="POST">
    <button type="submit" name="generatepages" class="btn btn-warning" style="margin: 10px;">Generate Pages</button>
</form>

<?php
} else {
    $x = 1;

    while ($x <= 100) {
        $byitself = $x * $x;
        $next = $x + 1;
        $prev = $x - 1;
        $myfile = fopen("pages/" . $x . ".html", "w") or die("Unable to open file!");
        $txt = <<<EOF
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page $x</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="https://portfolio.rickyweeksjr.opalstacked.com/">Portfolio</a>
      
        <!-- Toggler/collapsible Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/projects/myguests">My Guests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/projects/movies">Movie Tracker</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/projects/100">100 Pages</a>
                </li>
            </ul>
        </div>
    </nav>
    <h1>The number is $x</h1>
    $x X $x = $byitself
<br><br>
<!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
EOF;

        $prevLink = ($x > 1) ? "<a href='$prev.html'>Previous</a> | " : "Previous | ";
        $nextLink = ($x < 100) ? "<a href='$next.html'>Next</a>" : "<span class='text-muted'>Next</span>";


        $txt .= "$prevLink<a href='../index.php'>Home</a></body></html> | $nextLink";

        fwrite($myfile, $txt);
        fclose($myfile);
        $x++;
    }

    echo '<button onclick="window.location.href=\'pages/1.html\'" class="btn btn-success" style="margin: 10px;">Success! Go to page 1</button>';
}
?>

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
