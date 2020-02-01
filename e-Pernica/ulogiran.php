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
    <div class="wrapper-main2">
        <div class="meni">
            <ul>
                <li class="izbor">Test alert!</li>
                <li class="izbor">Iznenađenja</li>
                <li class="izbor">InfoProf</li>
            </ul>
        </div>

        <div class="sredisnji">
            <h1>The City</h1>
            <p>Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.</p>
            <p>Resize the browser window to see how the content respond to the resizing.</p>
        </div>
        <div class="meni">
            <ul>
                <li class="izbor">Trenutni prosjek</li>
                <li class="izbor">Prosjek predmeta</li>
                <li class="izbor">Najslabija karika</li>
                <li class="izbor">Neopravdani!</li>
            </ul>
        </div>
    </div>


</main>

<?php
require "footer.php";
?>