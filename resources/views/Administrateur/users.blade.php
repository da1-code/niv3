<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/admin/dashboard.css">
    <link rel="stylesheet" href="/admin/etudiants.css">

    <title>Utilisateurs - EDUNOVA IA</title>
</head>

<body>

<div class="admin-container">

    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <aside class="sidebar">

        <div class="logo">
            <h2>EDUNOVA IA</h2>
        </div>

        <ul class="menu">

            <li>
                <a href="/admin/dashboard">
                    🏠 Tableau de bord
                </a>
            </li>

            <li class="active">
                <a href="/admin/users">
                    👥 Utilisateurs
                </a>
            </li>

            <li>
                <a href="/admin/etudiants">
                    👨‍🎓 Étudiants
                </a>
            </li>

            <li>
                <a href="/admin/professeurs">
                    👨‍🏫 Enseignants
                </a>
            </li>

            <li>
                <a href="/admin/classes">
                    🏫 Classes
                </a>
            </li>

            <li>
                <a href="/admin/cours">
                    📚 Cours
                </a>
            </li>

            <li>
                <a href="/admin/examens">
                    📝 Examens
                </a>
            </li>

            <li>
                <a href="/admin/statistiques">
                    📊 Statistiques
                </a>
            </li>

            <li>
                <a href="/admin/parametres">
                    ⚙ Paramètres
                </a>
            </li>

            <li>
                <a href="#">
                    🚪 Déconnexion
                </a>
            </li>

        </ul>

    </aside>


    <!-- =====================================================
         CONTENU PRINCIPAL
    ====================================================== -->

    <main class="main-content">

        <!-- TOPBAR -->

        <header class="topbar">

            <div>

                <h2>
                    Gestion des utilisateurs 👥
                </h2>

                <p>
                    Gérez les comptes utilisateurs de la plateforme EDUNOVA IA.
                </p>

            </div>

            <div class="profile">

                <img
                    src="{{ asset('images/admin.png') }}"
                    alt="Administrateur"
                >

                <span>
                    {{ Auth::user()->prenom ?? 'Administrateur' }}
                    {{ Auth::user()->nom ?? '' }}
                </span>

            </div>

        </header>


        <!-- =====================================================
             CARTES STATISTIQUES
        ====================================================== -->

        <section class="cards">

    <div class="card">

        <h3>
            Total utilisateurs
        </h3>

        <p>
            {{ $users->count() }}
        </p>

    </div>


    <div class="card">

        <h3>
            Étudiants
        </h3>

        <p>
            {{ $users->where('role', 'etudiant')->count() }}
        </p>

    </div>


    <div class="card">

        <h3>
            Enseignants
        </h3>

        <p>
            {{ $users->where('role', 'professeur')->count() }}
        </p>

    </div>


    <div class="card">

        <h3>
            Administrateurs
        </h3>

        <p>
            {{ $users->where('role', 'admin')->count() }}
        </p>

    </div>

</section>


        <!-- =====================================================
             SECTION UTILISATEURS
        ====================================================== -->

        <section class="users-section">

            <div class="section-header">

                <div>

                    <h3>
                        Liste des utilisateurs
                    </h3>

                    <p>
                        Consultez et gérez les comptes enregistrés.
                    </p>

                </div>


                <!-- BOUTON NOUVEL UTILISATEUR -->

                <button
                    type="button"
                    class="add-btn"
                    id="ouvrirUtilisateur"
                >
                    + Nouvel utilisateur
                </button>

            </div>


            <!-- =================================================
                 RECHERCHE
            ================================================== -->

            <div class="search-box">

                <input
                    type="text"
                    placeholder="🔍 Rechercher un utilisateur..."
                >


                <select>

                    <option value="">
                        Tous les rôles
                    </option>

                    <option value="admin">
                        Administrateur
                    </option>

                    <option value="professeur">
                        Enseignant
                    </option>

                    <option value="etudiant">
                        Étudiant
                    </option>

                </select>


                <select>

                    <option value="">
                        Tous les statuts
                    </option>

                    <option value="actif">
                        Actif
                    </option>

                    <option value="inactif">
                        Désactivé
                    </option>

                </select>

            </div>


            <!-- =================================================
                 TABLEAU
            ================================================== -->

            <div class="table-container">

                <table>

                    <thead>

                        <tr>

                            <th>ID</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Rôle</th>
                            <th>Statut</th>
                            <th>Date d'inscription</th>
                            <th>Actions</th>

                        </tr>

                    </thead>


                   <tbody>

    @forelse($users as $user)

        <tr>

            <td>
                #{{ str_pad($user->id, 3, '0', STR_PAD_LEFT) }}
            </td>


            <td>
                <strong>
                    {{ $user->nom }} {{ $user->prenom }}
                </strong>
            </td>


            <td>
                {{ $user->email }}
            </td>


            <td>

                @if($user->role === 'admin')

                    <span class="role admin-role">
                        Administrateur
                    </span>

                @elseif($user->role === 'professeur')

                    <span class="role teacher-role">
                        Enseignant
                    </span>

                @elseif($user->role === 'etudiant')

                    <span class="role student-role">
                        Étudiant
                    </span>

                @endif

            </td>


            <td>

                @if($user->actif)

                    <span class="status active-status">
                        Actif
                    </span>

                @else

                    <span class="status inactive-status">
                        Désactivé
                    </span>

                @endif

            </td>


            <td>
                {{ $user->created_at->format('d/m/Y') }}
            </td>


            <td class="actions">

                <button
                    class="view-btn"
                    title="Voir"
                >
                    👁
                </button>


                <button
                    class="edit-btn"
                    title="Modifier"
                >
                    ✏
                </button>


                @if($user->actif)

                    <button
                        class="disable-btn"
                        title="Désactiver"
                    >
                        ⛔
                    </button>

                @else

                    <button
                        class="enable-btn"
                        title="Réactiver"
                    >
                        ✓
                    </button>

                @endif

            </td>

        </tr>

    @empty

        <tr>

            <td colspan="7" style="text-align: center; padding: 30px;">

                Aucun utilisateur enregistré.

            </td>

        </tr>

    @endforelse

