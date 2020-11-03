<section><h1>Búsqueda de categorias</h1></section>
<section>Filtro</section>    
<section>
    <table>
        <thead>
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
            </tr>
            {{endfor categorias}}
        </tbody>
        <tfoot>
        </tfoot>
    </table>          
</section>