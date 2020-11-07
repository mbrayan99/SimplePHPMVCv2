<h1>{{modedsc}}</h1>

<section>
    <form method="post" action="index.php?page=categoria&mode={{mode}}&catecod={{catecod}}">
    <input type="hidden" name="mode" value="{{mode}}"/>
    <input type="hidden" name="catecod" value="{{catecod}}"/>
    <input type="hidden" name="xsstoken" value="{{xsstoken}}"/>

    <div>
        <label for="catenom">Nombre Categoria</label>
        <input type="text" name="catenom" id="catenom" value="{{catenom}}" placeholder="Nombre Categoria" />
    </div>
    <div>
        <label for="cateest">Estado</label>
        <select name="cateest" id="cateest">
            <option value="ACT" {{cateest_ACT}}>Activo</option>
            <option value="INA" {{cateest_INA}}>Inactivo</option>
        </select>
    </div>

    <button id="btnsubmit" name="btnsubmit" type="submit">Enviar</button>
    <button id="btncancel">Cancelar</button>
    </form>
</section>

<script>
    $().ready(function(){
        $("#btncancel").click(function(e){
            e.preventDefault();
            e.stopPropagation();
            location.assign("index.php?page=categorias");
        });
    });
</script>