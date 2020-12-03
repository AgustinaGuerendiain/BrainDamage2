
{include file="header.tpl"}

{if isset($smarty.session.EMAIL)}
  {{include file="form_insertar_producto.tpl"}}
{/if}


<div class="container" style="margin-top: 24px;">
  <form action="filtro" method="post">
    
      <label for="exampleFormControlSelect1">Busca por nombre de cerveza</label>
      <input type="text" name="cerveza" placeholder="Nombre de cerveza">

      <label for="exampleFormControlSelect1">Porcentaje de alcohol</label>
      <select name="porcentajeAlcohol">
            <option></option>
            <option>0-5</option>
            <option>6-10</option>
            <option>11-20</option>
      </select>

      <label for="exampleFormControlSelect1">Precio</label>
      <select name="precio" >
            <option></option>
            <option>100-150</option>
            <option>151-200</option>
            <option>201-350</option>
      </select>

    <button type="submit" class="btn btn-primary">Buscar</button>
  </form>
</div>



<div class="container" style="
    margin-top: 24px;">
  <ul class="list-group">
    {foreach from=$producto_smarty item=producto}
      <li class="list-group-item"> 
        {$producto->nombre_producto}
        <button type="button" class="btn btn-outline-info"><a href="detalle_producto/{$producto->id_cerveza}">Detalles</a></button>
        {if isset($smarty.session.EMAIL)}
          <button type="button" class="btn btn-outline-success"><a href="editar_producto/{$producto->id_cerveza}">Editar</a></button>
          <button type="button" class="btn btn-outline-danger"><a href="borrar_producto/{$producto->id_cerveza}">Borrar</a></button>
        {/if}
      </li>
    {/foreach}
  </ul>
</div>


{include file="footer.tpl"}     
      
        