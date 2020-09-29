<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <title>Php Übungen</title>
</head>

<body>
    <article class="uebung01">
        <div class="uebung01-titel">
            <h1>Übung 01</h1>
        </div>


        <section class="form-div">
            <form class ="eingabe-form" action="" method="post">
                <div class="row">
                    <label for="artikel1">Artikel 1:</label>
                    <input type="text" id="artikel1" name="artikel1" value=""><br>
                </div>
                <div class="row">
                    <label for="artikel2">Artikel 2:</label>
                    <input type="text" id="artikel2" name="artikel2"><br>
                </div>
                <div class="row">
                    <label for="artikel3">Artikel 3:</label>
                    <input type="text" id="artikel3" name="artikel3"><br>
                </div>
                <div class="row button-row">
                    <button type="reset">Reset</button>
                    <button type="submit">Submit</button>
                </div>

            </form>

        </section> 

        <section class="form-div">
            <?php
            
            if (isset($_POST["artikel1"])){
                if (is_numeric($_POST["artikel1"])){
                    $ausgabe ="<p>";
                    $ausgabe .= "Artikel 1 : Nettosumme : ".number_format($_POST['artikel1']/1.2,2) ." &euro" .
                    " MwSt : ".number_format($_POST['artikel1']/0.2,2) ." &euro; ".
                    " Brutto: ".($_POST['artikel1']) ." &euro; </p>";
                } 
                else $ausgabe ="<p>Artikel 1 - NaN</p>";  
                echo $ausgabe;
            } else
            echo "<p>Keine Angaben - nichts zu berechnen.</p>";
            ?>
            

            <?php
            if (isset($_POST["artikel2"])){
                if (is_numeric($_POST["artikel2"])){
                    $ausgabe ="<p>";
                    $ausgabe .= "Artikel 2 : Nettosumme : ".number_format($_POST['artikel2']/1.2,2) ." &euro" .
                    " MwSt : ".number_format($_POST['artikel2']/0.2,2) ." &euro; ".
                    " Brutto: ".($_POST['artikel2']) ." &euro; </p>";
                }   
                else $ausgabe ="<p>Artikel 1 - NaN</p>";  
                echo $ausgabe;
            }else
            echo "<p>Keine Angaben - nichts zu berechnen.</p>";
            ?>

            <?php
            if (isset($_POST["artikel3"])){
                if (is_numeric($_POST["artikel3"])){
                    $ausgabe ="<p>";
                    $ausgabe .= "Artikel 3 : Nettosumme : ".number_format($_POST['artikel3']/1.2,2) ." &euro" .
                    " MwSt : ".number_format($_POST['artikel3']/0.2,2) ." &euro; ".
                    " Brutto: ".($_POST['artikel3']) ." &euro; </p>";
                }   
                else $ausgabe ="<p>Artikel 1 - NaN</p>";  
                echo $ausgabe;
            }else
            echo "<p>Keine Angaben - nichts zu berechnen.</p>";
            ?>
        </section>
    </article> <!-- End of section Übung01-->


