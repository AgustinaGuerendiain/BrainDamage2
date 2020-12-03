
{include file="header.tpl"}

    <h1>{$producto_smarty->nombre_producto}</h1>
        
        <ul>
            <li>Descripción: {$producto_smarty->descripcion}</li>
            <li>Porcentaje de alcohol: {$producto_smarty->porcentaje_alc}</li>
            <li>Precio: {$producto_smarty->precio}</li>
            {foreach from=$categoria_smarty item=categoria}
            {if $producto_smarty->id_categoria == $categoria->id_categoria}
                <li> Categoría: {$categoria->nombre_categoria}</li>
            {/if}
            {/foreach}
        </ul>

    </div>
    </div> 

    <h3>Comentarios</h3>
    <div class="container" style="
        margin-top: 24px;">
        {include file="comentario_csr.tpl"}
    </div>    


    

{include file="footer.tpl"}  