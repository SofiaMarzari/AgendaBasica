<?php
/* Smarty version 3.1.33, created on 2024-03-03 23:16:15
  from 'C:\Apache24\htdocs\proyectos_php\AgendaBasica\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_65e504bf6751f2_18315245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24f9e743f5b841b9d2ff184a415de84b22fbade9' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\proyectos_php\\AgendaBasica\\templates\\home.tpl',
      1 => 1709507772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_65e504bf6751f2_18315245 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tareas']->value, 'tarea');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tarea']->value) {
?>
                        <tr>
                        <?php if ($_smarty_tpl->tpl_vars['tarea']->value['completada'] == 1) {?>
                            <td class="tareaHecha"><?php echo $_smarty_tpl->tpl_vars['tarea']->value['horario'];?>
</td>
                            <td class="tareaHecha"><?php echo $_smarty_tpl->tpl_vars['tarea']->value['descripcion'];?>
</td>
                            <td style="width:100px;"><button type="button" class="btn btn-warning" disabled><a class="is-listo" href="modificar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
">Hecha</a></button></td>
                        <?php } else { ?>
                            <td><?php echo $_smarty_tpl->tpl_vars['tarea']->value['horario'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tarea']->value['descripcion'];?>
</td>
                            <td style="width:100px;"><button type="button" class="btn btn-warning"><a class="is-listo" href="modificar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
">Hecha</a></button></td>
                        <?php }?>  
                        <td style="width:100px;"><button type="button" class="btn btn-danger"><a class="is-elem" href="eliminar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
">Eliminar</a></button></td>
                        </tr> 
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
