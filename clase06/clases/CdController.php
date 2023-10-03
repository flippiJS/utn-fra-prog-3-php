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
        return cd::TraerUnCd($id);
    }

    public function buscarCdPorIdYAnio($id, $anio) {
        return cd::TraerUnCdAnioParamNombre($id, $anio);
    }
}
