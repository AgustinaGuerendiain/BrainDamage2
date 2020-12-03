
<div id="contenedor" {if isset($smarty.session.ADMIN)}
                        data-admin="{$smarty.session.ADMIN}"
                    {/if}

                    {if isset($smarty.session.EMAIL)}
                        data-usuario = "{$smarty.session.EMAIL}"
                    {/if}>
    
    <ul class="list-group" id="comentarios"  >

    </ul>
</div>
{if $usuario_smarty!=""}
    {include file="comentarioForm_csr.tpl"}
{/if}


<script src="js/comentario.js"></script>