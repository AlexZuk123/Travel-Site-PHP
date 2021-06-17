<div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6 left">
        <!-- section A: for form Countries -->
        <?php
        $link = connect();
        $sel = 'select * from countries';
        $res = mysqli_query($link, $sel);
        echo '<form action="index.php?page=4 method="post" class="input-group" id="formcountry">';
        echo '<table class="table table-striped">';
        while ($row = mysqli_fetch_array($res, MYSQLI_NUM)) {
            echo '<tr>';
            echo '<td>' . $row[0] . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '<td><input type="checkbox" name="cb' . $row[0] . '"></td>';
            echo '</tr>';
        }
        echo '</table>';
        mysqli_free_result($res);
        echo '<input type="text" name="country" placeholder="Country">';
        echo '<input type="submit" name="addcountry" value="Add" class="btn btn-sm btn-info">';
        echo '<input type="submit" name="delcountry" value="Delete" class="btn btn-sm btn-warning">';
        echo '</form>';
        if (isset($_POST['addcountry'])) {
            $country = trim(htmlspecialchars($_POST['country']));
            if ($country == "") exit();
            $ins = 'insert into countries(country) values("' . $country . '")';
            mysqli_query($link, $ins);
            echo "<script>";
            echo "window.location=document.URL;";
            echo "</script>";
        }
        if (isset($_POST['delcountry'])) {
            foreach ($_POST as $k => $v) {
                if (substr($k, 0, 2) == "cb") {
                    $idc = substr($k, 2);
                    $del = 'delete from countries where
            i d=' . $idc;
                    mysqli_query($link, $del);
                }
            }
            echo "<script>";
            echo "window.location=document.URL;";
            echo "</script>";
        }

        ?>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 right">
        <!-- section B: for form Cities -->
        <?php
        connect();
        $sel = 'select * from cities';
        $res = mysqli_query($link, $sel);
        echo '<form action="index.php?page=4 method="post" class="input-group" id="formcity">';
        echo '<table class="table table-striped">';
        while ($row = mysqli_fetch_array($res, MYSQLI_NUM)) {
            echo '<tr>';
            echo '<td>' . $row[0] . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '<td><input type="checkbox" name="cb' . $row[0] . '"></td>';
            echo '</tr>';
        }
        echo '</table>';
        mysqli_free_result($res);
        echo '<input type="text" name="city" placeholder="City">';
        echo '<input type="submit" name="addcity" value="Add" class="btn btn-sm btn-info">';
        echo '<input type="submit" name="delcity" value="Delete" class="btn btn-sm btn-warning">';
        echo '</form>';

        if (isset($_POST['addcity'])) {
            $country = trim(htmlspecialchars($_POST['city']));
            if ($city == "") exit();
            $ins = 'insert into cities(city) values("' . $city . '")';
            mysqli_query($link, $ins);
            echo "<script>";
            echo "window.location=document.URL;";
            echo "</script>";
        }
        if (isset($_POST['delcity'])) {
            foreach ($_POST as $k => $v) {
                if (substr($k, 0, 2) == "cb") {
                    $idc = substr($k, 2);
                    $del = 'delete from cities where i d=' . $idc;
                    mysqli_query($link, $del);
                }
            }
            echo "<script>";
            echo "window.location=document.URL;";
            echo "</script>";
        }
        ?>
    </div>
</div>
<hr />
<div class="row">
    <div class=" col-sm-6 col-md-6 col-lg-6 left ">
        <!-- section C: for form Hotels -->
        <?php
        connect();
        $sel = 'select * from hotels';
        $res = mysqli_query($link, $sel);
        echo '<form action="index.php?page=4 method="post" class="input-group" id="formhotel">';
        echo '<table class="table table-striped">';
        while ($row = mysqli_fetch_array($res, MYSQLI_NUM)) {
            echo '<tr>';
            echo '<td>' . $row[0] . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '<td><input type="checkbox" name="cb' . $row[0] . '"></td>';
            echo '</tr>';
        }
        echo '</table>';
        mysqli_free_result($res);
        echo '<input type="text" name="hotel" placeholder="Hotel">';
        echo '<input type="submit" name="addhotel" value="Add" class="btn btn-sm btn-info">';
        echo '<input type="submit" name="delhotel" value="Delete" class="btn btn-sm btn-warning">';
        echo '</form>';

        if (isset($_POST['addhotel'])) {
            $country = trim(htmlspecialchars($_POST['hotel']));
            if ($city == "") exit();
            $ins = 'insert into hotels(hotel) values("' . $hotel . '")';
            mysqli_query($link, $ins);
            echo "<script>";
            echo "window.location=document.URL;";
            echo "</script>";
        }
        if (isset($_POST['delhotel'])) {
            foreach ($_POST as $k => $v) {
                if (substr($k, 0, 2) == "cb") {
                    $idc = substr($k, 2);
                    $del = 'delete from hotels where i d=' . $idc;
                    mysqli_query($link, $del);
                }
            }
            echo "<script>";
            echo "window.location=document.URL;";
            echo "</script>";
        }
        ?>
    </div>
    <div class=" col-sm-6 col-md-6 col-lg-6 right ">
        <!-- section D: for form Images -->
        <?php
        connect();
        $sel = 'select * from images';
        $res = mysqli_query($link, $sel);
        echo '<form action="index.php?page=4 method="post" class="input-group" id="formimage">';
        echo '<table class="table table-striped">';
        while ($row = mysqli_fetch_array($res, MYSQLI_NUM)) {
            echo '<tr>';
            echo '<td>' . $row[0] . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '<td><input type="checkbox" name="cb' . $row[0] . '"></td>';
            echo '</tr>';
        }
        echo '</table>';
        mysqli_free_result($res);
        echo '<input type="text" name="image" placeholder="Image">';
        echo '<input type="submit" name="addimage" value="Add" class="btn btn-sm btn-info">';
        echo '<input type="submit" name="delimage" value="Delete" class="btn btn-sm btn-warning">';
        echo '</form>';

        if (isset($_POST['addimage'])) {
            $country = trim(htmlspecialchars($_POST['image']));
            if ($city == "") exit();
            $ins = 'insert into images(image) values("' . $image . '")';
            mysqli_query($link, $ins);
            echo "<script>";
            echo "window.location=document.URL;";
            echo "</script>";
        }
        if (isset($_POST['delimage'])) {
            foreach ($_POST as $k => $v) {
                if (substr($k, 0, 2) == "cb") {
                    $idc = substr($k, 2);
                    $del = 'delete from images where i d=' . $idc;
                    mysqli_query($link, $del);
                }
            }
            echo "<script>";
            echo "window.location=document.URL;";
            echo "</script>";
        }
        ?>
    </div>
</div>