<style>
#buscar,#regresar,#generar{ 
    font-size:12px; 
    font-family:Verdana,Helvetica;  
    font-weight:bold; 
    color:#0000FF; 
    background:#A4C1FF; 
    border:0.1px; 
    width:100px; 
    height:25px; 
  border: 1px solid #dedede;
  border-radius: 5px;
 padding: 3px 30px 3px 17px; 

} 


#busqueda,#identificador {  
    padding: 0px 20px 3px 15px;/* margen con valores: arriba - derecha - abajo - izquierda */ 
    font-family:verdana,arial; 
    font-size:8pt; 
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
#textfield,#U,#p{
	 font-size: 1em;
 margin-top: 1px; 
 border-width:0px; 
    padding: 1px 15px 5px 5px;
width: 130px; 
border-radius: 5px;
}
#s1,#s2,#s3,#t1,#t2{
 color: #FFFFCC;
 font-family:verdana,arial; 
    font-size:1.2em; 
    text-align: center;


}

 
</style> 

<div id= "division">

<h3 id="t1">B&uacute;squeda de proyectos</h3>
<form id= "busqueda" name="busqueda" method="post">

<h4 id="s2">Criterios de b&uacute;squeda </h4>
 
<p id="s1">Año:<br><input  name="busqueda1" placeholder="ej:2014"type="text" id="textfield"/>
<p id="s2">Universidad:<br><input type="text" list="universidades"  name='busqueda2' placeholder="Seleccione la universidad" required id="U" >
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
  
<p id="s3">Pais: <br /><input type="text" list="pais"  name='busqueda3' placeholder= "Seleccione Pais" id="p" required  >
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
	</datalist> <br><br><br>
    
		<button type="submit" name="dir" value="3" id="buscar">
		Buscar Proyectos

		</button><br><br><br>
<button type="submit" name="dir" value="4" id="generar">
		Ver PDF

		</button>
</form>  
<form method="post" id="identificador" name="formulario" action="<?php echo JRoute::_('index.php', true, $params->get('mod_proyectos.php')); ?>">
<button type="submit" name="dir" value="0" id="regresar">
	Regresar al men&uacute;
</button>

</div>
</form>