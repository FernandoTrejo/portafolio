<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/all.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- PESTAÑA DE RECETA -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}
#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}
@-webkit-keyframes fadein {
    from {
        bottom: 0;
        opacity: 0;
    }

    to {
        bottom: 30px;
        opacity: 1;
    }
}

@keyframes fadein {
    from {
        bottom: 0;
        opacity: 0;
    }

    to {
        bottom: 30px;
        opacity: 1;
    }
}

@-webkit-keyframes fadeout {
    from {
        bottom: 30px;
        opacity: 1;
    }

    to {
        bottom: 0;
        opacity: 0;
    }
}

@keyframes fadeout {
    from {
        bottom: 30px;
        opacity: 1;
    }

    to {
        bottom: 0;
        opacity: 0;
    }
}
</style>


<!--EL FORM ESTÁ GENERAL NO POR CARDS NI MODALS-->
<div class="col-12">
    <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <h3 align="center" class="display-4 mt-3" style="color:black;"> Guía Google Cloud 02
            </h3><br>
                <!-- CONTENIDO DE LA PESTAÑA -->
                <div id="ContenedorPestania">

                    <div style="color:black" class="form-row">
                        
                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Creamos un nuevo proyecto y le asignamos un nombre. Luego hacemos click en crear</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets//img/gc02/01.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Ya creado nuestro proyecto, hacemos click en crear aplicacion</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets//img/gc02/02.PNG" width="700px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Seleccionamos el lenguaje y el entorno, los cuales serian PHP  y estandar respectivamente</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets//img/gc02/03.PNG" width="500px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Ahora iniciamos la shell de google cloud, y hacemos un got clone de nuestro repositorio hacia el proyecto que acabamos de crear. Nos movemos hacia la carpeta y ejecutamos el comando gcloud app deploy para desplegar la aplicacion</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets//img/gc02/04.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Mientras se despliega, nos vamos a habilitar las API y servicios</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets//img/gc02/05.PNG" width="750px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Buscamos app engine admin api, y la habilitamos</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets//img/gc02/06.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Ahora ya ha finalizado el despliegue, nos da la URL en donde se encuentra nuestra aplicacion</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets//img/gc02/07.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Visitamos la URL y vemos la pagina siguiente, que nos indica que todo resultó como esperabamos</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets//img/gc02/08.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Acto seguido, nos vamos a la configuracion de cloud build y habilitamos el administrador de app engine</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets//img/gc02/09.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">En la misma ventana, nos vamos a activadores, y debemos conectar con un repositorio</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets//img/gc02/10.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  -->

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">En nuestro caso es en github de modo que seleccionamos GitHub, damos click en continuar</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets//img/gc02/11.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Seleccionamos el repositorio, aceptamos y damos click en conectar repositorio</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets//img/gc02/12.PNG" width="450px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Luego debemos seleccionar la opcion crear activador, y debemos configurar ciertos parametros</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets//img/gc02/13.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Asignamos el nomnbre, tipo de activador, una descripcion y finalmente damos click en guardar</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets//img/gc02/14.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Nos vamos a nuestro editor y agregamos un mensaje para verificar si todo funciona correctamente</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets//img/gc02/15.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Agregamos los cambios al repositorio, hacemos un commit y luego un push</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets//img/gc02/16.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Como podemos ver se lanzó el activador y se esta realizando automaticamente la compilacion</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets//img/gc02/17.PNG" width="500px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Ahora al visitar de nuevo el sitio podemos ver el mensaje que agregamos previamente, demostrando que todo el proceso se realizó correctamente</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets//img/gc02/18.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


        </div>