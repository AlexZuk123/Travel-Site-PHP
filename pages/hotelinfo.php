<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Info</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    include_once("functions.php");
    if (isset($_GET['hotel'])) {
        $hotel = $_GET['hotel'];
        $link = connect();
        $sel = 'select * from hotels where id=' . $hotel;
        $res = mysqli_query($link, $sel);
        $row = mysqli_fetch_array($res, MYSQLI_NUM);
        $hname = $row[1];
        $hstars = $row[4];
        $hcost = $row[5];
        $hinfo = $row[6];
        mysqli_free_result($res);
        echo '<h2 class="text-uppercase textcenter">' . $hname . '</h2>';
        echo '<div class="row"><div class="col-md-6 textcenter">';

        $sel = 'select imagepath from images where ho telid=' . $hotel;
        $res = mysqli_query($link, $sel);
        echo '<span class="label label-info">Watch our pictures</span>';
        echo '<ul id="gallery">';
        $i = 0;
        while ($row = mysqli_fetch_array($res, MYSQLI_NUM)) {
            echo ' <li><img src="../' . $row[0] . '"></li>';
        }
        mysqli_free_result($res);
        echo ' </ul>';
        for ($i = 0; $i < $hstars; $i++) {
            echo '<image src="../images/star.png">';
        }
    } else exit();
    ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>