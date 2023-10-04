<?php

require_once 'Cd.php';

class CdController {

    public function insertarCd($titulo, $cantante, $anio) {
        $cd = new cd();
        $cd->titulo = $titulo;
        $cd->cantante = $cantante;
        $cd->año = $anio;
        return $cd->InsertarElCdParametros();
    }

    public function modificarCd($id, $titulo, $cantante, $anio) {
        $cd = new cd();
        $cd->id = $id;
        $cd->titulo = $titulo;
        $cd->cantante = $cantante;
        $cd->año = $anio;
        return $cd->ModificarCdParametros();
    }

    public function borrarCd($id) {
        $cd = new cd();
        $cd->id = $id;
        return $cd->BorrarCd();
    }

    public function listarCds() {
        return cd::TraerTodoLosCds();
    }

    public function buscarCdPorId($id) {
        $retorno = cd::TraerUnCd($id);
        if($retorno === false) { // Validamos que exista y si no mostramos un error
            $retorno =  ['error' => 'No existe ese id'];
        }
        return $retorno;
    }

    public function buscarCdPorIdYAnio($id, $anio) {
        return cd::TraerUnCdAnioParamNombre($id, $anio);
    }
}
