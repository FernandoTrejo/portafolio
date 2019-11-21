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
            <h3 align="center" class="display-4 mt-3" style="color:black;"> Guía Google Cloud 05
            </h3><br>
                <!-- CONTENIDO DE LA PESTAÑA -->
                <div id="ContenedorPestania">

                    <div style="color:black" class="form-row">
                        
                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Creamos un nuevo proyecto en la consola de google cloud</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/01.PNG" width="550px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Establecemos un nombre y damos click en crear</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/02.PNG" width="500px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Se nos mostrará lo siguiente, luego seleccionamos crear aplicacion</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/03.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Dejamos la region por defecto y damos en crear app</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/04.PNG" width="500px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Seleccionamos el lenguaje que en este caso es PHP y en el entorno lo dejamos en estándar</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/05.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">En las notificaciones podemos ver que el proyecto ya se ha creado</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/06.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Iniciamos la shell de google cloud y vemos que la sesion ya esta iniciada en nuestro proyecto </h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/07.PNG" width="700px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Debemos tener el repositorio listo, en donde se encuentra la carpeta con nuestro codigo</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/08.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Ahora clonamos el repositorio alojado en github hacia la carpeta de nuestro proyecto</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/09.PNG" width="700px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Hacemos un listado y vemos que efectivamente se ha copiado la carpeta, entramos a ella y ejecutamos el comando gcloud app deploy</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/10.PNG" width="700px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  -->

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Nos pregunta si queremos continuar, le decimos que sí</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/11.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Ya finalizado, podemos ir a la URL que nos indica para ver lo que hay en el sitio</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/12.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Veremos la siguiente pagina, que nos indica que todo esta funcionando correctamente</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/13.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Nos vamos al historial de compilaciones, y habilitamos  la API de Cloud Build</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/14.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Ahora vamos a habilitar otras API's, la cual es la app engine admin api</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/15.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">La buscamos y seleccionamos sobre ella</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/16.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Y simplemente hacemos click en habilitar</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/17.PNG" width="500px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Ahora en IAM vamos a otorgar ciertos permisos al usuario</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/18.PNG" width="650px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Agregamos la funcion de administrador de app engine y administrador de servicios de app engine. Luego hacemos click en guardar</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/19.PNG" width="325px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">El siguiente paso será vincular con el repositorio alojado en github. Seleccionamos repositorio externo</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/19-1.PNG" width="620px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Seleccionamos el proyecto que queremos vincular, el proveedor de git que en este caso es github, luego hacemos click en conectarse a github</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/19-2.PNG" width="550px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Luego nos aparece la lista en donde vamos a seleccionar el repositorio al que queremos conectar</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/19-3.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Acá ya conectó el proyecto al repositorio y nos muestra sus detalles generales</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/19-4.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Luego damos click en crear activador para que cada vez que hagamos un cambio en el repositorio tambien se haga en la carpeta del proyecto en google cloud</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/20.PNG" width="700px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Seleccionamos el repositorio, nombramos al activador y establecemos los demas parametros que se muestran a continuacion</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/21.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Ahora sí hacemos click en crear activador</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/22.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Ahora realizamos un cambio en el index del sitio web, agregaremos un mensaje. Posteriormente hacemos un push hacia el repositorio</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/23.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Automaticamente se activó el proceso de despliegue en google cloud</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/24.PNG" width="700px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">EL proceso finalizó de manera exitosa y podemos ver los detalles de la compilacion</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/25.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Finalmente visitamos el sitio web y vemos que efectivamente los cambios del repositorio se realizaron tambien</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/gc01/26.PNG" width="600px" height="325px">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


        </div>