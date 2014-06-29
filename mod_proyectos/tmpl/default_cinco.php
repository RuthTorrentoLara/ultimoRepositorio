<?php
defined('_JEXEC') or die('Acceso restringido<br />Buen intento!');

?>
<?php 
	echo "<div><h5>".$textBV."</h5></div>";
	if($res3){ JFactory::getApplication()->enqueueMessage('Se ha añadido exitosamente el registro<br/>Nombre: '.$nombre.'<br/>Apellido: '.$apellido.'<br/>A la tabla de usuarios', 'message'); }
?>
<style>
#guardar,#regresar{ 
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
  30px; 

} 
#identificador1,#identificador{  
    padding: 0px 23px 0px 13px;   /* margen con valores: arriba - derecha - abajo - izquierda */ 
    font-family:verdana,arial; 
    font-size:1em; 
 background-color:#336699; 
  border-radius: 5px;


} 

#division{
 font-size: 1em;
 margin-top: 15px; 
border-style:solid;
 border-width:1px; 
padding: 5px;
 background-color:#336699; 
border: 1px solid #dedede;
  border-radius: 10px;
}

#textfiel{
 font-size: 1em;
 margin-top: 15px; 
border-style:solid;
 border-width:1px; 
padding: 5px; 
width: 140px; 
border-radius: 5px;
}

}
#insercion {  
   padding: 0px 23px 0px 10px;   /* margen con valores: arriba - derecha - abajo - izquierda */ 
    font-family:verdana,arial; 
    font-size:1em; 
 background-color:#336699; 
  border-radius: 5px;


}
#i1,#i2{
 font-size: 1em;
 margin-top: 15px; 
border-style:solid;
 border-width:1px; 
padding: 5px; 
width: 140px; 
border-radius: 5px;
}
#t1{
color: #FFFFCC;
 font-family:verdana,arial; 
    font-size:1.2em; 
    text-align: center;
}


 
</style> 

<div id= "division">

<h3 id="t1">Ingresar Nueva Universidad</h3>
<form id= "identificador" name="busqueda" method="post">
 
<p id="s1"><input  name="UNIVER" placeholder="Ingrese nueva Universidad"type="text" id="i1"required > <br>
<p id="s1"><input  name="PAI"list="pais" placeholder="Ingrese el Pais"type="text" id="i2"required ><br>

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
    
		 <input id="guardar" type="submit" value="Guardar" />


</form>  
<form method="post" id="identificador1" name="formulario" action="<?php echo JRoute::_('index.php', true, $params->get('mod_proyectos.php')); ?>">
<button type="submit" name="dir" value="0" id="regresar">
	Regresar al men&uacute;
</button>

</div>
</form>