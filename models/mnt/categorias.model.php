<?php
    require_once "libs/dao.php";

    function getAllCategorias(){
        $sqlstr = "SELECT * FROM category;";
        $resultSet = array();
        $resultSet = obtenerRegistros($sqlstr);
        return $resultSet;
    }

?>