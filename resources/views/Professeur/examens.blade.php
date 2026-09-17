<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EDUNOVA IA - Gestion des examens</title>

    <link rel="stylesheet" href="/enseignant/dashboard.css">
    <link rel="stylesheet" href="/enseignant/examens.css">

</head>


<body>


    <!-- =====================================================
         SIDEBAR ENSEIGNANT
         ===================================================== -->

    <aside class="sidebar">

        <div class="logo">
            <h2>EDUNOVA IA</h2>
        </div>


        <ul class="menu">

            <li>
                <a href="/prof/dashboard">
                    🏠 Dashboard
                </a>
            </li>


            <li>
                <a href="/prof/cours">
                    📚 Mes cours
                </a>
            </li>


            <li class="active">
                <a href="/prof/examens">
                    📝 Examens
                </a>
            </li>


            <li>
                <a href="/prof/etudiants">
                    👨‍🎓 Étudiants
                </a>
            </li>


            <li>
                <a href="/prof/statistiques">
                    📊 Statistiques
                </a>
            </li>


            <li>
                <a href="/prof/parametres">
                    ⚙️ Paramètres
                </a>
            </li>


            <li>
                <a href="/prof/deconnexion">
                    🚪 Déconnexion
                </a>
            </li>

        </ul>

    </aside>



    <!-- =====================================================
         CONTENU PRINCIPAL
         ===================================================== -->

    <main class="main-content">


        <div class="exam-container">


            <!-- =================================================
                 EN-TÊTE
                 ================================================= -->

            <div class="page-header">

                <div>

                    <h2>
                        📝 Gestion des examens
                    </h2>

                    <p>
                        Créez, gérez et suivez les examens de vos étudiants.
                    </p>

                </div>


                <button
                    type="button"
                    class="btn-add"
                    id="ouvrirExamen"
                >
                    + Créer un examen
                </button>

            </div>



            <!-- =================================================
                 MESSAGE DE SUCCÈS
                 ================================================= -->

            @if(session('success'))

                <div class="success-message">
                    {{ session('success') }}
                </div>

            @endif



            <!-- =================================================
                 ERREURS DE VALIDATION
                 ================================================= -->

            @if($errors->any())

                <div class="error-message">

                    <strong>
                        Veuillez corriger les erreurs suivantes :
                    </strong>

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif



            <!-- =================================================
                 STATISTIQUES RAPIDES
                 ================================================= -->

            <div class="exam-stats">


                <div class="exam-stat-card">

                    <div class="exam-stat-icon">
                        📝
                    </div>

                    <div>

                        <span>
                            Examens
                        </span>

                        <strong>
                            {{ $examens->count() }}
                        </strong>

                    </div>

                </div>



                <div class="exam-stat-card">

                    <div class="exam-stat-icon">
                        🟢
                    </div>

                    <div>

                        <span>
                            Publiés
                        </span>

                        <strong>
                            {{ $examens->where('statut', 'publie')->count() }}
                        </strong>

                    </div>

                </div>



                <div class="exam-stat-card">

                    <div class="exam-stat-icon">
                        🟠
                    </div>

                    <div>

                        <span>
                            Brouillons
                        </span>

                        <strong>
                            {{ $examens->where('statut', 'brouillon')->count() }}
                        </strong>

                    </div>

                </div>



                <div class="exam-stat-card">

                    <div class="exam-stat-icon">
                        📊
                    </div>

                    <div>

                        <span>
                            Participations
                        </span>

                        <strong>
                            0
                        </strong>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 RECHERCHE / FILTRES
                 ================================================= -->

            <div class="filter-section">


                <input
                    type="text"
                    id="rechercheExamen"
                    placeholder="🔍 Rechercher un examen..."
                >


                <select id="filtreCours">

                    <option value="">
                        Tous les cours
                    </option>

                    @foreach($examens->pluck('cours')->unique() as $cours)

                        <option value="{{ strtolower($cours) }}">
                            {{ $cours }}
                        </option>

                    @endforeach

                </select>


                <select id="filtreStatut">

                    <option value="">
                        Tous les statuts
                    </option>

                    <option value="publie">
                        Publié
                    </option>

                    <option value="brouillon">
                        Brouillon
                    </option>

                </select>

            </div>



            <!-- =================================================
                 LISTE DES EXAMENS
                 ================================================= -->

            <div class="exam-section">


                <div class="section-header">

                    <div>

                        <h3>
                            📋 Mes examens
                        </h3>

                        <p>
                            Retrouvez ici tous les examens que vous avez créés.
                        </p>

                    </div>

                </div>



                <!-- =================================================
                     EXAMENS ENREGISTRÉS
                     ================================================= -->

                @forelse($examens as $examen)

                    <div
                        class="exam-card"
                        data-titre="{{ strtolower($examen->titre) }}"
                        data-cours="{{ strtolower($examen->cours) }}"
                        data-statut="{{ $examen->statut }}"
                    >


                        <!-- ICÔNE -->

                        <div class="exam-icon">

                            @if(str_contains(strtolower($examen->cours), 'intelligence'))

                                🤖

                            @elseif(str_contains(strtolower($examen->cours), 'laravel'))

                                💻

                            @elseif(str_contains(strtolower($examen->cours), 'base'))

                                🗄️

                            @else

                                📝

                            @endif

                        </div>



                        <!-- INFORMATIONS -->

                        <div class="exam-info">

                            <h3>
                                {{ $examen->titre }}
                            </h3>


                            <p>
                                {{ $examen->description ?? 'Aucune description disponible.' }}
                            </p>


                            <div class="exam-meta">


                                <span>
                                    📚 {{ $examen->cours }}
                                </span>


                                <span>
                                    🏫

                                    @php
                                        $classeExamen = $classes->firstWhere('id', $examen->idclasse);
                                    @endphp

                                    {{ $classeExamen ? $classeExamen->nom : 'Classe inconnue' }}

                                </span>


                                <span>
                                    🎓

                                    @if($examen->serie === 'scientifique')
                                        Scientifique
                                    @else
                                        Littéraire
                                    @endif

                                </span>


                                <span>
                                    📅

                                    @if($examen->date_examen)

                                        {{ \Carbon\Carbon::parse($examen->date_examen)->format('d/m/Y') }}

                                    @else

                                        À définir

                                    @endif

                                </span>


                                @if($examen->document)

                                    <span>
                                        📄 Sujet disponible
                                    </span>

                                @endif


                            </div>

                        </div>



                        <!-- STATUT -->

                        <div
                            class="exam-status
                            @if($examen->statut === 'publie')
                                published
                            @else
                                draft
                            @endif"
                        >

                            @if($examen->statut === 'publie')

                                Publié

                            @else

                                Brouillon

                            @endif

                        </div>



                        <!-- ACTIONS -->

                        <div class="exam-actions">


                            @if($examen->document)

                                <a
                                    href="{{ asset('storage/' . $examen->document) }}"
                                    target="_blank"
                                    class="btn-view"
                                >
                                    👁 Voir le sujet
                                </a>

                            @else

                                <span class="btn-view">
                                    Aucun fichier
                                </span>

                            @endif


                            <a
                                href="#"
                                class="btn-edit"
                            >
                                ✏️ Modifier
                            </a>


                            <button
                                type="button"
                                class="btn-delete"
                                onclick="return confirm('Voulez-vous vraiment supprimer cet examen ?')"
                            >
                                🗑️ Supprimer
                            </button>

                        </div>

                    </div>

                @empty


                    <div class="empty-exam">

                        <div>
                            📝
                        </div>


                        <h3>
                            Aucun examen
                        </h3>


                        <p>
                            Vous n'avez pas encore créé d'examen.
                        </p>


                        <button
                            type="button"
                            class="btn-add"
                            onclick="ouvrirModalExamen()"
                        >
                            + Créer mon premier examen
                        </button>

                    </div>


                @endforelse


            </div>

        </div>

    </main>



    <!-- =====================================================
         MODALE : CRÉER UN EXAMEN
         ===================================================== -->

    <div
        class="modal-overlay"
        id="modalExamen"
    >

        <div class="exam-modal">


            <!-- =================================================
                 HEADER MODALE
                 ================================================= -->

            <div class="modal-header">

                <div>

                    <h2>
                        📝 Créer un examen
                    </h2>

                    <p>
                        Créez une nouvelle évaluation pour vos étudiants.
                    </p>

                </div>


                <button
                    type="button"
                    class="modal-close"
                    id="fermerExamen"
                >
                    &times;
                </button>

            </div>



            <!-- =================================================
                 FORMULAIRE
                 ================================================= -->

            <form
                action="{{ route('examen.ajout') }}"
                method="POST"
                enctype="multipart/form-data"
                id="formExamen"
            >

                @csrf



                <!-- =================================================
                     TITRE
                     ================================================= -->

                <div class="form-group">

                    <label for="titreExamen">
                        Titre de l'examen
                    </label>

                    <input
                        type="text"
                        id="titreExamen"
                        name="titre"
                        value="{{ old('titre') }}"
                        placeholder="Ex : Examen Intelligence Artificielle"
                        required
                    >

                </div>



                <!-- =================================================
                     DESCRIPTION
                     ================================================= -->

                <div class="form-group">

                    <label for="descriptionExamen">
                        Description
                    </label>

                    <textarea
                        id="descriptionExamen"
                        name="description"
                        rows="4"
                        placeholder="Décrivez brièvement l'objectif de l'examen..."
                    >{{ old('description') }}</textarea>

                </div>



                <!-- =================================================
                     CLASSE
                     ================================================= -->

                <div class="form-group">

                    <label for="classeExamen">
                        Classe
                    </label>

                    <select
                        id="classeExamen"
                        name="idclasse"
                        required
                    >

                        <option value="">
                            Sélectionner une classe
                        </option>


                        @foreach($classes as $classe)

                            <option
                                value="{{ $classe->id }}"
                                {{ old('idclasse') == $classe->id ? 'selected' : '' }}
                            >
                                {{ $classe->nom }}
                            </option>

                        @endforeach

                    </select>

                </div>



                <!-- =================================================
                     COURS + SÉRIE
                     ================================================= -->

                <div class="form-row">


                    <div class="form-group">

                        <label for="coursExamen">
                            Cours
                        </label>

                        <input
                            type="text"
                            id="coursExamen"
                            name="cours"
                            value="{{ old('cours') }}"
                            placeholder="Ex : Intelligence Artificielle"
                            required
                        >

                    </div>



                    <div class="form-group">

                        <label for="serieExamen">
                            Série
                        </label>

                        <select
                            id="serieExamen"
                            name="serie"
                            required
                        >

                            <option value="">
                                Sélectionner
                            </option>


                            <option
                                value="scientifique"
                                {{ old('serie') == 'scientifique' ? 'selected' : '' }}
                            >
                                Scientifique
                            </option>


                            <option
                                value="litteraire"
                                {{ old('serie') == 'litteraire' ? 'selected' : '' }}
                            >
                                Littéraire
                            </option>

                        </select>

                    </div>

                </div>



                <!-- =================================================
                     DATE
                     ================================================= -->

                <div class="form-group">

                    <label for="dateExamen">
                        Date de l'examen
                    </label>

                    <input
                        type="date"
                        id="dateExamen"
                        name="date_examen"
                        value="{{ old('date_examen') }}"
                        required
                    >

                </div>



                <!-- =================================================
                     FICHIER DE L'EXAMEN
                     ================================================= -->

                <div class="form-group">

                    <label for="document">
                        Fichier de l'examen
                    </label>


                    <div class="file-upload">

                        <input
                            type="file"
                            id="document"
                            name="document"
                            accept=".pdf,.doc,.docx"
                            required
                        >


                        <label
                            for="document"
                            class="file-label"
                        >
                            📄 Choisir un fichier
                        </label>


                        <span id="nomFichier">
                            Aucun fichier sélectionné
                        </span>

                    </div>


                    <small>
                        Formats acceptés : PDF, DOC, DOCX — Taille maximale : 10 Mo.
                    </small>

                </div>



                <!-- =================================================
                     STATUT
                     ================================================= -->

                <div class="form-group">

                    <label for="statutExamen">
                        Statut
                    </label>

                    <select
                        id="statutExamen"
                        name="statut"
                        required
                    >

                        <option
                            value="brouillon"
                            {{ old('statut', 'brouillon') == 'brouillon' ? 'selected' : '' }}
                        >
                            🟠 Brouillon
                        </option>


                        <option
                            value="publie"
                            {{ old('statut') == 'publie' ? 'selected' : '' }}
                        >
                            🟢 Publier immédiatement
                        </option>

                    </select>

                </div>



                <!-- =================================================
                     BOUTONS
                     ================================================= -->

                <div class="modal-actions">


                    <button
                        type="button"
                        class="btn-cancel"
                        id="annulerExamen"
                    >
                        Annuler
                    </button>


                    <button
                        type="submit"
                        class="btn-submit"
                    >
                        📝 Créer l'examen
                    </button>

                </div>

            </form>

        </div>

    </div>



    <!-- =====================================================
         CSS MODALE
         ===================================================== -->

    <style>

        .success-message {
            margin: 0 0 20px;
            padding: 14px 18px;
            border-radius: 10px;
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
            font-size: 14px;
        }


        .error-message {
            margin: 0 0 20px;
            padding: 14px 18px;
            border-radius: 10px;
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
            font-size: 14px;
        }


        .error-message ul {
            margin: 8px 0 0 20px;
        }


        .empty-exam {
            text-align: center;
            padding: 50px 20px;
            background: #ffffff;
            border-radius: 15px;
            border: 1px solid #e5e7eb;
        }


        .empty-exam > div {
            font-size: 45px;
            margin-bottom: 10px;
        }


        .empty-exam h3 {
            margin: 0 0 8px;
            color: #1e293b;
        }


        .empty-exam p {
            color: #64748b;
            margin-bottom: 20px;
        }


        .modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(15, 23, 42, 0.68);
            backdrop-filter: blur(5px);
            z-index: 9999;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }


        .modal-overlay.active {
            display: flex;
        }


        .exam-modal {
            width: 100%;
            max-width: 680px;
            max-height: 90vh;
            overflow-y: auto;
            background: #ffffff;
            border-radius: 18px;
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.25);
            animation: apparitionExamen 0.25s ease;
        }


        @keyframes apparitionExamen {

            from {
                opacity: 0;
                transform: translateY(-20px) scale(0.97);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }

        }


        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 20px;
            padding: 25px 28px;
            border-bottom: 1px solid #e5e7eb;
        }


        .modal-header h2 {
            margin: 0 0 6px;
            color: #4f46e5;
            font-size: 22px;
        }


        .modal-header p {
            margin: 0;
            color: #64748b;
            font-size: 14px;
        }


        .modal-close {
            width: 36px;
            height: 36px;
            border: none;
            border-radius: 50%;
            background: #f1f5f9;
            color: #475569;
            font-size: 25px;
            line-height: 1;
            cursor: pointer;
            transition: 0.2s;
        }


        .modal-close:hover {
            background: #e2e8f0;
            color: #ef4444;
        }


        #formExamen {
            padding: 25px 28px 28px;
        }


        .form-group {
            margin-bottom: 20px;
        }


        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #1e293b;
            font-weight: 600;
            font-size: 14px;
        }


        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #dbe2ea;
            border-radius: 9px;
            background: #f8fafc;
            color: #1e293b;
            font-family: inherit;
            font-size: 14px;
            outline: none;
            transition: 0.2s;
            box-sizing: border-box;
        }


        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }


        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: #6366f1;
            background: #ffffff;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.10);
        }


        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }


        /* =====================================================
           CHOIX DU FICHIER
           ===================================================== */

        .file-upload {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
            padding: 12px;
            border: 1px dashed #cbd5e1;
            border-radius: 10px;
            background: #f8fafc;
        }


        .file-upload input[type="file"] {
            display: none;
        }


        .file-label {
            display: inline-block !important;
            margin: 0 !important;
            padding: 10px 15px;
            border-radius: 8px;
            background: #eef2ff;
            color: #4f46e5 !important;
            cursor: pointer;
            font-weight: 600 !important;
            transition: 0.2s;
        }


        .file-label:hover {
            background: #e0e7ff;
        }


        #nomFichier {
            color: #64748b;
            font-size: 13px;
            word-break: break-word;
        }


        .form-group small {
            display: block;
            margin-top: 7px;
            color: #64748b;
            font-size: 12px;
        }


        .modal-actions {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
        }


        .modal-actions button {
            border: none;
            border-radius: 9px;
            padding: 12px 20px;
            font-family: inherit;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s;
        }


        .btn-cancel {
            background: #f1f5f9;
            color: #475569;
        }


        .btn-cancel:hover {
            background: #e2e8f0;
        }


        .btn-submit {
            background: linear-gradient(
                135deg,
                #6366f1,
                #7c3aed
            );
            color: #ffffff;
            box-shadow: 0 5px 15px rgba(99, 102, 241, 0.25);
        }


        .btn-submit:hover {
            transform: translateY(-1px);
            box-shadow: 0 7px 20px rgba(99, 102, 241, 0.35);
        }


        @media (max-width: 650px) {

            .exam-modal {
                max-height: 95vh;
                border-radius: 14px;
            }


            .modal-header,
            #formExamen {
                padding-left: 20px;
                padding-right: 20px;
            }


            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }


            .modal-actions {
                flex-direction: column-reverse;
            }


            .modal-actions button {
                width: 100%;
            }

        }

    </style>



    <!-- =====================================================
         JAVASCRIPT
         ===================================================== -->

    <script>


        /* =====================================================
           MODALE
           ===================================================== */

        const ouvrirExamen =
            document.getElementById('ouvrirExamen');

        const modalExamen =
            document.getElementById('modalExamen');

        const fermerExamen =
            document.getElementById('fermerExamen');

        const annulerExamen =
            document.getElementById('annulerExamen');


        function ouvrirModalExamen() {

            modalExamen.classList.add('active');

            document.body.style.overflow = 'hidden';

        }


        ouvrirExamen.addEventListener('click', function () {

            ouvrirModalExamen();

        });


        function fermerModalExamen() {

            modalExamen.classList.remove('active');

            document.body.style.overflow = '';

        }


        fermerExamen.addEventListener(
            'click',
            fermerModalExamen
        );


        annulerExamen.addEventListener(
            'click',
            fermerModalExamen
        );


        modalExamen.addEventListener('click', function (event) {

            if (event.target === modalExamen) {

                fermerModalExamen();

            }

        });


        document.addEventListener('keydown', function (event) {

            if (
                event.key === 'Escape' &&
                modalExamen.classList.contains('active')
            ) {

                fermerModalExamen();

            }

        });



        /* =====================================================
           NOM DU FICHIER SÉLECTIONNÉ
           ===================================================== */

        const documentExamen =
            document.getElementById('document');

        const nomFichier =
            document.getElementById('nomFichier');


        documentExamen.addEventListener('change', function () {

            if (this.files.length > 0) {

                nomFichier.textContent =
                    this.files[0].name;

            } else {

                nomFichier.textContent =
                    'Aucun fichier sélectionné';

            }

        });



        /* =====================================================
           RECHERCHE DES EXAMENS
           ===================================================== */

        const rechercheExamen =
            document.getElementById('rechercheExamen');

        const filtreCours =
            document.getElementById('filtreCours');

        const filtreStatut =
            document.getElementById('filtreStatut');


        function filtrerExamens() {

            const recherche =
                rechercheExamen.value.toLowerCase().trim();

            const cours =
                filtreCours.value.toLowerCase();

            const statut =
                filtreStatut.value.toLowerCase();


            const cartes =
                document.querySelectorAll('.exam-card');


            cartes.forEach(function (carte) {

                const titre =
                    carte.dataset.titre || '';

                const coursExamen =
                    carte.dataset.cours || '';

                const statutExamen =
                    carte.dataset.statut || '';


                const correspondRecherche =
                    titre.includes(recherche);


                const correspondCours =
                    cours === '' ||
                    coursExamen.includes(cours);


                const correspondStatut =
                    statut === '' ||
                    statutExamen === statut;


                if (
                    correspondRecherche &&
                    correspondCours &&
                    correspondStatut
                ) {

                    carte.style.display = '';

                } else {

                    carte.style.display = 'none';

                }

            });

        }


        rechercheExamen.addEventListener(
            'input',
            filtrerExamens
        );


        filtreCours.addEventListener(
            'change',
            filtrerExamens
        );


        filtreStatut.addEventListener(
            'change',
            filtrerExamens
        );

    </script>


</body>

</html>