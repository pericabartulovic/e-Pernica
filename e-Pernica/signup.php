<?php
require "header.php";
?>
</nav>
</header>
<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h4 class="signup-form-button">Registriraj se:</h4>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyfields") {
                    echo '<p style="margin-left: 5px; color: crimson">Popunite sva polja!</p>';
                } elseif ($_GET["error"] == "invaliduidmail") {
                    echo '<p style="margin-left: 5px; color: crimson">Neispravno korisničko ime i lozinka!</p>';
                } elseif ($_GET["error"] == "invaliduid") {
                    echo '<p style="margin-left: 5px; color: crimson">Neispravna forma imena i prezimena!</p>';
                } elseif ($_GET["error"] == "invalidmail") {
                    echo '<p style="margin-left: 5px; color: crimson">Neispravan e-mail format!</p>';
                } elseif ($_GET["error"] == "passwordcheck") {
                    echo '<p style="margin-left: 5px; color: crimson">Vaše lozinke se ne podudaraju!</p>';
                } elseif ($_GET["error"] == "usertaken") {
                    echo '<p style="margin-left: 5px; color: crimson">Korisnik već postoji! Dodajte slovo ili broj po želji.</p>';
                }
              } 
              elseif (isset($_GET["signup"])) {
                  if ($_GET["signup"] == "success") {
                    echo '<p style="margin-left: 5px; color: forestgreen">Registracija uspješna!</p> 
                    <a class="btn btn-outline-info btn-sm" href="index.php">Na prijavu...</a>
                    <style type="text/css">#sakrij{display:none;}</style>';
                  }   
              }        
            ?>
            <form id="sakrij" action="includes/signup.inc.php" method="post">
                <div class="form-group">
                    <input type="text" name="ucImePrez" placeholder="Ime i prezime">
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
                    <button type="submit" class="btn btn-outline-info btn-sm" name="signup-submit">Signup</button>
                </div>
            </form>
        </section>
    </div>
</main>

<?php
require "footer.php";
?>