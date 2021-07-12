<?php
/* Smarty version 3.1.33, created on 2021-07-07 21:49:29
  from 'C:\xampp\htdocs\proyecto\php\agendabasica\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60e60549426446_88626042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcf3a1400e691d8e5a197031c9ae920cf74aed4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\php\\agendabasica\\templates\\login.tpl',
      1 => 1581733064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e60549426446_88626042 (Smarty_Internal_Template $_smarty_tpl) {
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
