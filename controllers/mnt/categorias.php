<?php
    require_once "models/mnt/categorias.model.php";

    function run(){
        $viewData = array();
        $viewData["cat_txtfilter"] = "";

        if(isset($_SESSION["cat_txtfilter"])){
            $viewData["cat_txtfilter"] = $_SESSION["cat_txtfilter"];
        }

        if(isset($_POST["btnFiltrar"])){
            mergeFullArrayTo($_POST, $viewData);
            $_SESSION["cat_txtfilter"] = $viewData["cat_txtfilter"];
        }

        if($viewData["cat_txtfilter"] === ""){
            $viewData["categorias"] = getAllCategorias();
        }else{
            $viewData["categorias"] = getCategoriaPorFiltro($viewData["cat_txtfilter"]);
        }

        renderizar("mnt/categorias", $viewData);
    }

    run();
?>