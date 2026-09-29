<?php
$abcdario = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
function posicion($letra)
{
    $abcdario = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    for ($i = 0; $i < count($abcdario); $i++) {
        if ($letra == $abcdario[$i])
            return $i;
    }
}

$texto = $_GET["texto"];
$d = $_GET["desplazamiento"];
$mayusculas = strtoupper($texto);
echo "a. texto en mayusculas:" . $mayusculas."<br>";

// version 1 sin nada extraño
$cifrado="";
for ($i = 0; $i < strlen($mayusculas); $i++) {
    $pos=posicion($mayusculas[$i]);
    $desp=($pos+$d) % 26;
    $letracifrada=$abcdario[$desp];
    $cifrado.=$letracifrada;

}
echo "b. texto cifrado",$cifrado,"<br>";


// version 2 ord  y chr
$cifrado="";
for ($i = 0; $i < strlen($mayusculas); $i++) {
    $pos=ord($mayusculas[$i]);
    
    $desp=((($pos+$d)-65)%26)+65;
    //echo $desp ;
    $letracifrada=chr($desp);
    //echo chr(90);
    $cifrado.=$letracifrada;

}
echo "b. texto cifrado",$cifrado,"<br>";

?>
<table border="1" style="border-collapse: collapse;">
    <tr>
        <td>Original</td>
        <?php for ($i=0;$i<strlen($mayusculas);$i++)
        {
            ?>
            <td style="background-color: #BBD7EE;"><?php echo $mayusculas[$i];?></td>
            <?php
        }
        ?>
    </tr>
       <tr>
        <td>Cifrado</td>
        <?php for ($i=0;$i<strlen($mayusculas);$i++)
        {
            ?>
            <td style="background-color: #F8CBAD;"><?php echo $cifrado[$i];?></td>
            <?php
        }
        ?>
    </tr>
</table>
