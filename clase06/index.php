<?php
require_once 'controllers/CdController.php';

$cdController = new CdController();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'listar':
                $cds = $cdController->listarCds();
                echo json_encode($cds);
                break;
            case 'buscarPorId':
                if (isset($_GET['id'])) {
                    $cd = $cdController->buscarCdPorId($_GET['id']);
                    echo json_encode($cd);
                } else {
                    echo json_encode(['error' => 'Falta el parámetro "id"']);
                }
                break;
            // Agrega más casos según las funcionalidades que desees
        }
    } else {
        echo json_encode(['error' => 'Falta el parámetro "action"']);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postData = json_decode(file_get_contents("php://input"), true);

    if (isset($postData['action'])) {
        switch ($postData['action']) {
            case 'insertar':
                if (isset($postData['titulo']) && isset($postData['cantante']) && isset($postData['anio'])) {
                    $resultado = $cdController->insertarCd($postData['titulo'], $postData['cantante'], $postData['anio']);
                    echo json_encode(['resultado' => $resultado]);
                } else {
                    echo json_encode(['error' => 'Faltan parámetros']);
                }
                break;
            default:
                echo json_encode(['error' => 'Acción no válida']);
                break;
        }
    } else {
        echo json_encode(['error' => 'Falta el parámetro "action"']);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $putData = json_decode(file_get_contents("php://input"), true);

    if (isset($putData['action'])) {
        switch ($putData['action']) {
            case 'modificar':
                if (isset($putData['id']) && isset($putData['titulo']) && isset($putData['cantante']) && isset($putData['anio'])) {
                    $resultado = $cdController->modificarCd($putData['id'], $putData['titulo'], $putData['cantante'], $putData['anio']);
                    echo json_encode(['resultado' => $resultado]);
                } else {
                    echo json_encode(['error' => 'Faltan parámetros']);
                }
                break;
            default:
                echo json_encode(['error' => 'Acción no válida']);
                break;
        }
    } else {
        echo json_encode(['error' => 'Falta el parámetro "action"']);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $deleteData = json_decode(file_get_contents("php://input"), true);
    if (isset($deleteData['action'])) {
        switch ($deleteData['action']) {
            case 'borrar':
                if (isset($deleteData['id'])) {
                    $resultado = $cdController->borrarCd($deleteData['id']);
                    echo json_encode(['resultado' => $resultado]);
                } else {
                    echo json_encode(['error' => 'Falta el parámetro "id"']);
                }
                break;
            default:
                echo json_encode(['error' => 'Acción no válida']);
                break;
        }
    } else {
        echo json_encode(['error' => 'Falta el parámetro "action"']);
    }
} else {
    echo json_encode(['error' => 'Método HTTP no permitido']);
}
?>
