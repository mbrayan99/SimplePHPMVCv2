<?php
    require_once "models/mnt/categorias.model.php";

    function run(){
        $viewData = array();
        $viewData["mode"] = "";
        $viewData["modedsc"] = "";
        $viewData["catecod"] = 0;
        $viewData["catenom"] = "";
        $viewData["cateest"] = "ACT";

        $viewData["cateest_ACT"] = "selected";
        $viewData["cateest_INA"] = "";

        $modedsc = array(
            "INS" => "Nueva Categoria",
            "UPD" => "Actualizar Categoria %s",
            "DSP" => "Detalle de Categoria %s"
        );

        if(isset($_GET["mode"])){
            $viewData["mode"] = $_GET["mode"];
            $viewData["catecod"] = intval($_GET["catecod"]);

            if(!isset($modedsc[$viewData["mode"]])){
                redirectWithMessage("No se puede realizar esta operación.", "index.php?page=categorias");
                die();
            }
        }

        if(isset($_POST["btnsubmit"])){
            mergeFullArrayTo($_POST, $viewData);
            
            if(!(isset($_SESSION["cat_csstoken"]) && $_SESSION["cat_csstoken"] == $viewData["xsstoken"])){
                redirectWithMessage("No se puede realizar esta operación.", "index.php?page=categorias");
                die();
            }
            
            switch($viewData["mode"]){
                case "INS":
                    $result = addNewCategoria(
                        $viewData["catenom"],
                        $viewData["cateest"]
                    );
                    if($result > 0){
                        redirectWithMessage("Guardado Exitosamente.", "index.php?page=categorias");
                        die(); 
                    }
                break;
                case "UPD": 
                    $result = updateCategoria(
                        $viewData["catenom"],
                        $viewData["cateest"],
                        $viewData["catecod"]
                    );
                    if($result >= 0){
                        redirectWithMessage("Actualizado Exitosamente.", "index.php?page=categorias");
                        die(); 
                    }
                break;       
            }
        }

        if($viewData["mode"] === "INS"){
            $viewData["modedsc"] = $modedsc[$viewData["mode"]];
        }else{
            $categoriaDBData = getCategoriaById($viewData["catecod"]);
            mergeFullArrayTo($categoriaDBData, $viewData);

            $viewData["modedsc"] = sprintf($modedsc[$viewData["mode"]], $viewData["catenom"]);

            $viewData["cateest_ACT"] = ($viewData["cateest"]=="ACT")?"selected":"";
            $viewData["cateest_INA"] = ($viewData["cateest"]=="INA")?"selected":"";
        }

        $viewData["xsstoken"] = uniqid("cat", true);
        $_SESSION["cat_csstoken"] = $viewData["xsstoken"];
        renderizar("mnt/categoria", $viewData);
    }

    run();
?>