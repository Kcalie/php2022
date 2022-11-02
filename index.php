<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="php.css"/>
        <title>php</title>
    </head>
    <body>

        <!-- include, echo & print -->
    <?php
    include("header.php");
    ?>

    <?php
    include("menu.php");
    ?>
                    <?php
                        echo "Ceci a été \"écrit\" en php<br/>";// ceci est un commentaire monoligne
                        echo 'Ceci a été "écrit" en php<br/>';
                        print "Ceci est affiché grace a print";/*moins utilisé*/ 
                        /* commentaire
                        multiligne 
                        */
                    ?>

        <!-- Variables -->
        <h1>Variables</h1>
    <?php
        $departement = "var";
        $chiffre = 83;

        echo "Le $departement est en france <br/>";/*methode 1 pas bon*/
        echo 'Le' .$departement. ' est en france <br/>';/*methode 2 bon*/
        echo $chiffre;
    ?>
        <br/>
        <br/>
        <br/>

        <!-- Calcul -->
        <p>$Nombre1 = 5 / $Nombre2 = 3</p>
    <?php  

    $nombre1 = 5;
    $nombre2 = 3;

    $addition = $nombre1 + $nombre2;
    $soustraction = $nombre1 - $nombre2;
    $multiplication = $nombre1 * $nombre2;
    $division = $nombre1 / $nombre2;
    $modulo = $nombre1 % $nombre2;

    echo 'Addition : ' .$addition.'<br/>'; // affiche 8
    echo 'Soustraction : ' .$soustraction.'<br/>'; // affiche 2
    echo 'Multiplication : ' .$multiplication.'<br/>'; // affiche 15
    echo 'Division : ' .$division.'<br/>'; // affiche 1.666667
    echo 'Modulo: ' .$modulo.'<br/>'; // affiche 2
    echo $nombre1.' + '.$nombre2.'<br/>';

  
    $addition = 20;
    $soustraction = $soustraction - $soustraction;
    $multiplication = $addition;

    echo 'Nouvelle valeur addition : '.$addition. '<br/>';
    echo 'Nouvelle valeur soustraction : '.$soustraction. '<br/>';
    echo 'Nouvelle valeur multiplication : '.$multiplication. '<br/>';
    ?>
<br/>
<?php 
$x = 2;
$y = 2;

$puissance = $x ^ $y;
echo 'puissance : ' .$puissance.'<br/>'; // affiche 0 ???????
?>
        <br/>
        <br/>
        <br/>
        <!-- Conditions  -->
<!-- Ex 01 -->
<?php 
$heuredeconnexion = 17;
if($heuredeconnexion < 18)
{
    echo "passé une bonne journée";
}
?>

        <br/>
<!-- Ex 02 -->
<?php 
$heuredeconnexion = 20;
if($heuredeconnexion < 18)
{
    echo "passé une bonne journée";
}
else
{
    echo "passé une bonne soirée";
}
?>

        <br/>
<!-- Ex 03 -->
<?php 
$heuredeconnexion = 20;
if($heuredeconnexion < 18)
{
    echo "passé une bonne journée <br/>";
    $journee = "oui";
}
else
{
    echo "passé une bonne soirée <br/>";
    $journee = "non";
}
    echo 'Fait-il jour ? La reponse est '.$journee.'.'; 
?>
        <br/><br/>
<!-- Ex 04 -->
<?php 
 $note = 12;
 if($note<10)
 {
    echo "BAD";
 }
 elseif($note==10)
 {
    echo "MID";
 }
 else
 {
    echo "GOOD";
 }
?>
<br/>
<!-- Ex 05 -->
<?php 
$note = 14;
$difficulte ="moyen";
if($note<=12 and $difficulte=="facile"){
    echo "NUL";
}
elseif($note>12 and $difficulte=="facile"){
   echo "BIEN";
}
elseif($note<=12 and $difficulte=="difficile"){
    echo "passable, c'était difficile";
}
else{
    echo "BRAVO <br/>";
}

if($difficulte =="facile" or $difficulte =="moyen"){
echo "ce controle n'etait pas difficile";
}
else{
    echo "ce controle etait dur non ?";
}
?> 

<br/><br/>
<!-- Ex 06 -->
<?php
$note = 14;
if($note == 0){
    echo "tu es nul";
}
elseif($note == 4){
    echo "c'est très mauvais";
}
elseif($note == 8){
    echo "c'est pas bon";
}
elseif($note == 12){
    echo "c'est moyen";
}
elseif($note == 16){
    echo "bien joué";
}
elseif($note == 20){
    echo "parfait";
}
else
{
    echo "je n'ai pas de commentaires pour cette note";
}

switch($note)
{
    case 0:
        echo "tu es nul";
        break; // arrete l'instruction si le php a rencontré le bon case
    case 4: 
        echo "c'est très mauvais";
        break;
    case 8: 
        echo "pas bon";
        break;
    case 12: 
        echo "moyen";
        break;
    case 16: 
        echo "bien";
        break;
    case 20: 
        echo "parfait";
        break;
    default : 
        echo "je n'ai pas de commentaires pour cette note";
}
?>
<br/><br/>
<!-- conditions astuce c 3 astuce font la meme chose la 2eme est mieux-->
<?php 
$etudiant = true;
if($etudiant == true){
    echo "Vs etes etudiant";
}
else {
    echo "vs n'etes pas etudiant";
}

if($etudiant){
    echo "vs etes etudiant";
}
else{
    echo "vs n'etes pas etudiant"; 
}

if($etudiant){
    echo "vs etes etudiant";
}
else{
    echo "vs n'etes pas etudiant"; 
}

?>
<!-- conditions astuce 4--><br/>
<?php 
$etudiant = true;
if($etudiant == true){
?>
   <p>vous etes etudiant</p>
<?php
}
?>
<!-- normal-->
<?php 
$age = 24;
if($age>=18){
    $autorisation = true;
}
else{
    $autorisation = false;
}
?>
<!-- les conditions ternaire-->
<?php 
$autorisation = ($age >=18) ? true : false;
?>
<br/><br/>
<!-- les boucles (while - do while - for - foreach-> tres souvent utilisé pour les tableaux)-->

<?php
/*$x=1;
/*while($x<=10){
    echo 'ceci est le nombre : '.$x.'.<br/>';
    $x++; // correspond à $x = $x+1
}*/

/*do{
    echo 'ceci est le nombre : '.$x.'.<br/>'; 
    $x++;
}
while($x<=10);*/
/*incrementer*/
for($x=1;$x<=10;$x++){
    echo 'ceci est le nombre : '.$x.'.<br/>';
}
/*decrementer*/
for($x=10;$x>=1;$x--){
    echo 'ceci est le nombre : '.$x.'.<br/>';
}
?>

<!-- les boucles ( foreach -> tres souvent utilisé pour les tableaux)-->


                                    <?php
                                    include("footer.php");
                                    ?>
    </body>
</html>