<?php
class Votacion
{
    private $titulo;
    public $candidatos = [];

    function __construct($titulo)
    {
        $this->titulo = $titulo;
    }
    function registrar($candidato)
    {
        foreach ($this->candidatos as $nombre => $votos) {
            if ($nombre == $candidato) {
                return "Candidato ya registrado";
            }
        }
        $this->candidatos[$candidato] = 0;
        return "registro exitoso";
    }
    function votar($candidato)
    {
        foreach ($this->candidatos as $nombre => $votos) {
            if ($nombre == $candidato) {
                $this->candidatos[$candidato]++;
                return "Voto registrado";
            }
        }
        return "Candidato no encontrado";
    }
    function ganador()
    {
        $mayor= 0;
        $ganador = "";
        foreach ($this->candidatos as $nombre => $votos) {
            if ($votos>$mayor ) {
                $mayor = $votos;
                $ganador = $nombre;
                
            }
        }
        return $ganador;
    }

    function totalVotos()
    {
        $total = 0;
        foreach ($this->candidatos as $votos) {
            $total += $votos;
        }
        return $total;
    }
    function resultados()
    {
        $html = "<h1>Eleccion : $this->titulo</h1>";
        $html .= '<table border="1" style="border-collapse: collapse; width: 100px;">';
        $html .= '<tr style="background-color:green "><th>Candidato</th><th>Votos</th><th>Porcentaje</th></tr>';
        $totalVotos = $this->totalVotos();
        foreach ($this->candidatos as $nombre => $votos) {
            $porcentaje = ($votos / $totalVotos) * 100;
            if ($this->ganador() == $nombre) {
                $html .= "<tr style='background-color:#F39C12'><td>$nombre</td><td>$votos</td><td>" . $porcentaje . "%</td></tr>";
            } else {
                $html .= "<tr><td>$nombre</td><td>$votos</td><td>" . $porcentaje . "%</td></tr>";
            }
            
        }
        $html .= '</table>';
        return $html;
    }
}