<!----------------------------------- Übung 2  --------------------------------------->

    <article class="uebung02">
        <div class="uebung02-titel">
            <h1>Übung 02</h1>
        </div>


        <section class="form-div-2">
            <form class ="eingabe-form-2" action="" method="post">
                <div class="row">
                    <label for="quadrat-basis">Quadrat von :</label>
                    <input type="text" id="quadrat-basis" name="quadrat-basis" value=""><br>
                </div>
                <div class="row button-row">
                    <button type="reset">Reset</button>
                    <button type="submit">Submit</button>
                </div>
            </form>

        </section> 

        <section class="form-div-2">
            <?php
            
            if (isset($_POST["quadrat-basis"])){
                if (is_numeric($_POST["quadrat-basis"])){
                    $ausgabe ="<p>";
                    $ausgabe .= "Quadrat von ".($_POST['quadrat-basis']) ." ist" .($_POST['quadrat-basis']*$_POST['quadrat-basis'])." </p>";
                } 
                else $ausgabe ="<p>Quadrat basis - NaN</p>";  
                echo $ausgabe;
            }else
            echo "Keine Angabe - nichts zu berchnen.";
            ?>
        </section>
    </article> <!-- End of article Übung02-->


    <!----------------------------------- Übung 3  --------------------------------------->

    <article class="uebung03">
        <div class="uebung03-titel">
            <h1>Übung 03</h1>
        </div>


        <section class="form-div-3">
            <form class ="eingabe-form-3" action="" method="post">
                <div class="row">
                    <p> Was haben Sie getankt?</p>
                    <input type="radio" id="normal" name="benzin-type" value="1">
                    <label for="normal">Benzin: Normal (Preis: 1,35 €) </label><br>
                    <input type="radio" id="super" name="benzin-type" value="2">
                    <label for="super">Super (Preis: 1,40 €) </label><br>
                </div>
                <div class="row">
                    <label for="menge-getankt-ue3">Menge (l): </label><br>
                    <input type="text" id="menge-getankt-ue3" name="menge-getankt-ue3" value="">
                </div>
                <div class="row button-row">
                    <button type="reset">Reset</button>
                    <button type="submit">Submit</button>
                </div>
            </form>

        </section> 

        <section class="form-div-3">
            <?php
            
           // var_dump ($_POST["benzin-type"]);
            //var_dump ($_POST["menge-getankt-ue3"]);

            if (!isset($_POST["benzin-type"]) || !isset($_POST["menge-getankt-ue3"])){
                echo "Bitte benzin type auswählen und menge eingeben.";
            }
            else{
                echo "<p> Sie haben ".$_POST["menge-getankt-ue3"]." liter ".($_POST["benzin-type"]=="1"?"Benzin-Normal für €1.35 / lt ":"Benzin-Super für €1.40 / lt ")." getankt </p>";
                echo "<p> Die Betankung hat €".($_POST["benzin-type"]=="1"?1.35:1.40)*$_POST["menge-getankt-ue3"]." gekostet</p>";
            }
            ?>
            
        </section>
    </article> <!-- End of article Übung03-->



    <!----------------------------------- Übung 4  --------------------------------------->

    <article class="uebung04">
        <div class="uebung04-titel">
            <h1>Übung 04</h1>
        </div>


        <section class="form-div-4">
            <form class ="eingabe-form-4" action="" method="post">
                <div class="row">
                    <label for="normal">Bitte "N" für Benzin Normal oder "S" für Benzin-Super eingeben</label><br>
                    <input type="text" id="normal" name="benzin-NS"  pattern="[NS]{1}" value="N">
                </div>
                <div class="row">
                    <label for="menge-getankt-ue4">Menge (l): </label><br>
                    <input type="text" id="menge-getankt-ue4" name="menge-getankt-ue4" value="">
                </div>
                <div class="row button-row">
                    <button type="reset">Reset</button>
                    <button type="submit">Submit</button>
                </div>
            </form>

        </section> 

        <section class="form-div-4">
            <?php
            
           // var_dump ($_POST["benzin-type"]);
            //var_dump ($_POST["menge-getankt-ue3"]);

            if (!isset($_POST["benzin-NS"]) || !isset($_POST["menge-getankt-ue4"])){
                echo "Bitte benzin type auswählen und menge eingeben.";
            }
            else{
                echo "<p> Sie haben ".$_POST["menge-getankt-ue4"]." liter ".($_POST["benzin-NS"]=="N"?"Benzin-Normal für €1.35 / lt ":"Benzin-Super für €1.40 / lt ")." getankt </p>";
                echo "<p> Die Betankung hat €".($_POST["benzin-NS"]=="N"?1.35:1.40)*$_POST["menge-getankt-ue4"]." gekostet</p>";
            }
            ?>
            
        </section>
    </article> <!-- End of article Übung04-->



    

    <!----------------------------------- Übung 5  --------------------------------------->

    <article class="uebung05">
        <div class="uebung05-titel">
            <h1>Übung 05</h1>
        </div>


        <section class="form-div-5">
            <form class ="eingabe-form-5" action="" method="post">
                <div class="row">
                    <label for="normal-5">Bitte "N" für Benzin Normal oder "S" für Benzin-Super eingeben</label><br>
                    <input type="text" id="normal-5" name="benzin-NS-5"  pattern="[NS]{1}" value="" placeholder="bitte N oder S eingeben">
                </div>
                <div class="row">
                    <label for="menge-getankt-ue5">Menge (l): </label><br>
                    <input type="text" id="menge-getankt-ue5" name="menge-getankt-ue5" value="">
                </div>
                <div class="row button-row">
                    <button type="reset">Reset</button>
                    <button type="submit">Submit</button>
                </div>
            </form>

        </section> 

        <section class="form-div-5">
            <?php
            
           // var_dump ($_POST["benzin-type"]);
            //var_dump ($_POST["menge-getankt-ue3"]);

            if (!isset($_POST["benzin-NS-5"]) || !isset($_POST["menge-getankt-ue5"])){
                echo "Bitte benzin type auswählen und menge eingeben.";
            }
            else{
                echo "<p> Sie haben ".$_POST["menge-getankt-ue5"]." liter ".($_POST["benzin-NS-5"]=="N"?"Benzin-Normal für €1.35 / lt ":"Benzin-Super für €1.40 / lt ")." getankt. </p>";
                echo "<p>Für Mengen über 100LT wird eine rabatte von 10% abgerechnet.Sie haben ".$_POST["menge-getankt-ue5"]." getankt. Sie bekommen ".(($_POST["menge-getankt-ue5"] >= 100)? "10%":"0%"  ) . " rabatt.</p>";
                echo "<p> Die Betankung hat €".($_POST["benzin-NS-5"]=="N"?1.35:1.40)*$_POST["menge-getankt-ue5"]*($_POST["menge-getankt-ue5"] >= 100? 0.9:1 )." gekostet</p>";
            }
            ?>
            
        </section>
    </article> <!-- End of article Übung05-->


     <!----------------------------------- Übung 6  --------------------------------------->

     <article class="uebung06">
        <div class="uebung06-titel">
            <h1>Übung 06</h1>
        </div>


        <section class="form-div-6">
            <form class ="eingabe-form-6" action="" method="post">
                <div class="row">
                    <p> Was haben Sie getankt?</p>
                </div>
                <div class="row">
                   
                    <input type="radio" id="normal" name="benzin-type-6" value="1">
                    <label for="normal">Benzin: Normal (Preis: 1,35 €) </label><br>
                    <input type="radio" id="super" name="benzin-type-6" value="2">
                    <label for="super">Super (Preis: 1,40 €) </label><br>
                    <input type="radio" id="diesel" name="benzin-type-6" value="3">
                    <label for="diesel">Diesel (Preis: 1,10 €) </label><br>

                </div>
                <div class="row">
                    <label for="menge-getankt-ue6">Menge (l): </label><br>
                    <input type="text" id="menge-getankt-ue6" name="menge-getankt-ue6" value="">
                </div>
                <div class="row button-row">
                    <button type="reset">Reset</button>
                    <button type="submit">Submit</button>
                </div>
            </form>

        </section> 

        <section class="form-div-6">
            <?php
            
           // var_dump ($_POST["benzin-type"]);
            //var_dump ($_POST["menge-getankt-ue3"]);

            if (!isset($_POST["benzin-type-6"]) || !isset($_POST["menge-getankt-ue6"])){
                echo "Bitte benzin type auswählen und menge eingeben.";
            }
            else{
                switch ($_POST["benzin-type-6"]){
                    case "1":
                        $preisProLiter = 1.35;
                    break;

                    case "2":
                        $preisProLiter = 1.4;
                    break;

                    case "3":
                        $preisProLiter = 1.1;
                    break;


                    default:
                    break;
                }
                
                echo "<p> Sie haben ".$_POST["menge-getankt-ue6"]." liter getankt. Costet ".$preisProLiter * $_POST["menge-getankt-ue6"] ."</p>";
               
            }
            ?>
            
        </section>
    </article> <!-- End of article Übung06-->



    
     <!----------------------------------- Übung 7  --------------------------------------->

     <article class="uebung07">
        <div class="uebung07-titel">
            <h1>Übung 07</h1>
        </div>


        <section class="form-div-7">
            
                <div class="row">
                <?php
                echo "<p>Erste Reihe: ";
                      for($i = 0; $i< 30 ;$i=$i+4){
                          echo 13+$i."  ";
                      }
                echo "</p>";
                ?>

                <?php
                echo "<p>Zweite Reiche: ";
                      for($i = 0; $i> -5 ;$i-=0.5){
                          echo 2-$i."  ";
                      }
                echo "</p>";
                ?>

                <?php
                echo "<p>Dritte Reiche: ";
                      for($i = 2; $i<= 6 ;$i+=1){
                          echo $i."000  ";
                      }
                echo "</p>";
                ?>

                <?php
                echo "<p>Dritte Reiche: ";
                      for($i = 5; $i<= 13 ;$i+=2){
                          echo "Z".$i."  ";
                      }
                echo "</p>";
                ?>

                <?php
                echo "<p>Vierte Reiche: ";
                      for($i = 1; $i<= 3 ;$i+=1){
                          echo "a b".$i."  ";
                      }
                echo "</p>";
                ?>

                <?php
                echo "<p>Fünfte Reiche: ";
                      for($i = 0; $i<= 3 ;$i+=1){
                          echo "c".($i>0?$i:"")."2 c".($i>0?$i:"")."3 ";
                      }
                echo "</p>";
                ?>

               <?php
                echo "<p>Sechste Reiche: ";
                      for($i = 13; $i<= 45 ;$i+=4){
                          echo $i." ";
                      }
                echo "</p>";
                ?>


              </div>
            
        </section> 

       
            <?php
          
          
            ?>
            
        
    </article> <!-- End of article Übung07-->


