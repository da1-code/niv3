<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EDUNOVA IA - Mes cours</title>

    <link rel="stylesheet" href="/enseignant/dashboard.css">

    <link rel="stylesheet" href="/enseignant/cours.css">

</head>


<body>


    <!-- =====================================================
         SIDEBAR ENSEIGNANT
    ====================================================== -->

    <aside class="sidebar">

        <div class="logo">

            <h2>
                EDUNOVA IA
            </h2>

        </div>


        <ul class="menu">

            <li>
                <a href="/prof/dashboard">
                    🏠 Dashboard
                </a>
            </li>


            <li class="active">
                <a href="/prof/cours">
                    📚 Mes cours
                </a>
            </li>


            <li>
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

        </ul>


        <div class="sidebar-bottom">

            <form action="/logout" method="POST">

                @csrf

                <button
                    type="submit"
                    class="logout-button"
                >

                    🚪 Déconnexion

                </button>

            </form>

        </div>

    </aside>



    <!-- =====================================================
         CONTENU PRINCIPAL
    ====================================================== -->

    <main class="main-content">


        <div class="courses-container">


            <!-- =================================================
                 EN-TÊTE
            ================================================== -->

            <div class="page-header">


                <div>

                    <h2>
                        Mes cours
                    </h2>

                    <p>
                        Gérez vos cours et vos supports pédagogiques.
                    </p>

                </div>


                <button
                    type="button"
                    class="btn-add"
                    id="ouvrirCours"
                >

                    + Ajouter un cours

                </button>


            </div>



            <!-- =================================================
                 MESSAGE DE SUCCÈS
            ================================================== -->

            @if(session('success'))

                <div
                    style="
                        background:#eafaf0;
                        color:#21884b;
                        padding:12px 15px;
                        border-radius:10px;
                        margin-bottom:20px;
                    "
                >

                    {{ session('success') }}

                </div>

            @endif



            <!-- =================================================
                 ERREURS DE VALIDATION
            ================================================== -->

            @if($errors->any())

                <div
                    style="
                        background:#fff1f1;
                        color:#c63f4d;
                        padding:12px 15px;
                        border-radius:10px;
                        margin-bottom:20px;
                    "
                >

                    <ul style="margin-left:20px;">

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif



            <!-- =================================================
                 RECHERCHE
            ================================================== -->

            <div class="search-section">


                <input
                    type="text"
                    id="searchCourse"
                    placeholder="Rechercher un cours..."
                >


                <select id="filterClasse">

                    <option value="">
                        Toutes les classes
                    </option>


                    @foreach($classes as $classe)

                        <option value="{{ strtolower($classe->nom) }}">

                            {{ $classe->nom }}

                        </option>

                    @endforeach

                </select>


                <select id="filterSerie">

                    <option value="">
                        Toutes les séries
                    </option>

                    <option value="scientifique">
                        Scientifique
                    </option>

                    <option value="litteraire">
                        Littéraire
                    </option>

                </select>


            </div>



            <!-- =================================================
                 GRILLE DES COURS
            ================================================== -->

            <div class="course-grid" id="courseGrid">


                @forelse($cours as $cour)


                    <!-- =================================================
                         COURS RÉEL
                    ================================================== -->

                    <div
                        class="course-card"
                        data-title="{{ strtolower($cour->titre) }}"
                        data-description="{{ strtolower($cour->description) }}"
                        data-classe="{{ strtolower($cour->classe) }}"
                        data-serie="{{ strtolower($cour->serie) }}"
                    >


                        <!-- ICÔNE -->

                        <div class="course-icon">

                            📚

                        </div>



                        <!-- TITRE -->

                        <h3>

                            {{ $cour->titre }}

                        </h3>



                        <!-- DESCRIPTION -->

                        <p>

                            {{ $cour->description }}

                        </p>



                        <!-- INFORMATIONS -->

                        <div class="course-info">


                            <span>

                                🏫

                                {{ $cour->classe }}

                            </span>


                            <span>

                                🎓

                                {{ ucfirst($cour->serie) }}

                            </span>


                        </div>



                        <!-- DOCUMENT + DATE -->

                        <div class="course-info">


                            <span>

                                📄

                                @if($cour->document)

                                    1 support

                                @else

                                    Aucun support

                                @endif

                            </span>


                            <span>

                                📅

                                @if($cour->created_at)

                                    {{ $cour->created_at->format('d/m/Y') }}

                                @endif

                            </span>


                        </div>



                        <!-- =================================================
                             ACTIONS
                        ================================================== -->

                        <div class="actions">


                            @if($cour->document)


                                <!-- VOIR -->

                                <a
                                    href="{{ asset('storage/' . $cour->document) }}"
                                    target="_blank"
                                    class="btn-view"
                                >

                                    👁 Voir

                                </a>



                                <!-- TÉLÉCHARGER -->

                                <a
                                    href="{{ asset('storage/' . $cour->document) }}"
                                    download
                                    class="btn-edit"
                                >

                                    📥 Télécharger

                                </a>


                            @else


                                <span
                                    class="btn-view"
                                    style="opacity:0.5;"
                                >

                                    Aucun fichier

                                </span>


                            @endif



                            <!-- SUPPRIMER -->

                            <button
                                type="button"
                                class="btn-delete"
                                onclick="supprimerCours()"
                            >

                                🗑 Supprimer

                            </button>


                        </div>


                    </div>


                @empty


                    <!-- =================================================
                         AUCUN COURS
                    ================================================== -->

                    <div class="course-card">


                        <div class="course-icon">

                            📚

                        </div>


                        <h3>

                            Aucun cours disponible

                        </h3>


                        <p>

                            Vous n'avez pas encore ajouté de cours.

                        </p>


                        <button
                            type="button"
                            class="btn-add"
                            onclick="ouvrirModal()"
                        >

                            + Ajouter un cours

                        </button>


                    </div>


                @endforelse


            </div>


        </div>


    </main>



    <!-- =====================================================
         MODALE AJOUTER UN COURS
    ====================================================== -->

    <div
        class="modal-overlay"
        id="modalCours"
    >


        <div class="course-modal">


            <!-- =================================================
                 HEADER MODALE
            ================================================== -->

            <div class="modal-header">


                <div>

                    <h2>
                        Ajouter un cours
                    </h2>

                    <p>
                        Ajoutez un nouveau cours et son support.
                    </p>

                </div>


                <button
                    type="button"
                    class="modal-close"
                    id="fermerCours"
                >

                    ×

                </button>


            </div>



            <!-- =================================================
                 FORMULAIRE
            ================================================== -->

            <form
                action="{{ route('cours.ajout') }}"
                method="POST"
                enctype="multipart/form-data"
                id="formCours"
            >

                @csrf



                <!-- =================================================
                     TITRE
                ================================================== -->

                <div class="form-group">

                    <label for="titre">

                        Titre du cours

                    </label>


                    <input
                        type="text"
                        id="titre"
                        name="titre"
                        placeholder="Ex : Intelligence artificielle"
                        value="{{ old('titre') }}"
                        required
                    >

                </div>



                <!-- =================================================
                     DESCRIPTION
                ================================================== -->

                <div class="form-group">

                    <label for="description">

                        Description

                    </label>


                    <textarea
                        id="description"
                        name="description"
                        placeholder="Décrivez le contenu du cours..."
                        required
                    >{{ old('description') }}</textarea>

                </div>



                <!-- =================================================
                     CLASSE + SÉRIE
                ================================================== -->

                <div class="form-row">


                    <!-- CLASSE -->

                    <div class="form-group">

                        <label for="idclasse">

                            Classe

                        </label>


                        <select
                            id="idclasse"
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



                    <!-- SÉRIE -->

                    <div class="form-group">

                        <label for="serie">

                            Série

                        </label>


                        <select
                            id="serie"
                            name="serie"
                            required
                        >

                            <option value="">
                                Sélectionner une série
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
                     DOCUMENT
                ================================================== -->

                <div class="form-group">


                    <label for="document">

                        Support du cours

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

                            📄

                            Choisir un fichier

                        </label>


                        <span id="nomFichier">

                            Aucun fichier sélectionné

                        </span>


                    </div>


                    <small>

                        Formats acceptés : PDF, DOC, DOCX.
                        Taille maximale : 10 Mo.

                    </small>


                </div>



                <!-- =================================================
                     BOUTONS
                ================================================== -->

                <div class="modal-actions">


                    <button
                        type="button"
                        class="btn-cancel"
                        id="annulerCours"
                    >

                        Annuler

                    </button>


                    <button
                        type="submit"
                        class="btn-submit"
                    >

                        Ajouter le cours

                    </button>


                </div>


            </form>


        </div>

    </div>



    <!-- =====================================================
         JAVASCRIPT
    ====================================================== -->

    <script>


        /* =====================================================
           OUVRIR LA MODALE
        ===================================================== */

        const modalCours =
            document.getElementById('modalCours');


        const ouvrirCours =
            document.getElementById('ouvrirCours');


        const fermerCours =
            document.getElementById('fermerCours');


        const annulerCours =
            document.getElementById('annulerCours');


        function ouvrirModal()
        {

            modalCours.classList.add('active');

        }


        function fermerModal()
        {

            modalCours.classList.remove('active');

        }


        ouvrirCours.addEventListener(
            'click',
            function()
            {

                ouvrirModal();

            }
        );


        fermerCours.addEventListener(
            'click',
            function()
            {

                fermerModal();

            }
        );


        annulerCours.addEventListener(
            'click',
            function()
            {

                fermerModal();

            }
        );


        modalCours.addEventListener(
            'click',
            function(event)
            {

                if (event.target === modalCours)
                {

                    fermerModal();

                }

            }
        );



        /* =====================================================
           NOM DU FICHIER
        ===================================================== */

        const documentInput =
            document.getElementById('document');


        const nomFichier =
            document.getElementById('nomFichier');


        documentInput.addEventListener(
            'change',
            function()
            {

                if (this.files.length > 0)
                {

                    nomFichier.textContent =
                        this.files[0].name;

                }
                else
                {

                    nomFichier.textContent =
                        'Aucun fichier sélectionné';

                }

            }
        );



        /* =====================================================
           RECHERCHE
        ===================================================== */

        const searchCourse =
            document.getElementById('searchCourse');


        const filterClasse =
            document.getElementById('filterClasse');


        const filterSerie =
            document.getElementById('filterSerie');


        function filtrerCours()
        {

            const recherche =
                searchCourse.value
                .toLowerCase()
                .trim();


            const classeRecherchee =
                filterClasse.value
                .toLowerCase();


            const serieRecherchee =
                filterSerie.value
                .toLowerCase();


            const cartes =
                document.querySelectorAll('.course-card');


            cartes.forEach(
                function(carte)
                {

                    const titre =
                        carte.dataset.title || '';


                    const description =
                        carte.dataset.description || '';


                    const classe =
                        carte.dataset.classe || '';


                    const serie =
                        carte.dataset.serie || '';


                    const correspondRecherche =
                        titre.includes(recherche) ||
                        description.includes(recherche);


                    const correspondClasse =
                        classeRecherchee === '' ||
                        classe.includes(classeRecherchee);


                    const correspondSerie =
                        serieRecherchee === '' ||
                        serie === serieRecherchee;


                    if (
                        correspondRecherche &&
                        correspondClasse &&
                        correspondSerie
                    )
                    {

                        carte.style.display = '';

                    }
                    else
                    {

                        carte.style.display = 'none';

                    }

                }
            );

        }


        searchCourse.addEventListener(
            'input',
            filtrerCours
        );


        filterClasse.addEventListener(
            'change',
            filtrerCours
        );


        filterSerie.addEventListener(
            'change',
            filtrerCours
        );



        /* =====================================================
           SUPPRESSION
        ===================================================== */

        function supprimerCours()
        {

            alert(
                'La suppression des cours sera ajoutée prochainement.'
            );

        }


    </script>


</body>

</html>