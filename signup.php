<?php
require "header.php";
?>

<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h1 class="sigup_form_button">Registriraj se:</h1>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyfields") {
                    echo '<p style="margin-left: 5px; color: crimson">Popunite sva polja!</p>';
                } elseif ($_GET["error"] == "invaliduidmail") {
                    echo '<p style="margin-left: 5px; color: crimson">Neispravno korisničko ime i lozinka!</p>';
                } elseif ($_GET["error"] == "invaliduid") {
                    echo '<p style="margin-left: 5px; color: crimson">Neispravno korisničko ime!</p>';
                } elseif ($_GET["error"] == "invalidmail") {
                    echo '<p style="margin-left: 5px; color: crimson">Neispravan e-mail!</p>';
                } elseif ($_GET["error"] == "passwordcheck") {
                    echo '<p style="margin-left: 5px; color: crimson">Vaše lozinke se ne podudaraju!</p>';
                } elseif ($_GET["error"] == "usertaken") {
                    echo '<p style="margin-left: 5px; color: crimson">Korisničko ime se već koristi!</p>';
                }
              } 
              elseif (isset($_GET["signup"])) {
                  if ($_GET["signup"] == "success") {
                    echo '<p style="margin-left: 5px; color: forestgreen">Registracija uspješna!</p>';
                  }   
              }        
            ?>
            <form action="includes/signup.inc.php" method="post">
                <div class="form-group">
                    <input type="text" name="uid" placeholder="Korisničko ime">
                </div>
                <div class="form-group">
                    <input type="text" name="mail" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <input type="password" name="pwd" placeholder="Lozinka">
                </div>
                <div class="form-group">
                    <input type="password" name="pwd-ponovi" placeholder="Ponovite lozinku">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-light" name="signup-submit">Signup</button>
                </div>
            </form>
        </section>
    </div>
</main>

<?php
require "footer.php";
?>