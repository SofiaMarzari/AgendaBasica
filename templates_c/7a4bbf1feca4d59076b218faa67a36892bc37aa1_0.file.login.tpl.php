<?php
/* Smarty version 3.1.33, created on 2024-03-02 19:25:53
  from 'C:\Apache24\htdocs\proyectos_php\AgendaBasica\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_65e37d41c7c803_63396117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a4bbf1feca4d59076b218faa67a36892bc37aa1' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\proyectos_php\\AgendaBasica\\templates\\login.tpl',
      1 => 1709407470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_65e37d41c7c803_63396117 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-log">
    <section class="section-form-log">
        <h2>Registro</h2>
        <form action="registrar" method="post">
            <label for="registroUsuario">Email:</label>
                <input type="email" class="form-control" id="registroUsuario" name="registroUsuario" aria-describedby="emailHelp" placeholder="Email">
            <label for="registroNombre">Nombre:</label>
                <input type="text" class="form-control" id="registroNombre" name="registroNombre" placeholder="Nombre">
            <label for="registroApellido">Apellido:</label>
                <input type="text" class="form-control" id="registroApellido" name="registroApellido" placeholder="Apellido">
            <label for="registroContraseña">Contraseña:</label>
                <input type="password" class="form-control" id="registroContraseña" name="registroContraseña" placeholder="Contraseña">
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </section>
    <section class="section-form-log">
        <h2>Login</h2>
        <form action="ingresar" method="post">
            <label for="registroUsuario">Email:</label>
                <input type="email" class="form-control" id="registroUsuario" name="formNomUsuario" aria-describedby="emailHelp" placeholder="Email">
            <label for="registroContraseña">Contraseña:</label>
                <input type="password" class="form-control" id="registroContraseña" name="formContraseña" placeholder="Contraseña">
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
    </section>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
