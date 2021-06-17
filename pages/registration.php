<?php include_once('functions.php') ?>
<?php
if (!isset($_POST['submit'])) {
?>
<form action="index.php?page=3" method="POST">
    <p>
    <h2>Registration Form</h2>
    </p>
    <div class="mb-3">
        <label for="uLog" class="form-label">Login *:</label>
        <input type="text" class="form-control" id="uLog" name="userLogin" required placeholder="LOGIN">
    </div>

    <div class="mb-3">
        <label for="uPass1" class="form-label">Password *:</label>
        <input type="password" class="form-control" name="userPass1" id="uPass1" required placeholder="PASSWORD">
    </div>

    <div class="mb-3">
        <label for="uPass2" class="form-label">Confirm Password *:</label>
        <input type="password" class="form-control" name="userPass2" id="uPass2" required
            placeholder="CONFIRM PASSWORD">
    </div>

    <div class="mb-3">
        <label for="uMail" class="form-label">Email address *:</label>
        <input type="email" class="form-control" name="userMail" id="uMail" required placeholder="...@gmail.com">
    </div>

    <p><input type="submit" class="btn btn-primary" name="submit" value="REGISTER"></p>
</form>
<?php
} else {
    echo 'You are welcome, ' . $_POST["userName"] . '<br/>';
    register($_POST["userLogin"], $_POST["userMail"], $_POST["userPass1"]);
}
?>