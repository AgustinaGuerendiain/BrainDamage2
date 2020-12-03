{include file="header.tpl"}

{if $esAdmin_smarty == 0}
    <div class="alert alert-danger" role="alert">
            {$message}
    </div>  
{else}
    <div class="container" style="
        margin-top: 24px;">

    <ul class="list-group">

        {foreach from=$usuarios_smarty item=usuarios}
        <li class="list-group-item"> 

            {$usuarios->email} 
            <span class="badge badge-primary badge-pill">
            {if $usuarios->admin == 0}
                El usuario no tiene permiso de administración
            {else}
                El usuario es administrador
            {/if}
            </span>
            
            <form action="cambiar_permiso/{$usuarios->id_usuario}" method="post" data-iduser="{$usuarios->id_usuario}">
                
                <select name="" id="" value="">
                    <option value="1">Administrador</option>
                    <option value="0">Usuario</option>
                </select>
                
                <button type="submit" class="btn btn-primary">Cambiar permiso</button>
            </form>
        
        <button type="button" class="btn btn-outline-danger"><a href="borrar_usuario/{$usuarios->id_usuario}">Borrar</a></button>
        
        </li>
        {/foreach}

    </ul>

    </div>
{/if}

{include file="footer.tpl"}   