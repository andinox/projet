<header>
    <div class="logo border-button">
        <img class="logo_img" src="./img/paris_saclay.png" alt="rien">
        <h1 class="logo_name">MEDIATHEQUE DE MOULON</h1>
    </div>
    <?php
    if (!isset($re)) {
        echo "<div class="recherche border-button">
                <div class="back_recherche">
                    <input class="area_input" type="text">
                    <div class="recherche_svg"><img  src="./img/loop.svg" alt=""></div>
                    <img class="param" src="./img/Frame.svg" alt="">
                </div>
            </div>";
    } else {
        echo $re;
    }        
    ?>        
    <div class="lang border-button">
        <img src="./img/lang.svg" alt="">
        <section class="list_lang">
            <div class="cone"></div>
            <div class="list_pup">
                <div class="title_lang">
                    <p>LANGUES</p>
                </div>
                <div>
                    <img src="./img/fr.svg" alt="">
                    <p>FRANCAIS</p>
                </div>
                <div>
                    <img src="./img/usa.svg" alt="">
                    <p>ENGLISH</p>
                </div>
            </div>
        </section>
    </div>
    <div class="livre_list border-button">
        <img src="./img/books.svg" alt="">
        <section class="list_lang">
            <div class="cone"></div>
            <div class="list_pup">
                <?php
                foreach($types as $type) {
                    echo "<div><p>$type</p></div>";
                }
                ?>
            </div>

        </section>
    </div>
    <div class="connexion child_none border-button">
        <h1 class="connect" onclick="location.href='./login'" > CONNECTION</h1>
        <img src="./img/7309683.png" alt="">
        <h1><?php echo $name ?></h1> <!-- Le nom prenom de l'utilisateur -->
        <div id="menu" class="menu open">
            <img src="./img/menu.svg" alt="">
            <img src="./img/Vector.svg" alt="">
        </div>
    </div>
    <div id="liste_menu" class="liste_menu close">
        <div>
            <img src="./img/profil.svg" alt="" >
            <h1>Mon Profil</h1>
        </div>
        <div>
            <img src="./img/reservation.svg" alt="" >
            <h1>Mes Reservations</h1>
        </div>
        <div>
            <img src="./img/leave.svg" alt="" >
            <h1>Deconnection</h1>
        </div>
    </div>
</header>