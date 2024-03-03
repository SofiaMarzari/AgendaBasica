{include file="header.tpl"}
<div class="container-home">
    <table class="table table-striped table-hover">
        <thead class="table-tareas">
            <tr>
                <td>Tareas</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            {foreach from=$tareas item=tarea}
                <tr>
                {if $tarea['completada'] == 1}
                    <td class="tareaHecha">{$tarea['horario']}</td>
                    <td class="tareaHecha">{$tarea['descripcion']}</td>
                    <td><button type="button" class="btn btn-warning" disabled><a class="is-listo" href="modificar/{$tarea['id']}">Hecha</a></button></td>
                {else}
                    <td>{$tarea['horario']}</td>
                    <td>{$tarea['descripcion']}</td>
                    <td><button type="button" class="btn btn-warning"><a class="is-listo" href="modificar/{$tarea['id']}">Hecha</a></button></td>
                {/if}  
                <td><button type="button" class="btn btn-danger"><a class="is-elem" href="eliminar/{$tarea['id']}">Eliminar</a></button></td>
                </tr> 
            {/foreach}
        </tbody>
    </table>
    <form action="insertar" method="post">
        <label for="horarioTarea" class="form-label">Email address</label>
            <input type="time" class="form-control" id="horarioTarea" name="horarioTarea" >    
        <label for="descripTarea" class="form-label">Example textarea</label>      
            <textarea class="form-control" style="width:300px;" id="descripTarea"  name="descripTarea" rows="3" placeholder="Descripcion..."></textarea>
        <button type="submit" class="btn btn-success">Crear Tarea</button>
    </form>
<!---
    <h4>Formulario</h4>           
    <div class="is-container">
        <form action="insertar" method="post">
            <label for="horarioTarea" class="form-label">Horario</label>
                <input type="time" id="horarioTarea" name="horarioTarea">
            <label for="descripTarea" class="form-label">Descripcion</label>
                <input type="text" id="descripTarea" name="descripTarea">       
            <button type="submit">Crear Tarea</button>
        </form>
    </div>
--->
    <form action="deslog" method="post">
        <button type="submit"  class="btn btn-primary">Cerrar Sesión</button>
    </form>
</div>
{include file="foot.tpl"}