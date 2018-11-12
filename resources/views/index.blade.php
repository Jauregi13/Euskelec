@extends('layouts.layout')

@section('titulo','Euskelec')

@section('contenido')
<!-- Que es Euskelec -->
<section id="euskelec" class="euskelec text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2 class="text-white mb-4">¿Qué es Euskelec?</h2>
        <p class="text-white-50">Euskelec es una competición para alumnos de formación profesional a nivel del País Vasco en el que ellos diseñaran y construirán
        un coche eléctrico para luego poder participar en diferentes pruebas y así evaluarán el rendimiento del coche</p>
      </div>
    </div>
  </div>
</section>


<!-- Sobre nosotros -->
    <section id="nosotros" class="seccion-nosotros bg-light">
      <div class="container">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
          <div class="col-xl-8 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0" src="img/euskelec3.jpg" alt="">
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h4>¿Para qué servirá esta aplicación?</h4>
              <p class="text-black-50 mb-0">Esta aplicación ha sido creada para mostrar la información que nos pasan los equipos, a través de los sensores instalados en los coches, sobre la preparación de sus coches para la competición. Se mostrará de forma clara y ordenada a la vez que atractiva</p>
            </div>
          </div>
        </div>

        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/estadisticas.png" alt="">
          </div>
          <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h4 class="text-white">Estadísticas</h4>
                  <p class="mb-0 text-white-50">La información de cada sensor lo mostraremos en gráficos para que se pueda ver de manera gráfica la evolución del progreso del coche</p>
                  <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/euskelec.jpg" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                  <h4 class="text-white">Campeonatos</h4>
                  <p class="mb-0 text-white-50">Estará la posibilidad de organizar carreras entre los equipos de la plataforma para hacer un testeo mejor de cada coche</p>
                  <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
@endsection