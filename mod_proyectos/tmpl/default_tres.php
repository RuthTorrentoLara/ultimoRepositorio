
<?php ob_start(); ?>

<table>
            <tr>
                <th>A&Ntilde;O&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>NOMBRE_PAIS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>NOMBRE_UNIVERSIDAD&nbsp;&nbsp;&nbsp;</th>
		<th>NUMERO_PROYECTOS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		
            </tr>
        <tbody>
        <?php 
		if(count($res)>0){
			foreach($res as $resultado){?>
        	<tr>
                <td><?php echo $resultado[0]?></td>
                <td><?php echo $resultado[1]?></td>
                <td><?php echo $resultado[2]?></td>
		<td><?php echo $resultado[3]?></td>
		
            </tr>
            <?php }
			}else{
				echo'<tr><td colspan="5"><i><strong>No se encontraron datos de su busqueda</strong></i></td></tr>';
		   }?>
		</tbody>

 </table>


<form method="post" id="identificador" name="formulario" action="<?php echo JRoute::_('index.php', true, $params->get('mod_proyectos.php')); ?>">
	

<button type="submit" name="dir" value="2">
		Regresar
	</button>

	<button type="submit" name="dir" value="0">
		Ir al men&uacute;
	</button>


</form>

<?php
require_once("dompdf_config.inc.php");

?>
