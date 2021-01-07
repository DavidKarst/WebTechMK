<!DOCTYPE html>
<html lang="de">

<head>
    <title>CityPizza/Speisekarte/Pizza</title>
    <link rel="stylesheet" href="../CSS/styleSpeisekarte.css">



</head>

<body>
    <?php include './header.php'; ?>
    <main class="inhalte Rahmen">
        <div class="tabellen">
            <table id="Pizzatabelle">
                <caption>
                    Pizza
                    <p>
                        Zu allen Pizzen besteht die M&ouml;glichkeit eines veganen K&auml;seersatzes.
                    </p>
                </caption>
                <colgroup id="pizzaspaltengruppe">
                    <col id="nummer">
                    <col id="gericht">
                    <col class="preis">
                    <col class="preis">
                </colgroup>
                <thead>
                    <tr>
                        <th>Nr.</th>
                        <th>
                            Gericht
                            <input type="text" id="sucheGericht0" onkeyup="getGerichtSuche(0)" placeholder="Gericht/Zutat Suche...">
                        </th>
                        <th>Preis (26cm)</th>
                        <th>Preis (30cm)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="vegetarisch">
                        <td>1.</td>
                        <td>
                            <h3>Margherita <em>(vegetarisch)</em></h3>
                            <p>mit Tomatensoße und K&auml;se</p>
                        </td>
                        <td>5,80&#8364;</td>
                        <td>6,80&#8364;</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>
                            <h3>Salami</h3>
                            <p>mit Tomatensoße und Salami</p>
                        </td>
                        <td>6,80&#8364;</td>
                        <td>7,80&#8364;</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>
                            <h3>Peperoni</h3>
                            <p>mit Peperoniwurst</p>
                        </td>
                        <td>6,80&#8364;</td>
                        <td>7,80&#8364;</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>
                            <h3>Pikant</h3>
                            <p>mit Pilzen, Salami und Peperoniwurst</p>
                        </td>
                        <td>7,30&#8364;</td>
                        <td>8,30&#8364;</td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>
                            <h3>M A C</h3>
                            <p>mit Hackfleisch und Zwiebeln</p>
                        </td>
                        <td>7,30&#8364;</td>
                        <td>8,30&#8364;</td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>
                            <h3>Prosciutto</h3>
                            <p>mit Formfleischvorderschinken</p>
                        </td>
                        <td>6,80&#8364;</td>
                        <td>7,80&#8364;</td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>
                            <h3>Hawaii</h3>
                            <p>mit Formfleischvorderschinken und Ananas</p>
                        </td>
                        <td>7,20&#8364;</td>
                        <td>8,20&#8364;</td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>
                            <h3>Tonno</h3>
                            <p>mit Thunfisch und Zwiebeln</p>
                        </td>
                        <td>7,50&#8364;</td>
                        <td>8,50&#8364;</td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>
                            <h3>Vierjahreszeiten</h3>
                            <p>mit Pilzen, Peperoniwurst, Formfleischvorderschinken und Oliven</p>
                        </td>
                        <td>7,40&#8364;</td>
                        <td>8,40&#8364;</td>
                    </tr>
                    <tr class="vegetarisch">
                        <td>10.</td>
                        <td>
                            <h3>Popeye <em>(vegetarisch)</em></h3>
                            <p>mit Spinat und Tomaten</p>
                        </td>
                        <td>7,30&#8364;</td>
                        <td>8,30&#8364;</td>
                    </tr>
                    <tr>
                        <td>11.</td>
                        <td>
                            <h3>Amigo</h3>
                            <p>mit Pilzen, Salami, Hackfleisch und Zwiebeln</p>
                        </td>
                        <td>7,40&#8364;</td>
                        <td>8,40&#8364;</td>
                    </tr>
                    <tr>
                        <td>12.</td>
                        <td>
                            <h3>Casanova</h3>
                            <p>mit Pilzen, 2 Spiegeleiern und Formfleischvorderschinken</p>
                        </td>
                        <td>7,40&#8364;</td>
                        <td>8,40&#8364;</td>
                    </tr>
                    <tr>
                        <td>13.</td>
                        <td>
                            <h3>Tropica</h3>
                            <p>mit Bananen, Ananas, Formfleischvorderschinken und Eiern</p>
                        </td>
                        <td>7,90&#8364;</td>
                        <td>8,50&#8364;</td>
                    </tr>
                    <tr>
                        <td>14.</td>
                        <td>
                            <h3>Indiana</h3>
                            <p>mit Mais, Formfleischvorderschinken, Paprika, Pilzen</p>
                        </td>
                        <td>7,40&#8364;</td>
                        <td>8,40&#8364;</td>
                    </tr>
                    <tr class="vegetarisch">
                        <td>15.</td>
                        <td>
                            <h3>Quattro Formaggi <em>(vegetarisch)</em></h3>
                            <p>mit 4 Sorten K&auml;se</p>
                        </td>
                        <td>7,60&#8364;</td>
                        <td>8,60&#8364;</td>
                    </tr>
                    <tr>
                        <td>16.</td>
                        <td>
                            <h3>Calzone</h3>
                            <p>mit Salami, Peperoniwurst, Pilzen, Eiern und Formfleischvorderschinken</p>
                        </td>
                        <td>7,60&#8364;</td>
                        <td>8,60&#8364;</td>
                    </tr>
                    <tr>
                        <td>17.</td>
                        <td>
                            <h3>Romana</h3>
                            <p>mit Pilzen, Salami, Peperoniwurst, Formfleischvorderschinken und Tomatenscheiben</p>
                        </td>
                        <td>7,50&#8364;</td>
                        <td>8,50&#8364;</td>
                    </tr>
                    <tr>
                        <td>18.</td>
                        <td>
                            <h3>Florentina</h3>
                            <p>mit Pilzen, Formfleischvorderschinken, Eiern, Artischocken, Oliven und Zwiebeln</p>
                        </td>
                        <td>7,60&#8364;</td>
                        <td>8,60&#8364;</td>
                    </tr>
                    <tr>
                        <td>19.</td>
                        <td>
                            <h3>Surprise</h3>
                            <p>mit Pilzen, Salami, Peperoniwurst, Hackfleisch, Sardellen und Zwiebeln</p>
                        </td>
                        <td>7,60&#8364;</td>
                        <td>8,70&#8364;</td>
                    </tr>
                    <tr>
                        <td>20.</td>
                        <td>
                            <h3>Bolognese</h3>
                            <p>mit Fleischsoße und K&auml;se</p>
                        </td>
                        <td>7,40&#8364;</td>
                        <td>8,40&#8364;</td>
                    </tr>
                    <tr class="vegetarisch">
                        <td>21.</td>
                        <td>
                            <h3>Vegetarier <em>(vegetarisch)</em></h3>
                            <p>mit Tomaten, Mais, Paprika, Pilzen, Zwiebeln und K&auml;se</p>
                        </td>
                        <td>7,40&#8364;</td>
                        <td>8,40&#8364;</td>
                    </tr>
                    <tr class="vegetarisch">
                        <td>22.</td>
                        <td>
                            <h3>Carprese <em>(warm und vegetarisch)</em></h3>
                            <p>mit Mozarella, Tomaten, Basilikum und Oliven&ouml;l</p>
                        </td>
                        <td>7,90&#8364;</td>
                        <td>8,90&#8364;</td>
                    </tr>
                    <tr class="vegetarisch">
                        <td>23.</td>
                        <td>
                            <h3>Bruschetta <em>(kalt und vegetarisch)</em></h3>
                            <p>mit Mozzarella, Rucola, Tomaten, Basilikum und Oliven&ouml;l</p>
                        </td>
                        <td>7,90&#8364;</td>
                        <td>8,90&#8364;</td>
                    </tr>
                    <tr>
                        <td>24.</td>
                        <td>
                            <h3>Diego</h3>
                            <p>mit Spinat, Krabben und Zwiebeln</p>
                        </td>
                        <td>8,20&#8364;</td>
                        <td>9,20&#8364;</td>
                    </tr>
                    <tr>
                        <td>25.</td>
                        <td>
                            <h3>Spaghetti</h3>
                            <p>mit Spaghetti-Bolognese</p>
                        </td>
                        <td>8,50&#8364;</td>
                        <td>9,50&#8364;</td>
                    </tr>
                    <tr>
                        <td>26.</td>
                        <td>
                            <h3>Salmone</h3>
                            <p>mit Lachs, Spinat und Knoblauch</p>
                        </td>
                        <td>8,20&#8364;</td>
                        <td>9,40&#8364;</td>
                    </tr>
                    <tr>
                        <td>27.</td>
                        <td>
                            <h3>Marinara</h3>
                            <p>mit Muscheln und Krabben</p>
                        </td>
                        <td>8,00&#8364;</td>
                        <td>9,00&#8364;</td>
                    </tr>
                    <tr>
                        <td>28.</td>
                        <td>
                            <h3>Ozeano</h3>
                            <p>mit Muscheln, Krabben, Sardellen, Thunfisch, Artischocken und Paprika</p>
                        </td>
                        <td>8,70&#8364;</td>
                        <td>9,90&#8364;</td>
                    </tr>
                    <tr>
                        <td>29.</td>
                        <td>
                            <h3>Beda</h3>
                            <p>mit Salami, Pilzen, Hackfleisch, Zwiebeln und Formfleischvorderschinken</p>
                        </td>
                        <td>7,60&#8364;</td>
                        <td>8,60&#8364;</td>
                    </tr>
                    <tr>
                        <td>30.</td>
                        <td>
                            <h3>Fantasia</h3>
                            <p>mit Salami, Peperoniwurst, Hackfleisch und Zwiebeln</p>
                        </td>
                        <td>7,50&#8364;</td>
                        <td>8,50&#8364;</td>
                    </tr>
                    <tr>
                        <td>31.</td>
                        <td>
                            <h3>Bella</h3>
                            <p>mit Salami, Peperoniwurst, Pilzen, Paprika und Zwiebeln</p>
                        </td>
                        <td>7,60&#8364;</td>
                        <td>8,60&#8364;</td>
                    </tr>
                    <tr>
                        <td>32.</td>
                        <td>
                            <h3>City</h3>
                            <p>mit Salami, Peperoniwurst, Formfleischvorderschinken, Pilzen, Hackflisch und Zwiebeln</p>
                        </td>
                        <td>7,90&#8364;</td>
                        <td>8,90&#8364;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>

        <script src="../Javascript/Speisekarte.js"></script>
    </main>
    <?php include './footer.php'; ?>
</body>

</html>