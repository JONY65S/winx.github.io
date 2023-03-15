<?php
    include 'pgsqlConexion.php';

    echo 'PRUEBA UNO' . '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';

    $query85=("select * from evaluacion_resumen where evaluacion_id='123074333'");
    $consulta85=pg_query($conexion,$query85);
    $queryNew85=pg_fetch_array($consulta85);
    $queryHys=$queryNew85["observaciones"]; 

    echo '<textarea class="textarea2" type="text" style="text-transform:uppercase;" readonly="readonly" name="tit00">'.$queryHys.'</textarea>';

    if($queryHys){
        echo '<br>';
        echo 'MOSTRAR' . '<br>';
    }else{
        echo '<br>';
        echo 'OCULTAR' . '<br>';
    }
    
?>

<!--<textarea class="textarea2" type="text" style="text-transform:uppercase;" readonly="readonly" name="tit00"><?=$queryTitulo?></textarea>-->

<?php
    echo '<br>';
    echo 'PRUEBA DOS' . '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
?>

    <?php
            $query65=("select * from coautor, usuario, trabajos_coautores where coautor.id_coautor=usuario.id_usuario and coautor.id_coautor=trabajos_coautores.coautor_id and trabajos_coautores.trabajos_id=123104046;");
            $result65=pg_query($conexion, $query65);
            
            while ($row65=pg_fetch_array($result65)){
                echo $row65['apellido_usuario'] . ' ' . $row65['nombre_usuario'] . '<br>';     
            }
        ?>
        
        
        
        
<?php
    echo '<td class="C1">
                                       <label for="Title">Observaciones pasadas:</label> 
                                    </td>
                                    <td class="C2">
                                        <textarea class="textarea3" type="text" style="text-transform:uppercase;" name="aspEva4"></textarea>
                                    </td>';
?>


<!--
<select name="workUser" onchange='submitForm();'>
    <option>Seleccione un trabajo</option>
        <?php
//            $query=("SELECT * FROM trabajos");
//            $result=pg_query($conexion, $query);
//            
//            while ($row=pg_fetch_array($result)){
//                echo '<option value="'.$row['trabajos_id'].'">'.$row['titulo'].'</option>';   
//            }
//            
//            $workUserId = htmlspecialchars($_POST['workUser']);
        ?>
</select>-->
