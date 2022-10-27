@extends('layouts/base')

    @section('content')
        
    <div class="container my-5 ">
        <div class="p-5 mb-4 bg-success bg-gradient text-white rounded-3 text-center">
           
                <h1 class="display-5 fw-bold">Tamagotchi Fighters</h1>
                <p class="col-md-8 fs-4"> Bienvenue sur le site de Tamagotchi Fighters !</p>
                <p class="fs-5">
                    Occupe toi  quotidiennement de ton animal. Fais le manger, boire, dormir et n'oublie pas de l'entrainer réguliérement.
                </p>
                
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="{{route('login')}}" type="button" class="btn btn-primary btn-lg px-4 gap-3">Se connecter</a>
                    <a href="{{route('register')}}" type="button" class="btn btn-secondary btn-lg px-4">S'enregistrer</a>
                </div>    
        </div>

        <div class="text-center mt-2 pt-3 pb-5 bg-light rounded-3">
            <h2 class="pb-2">Les personnages disponibles</h2>
            <img class="rounded-4" src="{{asset("images/animal1.jpg")}}" alt="image du premier animal">
        </div>    
    </div>



    @endsection
