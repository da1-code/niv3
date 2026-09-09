@extends('layouts.app')

@section('title','Assistant IA')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/etudiant/assistant.css') }}">
@endpush

@section('content')

<div class="assistant-container">


    <div class="assistant-header">

        <h2>🤖 EDUNOVA IA Assistant</h2>

        <p>
            Posez vos questions et obtenez une aide personnalisée.
        </p>

    </div>



    <div class="chat-box">


        <div class="message ia">

            <strong>EDUNOVA IA :</strong>

            <p>
                Bonjour 👋 Je suis votre assistant intelligent.
                Comment puis-je vous aider aujourd'hui ?
            </p>

        </div>



        <div class="message user">

            <strong>Vous :</strong>

            <p>
                Explique-moi le concept d'intelligence artificielle.
            </p>

        </div>



        <div class="message ia">

            <strong>EDUNOVA IA :</strong>

            <p>
                L'intelligence artificielle est un domaine
                qui permet aux machines d'apprendre et de résoudre
                des problèmes comme un humain.
            </p>

        </div>



    </div>



    <form class="question-form">


        <input type="text"
        placeholder="Posez votre question ici...">


        <button>
            Envoyer
        </button>


    </form>



    <div class="suggestions">

        <h3>Suggestions</h3>

        <button>
            Résumer mon cours
        </button>

        <button>
            Expliquer simplement
        </button>

        <button>
            Créer un exercice
        </button>

    </div>


</div>

@endsection