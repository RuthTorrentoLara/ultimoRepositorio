<style type="text/css">   

button{ 
    font-size:12px; 
    font-family:Verdana,Helvetica; 
    font-weight:bold; 
    color:#0000FF; 
    background:#A4C1FF; 
    border:0px; 
    width:120px; 
    height:25px; 
  border-radius: 5px;
} 
#d1{

 background-color:#336699; 
padding: 20px 10px 0px 20px;
border: 1px solid #dedede;
  border-radius: 10px;
}
#identificador {  
    padding: 30px 10px 0px 15px;   /* margen con valores: arriba - derecha - abajo - izquierda */ 
    font-family:verdana,arial; 
    font-size:9pt; 
 background-color:#336699; 
border: 3px solid #dedede;
  border-radius: 10px;

}  

#cont{
    color:#FFFFCC;
font-size:1.2em; 
    font-family:Verdana,Helvetica; 
    font-weight:bold; 
    text-align: center;
    
}



</style> 


<div id="d1">
<h2 id="cont"> Control de proyecto de investigaci&oacute;n de las universidades de Latinoam&eacute;rica</h2>
<form method="post" id="identificador" name="formulario" action="<?php echo JRoute::_('index.php', true, $params->get('mod_proyectos.php')); ?>">

<div>
<button type="submit"name="dir" value="1" >
	Guardar
	Proyecto
</button></br></br></br>

<button type="submit" name="dir" value="2">
	Buscar
	Proyecto
</button></br></br></br></br>

</div>
</form>
</div>