<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

<!-- Defautl Css -->
@extends('default')

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="texto-bienvenido font-semibold text-gray-800 leading-tight">
            {{ __('Bienvenido/a ') }}{{ Auth::user()->name }}
        </h2>
    </x-slot>

    <!-- Hero Section -->
    <div class="conatiner-fluid">
        <img src="{{ asset('images/banner/banner1.jpg') }}" alt="">
    </div>

    <section class="contenedor-titulos-cards container">
    <h3>Nuestros</h3>
    <h1>Planes</h1>
    </section>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <div class="row row-cols-1 row-cols-md-3 g-4">

                
  <!-- CARD MEMBRESÍAS -->
  @foreach ($membresiasData as $membresiasDatas)
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">{{$membresiasDatas->NOMBREMEMBRESIA}}</h5>
        <h2>{{$membresiasDatas->PRECIO}}</h2>
        <p class="card-text">{{$membresiasDatas->DESCRIPCION}}</p>
        <button type="button" class="btns">Dark</button>
      </div>
    </div>
  </div>
  @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
