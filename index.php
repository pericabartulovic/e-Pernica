<?php
require "header.php";
?>
<div>
        <?php
        if (isset($_SESSION['userId'])) {
            echo '<form class="form-inline" action="includes/logout.inc.php" method="post">
                        <button class="btn btn-outline-info my-2 my-sm-0" type="submit" name="logout-submit">Logout</button>
                        </form>';
        } /* else {
            echo '<form class="form-inline" action="includes/login.inc.php" method="post">
                        <input class="form-control mr-sm-2" type="text" name="mailuid" placeholder="korisničko ime...">
                        <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="lozinka...">
                        <button class="btn btn-outline-info" type="submit" name="login-submit">Login</button>
                        </form>
                        <a id="signupbutton" href="signup.php">Registracija</a>';
        } */
        ?>
    </div>



    </nav>
</header>
<main>
    

</main>

<?php
require "footer.php";
?>