<!----------------------------------- Übung 8  --------------------------------------->

    <article class="uebung08">
        <div class="uebung08-titel">
            <h1>Übung 08</h1>
        </div>


        <section class="form-div-8">
            
            <div class="row">
                <?php
                $gesamtPunktePlayer1 = 0;
                $gesamtPunktePlayer2 = 0;
                
                while ($gesamtPunktePlayer1<=25 && $gesamtPunktePlayer2<=25){
                    $gesamtPunktePlayer1+=rand(1,6);
                    $gesamtPunktePlayer2+=rand(1,6);
                    echo "New round: Player 1 has ".$gesamtPunktePlayer1." points, Player2 has ".$gesamtPunktePlayer2." points</br>";
                }
                // check for the winner
                if($gesamtPunktePlayer1==25 || $gesamtPunktePlayer2==25){
                    echo "<strong>Winner is player ".($gesamtPunktePlayer1==25?"Player1":"Player2"."</strong>");    
                }else{
                echo "<strong>Winner is player ".($gesamtPunktePlayer1<$gesamtPunktePlayer2?"Player1 ":"Player2 "."</strong>");
                echo "Player 1: ".$gesamtPunktePlayer1."; Player2 :".$gesamtPunktePlayer2;
                }
                ?>
            </div>
            
        </section> 

       
            <?php
          
          
            ?>
            
        
    </article> <!-- End of article Übung07-->




</body>

</html>