</tbody>
                </table>

            </div>

        </section>

    </main>

</div>


<!-- =========================================================
     MODAL : NOUVEL UTILISATEUR
========================================================= -->

<div
    class="modal-overlay"
    id="modalUtilisateur"
>

    <div class="user-modal">

        <!-- EN-TÊTE -->

        <div class="modal-header">

            <div>

                <h3>
                    Ajouter un utilisateur
                </h3>

                <p>
                    Créez un nouveau compte sur EDUNOVA IA.
                </p>

            </div>

            <button
                type="button"
                class="close-modal"
                id="fermerUtilisateur"
            >
                ×
            </button>

        </div>


        <!-- FORMULAIRE -->

        <form
            class="user-form"
            action="{{route('register')}}"
            method="POST"
        >
       
        @csrf

            <!-- NOM + PRÉNOM -->

            <div class="form-row">

                <div class="form-group">

                    <label for="nom">
                        Nom
                    </label>

                    <input
                        type="text"
                        id="nom"
                        name="name"
                        placeholder="Ex : Dupont"
                        required
                    >

                </div>


  

            </div>


            <!-- EMAIL -->

            <div class="form-group">

                <label for="email">
                    Adresse email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="exemple@edunova.com"
                    required
                >

            </div>


            <!-- MOT DE PASSE -->

            <div class="form-group">

                <label for="password">
                    Mot de passe
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Entrez un mot de passe"
                    required
                >

            </div>


            <!-- RÔLE -->

            <div class="form-group">

                <label for="role">
                    Rôle
                </label>

                <select
                    id="role"
                    name="role"
                    required
                >

                    <option value="">
                        Sélectionner un rôle
                    </option>

                    <option value="etudiant">
                        👨‍🎓 Étudiant
                    </option>

                    <option value="professeur">
                        👨‍🏫 Enseignant
                    </option>

                    <option value="admin">
                        👨‍💼 Administrateur
                    </option>

                </select>

            </div>


            <!-- STATUT -->

            <div class="form-group">

                <label for="actif">
                    Statut du compte
                </label>

                <select
                    id="actif"
                    name="actif"
                    required
                >

                    <option value="1">
                        Actif
                    </option>

                    <option value="0">
                        Désactivé
                    </option>

                </select>

            </div>


            <!-- BOUTONS -->

            <div class="modal-footer">

                <button
                    type="button"
                    class="btn-cancel"
                    id="annulerUtilisateur"
                >
                    Annuler
                </button>

                <button
                    type="submit"
                    class="btn-submit"
                >
                    Créer l'utilisateur
                </button>

            </div>

        </form>

    </div>

</div>


<!-- =========================================================
     CSS DU MODAL
========================================================= -->

