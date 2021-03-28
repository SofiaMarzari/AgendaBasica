<?php
/* Smarty version 3.1.33, created on 2021-03-28 01:26:06
  from 'C:\xamppNuevo\htdocs\proyecto\php\agendaWeb\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_605fcd1e5b52e5_67057059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fb9a9ad5c7ace7692c08878cb34d17e74ad850d' => 
    array (
      0 => 'C:\\xamppNuevo\\htdocs\\proyecto\\php\\agendaWeb\\templates\\login.tpl',
      1 => 1581733064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605fcd1e5b52e5_67057059 (Smarty_Internal_Template $_smarty_tpl) {
?> <div>
       <form action="registrar" method="post">
            <label for="registroUsuario">Nombre usuario</label>
              <input type="text" id="registroUsuario" name="registroUsuario">
            <label for="registroContraseña">Contraseña</label>
                <input type="text" id="registroContraseña" name="registroContraseña">
            <button type="submit">Registrarse</button>
        </form>
    </div>
    <div>
        <form action="ingresar" method="post">
            <label for="registroUsuario">Nombre usuario</label>
              <input type="text" id="registroUsuario" name="formNomUsuario">
            <label for="registroContraseña">Contraseña</label>
                <input type="text" id="registroContraseña" name="formContraseña">
            <button type="submit">Iniciar Sesión</button>
        </form>
</div><?php }
}
