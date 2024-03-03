<?php
/* Smarty version 3.1.33, created on 2024-03-02 17:43:44
  from 'C:\Apache24\htdocs\proyectos_php\AgendaBasica\templates\loginn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_65e3655012b204_47764890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '320814e3b17055a0b49e2c0bed2bcc43399f4271' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\proyectos_php\\AgendaBasica\\templates\\loginn.tpl',
      1 => 1709401394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e3655012b204_47764890 (Smarty_Internal_Template $_smarty_tpl) {
?><!---<a href="registro">Registrarse</a>
<div>
        <form action="ingresar" method="post">
            <label for="registroUsuario">Nombre usuario</label>
              <input type="text" id="registroUsuario" name="formNomUsuario">
            <label for="registroContraseña">Contraseña</label>
                <input type="text" id="registroContraseña" name="formContraseña">
            <button type="submit">Iniciar Sesión</button>
        </form>
</div> -->
<form action="registrar" method="post">
    <div class="mb-3">
        <label for="registroUsuario" class="form-label">Email address</label>
        <input type="email" class="form-control" id="registroUsuario" name="registroUsuario" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="registroContraseña" class="form-label">Password</label>
        <input type="password" class="form-control" id="registroContraseña" name="registroContraseña">
    </div>
    <!---<div class="mb-3">
        <label for="registroContraseñaConfirmar" class="form-label">Confirmar password</label>
        <input type="password" class="form-control" id="registroContraseñaConfirmar" name="registroContraseñaConfirmar">
    </div>-->
    <button type="submit" class="btn btn-primary">Registrarse</button>
</form>
<form action="ingresar" method="post">
    <div class="form-group">
        <label for="registroUsuario">Nombre usuario/Email:</label>
        <input type="email" class="form-control" id="registroUsuario" name="formNomUsuario" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="registroContraseña">Password:</label>
        <input type="password" class="form-control" id="registroContraseña" name="formContraseña" placeholder="Password">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
</form><?php }
}
