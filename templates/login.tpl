{include file="header.tpl"}
<div class="container-log">
    <section class="section-form-log">
        <h2>Registro</h2>
        <form action="registrar" method="post">
            <label for="registroMial">Email:</label>
                <input type="email" class="form-control" id="registroMail" name="registroMail" aria-describedby="emailHelp" placeholder="Email">
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
            <label for="loginMail">Email:</label>
                <input type="email" class="form-control" id="loginMail" name="loginMail" aria-describedby="emailHelp" placeholder="Email">
            <label for="loginContraseña">Contraseña:</label>
                <input type="password" class="form-control" id="loginContraseña" name="loginContraseña" placeholder="Contraseña">
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
    </section>
</div>
{include file="foot.tpl"}