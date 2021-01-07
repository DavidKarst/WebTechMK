<!DOCTYPE html>
<html lang="de">

<head>
    <title>CityPizza/Speisekarte/Nudeln</title>
    <link rel="stylesheet" href="../CSS/styleSpeisekarte.css">
</head>

<body>
    <?php include './header.php'; ?>
    <main class="inhalte Rahmen">
        <div>
            <div class="tabellen">
                <table id="Pastatabelle">
                    <caption>
                        Pasta
                        <p>
                            Zu allen Nudeln besteht die M&ouml;glichkeit auf Vollkornnudeln zu wechseln.
                        </p>
                    </caption>
                    <colgroup id="pastaspaltengruppe">
                        <col id="nummer">
                        <col id="gericht">
                        <col class="preis">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>Nr.</th>
                            <th>
                                Gericht
                                <input type="text" id="sucheGericht0" onkeyup="getGerichtSuche(0-0)" placeholder="Gericht/Zutat Suche...">
                            </th>
                            <th>Preis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="vegetarisch">
                            <td>1.</td>
                            <td>
                                <h3>Spaghetti Napoli <em>(vegetarisch)</em></h3>
                                <p>mit Tomatensoße und Zwiebeln</p>
                            </td>
                            <td>7,50&#8364;</td>
                        </tr>
                        <tr class="vegetarisch">
                            <td>2.</td>
                            <td>
                                <h3>Spaghetti Funghi <em>(vegetarisch)</em></h3>
                                <p>mit Tomatensoße und Pilzen</p>
                            </td>
                            <td>8,00&#8364;</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>
                                <h3>Spaghetti Knoblauch</h3>
                                <p>mit Knoblauch, Oliven und scharfen Pepperoni</p>
                            </td>
                            <td>8,00&#8364;</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>
                                <h3>Spaghetti Bolognese</h3>
                                <p>mit Fleischsoße</p>
                            </td>
                            <td>8,20&#8364;</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>
                                <h3>Spaghetti Carbonara</h3>
                                <p>mit Formfleischvorderschinken und Sahne</p>
                            </td>
                            <td>8,80&#8364;</td>
                        </tr>
                        <tr class="vegetarisch">
                            <td>6.</td>
                            <td>
                                <h3>Spaghetti Picante <em>(vegetarisch)</em></h3>
                                <p>mit scharfer Tomatensoße, Zwiebeln, Paprika und Oliven</p>
                            </td>
                            <td>8,70&#8364;</td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>
                                <h3>Spaghetti City</h3>
                                <p>mit Fleischsoße, Krabben, Zwiebeln, Paprika und Knoblauch</p>
                            </td>
                            <td>9,20&#8364;</td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>
                                <h3>Spaghetti Della Casa</h3>
                                <p>mit Fleischsoße, Schinken, Erbsen, Sahnesoße</p>
                            </td>
                            <td>8,90&#8364;</td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>
                                <h3>Spaghetti Rucola City</h3>
                                <p>mit Tomatensahnesoße, Krabben und Rucola</p>
                            </td>
                            <td>9,20&#8364;</td>
                        </tr>

                        <tr>
                            <td>10.</td>
                            <td>
                                <h3>Spaghetti Salmone</h3>
                                <p>mit Sahnesoße, Lachs und Spinat</p>
                            </td>
                            <td>9,90&#8364;</td>
                        </tr>
                        <tr class="vegetarisch">
                            <td>11.</td>
                            <td>
                                <h3>Spaghetti Gorgonzola <em>(vegetarisch)</em></h3>
                                <p>mit Sahnesoße und Gorgonzola</p>
                            </td>
                            <td>9,90&#8364;</td>
                        </tr>
                        <tr class="vegetarisch">
                            <td>12.</td>
                            <td>
                                <h3>Spaghetti Spnaci <em>(vegetarisch)</em></h3>
                                <p>mit Sahnesoße und Spinat</p>
                            </td>
                            <td>8,80&#8364;</td>
                        </tr>
                        <tr class="vegetarisch">
                            <td>13.</td>
                            <td>
                                <h3>Spaghetti Diavolo <em>(vegetarisch)</em></h3>
                                <p>mit Sahnesoße, Pilzen und Broccoli</p>
                            </td>
                            <td>8,90&#8364;</td>
                        </tr>
                        <tr>
                            <td>14.</td>
                            <td>
                                <h3>Spaghetti Marinara</h3>
                                <p>mit Tomatensoße, Krabben, Muscheln, Scampi und Knoblauchbrötchen</p>
                            </td>
                            <td>13,20&#8364;</td>
                        </tr>
                        <tr>
                            <td>15.</td>
                            <td>
                                <h3>Penne Bolognese</h3>
                                <p>mit Fleischsoße</p>
                            </td>
                            <td>8,20&#8364;</td>
                        </tr>
                        <tr class="vegetarisch">
                            <td>16.</td>
                            <td>
                                <h3>Penne Napoli <em>(vegetarisch)</em></h3>
                                <p>mit Tomatensoße und Zwiebeln</p>
                            </td>
                            <td>7,50&#8364;</td>
                        </tr>
                        <tr>
                            <td>17.</td>
                            <td>
                                <h3>Penne Rucola City</h3>
                                <p>mit Tomatensahnesoße, Krabben und Rucola</p>
                            </td>
                            <td>9,20&#8364;</td>
                        </tr>
                        <tr>
                            <td>18.</td>
                            <td>
                                <h3>Tortellini Bolognese</h3>
                                <p>mit Fleischsoße</p>
                            </td>
                            <td>8,70&#8364;</td>
                        </tr>
                        <tr>
                            <td>19.</td>
                            <td>
                                <h3>Tortellini Carbonara</h3>
                                <p>mit Sahne und Formfleischvorderschinken</p>
                            </td>
                            <td>9,20&#8364;</td>
                        </tr>
                        <tr class="vegetarisch">
                            <td>20.</td>
                            <td>
                                <h3>Tortellini Spinacy <em>(vegetarisch)</em></h3>
                                <p>mit Sahne, Spinat, Käse und Knoblauch</p>
                            </td>
                            <td>9,20&#8364;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tabellen">
                <table id="ueberbackenePastatabelle">
                    <caption>&uuml;berbackene Pasta</caption>
                    <thead>
                        <tr>
                            <th>Nr.</th>
                            <th>
                                Gericht
                                <input type="text" id="sucheGericht1" onkeyup="getGerichtSuche(1-0)" placeholder="Gericht/Zutat Suche...">
                            </th>
                            <th>Preis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>
                                <h3>Spaghetti Al Forno</h3>
                                <p>mit Fleischsoße und überbackenem Käse</p>
                            </td>
                            <td>8,90&#8364;</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>
                                <h3>Spaghetti City Al Forno</h3>
                                <p>mit Fleischsoße, Krabben, Pilzen, Zwiebeln, Paprika, Knoblauch und überbackenem Käse</p>
                            </td>
                            <td>10,50&#8364;</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>
                                <h3>Penne Al Forno</h3>
                                <p>mit Fleischsoße und überbackenem Käse</p>
                            </td>
                            <td>8,90&#8364;</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>
                                <h3>Tortellini Al Forno</h3>
                                <p>mit Fleischsoße und überbackenem Käse</p>
                            </td>
                            <td>9,50&#8364;</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>
                                <h3>Tortellini Carbonara Al Forno</h3>
                                <p>mit Formfleischvorderschinken, Sahne und überbackenem Käse</p>
                            </td>
                            <td>10,50&#8364;</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>
                                <h3>Lasagne</h3>
                                <p>Nudelteiglagen mit Fleischsoße und überbackenem Käse</p>
                            </td>
                            <td>8,90&#8364;</td>
                        </tr>
                        <tr class="vegetarisch">
                            <td>7.</td>
                            <td>
                                <h3>Lasagne Verdura <em>(vegetarisch)</em></h3>
                                <p> mit Tomatensoße, Gemüse und überbackenem Käse</p>
                            </td>
                            <td>8,90&#8364;</td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>
                                <h3>Cannelloni</h3>
                                <p>Teigrollen mit Fleischfüllung und überbackenem Käse</p>
                            </td>
                            <td>8,70&#8364;</td>
                        </tr>
                        <tr class="vegetarisch">
                            <td>9.</td>
                            <td>
                                <h3>Cannelloni Verdura <em>(vegetarisch)</em></h3>
                                <p>Teigrollen mit Gemüsefüllung und überbackenem Käse</p>
                            </td>
                            <td>8,70&#8364;</td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>
                                <h3>Combinazione</h3>
                                <p>Mischung aller Nudelsorten mit Fleischsoße und überbackenem Käse</p>
                            </td>
                            <td>10,00&#8364;</td>
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