<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EDUNOVA IA - Mes cours</title>

    <link rel="stylesheet" href="/enseignant/dashboard.css">

    <link rel="stylesheet" href="/enseignant/cours.css">
    <style>
        /* =========================================================
   EDUNOVA - MES COURS
   CSS spécifique à la page
   Le fond, la sidebar et les éléments communs
   sont gérés par dashboard.css
   ========================================================= */


/* =========================================================
   VUE D'ENSEMBLE DES COURS
   ========================================================= */

.course-overview {
    display: grid;

    grid-template-columns: repeat(4, 1fr);

    gap: 18px;

    margin-bottom: 28px;
}


/* =========================================================
   CARTES STATISTIQUES
   ========================================================= */

.overview-card {
    display: flex;
    align-items: center;

    gap: 15px;

    padding: 18px 20px;

    background: rgba(255, 255, 255, 0.94);

    border: 1px solid rgba(226, 232, 240, 0.9);

    border-radius: 16px;

    box-shadow: 0 7px 22px rgba(15, 23, 42, 0.05);
}

.overview-icon {
    width: 48px;
    height: 48px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 12px;

    font-size: 21px;
}

.overview-icon.blue {
    background: #eff6ff;
}

.overview-icon.green {
    background: #ecfdf5;
}

.overview-icon.purple {
    background: #f5f3ff;
}

.overview-icon.orange {
    background: #fff7ed;
}

.overview-card span {
    display: block;

    margin-bottom: 5px;

    color: #64748b;

    font-size: 12px;
}

.overview-card strong {
    display: block;

    color: #1e293b;

    font-size: 22px;
    font-weight: 750;
}


/* =========================================================
   BARRE DE RECHERCHE ET FILTRES
   ========================================================= */

.courses-toolbar {
    display: flex;
    align-items: center;
    justify-content: space-between;

    gap: 20px;

    margin-bottom: 27px;

    padding: 17px 20px;

    background: rgba(255, 255, 255, 0.92);

    border: 1px solid rgba(226, 232, 240, 0.9);

    border-radius: 15px;

    box-shadow: 0 6px 20px rgba(15, 23, 42, 0.04);
}


/* Recherche */

.search-box {
    width: 330px;

    display: flex;
    align-items: center;

    gap: 10px;

    padding: 0 14px;

    height: 43px;

    background: #f8fafc;

    border: 1px solid #e2e8f0;

    border-radius: 10px;
}

.search-box span {
    font-size: 17px;
}

.search-box input {
    width: 100%;

    border: none;
    outline: none;

    background: transparent;

    color: #1e293b;

    font-family: inherit;

    font-size: 13px;
}

.search-box input::placeholder {
    color: #94a3b8;
}


/* Filtres */

.course-filters {
    display: flex;
    align-items: center;

    gap: 7px;
}

.filter-btn {
    min-height: 38px;

    padding: 0 14px;

    border: 1px solid transparent;

    border-radius: 9px;

    background: transparent;

    color: #64748b;

    font-family: inherit;

    font-size: 12px;
    font-weight: 650;

    cursor: pointer;

    transition:
        background 0.2s ease,
        color 0.2s ease,
        border-color 0.2s ease;
}

.filter-btn:hover {
    background: #f1f5f9;

    color: #334155;
}

.filter-btn.active {
    background: #2563eb;

    color: white;

    box-shadow: 0 5px 12px rgba(37, 99, 235, 0.18);
}


/* =========================================================
   TITRE DE SECTION
   ========================================================= */

.section-heading {
    display: flex;
    align-items: center;
    justify-content: space-between;

    margin-bottom: 18px;
}

.section-heading h2 {
    margin: 0 0 5px;

    color: #1e293b;

    font-size: 20px;
    font-weight: 750;
}

.section-heading p {
    margin: 0;

    color: #64748b;

    font-size: 12px;
}

.course-count {
    padding: 7px 12px;

    border-radius: 20px;

    background: #eff6ff;

    color: #2563eb;

    font-size: 12px;
    font-weight: 700;
}


