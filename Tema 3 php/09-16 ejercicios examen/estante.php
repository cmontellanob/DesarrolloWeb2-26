<?php
class Estante{
    private $nivel1=[];
    private $nivel2=[];
    private $nivel3=[];
    private $capacidad;
    function __construct($capacidad){
       $this->capacidad=$capacidad;
    }
    function insertar($nivel,$elemento){
        if($nivel == 1){
            if(count($this->nivel1)==$this->capacidad){
                return "Nivel1 lleno";
            }
            $this->nivel1[]=$elemento;
        }
         if($nivel == 2){
            if(count($this->nivel2)==$this->capacidad){
                return "Nivel2 lleno";
            }
            $this->nivel2[]=$elemento;
        }
         if($nivel == 3){
            if(count($this->nivel3)==$this->capacidad){
                return "Nivel3 lleno";
            }
            $this->nivel3[]=$elemento;
        }

    }
    function quitar($nivel){
        if($nivel ==1){
            if(count($this->nivel1)==0){
                return "Nivel 1 vacio";
            }
            return array_pop($this->nivel1);
        }
         if($nivel ==2){
            if(count($this->nivel2)==0){
                return "Nivel 2 vacio";
            }
            return array_pop($this->nivel2);
        }
         if($nivel ==3){
            if(count($this->nivel3)==0){
                return "Nivel 3 vacio";
            }
            return array_pop($this->nivel3);
        }

    }
    function MostrarEstante(){
        echo '<table border="1"> <tr>';
        echo'<td class="gris">Nivel 3</td>';
        for($i=0;$i<count($this->nivel3);$i++){
           echo '<td class="azul">',$this->nivel3[$i],'</td>';
        } 
        echo "</tr>";
         echo'<td class="gris">Nivel 2</td>';
        for($i=0;$i<count($this->nivel2);$i++){
           echo '<td class="amarillo">',$this->nivel2[$i],'</td>';
        } 
        echo "</tr>";
         echo'<td class="gris">Nivel 1</td>';
        for($i=0;$i<count($this->nivel1);$i++){
           echo '<td class="verde">',$this->nivel1[$i],'</td>';
        } 
        echo "</tr>";
    }
}
?>

