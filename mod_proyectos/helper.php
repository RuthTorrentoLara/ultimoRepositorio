<?php 
defined('_JEXEC') or die('Acceso restringido<br />Buen intento!');
function mostrarMensaje($mensaje)
{
	
	echo "Bienvenido =): ".$mensaje;
}



class GestorDB{
	
	public static function mostrarRegistros($ANO,$NOMBRE_UNIVERSIDAD,$NOMBRE_PAIS){//Función para mostrar datos
		$db = JFactory::getDbo();
                $query = $db->getQuery(true);		
		
	    $query
	    ->select($db->quoteName(array('PROY.ANO', 'P.NOMBRE_PAIS', 'U.NOMBRE_UNIVERSIDAD')))
	    ->select('COUNT(PROY.ID_PROYECTO)')
	    ->from($db->quoteName('#__PROYECTO', 'PROY'))
	    ->join('NATURAL', $db->quoteName('#__PAIS', 'P') )
	    ->join('NATURAL', $db->quoteName('#__UNIVERSIDAD', 'U') )
	    ->where($db->quoteName('PROY.ANO')." = ".$db->quote($ANO))
	    ->WHERE($db->quoteName('P.NOMBRE_PAIS')."=".$db->quote($NOMBRE_PAIS)) 
	    ->WHERE($db->quoteName('U.NOMBRE_UNIVERSIDAD')."=".$db->quote($NOMBRE_UNIVERSIDAD));
	   $db->setQuery($query);
	   $resultado = $db->loadRowList();
	   return $resultado;

	}	
	//función para insertar datos
	public static function insertarRegistro($NOMBRE_UNIVERSIDAD, $NOMBRE_AREA, $NOMBRE_PAIS, $NOMBRE_PROYECTO, $RESPONSABLE, $COSTO, $ANO){
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query1 = $db->getQuery(true);
		$query2= $db->getQuery(true);
  

		$query->SELECT ($db->quoteName('ID_UNIVERSIDAD'))
	              ->FROM($db->quoteName('#__UNIVERSIDAD'))
	              ->WHERE($db->quoteName('NOMBRE_UNIVERSIDAD')."=".$db->quote($NOMBRE_UNIVERSIDAD));
		   $db->setQuery($query);
		$ID_UNIVERSIDAD=$db->loadResult();


	

		$query1->SELECT ($db->quoteName('ID_AREA'))
			      ->FROM($db->quoteName('#__AREA_ESTUDIO'))
			      ->WHERE($db->quoteName('NOMBRE_AREA')."=".$db->quote($NOMBRE_AREA));
			$db->setQuery($query1);
			$ID_AREA=$db->loadResult();

		$query2->SELECT ($db->quoteName('ID_PAIS'))
			      ->FROM($db->quoteName('#__PAIS'))
			      ->WHERE($db->quoteName('NOMBRE_PAIS')."=".$db->quote($NOMBRE_PAIS));
			$db->setQuery($query2);
			$ID_PAIS=$db->loadResult();
			


		$columns = array('ID_UNIVERSIDAD', 'ID_AREA', 'ID_PAIS', 'NOMBRE_PROYECTO', 'RESPONSABLE', 'COSTO', 'ANO');
		$values = array($db->quote($ID_UNIVERSIDAD), $db->quote($ID_AREA), $db->quote($ID_PAIS), $db->quote($NOMBRE_PROYECTO), 					$db->quote($RESPONSABLE), $db->quote($COSTO), $db->quote($ANO));
		$query
			->insert($db->quoteName('#__PROYECTO'))
			->columns($db->quoteName($columns))
			->values(implode(',', $values));
		$db->setQuery($query);
		$resultado = $db->query();
		return $resultado;
	}
	

    public static function agregarU($NUEVA_UNIVERSIDAD,$PAI){
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query2 = $db->getQuery(true);
		
		$query2->SELECT ($db->quoteName('ID_PAIS'))
			      ->FROM($db->quoteName('#__PAIS'))
			      ->WHERE($db->quoteName('NOMBRE_PAIS')."=".$db->quote($PAI));
			$db->setQuery($query2);
			$ID_PAIS=$db->loadResult();


		$columns = array('NOMBRE_UNIVERSIDAD','ID_PAIS');
		$values = array($db->quote($NUEVA_UNIVERSIDAD),$db->quote($ID_PAIS));
		$query
			->insert($db->quoteName('#__UNIVERSIDAD'))
			->columns($db->quoteName($columns))
			->values(implode(',', $values));
		$db->setQuery($query);
		$result=$db->query();
		return $result;
		
		
	}
}



?>