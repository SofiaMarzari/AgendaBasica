<?php
/* Smarty version 3.1.33, created on 2021-03-28 01:26:17
  from 'C:\xamppNuevo\htdocs\proyecto\php\agendaWeb\templates\inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605fcd29c5bf70_71694667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '221b8ddb11f0a9d6702fdb3ced54c6522ec0d665' => 
    array (
      0 => 'C:\\xamppNuevo\\htdocs\\proyecto\\php\\agendaWeb\\templates\\inicio.tpl',
      1 => 1582580664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_605fcd29c5bf70_71694667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tareas']->value, 'tarea');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tarea']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['tarea']->value['completada'] == 1) {?>
            <li class="tareaHecha"><?php echo $_smarty_tpl->tpl_vars['tarea']->value['titulo'];?>
: <?php echo $_smarty_tpl->tpl_vars['tarea']->value['descripcion'];?>
<a class="is-elem" href="eliminar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
">  Eliminar</a><a class="is-listo" href="modificar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
">Hecha</a></li>
        <?php } else { ?>
            <li><?php echo $_smarty_tpl->tpl_vars['tarea']->value['titulo'];?>
: <?php echo $_smarty_tpl->tpl_vars['tarea']->value['descripcion'];?>
<a class="is-elem" href="eliminar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
">  Eliminar</a><a class="is-listo" href="modificar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
">Hecha</a></li>
        <?php }?>  
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

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
    <?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo '<script'; ?>
 src="js/agendaJS.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
