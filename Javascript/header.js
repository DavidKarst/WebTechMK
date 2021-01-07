// JavaSkript fuer den Header
/* Inhalt:  Suchleiste
            Menuebutton in mobiler Ansicht
            Ausnahmebehandlung am Breakpoint
            Navigationsleiste immer an oberer Bildschirmkante (class sticky)
            Dropdown der Speisekarte

*/

// Funktion der Suchleiste um Seiten zu suchen
function sucheSeite(){
   var suchLeiste = document.getElementById("Suchleiste");
   var suchWort = suchLeiste.value.toUpperCase();
   switch(suchWort){   
       case "HOME":
            window.location.href = "../index.php";
            break;
        case "ÜBER UNS":
            window.location.href = "../about.php";
            break;
        case "SPEISEKARTE":
            window.location.href = "../HTML/Speisekarte_Pizza.php";
            break;
        case "GETRÄNKE":
            window.location.href = "../HTML/Speisekarte_Getränke.php";
            break;
        case "PIZZA":            
            window.location.href = "../HTML/Speisekarte_Pizza.php";
            break;
        case "PASTA":
            window.location.href = "../HTML/Speisekarte_Pasta.php";
            break;
        case "CORONA INFOS":
            window.location.href = "../HTML/CoronaPage.php";
            break;
        case "CORONA":
            window.location.href = "../HTML/CoronaPage.php";
            break;
        case "KONTAKTE":
            window.location.href = "../HTML/standort.php";
            break;
        case "RESERVIERUNGEN":
            window.location.href = "../HTML/reservierungen.php";
            break;
        case "GÄSTEBUCH":
            window.location.href = "../HTML/Gästebuch.php";
            break;
        case "BILDERGALERIE":
            window.location.href = "../HTML/Galerie.php";
            break;
        case "EVENTS":
            window.location.href = "../HTML/events.php";
            break;
        default: 
        alert("Ihre gesuchte Seite konnte leider nicht gefunden werden. \nIhr Suchwort: "+suchLeiste.value) 
        
    }
    return false; // wird benoetigt um die Eigenschaften von <form> zu unterdruecken

}


// MenueButton in moblier Ansicht
function MenueButtonFkt(){
    // die Elemente der Navigationsliste in Variable speichern
    var listElem = document.getElementsByClassName("navListElem");
    
    // pruefen, ob die Liste angezeigt wird oder nicht
    if(listElem[1].style.display == 'none' || listElem[1].style.display == ''){
        // aufklappen
        for(let i =1; i<listElem.length; i++){
            listElem[i].style.display = 'block';
        }
    }
    else{
        // zuklappen        
        for(var i =1; i<listElem.length; i++){
            listElem[i].style.display = '';
        } 
    } 
    return false;
}


// Funktion, damit sich die Navbar beim Breakpoint richtig verhaellt
    // erkennt Veraenderung der Groesse des Fensters
    window.addEventListener('resize',ResponsiveMenue);
    /* Bei Veraenderung wird das Menue aufgeklappt bei ueber 1450px 
       und zugeklappt bei unter 1450px */
    function ResponsiveMenue(){
        // Die Navigationsliste in Variable speichern
        var listElem = document.getElementsByClassName("navListElem");
        // pruefen, ob die Liste angezeigt wird oder nicht
        if (window.matchMedia("(min-width: 1450px)").matches) {
            for(let i =1; i<listElem.length; i++){
                listElem[i].style.display = '';
            }
        }
        else{        
            for(var i =1; i<listElem.length; i++){
                listElem[i].style.display = 'none';
            } 
        }
    }


// Funktion, damit Navigationsleiste immer oben angezeigt wird
    // erkennt ob der Nutzer die Seite scrollt
    window.onscroll = function() {stickyNavbar()};    

    // die Navigationsleiste in Variable speichern
    var navbar = document.getElementById("navbar");

    // den Abstand der Navbar zur oberen Kante des Bildschirmes auslesen    
    var hoeheNavbar = navbar.offsetTop;
        /* bei Veraenderung der Bildschirmbreite, kann sich die Hoehe
           der Ueberschrift aendern => hoeheNavbar muss aktualisiert werden*/
        window.addEventListener('resize',hoeheUeberschrift);
        function hoeheUeberschrift(){
            if( window.pageYOffset < hoeheNavbar ){
                hoeheNavbar = navbar.offsetTop; 
            }    
        }
    
    // das div mit allen Hauptinhalten der Seite
    var inhalte = document.getElementsByClassName('inhalte');

   // gibt und nimmt die Klasse ".sticky" dem nav-Tag,
   // wenn dieser die obere Kante des Bildschirmes erreicht bzw. verlaesst
    function stickyNavbar() {       
        if (window.pageYOffset >= hoeheNavbar) {
            navbar.classList.add("sticky")
            // Gleichmaeßiger Uebergang der Inhalte
            inhalte[0].style.paddingTop = "46px";
        } else {
            navbar.classList.remove("sticky");
            // Gleichmaeßiger Uebergang der Inhalte
            inhalte[0].style.paddingTop = "0px";
        }  
    }





// Beim drücken auf "Speisekarte" wird der Dropdown geoeffnet und bleibt offen
function MenueSpeisekarteDropdown(){
    // Dropdown der Speisekarte in Variable Speichern
    var dropElem = document.getElementById("dropdown-content"); 
    // pruefen, ob der Dropdown angezeigt wird oder nicht  
    if(dropElem.style.display == 'none' || dropElem.style.display == ''){ 
        //aufklappen
        dropElem.style.display = 'block';        
    }
    else{
        //zuklappen
        dropElem.style.display = '';
    } 
    
}



