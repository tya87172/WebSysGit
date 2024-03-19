<!DOCTYPE html>
<html lang="en">

    
<body>
    <?php
        include "inc/nav.inc.php";
        include "inc/header.inc.php";
        include "inc/head.inc.php";
    ?>
    <main class="container">
        <h1>Member Login</h1>
        <p>
            For existing members log in here. For new members, please go to the
            <a href="register.php">Member Registration page</a>.
        </p>
        <form action="process_login.php" method="post">
            <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input required maxlength="45" type="email" id="email" name="email" class="form-control"
            placeholder="Enter email">
            </div>
            <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input required type="password" id="pwd" name="pwd" class="form-control"
            placeholder="Enter password">
            </div>
            <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </main>
    <?php
        include "inc/footer.inc.php";
    ?>
</body>
</html>