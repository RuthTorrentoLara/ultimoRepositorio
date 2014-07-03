<?php
 
defined('_JEXEC') or die('Acceso restringido'); 
require_once ('helper.php');
//controlador de ventanas
$bandera=$_POST['dir'];
/// pude hacer un commit, sin error, creo :/ 

$params->def('greeting', 1);
$layout= $params->get('layout', 'default');


$entrada = new JInput; // Objeto para conseguir los valores enviados atravez de formularios en el archivo tmpl/default.php

$textBV = $params->get('textBV', '', 'string');
$textDesp = $params->get('textDesp', '', 'string');

$NOMBRE_UNIVERSIDAD = $entrada->get('NOMBRE_UNIVERSIDAD', '', 'string');
$NOMBRE_AREA = $entrada->get('NOMBRE_AREA', '', 'string');
$NOMBRE_PAIS=$entrada->get('NOMBRE_PAIS','','string');
$NOMBRE_PROYECTO=$entrada->get('NOMBRE_PROYECTO','','string');
$RESPONSABLE=$entrada->get('RESPONSABLE','','string');
$COSTO=$entrada->get('COSTO','','string');
$ANO=$entrada->get('ANO','','string');
$b_ANO=$entrada->get('busqueda1','','string');
$b_UNIVERSIDAD=$entrada->get('busqueda2','','string');
$b_PAIS=$entrada->get('busqueda3','','string');
$NUEVA_UNIVERSIDAD=$entrada->get('UNIVER','','string');
$PAI=$entrada->get('PAI','','string');
$res2 = false;
$res3=false;

if($NOMBRE_UNIVERSIDAD!='' && $NOMBRE_AREA!='' && $NOMBRE_PAIS!='' && $NOMBRE_PROYECTO!='' && $RESPONSABLE!=''){$res2 = GestorDB::insertarRegistro($NOMBRE_UNIVERSIDAD, $NOMBRE_AREA, $NOMBRE_PAIS, $NOMBRE_PROYECTO, $RESPONSABLE, $COSTO, $ANO);}

$res = GestorDB::mostrarRegistros($b_ANO,$b_UNIVERSIDAD,$b_PAIS); // guardamos la matriz devuelta por el metodo

if($NUEVA_UNIVERSIDAD!='' && $PAI!=''){$res3 = GestorDB::agregarU($NUEVA_UNIVERSIDAD,$PAI);}

if($bandera==1)
{
	$layout .= '_uno';
}
if($bandera==2)
{
	$layout .= '_dos';
}
if($bandera==3)
{
	$layout .= '_tres';
}
if($bandera==4)
{
	$layout .= '_cuatro';
}
if($bandera==5)
{
	$layout .= '_cinco';

}

require JModuleHelper::getLayoutPath('mod_proyectos', $layout);

 
?>
 