/* =========================================================
   GRILLE DES COURS
   ========================================================= */

.courses-grid {
    display: grid;

    grid-template-columns: repeat(3, 1fr);

    gap: 20px;

    margin-bottom: 28px;
}


/* =========================================================
   CARTE COURS
   ========================================================= */

.course-card {
    overflow: hidden;

    background: rgba(255, 255, 255, 0.95);

    border: 1px solid rgba(226, 232, 240, 0.9);

    border-radius: 17px;

    box-shadow: 0 7px 23px rgba(15, 23, 42, 0.055);

    transition:
        transform 0.2s ease,
        box-shadow 0.2s ease;
}

.course-card:hover {
    transform: translateY(-4px);

    box-shadow: 0 12px 28px rgba(15, 23, 42, 0.09);
}


/* =========================================================
   EN-TETE DU COURS
   ========================================================= */

.course-header {
    height: 115px;

    position: relative;

    display: flex;
    align-items: center;
    justify-content: space-between;

    padding: 20px;
}


/* Couleurs */

.blue-bg {
    background: linear-gradient(
        135deg,
        #dbeafe,
        #bfdbfe
    );
}

.purple-bg {
    background: linear-gradient(
        135deg,
        #ede9fe,
        #ddd6fe
    );
}

.green-bg {
    background: linear-gradient(
        135deg,
        #dcfce7,
        #bbf7d0
    );
}

.orange-bg {
    background: linear-gradient(
        135deg,
        #ffedd5,
        #fed7aa
    );
}

.cyan-bg {
    background: linear-gradient(
        135deg,
        #cffafe,
        #a5f3fc
    );
}

.pink-bg {
    background: linear-gradient(
        135deg,
        #fce7f3,
        #fbcfe8
    );
}


/* Icône */

.course-icon {
    width: 57px;
    height: 57px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: rgba(255, 255, 255, 0.82);

    border-radius: 15px;

    font-size: 27px;

    box-shadow: 0 5px 13px rgba(15, 23, 42, 0.07);
}


/* Statut */

.course-status {
    position: absolute;

    top: 17px;
    right: 17px;

    padding: 6px 10px;

    border-radius: 20px;

    background: white;

    font-size: 10px;
    font-weight: 750;
}

.course-status.progress {
    color: #2563eb;
}

.course-status.completed {
    color: #16a34a;
}

.course-status.new {
    color: #ea580c;
}


/* =========================================================
   CORPS DU COURS
   ========================================================= */

.course-body {
    padding: 21px;
}

.course-category {
    display: inline-block;

    margin-bottom: 8px;

    color: #2563eb;

    font-size: 10px;
    font-weight: 800;

    letter-spacing: 0.4px;

    text-transform: uppercase;
}

.course-body h3 {
    margin: 0 0 8px;

    color: #1e293b;

    font-size: 17px;
    font-weight: 750;
}

.course-body p {
    min-height: 63px;

    margin: 0 0 17px;

    color: #64748b;

    font-size: 12px;

    line-height: 1.65;
}


/* =========================================================
   INFORMATIONS COURS
   ========================================================= */

.course-meta {
    display: flex;
    align-items: center;

    gap: 17px;

    padding-bottom: 17px;

    border-bottom: 1px solid #eef2f7;
}

.course-meta span {
    color: #64748b;

    font-size: 11px;
}


/* =========================================================
   PROGRESSION
   ========================================================= */

.progress-info {
    padding: 17px 0;
}

.progress-info > div:first-child {
    display: flex;
    justify-content: space-between;

    margin-bottom: 8px;
}

.progress-info span {
    color: #64748b;

    font-size: 11px;
}

.progress-info strong {
    color: #1e293b;

    font-size: 11px;
}

.progress-bar {
    width: 100%;
    height: 7px;

    overflow: hidden;

    background: #e2e8f0;

    border-radius: 20px;
}

