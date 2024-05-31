<?php
include 'conexion.php';

$sql = "SELECT * FROM aparatos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID Aparato</th>
                <th>ID Tipo</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>PN</th>
                <th>SN</th>
                <th>Características</th>
                <th>Componentes</th>
                <th>Accesorios</th>
                <th>Nº Inventario</th>
                <th>Fecha de Alta</th>
                <th>Observaciones</th>
                <th>Ubicación de Almacen</th>
                <th>Foto</th>
                <th>Fecha de Baja</th>
                <th>Motivo de Baja</th>
                <th>Estado</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id_aparato']}</td>
                <td>{$row['id_tipo']}</td>
                <td>{$row['marca']}</td>
                <td>{$row['modelo']}</td>
                <td>{$row['pn']}</td>
                <td>{$row['sn']}</td>
                <td>{$row['caracteristicas']}</td>
                <td>{$row['componentes']}</td>
                <td>{$row['accesorios']}</td>
                <td>{$row['n_inv']}</td>
                <td>{$row['f_alta']}</td>
                <td>{$row['observaciones']}</td>
                <td>{$row['ubi_almacen']}</td>
                <td><img src='data:image/jpeg;base64," . base64_encode($row['foto']) . "' width='100' height='100'/></td>
                <td>{$row['f_baja']}</td>
                <td>{$row['motivo_baja']}</td>
                <td>{$row['estado']}</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}
$conn->close();
?>
