<?php
/* Smarty version 3.1.33, created on 2020-02-18 18:44:28
  from 'C:\xampp\htdocs\proyecto\php\agendaWeb\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4c227cc85e73_25538590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ada3fa88ffbcf05ddce923ada0431114d8d096e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\php\\agendaWeb\\templates\\login.tpl',
      1 => 1581733064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4c227cc85e73_25538590 (Smarty_Internal_Template $_smarty_tpl) {
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
