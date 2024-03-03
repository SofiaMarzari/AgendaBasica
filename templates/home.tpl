{include file="header.tpl"}
<div class="container-home">
    <div class="container-tareas">
        <section class="section-formtabla">
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
                            <td style="width:100px;"><button type="button" class="btn btn-warning" disabled><a class="is-listo" href="modificar/{$tarea['id']}">Hecha</a></button></td>
                        {else}
                            <td>{$tarea['horario']}</td>
                            <td>{$tarea['descripcion']}</td>
                            <td style="width:100px;"><button type="button" class="btn btn-warning"><a class="is-listo" href="modificar/{$tarea['id']}">Hecha</a></button></td>
                        {/if}  
                        <td style="width:100px;"><button type="button" class="btn btn-danger"><a class="is-elem" href="eliminar/{$tarea['id']}">Eliminar</a></button></td>
                        </tr> 
                    {/foreach}
                </tbody>
            </table>
        </section>
        <section class="section-formtarea">
            <h4>Crear tarea nueva</h4>
            <form action="insertar" method="post">
                <label for="horarioTarea" class="form-label">Horario</label>
                    <input type="time" class="form-control" style="width: 100px;" id="horarioTarea" name="horarioTarea" >    
                <label for="descripTarea" class="form-label">Descripcion</label>      
                    <textarea class="form-control" style="width:400px;" id="descripTarea"  name="descripTarea" rows="3" placeholder="Descripcion..."></textarea>
                <button type="submit" class="btn btn-success" style="margin-top: 20px;">Crear</button>
            </form>
        </section>
    </div>
    <section>
        <form action="deslog" method="post">
            <button type="submit"  class="btn btn-primary" style="width:150px;margin-left:35px;margin-bottom:10px;">Cerrar Sesión</button>
        </form>
    </section>
</div>
{include file="foot.tpl"}