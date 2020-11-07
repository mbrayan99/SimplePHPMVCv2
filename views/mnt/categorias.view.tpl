<section><h1>Búsqueda de categorias</h1></section>
<hr/>
<form action="index.php?page=categorias" method="POST">
<section class="row">
    <h2>Filtrar por:</h2>
    <div class="col-sm-12 col-md-10">
        <label class="col-sm-12 col-md-3" for="cat_txtfilter">Código | Categoría</label>
        <input type="text" name="cat_txtfilter" id="cat_txtfilter" value="{{cat_txtfilter}}" 
        placeholder="Código | Categoría" class="col-sm-12 col-md-9"/>
    </div>
    <div class="col-sm-12 col-md-2">
        <button type="submit" name="btnFiltrar">Buscar</button>
    </div>
</section>  
</form>
<hr/>  
<section class="row">
    <table class="col-s-12">
        <thead class="zebra">
            <tr>
                <th>
                    Código
                </th>
                <th>
                    Categoria
                </th>
                <th>
                    Estado
                </th>
                <th>
                    <a class="btn depth-1 s-margin" href="index.php?page=categoria&mode=INS&catecod=0"><span class="ion-plus-circled"></span></a>
                </th>
            </tr>
        </thead>
        <tbody>
            {{foreach categorias}}
            <tr>
                <td>
                    {{catecod}}
                </td>
                <td>
                    {{catenom}}
                </td>
                <td>
                    {{cateest}}
                </td>
                 <td class="center">
                    <a class="btn depth-1 s-margin" href="index.php?page=categoria&mode=UPD&catecod={{catecod}}"><span class="ion-edit"></span></a>
                    <a class="btn depth-1 s-margin" href="index.php?page=categoria&mode=DSP&catecod={{catecod}}"><span class="ion-eye"></span></a>
                </td>
            </tr>
            {{endfor categorias}}
        </tbody>
        <tfoot>
        </tfoot>
    </table>          
</section>