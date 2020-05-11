<?php
setlocale(LC_ALL, 'croatian');
require "header.php";
require("includes/funkcije.inc.php");
$profesor = provjeri_profesora($konekcija);
?>

<div>
    <?php
    if (isset($_SESSION['userId'])) {
        echo '<form id="logOutGumb" class="form-inline" action="includes/logout.inc.php" method="post">
                        <button class="btn btn-outline-info my-2 my-sm-0" type="submit" name="logout-submit">Logout</button>
                        </form>';
    } else {
            echo '<div id="login_out_upozorenje2">
            <h5>
              Niste ulogirani! Idite na početni zaslon 👥 
            </h5>
        </div>';
        exit();
        }
    ?>
    <script>
        $("#gumbLoginProf").css({
            "display": "none"
        });
        $(".nav").css({
            "display": "none"
        });
    </script>
</div>
</nav>
</header>

<main>

</main>
<script src="js/prof.js"></script>
<?php
require "footer.php";
?>
<script>
    $(".footer").css({
        "position": "fixed",
        "left": "5px",
        "bottom": "0",
        "width": "100%",
        "background - color": "transparent",
        "color": "rgb(204, 200, 200)",
        "text - align": "left",
        "height": "20px",
        "font-size": "small"
    });
</script>