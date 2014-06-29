
<?php
defined('_JEXEC') or die('Acceso restringido<br />Buen intento!');

?>
<?php 
	echo "<div><h5>".$textBV."</h5></div>";
	if($res2){ JFactory::getApplication()->enqueueMessage('Se ha añadido exitosamente el registro<br/>Universidad: '.$NOMBRE_UNIVERSIDAD.'<br/>AREA: '.$NOMBRE_AREA.'<br/>PAIS: '.$NOMBRE_PAIS.'<br/>PROYECTO: '.$NOMBRE_PROYECTO.'<br/>RESPONSABLE: '.$NOMBRE_RESPONSABLE.'<br/>COSTO: '.$COSTO.'<br/>ANO: '.$ANO.'<br/>A la tabla de PROYECTO', 'message'); }
?>

<style>
button,#guardar,#ing{ 
    font-size:12px; 
    font-family:Verdana,Helvetica;  
    font-weight:bold; 
    color:#0000FF; 
    background:#A4C1FF; 
    border:0.1px; 
    width:140px; 
    height:25px; 
  border: 1px solid #dedede;
  border-radius: 5px;
  text-align: center;
  

} 

#identificador1,#identificador,#ingreso {  
    padding: 0px 23px 0px 13px;   /* margen con valores: arriba - derecha - abajo - izquierda */ 
    font-family:verdana,arial; 
    font-size:1em; 
 background-color:#336699; 
  border-radius: 5px;


}
#ing { 
  
  text-align: left;

} 
#identificador,#ingresar{
 padding: 0px 0px 0px 15px;
background-size: 90px;

}
#ingresar{
 padding: 0px 0px 0px 20px;
}
#sep{
 font-size: 1em;
 margin-top: 15px; 
border-style:solid;
 border-width:1px; 
padding: 5px;
 background-color:#336699; 
border: 1px solid #dedede;
  border-radius: 10px;
}
#i1,#i2,#i3,#i4,#i5,#i6,#i7{
 font-size: 1em;
 margin-top: 15px; 
border-style:solid;
 border-width:1px; 
padding: 5px; 
width: 140px; 
border-radius: 5px;
}
#ti2{
color: #FFFFCC;
 font-family:verdana,arial; 
    font-size:1.2em; 
    text-align: center;
}

 
</style> 
<div  id="sep">
<form action="./" method="post" id="identificador1">
      <h2 id="ti2"> Ingrese los datos del proyecto</h2>
      <input type="text" list="universidades" id="i1" name='NOMBRE_UNIVERSIDAD' placeholder="Seleccione la universidad" size="18" required >
      <datalist id="universidades">
  	    <option  value="Instituto Polit&eacute;cnico Nacional"> 
            <option  value="TEC(tecnol&oacute;gico de Costa Rica)">  
            <option  value="Universidad Americana">
            <option  value="Universidad Autonoma Metropolitana">
            <option  value="Universidad Catolica del Uruguay">
            <option  value="Universidad Catolica Nuestra Se&ntilde;ora de Asunci&oacute;n">
            <option  value="Universidad Comunera">
            <option  value="Universidad de Chile">  
            <option  value="Universidad de El Salvador">
            <option  value="Universidad de la Plata">
            <option  value="Universidad de las Ciencias Inform&aacute;ticas">
            <option  value="Universidad de Panam&aacute;"> 
	    <option  value="Universidad Dominicana O&amp;M">	    
            <option  value="Universidad EAFIT"> 
	    <option  value="Universidad Panamericana">   
	    <option  value="Universidad Tecnol&oacute;gica de Panam&aacute;.">  
      
       </datalist> 
	<input type="text" list="area" id="i2" name='NOMBRE_AREA' placeholder= "Seleccione Area de estudio " size="18" required >
	<datalist id="area">
	    <option  value=>
	    <option  value="Automatizaci&oacute;n de procesos">
	    <option  value="Bases de datos y seguridad">    
	    <option  value="Comunicaci&oacute;n">
	    <option  value="Dispositivos de almacenamiento y procesamiento">
	    <option  value="Educaci&oacute;n digital">  
	    <option  value="Ecolog&iacute;a">  
	    <option  value="Gerencial">
	    <option  value="Imagen Digital">
	    <option  value="Rob&oacute;tica e inteligencia artificial">  
	    <option  value="Seguridad web">      
	</datalist> 
	<input type="text" list="pais"  id="i3" name='NOMBRE_PAIS' placeholder= "Seleccione Pais"required size="">
	<datalist id="pais">
	    <option  value="Argentina">
	    <option  value="Bolivia">
	    <option  value="Chile">    
	    <option  value="Costa Rica">
	    <option  value= "Cuba">
	    <option  value="Ecuador">  
	    <option  value="El Salvador">  
	    <option  value="Guatemala">
	    <option  value="Honduras">
	    <option  value="M&eacute;xico">  
	    <option  value="Panam&aacute;">
	    <option  value="Per&uacute;">
	    <option  value="Puerto Rico">    
	    <option  value="Uruguay">
	    <option  value="Venezuela">	      
	</datalist> 
	<input type="text" name="NOMBRE_PROYECTO" id="i4" placeholder="Introduzca el nombre del proyecto" required="required" /> 
	<input type="text" name="RESPONSABLE" id="i5" placeholder="Responsable (Ej. Juan, Pedro)" required="required"/> 
	<input type="text" name="COSTO"id="i6" placeholder="Introduzca COSTO del proyecto" required="required"/>
	<input type="text" name="ANO" id="i7" placeholder="Introduzca a&ntilde;o" required="required"/>

        <input id="guardar" type="submit" value="Guardar" />
</form>

<form id="ingreso" method="post" id="identificador" name="formulario" action="<?php echo JRoute::_('index.php', true, $params->get('mod_proyectos.php')); ?>">
	<button id="ing"type="submit" name="dir" value="5">
		Nueva Universidad
	</button>
	</form>
<form method="post" id="identificador" name="formulario" action="<?php echo JRoute::_('index.php', true, $params->get('mod_proyectos.php')); ?>">
	<button type="submit" name="dir" value="0">
		Regresar al men&uacute;
	</button> 
</form>
</div>
<?php if($mensaje!=''){echo "<div><h5>".$mensaje."</h5></div>";}?>

<?php echo "<div><h5>".$textDesp."</h5></div>";?>