.progress-bar span {
    display: block;

    height: 100%;

    background: #2563eb;

    border-radius: 20px;
}


/* =========================================================
   BOUTON COURS
   ========================================================= */

.course-btn {
    display: flex;
    align-items: center;
    justify-content: center;

    width: 100%;

    min-height: 40px;

    border-radius: 9px;

    background: #eff6ff;

    color: #2563eb;

    text-decoration: none;

    font-size: 12px;
    font-weight: 750;

    transition:
        background 0.2s ease,
        color 0.2s ease;
}

.course-btn:hover {
    background: #2563eb;

    color: white;
}


/* =========================================================
   RECOMMANDATION IA
   ========================================================= */

.course-ai {
    display: flex;
    align-items: center;

    gap: 18px;

    margin-bottom: 25px;

    padding: 22px 24px;

    background: linear-gradient(
        135deg,
        #eff6ff,
        #f5f3ff
    );

    border: 1px solid #dbeafe;

    border-radius: 17px;
}

.ai-icon {
    width: 55px;
    height: 55px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 14px;

    background: white;

    font-size: 26px;

    box-shadow: 0 5px 14px rgba(37, 99, 235, 0.08);
}

.ai-content {
    flex: 1;
}

.ai-content > span {
    display: block;

    margin-bottom: 4px;

    color: #2563eb;

    font-size: 9px;
    font-weight: 850;

    letter-spacing: 0.8px;
}

.ai-content h2 {
    margin: 0 0 5px;

    color: #1e293b;

    font-size: 16px;
}

.ai-content p {
    margin: 0;

    color: #64748b;

    font-size: 12px;

    line-height: 1.6;
}

.ai-content strong {
    color: #334155;
}

.ai-btn {
    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    min-height: 41px;

    padding: 0 17px;

    border-radius: 9px;

    background: #2563eb;

    color: white;

    text-decoration: none;

    font-size: 11px;
    font-weight: 750;

    box-shadow: 0 5px 13px rgba(37, 99, 235, 0.18);

    transition:
        background 0.2s ease,
        transform 0.2s ease;
}

.ai-btn:hover {
    background: #1d4ed8;

    transform: translateY(-1px);
}


/* =========================================================
   RESPONSIVE - 1100px
   ========================================================= */

@media (max-width: 1100px) {

    .course-overview {
        grid-template-columns: repeat(2, 1fr);
    }

    .courses-grid {
        grid-template-columns: repeat(2, 1fr);
    }

}


/* =========================================================
   RESPONSIVE - 850px
   ========================================================= */

@media (max-width: 850px) {

    .courses-toolbar {
        flex-direction: column;

        align-items: stretch;
    }

    .search-box {
        width: 100%;
    }

    .course-filters {
        flex-wrap: wrap;
    }

    .course-ai {
        align-items: flex-start;
        flex-wrap: wrap;
    }

    .ai-btn {
        margin-left: 73px;
    }

}


/* =========================================================
   RESPONSIVE - 700px
   ========================================================= */

@media (max-width: 700px) {

    .courses-grid {
        grid-template-columns: 1fr;
    }

    .course-overview {
        grid-template-columns: 1fr 1fr;
    }

}


/* =========================================================
   RESPONSIVE - TELEPHONE
   ========================================================= */

@media (max-width: 600px) {

    .course-overview {
        grid-template-columns: 1fr;
    }

    .courses-toolbar {
        padding: 15px;
    }

    .course-filters {
        display: grid;

        grid-template-columns: 1fr 1fr;

        gap: 7px;
    }

    .filter-btn {
        width: 100%;
    }

    .section-heading {
        align-items: flex-start;

        gap: 10px;
    }

    .section-heading h2 {
        font-size: 18px;
    }

    .course-count {
        font-size: 10px;
    }

    .course-ai {
        flex-direction: column;

        padding: 20px;
    }

    .ai-btn {
        width: 100%;

        margin-left: 0;
    }

}
    </style>

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