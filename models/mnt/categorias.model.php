<?php
    require_once "libs/dao.php";

    function getAllCategorias(){
        $sqlstr = "SELECT * FROM category;";
        $resultSet = array();
        $resultSet = obtenerRegistros($sqlstr);
        return $resultSet;
    }

    function getCategoriaById($catecod){
        $sqlstr = "SELECT * FROM category where catecod = %d";
        return obtenerUnRegistro(sprintf($sqlstr, $catecod));
    }

    function getCategoriaPorFiltro($filtro){
        $ffiltro = $filtro.'%';
        $sqlstr = "SELECT * FROM category where catecod like '%s' or catenom like '%s';";
        return obtenerRegistros(sprintf($sqlstr, $ffiltro, $ffiltro));
    }

    function addNewCategoria($catenom, $cateest){
        $insSql = "INSERT INTO `category` (`catenom`, `cateest`)
        VALUES ( '%s', '%s');";

        return ejecutarNonQuery(
            sprintf(
                $insSql,
                $catenom, 
                $cateest
            )
        );
    }

    function updateCategoria($catenom, $cateest, $catecod){
        $updsql = "UPDATE `category` SET `catenom` = '%s', `cateest` = '%s'
        WHERE `catecod` = %d; ";

        return ejecutarNonQuery(
            sprintf(
                $updsql,
                $catenom, 
                $cateest,
                $catecod
            )
        );
    }

?>