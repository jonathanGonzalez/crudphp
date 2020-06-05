<?php
    include_once('conexionbd.php');

    $id_denuncia_para_editar = $_GET['id_para_editar'];

    //crear sentencia sql
    $sql = "SELECT * from denuncias where id_pk={$id_denuncia_para_editar}";
    //lanzar la sentencia sql
    $respuesta = $conn->query($sql);
    //die($respuesta);
    while($row=$respuesta->fetch_array())
    {
        //echo $row['lugar']."/".$row['placa'];
        $lugar= $row['lugar'];
        $fecha= $row['fecha'];
        $hora= $row['hora'];
        $tipo= $row['tipo'];
        $placa= $row['placa'];
        $denuncia= $row['denuncia'];
    }

?>
<form action="EditarDenuncia.php" method="POST">
    <input type="hidden" name="input_id" value="<?php echo $id_denuncia_para_editar ?>">
    <div class="item-form">
        <label for="">Lugar:</label>
        <input value="<?php echo $lugar; ?>" type="text" name="input_lugar" id="" required>
    </div>
    <div class="item-form">
        <label for="">Fecha:</label>
        <input value="<?php echo $fecha; ?>" type="date" name="input_fecha" id="" required>
    </div>
    <div class="item-form">
        <label for="">Hora:</label>
        <input value="<?php echo $hora; ?>" type="number" name="input_hora" id="" required>
    </div>
    <div class="item-form">
        <label for="">Tipo de Vehículo:</label>
        <!-- <input value="<?php echo $tipo; ?>" type="text" name="input_tipo" id="" required> -->
        <select value="<?php echo $tipo; ?>" name="input_tipo" id="">
        <?php
        switch ($tipo) {
            case 'Camión':
                echo "
                <option value='Camión' selected='selected'>Camión</option>
                <option value='Carro particular'>Carro particular</option>
                <option value='Volqueta'>Volqueta</option>
                <option value='Motos'>Motos</option>
                <option value='Transporte público'>Transporte público</option>";
                break;
            
            case 'Carro particular':
                echo "
                <option value='Camión'>Camión</option>
                <option value='Carro particular' selected='selected'>Carro particular</option>
                <option value='Volqueta'>Volqueta</option>
                <option value='Motos'>Motos</option>
                <option value='Transporte público'>Transporte público</option>";
                break;
            
            case 'Volqueta':
                echo "
                <option value='Camión'>Camión</option>
                <option value='Carro particular'>Carro particular</option>
                <option value='Volqueta' selected='selected'>Volqueta</option>
                <option value='Motos'>Motos</option>
                <option value='Transporte público'>Transporte público</option>";
                break;

            case 'Motos':
                echo "
                <option value='Camión'>Camión</option>
                <option value='Carro particular'>Carro particular</option>
                <option value='Volqueta'>Volqueta</option>
                <option value='Motos' selected='selected'>Motos</option>
                <option value='Transporte público'>Transporte público</option>";
                break;

            case 'Transporte público':
                echo "
                <option value='Camión'>Camión</option>
                <option value='Carro particular'>Carro particular</option>
                <option value='Volqueta'>Volqueta</option>
                <option value='Motos'>Motos</option>
                <option value='Transporte público' selected='selected'>Transporte público</option>";
                break;
            
            default:
                # code...
                break;
        }
         ?> 
        </select>
    </div>
    <div class="item-form">
        <label for="">Placa:</label>
        <input value="<?php echo $placa; ?>" type="text" name="input_placa" id="" required>
    </div>
    <div class="item-form">
        <label for="">Denuncia:</label>
        <input value="<?php echo $denuncia; ?>" type="textarea" name="input_denuncia" id="" required>
    </div>
    <div class="item-form">
        <input type="submit" value="actualizar">
    </div>                
</form>
