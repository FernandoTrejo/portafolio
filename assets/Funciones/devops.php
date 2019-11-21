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
            <h3 align="center" class="display-4 mt-3" style="color:black;"> Guía DevOps
            </h3><br>
                <!-- CONTENIDO DE LA PESTAÑA -->
                <div id="ContenedorPestania">

                    <div style="color:black" class="form-row">
                        
                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Iniciamos sesión en Azure DevOps con nuestra cuenta institucional</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/devops/01.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Hacemos click en continuar</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/devops/02.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Elegimos Crear Nueva Organización, asignando el nombre que deseamos, se recomienda crear
organización por proyectos</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/devops/03.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Asignamos el nombre y descripción del proyecto. Damos click en avanzados, seleccionamos Team Fundation Version Control, como gestor de código
fuente. </h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/devops/04.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Seleccionamos el proyecto creado, y nos mostrara el resumen, donde tenemos diferentes opciones que
nos permitirán generar diferentes flujos de trabajo en el menú izquierdo. </h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/devops/05.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Iniciamos Visual Studio y creamos un nuevo proyecto de tipo ASP.NET Web Application (.NET Framework).</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/devops/06.PNG" width="570px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Asignamos un nombre y la ruta de almacenamiento</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/devops/07.PNG" width="570px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Seleccionamos MVC en la plantilla a utilizar</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/devops/08.PNG" width="570px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Se nos mostrará el proyecto creado</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/devops/09.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Ejecutamos la aplicacion y nos mostrará en el navegador lo siguiente</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/devops/10.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  -->

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Para versionar el código fuente en la plataforma de Azure DevOps, en el menú de Teams, seleccionamos Administrar conexiones.</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/devops/11.PNG" width="450px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">En la ventana de Team Explorer que se nos muestra, desplegamos las opciones de Administración
de Conexiones, y seleccionamos Conectar a un Proyecto</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="assets/img/devops/12.PNG" width="400px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">En el explorador de soluciones, damos click derecho a la solución, elegimos Adicionar a Solución
al control de código fuente</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="DEV/UI/img/devops/13.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Validamos que estemos en la organización correcta, seleccionamos sobre el proyecto donde
subiremos el código fuente y asignamos el nombre a la carpeta</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="DEV/UI/img/devops/14.PNG" width="350px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">En el Explorador de Equipo, nos dirigimos al Explorador de Codigo Fuente.</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="DEV/UI/img/devops/15.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Verificarnos que nuestra solución ha sido adicionada al proyecto, pero aun no ha sido subida a la
nube</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="DEV/UI/img/devops/16.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Para proteger el código fuente, en el explorador de solución, damos click derecho a la solución,
seleccionamos la opción Proteger (Check in) del menú contextual</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="DEV/UI/img/devops/17.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">El explorador de equipos nos mostrara los archivos y carpetas que serán subidas a la
nube</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="DEV/UI/img/devops/18.PNG" width="300px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Acá se muestra que la protección resultó exitosa</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="DEV/UI/img/devops/19.PNG" width="300px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">El explorador de control de código, nos mostrara la fecha de la última protección realizada</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="DEV/UI/img/devops/20.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">En sitio web de dev.azure.com, visualizaremos los cambios protegidos</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="DEV/UI/img/devops/21.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Ahora en el portal de Azure creamos una app web</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="DEV/UI/img/devops/22.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Asignamos los valores a los campos necesarios para crearla</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="DEV/UI/img/devops/23.PNG" width="500px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Observamos que la implementación ha finalizado</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="DEV/UI/img/devops/24.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Vemos los detalles generales de nuestro proyecto, ahora visitaremos la URL de la aplicacion</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="DEV/UI/img/devops/25.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Y deberemos ser capaces de observar este sitio por defecto, lo cual nos indica que todo se creó correctamente</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="DEV/UI/img/devops/26.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Usaremos la opción de Build que nos proporciona Azure DevOps en la sección de Pipelines para el despliegue del proyecto</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="DEV/UI/img/devops/27.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Seleccionamos Nuevo Pipeline</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="DEV/UI/img/devops/28.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Elegimos el origen del código fuente a publicar, en este caso como esta alojada en un Repo de
Devops en Azure, se toma la opción de Team Foundation Version Control</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="DEV/UI/img/devops/29.PNG" width="570px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Seleccionamos la fuente de Team Foundation Version Control</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="DEV/UI/img/devops/30.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Indicamos la rama o branch de donde se tomará el código fuente a compila, seleccionando la
carpeta donde se encuentra nuestro archivo de solución (sln)</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="DEV/UI/img/devops/31.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light col-sm-12 mt-2">
                            <h5 align="left" class="card-header">Indicamos que deseamos realizar una publicación en Azure Web App para ASP.NET</h5>
                            <div class="card-body">
                                <div class="form-row row flex-parent">
                                    <div class="form-row align-items-center col-12">
                                        <img src="DEV/UI/img/devops/32.PNG" width="600px" height="300px">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


        </div>