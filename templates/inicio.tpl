{include file="header.tpl"}
<body>
    <h1>{$titulo}</h1>
    {foreach from=$tareas item=tarea}
        {if $tarea['completada'] == 1}
            <li class="tareaHecha">{$tarea['titulo']}: {$tarea['descripcion']}<a class="is-elem" href="eliminar/{$tarea['id']}">  Eliminar</a><a class="is-listo" href="modificar/{$tarea['id']}">Hecha</a></li>
        {else}
            <li>{$tarea['titulo']}: {$tarea['descripcion']}<a class="is-elem" href="eliminar/{$tarea['id']}">  Eliminar</a><a class="is-listo" href="modificar/{$tarea['id']}">Hecha</a></li>
        {/if}  
    {/foreach}

    <h4>Formulario</h4>           
    <div class="is-container">
        <form action="insertar" method="post">
            <label for="tituloTarea">Titulo</label>
                <input type="text" id="tituloTarea" name="tituloTarea">
            <label for="descripTarea">Descripcion</label>
                <input type="text" id="descripTarea" name="descripTarea">       
            <button type="submit">Crear Tarea</button>
        </form>
    </div>

    <form action="deslog" method="post">
        <button type="submit">Cerrar Sesión</button>
    </form>
    {include file="foot.tpl"}
    <script src="js/agendaJS.js"></script>
</body>
</html>