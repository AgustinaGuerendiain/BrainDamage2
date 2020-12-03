<nav class="navbar navbar-dark bg-dark">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="../BrainDamage2">Cervezas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../BrainDamage2/categorias">Categorías</a>
        </li>
        {if isset($smarty.session.EMAIL)}
        
            {if $smarty.session.ADMIN == 1}
                <li class="nav-item">
                <a class="nav-link" href="../BrainDamage2/administracion">Administración</a>
            </li>
            {/if}
            
            <li class="nav-item">
                <button type="button" class="btn btn-outline-secondary class=btn btn-secondary btn-sm"> <a class="nav-link" href="../BrainDamage2/logout">Cerrar Sesión</a> </button>
            </li>
            
        {else}
            <li class="nav-item">
                <a class="nav-link" href="../BrainDamage2/login">Inicio Sesión</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../BrainDamage2/registracion">Registración</a>
            </li>
        {/if}

    </ul>
</nav>

