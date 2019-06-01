
<link rel="stylesheet" href="src/css/login.css">
<br>
<div id="contenedor_acceso" class="contenedor_acceso">
    <div class="acceso">
        <div class="botones">
            <button id="iniciarAcc_btn" >INICIAR</button>
            <button id="registrarseAcc_btn">REGISTRARSE</button> 
        </div>
        <form action="" method="post" neme="login">
            <div id="iniciar" class="iniciar">
                <h3>Iniciar sesión</h3>
                <label for="email">Usuario</label>
                <input type="text" name="usuario" id="text">  
                <!-- <input type="email" name="email" id="email"> -->  
                <label for="pass">Contraseña</label>
                <input type="password" name="pass" id="pass">
                <button type="submit" value="iniciar">INICIAR</button>
            </div>
        </form>

        <form action="#" method="post" neme="registro">
            <div id="registrarse" class="registrarse">
                <h3>Registrarse</h3>
                <label for="nombres">Nombres</label>
                    <input type="text" name="nombres" id="nombres">
                <label for="apellidos">Apellidos</label>            
                    <input type="text" name="apellidos" id="apellidos">
                <label for="email">Correo</label>                
                    <input type="email" name="eamil" id="email">
                <label for="pass">Contraseña</label>                
                    <input type="password" name="pass" id="pass">
                <button type="submit" value="registrarse">REGISTRARSE</button>
            </div>
        </form>
    </div>
</div>
<br>


<script>
    //btns cambiar a iniciar o registrarse
    iniciarAcc_btn.addEventListener("click", cambiarIniciar);
    registrarseAcc_btn.addEventListener("click", cambiarRegistrarse);
    function cambiarIniciar(){
        document.getElementById("iniciar").style.display = "grid"
        document.getElementById("registrarse").style.display = "none"
        iniciarAcc_btn.style.backgroundColor = "#055456"
        iniciarAcc_btn.style.color = "#FFFFFF"
        //opacar
        registrarseAcc_btn.style.backgroundColor = "#214242"
        registrarseAcc_btn.style.color = "#f0f0f0"
    }
    function cambiarRegistrarse(){
        document.getElementById("registrarse").style.display = "grid"
        document.getElementById("iniciar").style.display = "none"
        registrarseAcc_btn.style.backgroundColor = "#055456"
        registrarseAcc_btn.style.color = "#FFFFFF"
        //opacar
        iniciarAcc_btn.style.backgroundColor = "#214242"
        iniciarAcc_btn.style.color = "#f0f0f0"
    }
    cambiarIniciar();
</script>
