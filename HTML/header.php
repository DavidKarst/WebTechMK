<link rel="stylesheet" href=../CSS/header.css>
<link rel="stylesheet" href=../CSS/main.css>

<header>
    <!--Ueberschrift der Seite-->
    <h1 id="headline"> City Pizza - Restaurant und Lieferservice</h1>

    <!--Navigationsleiste als Liste-->
    <nav id="navbar">
        <ul id="navbarListe">
            <!--Menuebutton und Suchleiste-->
            <li id="firstElem" class="navListElem">

                <form id="MenueButton">
                    <input type="image" src="../image/Menuebutton.png" alt="MenueButton" onclick="return MenueButtonFkt()">
                    <!--return wird benoetigt um die Eigenschaften von <form> zu unterdruecken-->
                </form>

                <form id="SuchElement">
                    <div id="SuchElementRand">
                        <input type="text" id="Suchleiste" placeholder="Suche...">
                        <input type="image" id="SuchButton" onclick="return sucheSeite()" src="../image/Menuelupe.jpeg" alt="Button mit Bild von Lupe">
                        <!--return wird benoetigt um die Eigenschaften von <form> zu unterdruecken-->
                    </div>
                </form>

            </li>
            <li class="navListElem"><a href="./index.php" tabindex="1">Home</a></li>
            <li class="navListElem"><a href="./about.php" tabindex="2">Über uns</a></li>
            <!--Seiten der Speisekarte als Dropdown-->
            <li class="dropdownAkt navListElem">

                <button class="dropbtn" onclick="MenueSpeisekarteDropdown()">Speisekarte</button>
                <div id="dropdown-content">
                    <a href="./Speisekarte_Getränke.php"> Getränke </a>
                    <a href="./Speisekarte_Pizza.php"> Pizza</a>
                    <a href="./Speisekarte_Pasta.php"> Pasta</a>
                </div>

            </li>
            <li class="navListElem"><a href="./CoronaPage.php" tabindex="4">Corona Infos</a></li>
            <li class="navListElem"><a href="./standort.php" tabindex="5">Kontakt</a></li>
            <li class="navListElem"><a href="./reservierungen.php" tabindex="6">Reservierungen</a></li>
            <li class="navListElem"><a href="./Gästebuch.php" tabindex="7">Gästebuch</a></li>
            <li class="navListElem"><a href="./Galerie.php" tabindex="8">Bildergalerie</a></li>
            <li class="navListElem"><a href="./events.php" tabindex="9">Events</a></li>
        </ul>
    </nav>
</header>

<!-- JS muss am Ende des body stehen, da sonst die IDs und Tags der HTML-Elemente noch nicht existieren,
         was zu Fehlern fuehrt-->
<script src="../Javascript/header.js"></script>