<style>

    /* ================= MODAL ================= */

    .modal-overlay {
        position: fixed;
        inset: 0;
        background: rgba(20, 15, 45, 0.65);
        backdrop-filter: blur(5px);

        display: flex;
        align-items: center;
        justify-content: center;

        padding: 20px;

        opacity: 0;
        visibility: hidden;

        transition: 0.25s ease;

        z-index: 9999;
    }


    .modal-overlay.active {
        opacity: 1;
        visibility: visible;
    }


    /* ================= BOITE ================= */

    .user-modal {
        width: 100%;
        max-width: 650px;

        max-height: 90vh;
        overflow-y: auto;

        background: #ffffff;

        border-radius: 18px;

        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.25);

        transform: translateY(-20px) scale(0.97);

        transition: 0.25s ease;
    }


    .modal-overlay.active .user-modal {
        transform: translateY(0) scale(1);
    }


    /* ================= HEADER ================= */

    .modal-header {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;

        padding: 24px 28px;

        border-bottom: 1px solid #eeeeee;
    }


    .modal-header h3 {
        margin: 0 0 6px;

        font-size: 21px;

        color: #242044;
    }


    .modal-header p {
        margin: 0;

        color: #77758a;

        font-size: 14px;
    }


    .close-modal {
        width: 36px;
        height: 36px;

        border: none;

        border-radius: 50%;

        background: #f2efff;

        color: #5b3cc4;

        font-size: 25px;

        cursor: pointer;

        display: flex;
        align-items: center;
        justify-content: center;

        transition: 0.2s ease;
    }


    .close-modal:hover {
        background: #5b3cc4;
        color: white;
    }


    /* ================= FORMULAIRE ================= */

    .user-form {
        padding: 26px 28px;
    }


    .form-row {
        display: grid;

        grid-template-columns: 1fr 1fr;

        gap: 18px;
    }


    .form-group {
        margin-bottom: 18px;
    }


    .form-group label {
        display: block;

        margin-bottom: 8px;

        font-size: 14px;

        font-weight: 600;

        color: #302b52;
    }


    .form-group input,
    .form-group select {
        width: 100%;

        padding: 12px 14px;

        border: 1px solid #ddd9eb;

        border-radius: 9px;

        background: #fafaff;

        color: #27233f;

        font-size: 14px;

        outline: none;

        transition: 0.2s ease;
    }


    .form-group input:focus,
    .form-group select:focus {
        border-color: #6d4bd8;

        background: #ffffff;

        box-shadow: 0 0 0 3px rgba(109, 75, 216, 0.10);
    }


    .form-group input::placeholder {
        color: #aaa6ba;
    }


    /* ================= FOOTER ================= */

    .modal-footer {
        display: flex;

        justify-content: flex-end;

        gap: 12px;

        margin-top: 8px;

        padding-top: 20px;

        border-top: 1px solid #eeeeee;
    }


    .btn-cancel,
    .btn-submit {
        padding: 11px 20px;

        border-radius: 9px;

        font-size: 14px;

        font-weight: 600;

        cursor: pointer;

        transition: 0.2s ease;
    }


    .btn-cancel {
        border: 1px solid #ddd9eb;

        background: #ffffff;

        color: #625d78;
    }


    .btn-cancel:hover {
        background: #f5f3fa;
    }


    .btn-submit {
        border: none;

        background: linear-gradient(
            135deg,
            #5b3cc4,
            #7557df
        );

        color: white;

        box-shadow: 0 6px 15px rgba(91, 60, 196, 0.22);
    }


    .btn-submit:hover {
        transform: translateY(-1px);

        box-shadow: 0 8px 18px rgba(91, 60, 196, 0.30);
    }


    /* ================= RESPONSIVE ================= */

    @media (max-width: 650px) {

        .form-row {
            grid-template-columns: 1fr;
            gap: 0;
        }


        .user-modal {
            max-height: 95vh;
        }


        .modal-header {
            padding: 20px;
        }


        .user-form {
            padding: 20px;
        }


        .modal-footer {
            flex-direction: column;
        }


        .btn-cancel,
        .btn-submit {
            width: 100%;
        }

    }

</style>


<!-- =========================================================
     JAVASCRIPT
========================================================= -->

<script>

    /* ================= ELEMENTS ================= */

    const ouvrirUtilisateur =
        document.getElementById("ouvrirUtilisateur");

    const modalUtilisateur =
        document.getElementById("modalUtilisateur");

    const fermerUtilisateur =
        document.getElementById("fermerUtilisateur");

    const annulerUtilisateur =
        document.getElementById("annulerUtilisateur");


    /* ================= OUVRIR ================= */

    ouvrirUtilisateur.addEventListener("click", function () {

        modalUtilisateur.classList.add("active");

        document.body.style.overflow = "hidden";

    });


    /* ================= FERMER ================= */

    function fermerModalUtilisateur() {

        modalUtilisateur.classList.remove("active");

        document.body.style.overflow = "";

    }


    fermerUtilisateur.addEventListener(
        "click",
        fermerModalUtilisateur
    );


    annulerUtilisateur.addEventListener(
        "click",
        fermerModalUtilisateur
    );


    /* ================= CLIC SUR L'ARRIÈRE-PLAN ================= */

    modalUtilisateur.addEventListener(
        "click",
        function (event) {

            if (event.target === modalUtilisateur) {

                fermerModalUtilisateur();

            }

        }
    );


    /* ================= TOUCHE ESC ================= */

    document.addEventListener(
        "keydown",
        function (event) {

            if (event.key === "Escape") {

                fermerModalUtilisateur();

            }

        }
    );

</script>

</body>
</html>