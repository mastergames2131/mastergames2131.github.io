<!DOCTYPE html>
<html>
<head>
    <title>Ngrohja Globale</title>
    <link rel="stylesheet" type="text/css" href="Stili.css"> 
    <style>
    
        #forma-container {
            width: 50%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input, textarea {
            margin-bottom: 16px;
            padding: 8px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php

$counterFile = 'visitor_count.txt';


function incrementVisitorCount($counterFile) {
$count = 0;


if (file_exists($counterFile)) {

$count = (int) file_get_contents($counterFile);
 }


$count++;


file_put_contents($counterFile, $count);

return $count;
}

$visitorCount = incrementVisitorCount($counterFile);


echo "You are visitor number: " . $visitorCount;
?>
    <table border="1">
        <tr>
            <td>
                <h1>Ngrohja Globale</h1>
                <p>NGROHJA GLOBALE NJE KERCENIM REAL PER TERE NJERZIMIN</p>
                 <p>Ngrohja globale njihet edhe si efekti serë për shkak se gazet që grumbullohen mbi tokë e kthejnë planetin të ngjashëm me një serë. Duke e kllapuar nxehtësinë pranë sipërfaqes së tokës, efekti sere po ngroh planetin dhe po kërcënon mjedisin.
                    Frika aktuale, lidhet me faktin se ngrohja globale po ndodh me një shpejtësi të paparë. Modelet kompjuterike po parashikojnë se deri në fund të shekullit XXI temperaturat do të rriten me disa gradë (tre gradë). Ndërkohë shkencëtarët po përpiqen të zbulojnë se sa shpejt po rriten temperaturat, dhe çfarë do të ndodhë si rezultat i kësaj rritjeje. Nëse temperaturat do të rriten me të vërtetë shumë, rezultati më i dukshëm do të jetë se disa pjesë të akujve polar do të shkrihen duke shkaktuar ngritjen e nivelit te detit botëror, e cila do të ishte katastrofike për disa shtete.Ishuj të tërë do të zhdukeshin dhe miliona banorë të tyre do të duhet të zhvendosen diku tjetër.Përmbytjet do të ndodhin përgjate brigjeve të deteve në të gjithë botën, duke zhvendosur akoma më shumë njerëz dhe duke shkaktuar dëmtime të të mbjellave. Ngrohja globale do të sjellë ndryshim të ciklit të qarkullimit global ujor si dhe nuk përjashtohen ndryshime të menjëhershme të klimës, që do të demostrohen me shfaqje të shpeshta të fenomeneve ekstreme të motit: ciklone, shira të fuqishme, përmbytje, thatësira. Ngrohja globale, nëse nuk do të kontrollohet do të shkaktojë probleme katastrofike me pasoja shëndetsore, mjedisore, ekonomike, dhe politike. Kostua e këtyre pasojave do të jetë shumë më e madhe se sa kostua e parandalimit të tyre.</p>
                <img src="Planet.fire.jpg" alt="Ngrohja Globale" width="300" height="200" onclick="hapFaqen()">

            </td>
            <td>
                <h1>Menu</h1>
                <ul>
                
                    <li><a href="Akulli shrihet.php">Akulli shkrihet</a></li>
                    <li><a href="Varferi.php">Varfëri</a></li>
                    <li><a href="Shpyllezimi.php">Shpyllezimi</a></li>
                </ul>
            </td>
        </tr>
        <table border="1">
            <tr>
                <td>
                    <h2>Cilet jane shkaktaret e Ngrohjes Globale?</h2>
                    <p>Shkencetaret, per dekada me rradhe, kane kryer studime per te gjetur shkaktaret e ngrohjes globale. Ata kane studiuar ciklet dhe ngjarjet natyrore te cilat ndikojne ne ndryshimet klimatike.
                        Kombet e Bashkuara formuan nje prej grupeve me te specializuara te shkencetareve, te quajtur Paneli Nderqeveritar per Ndryshimet Klimatike, te cilet u angazhuan qe te studionin dhe te analizonin shkaqet dhe pasojat e ngrohjes globale.</p>
                        <table>
                            <tr>
                                <td>
                                    <h2>1.Leshimet ne atmosfere te dioksidit te karbonit nga djegia e karburanteve fosile me origjine bimore</h2>
<p>Varesia jone gjithnje e ne rritje nga energjia e krijuar nga djegia e qymyrit dhe e karburanteve me origjine bimore, ben qe sasia e dioksidit te karbonit te leshuar ne atmosfere te jete shume e madhe.</p>
                                    <tr>
            <td colspan="2">
                                  <h2>Nese doni te beheni pjese e komunitetit tone per te qene sa me ekologjike,plotesoni te dhenat si me poshte</h2>
<br>
<br>
<div id="forma-container">
        <h1>Forma e Përdoruesit</h1>
        <form action="procesuesi.php" method="post">
            <label for="emri">Emri:</label>
            <input type="text" name="emri" id="emri"> <br>
 
            <label for="mbiemri">Mbiemri:</label>
            <input type="text" name="mbiemri" id="mbiemri"> <br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email"> <br>

            <label for="mesazhi">Mesazhi:</label>
            <textarea name="mesazhi" id="mesazhi" rows="4" cols="50"></textarea>

            <input type="submit" value="Dërgo"> <br>
        </form>
    </div>
            </td>
        </tr>
        <tr >
            <td  colspan="3" id="footer">
                <p id="footer_p">&copy; 2023 Live News</p>
            </td>
        </tr>
    </table>
    <script>
        function hapFaqen() {
            window.open('https://sq.wikipedia.org/wiki/Toka', '_blank');
        }
    </script>    
</body>
</html>
