<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <link
        rel="stylesheet"
        href="/admin/dashboard.css"
    >

    <title>EDUNOVA IA - Tableau de bord</title>

</head>


<body>


<div class="admin-container">


    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <aside class="sidebar">


        <div class="logo">

            <h2>
                EDUNOVA IA
            </h2>

        </div>


        <ul class="menu">


            <li class="active">

                <a href="/admin/dashboard">

                    🏠 Tableau de bord

                </a>

            </li>


            <li>

                <a href="/admin/users">

                    👥 Utilisateurs

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

                <form
                    method="POST"
                    action="{{ route('logout') }}"
                >

                    @csrf

                    <button
                        type="submit"
                        class="logout-button"
                    >

                        🚪 Déconnexion

                    </button>

                </form>

            </li>


        </ul>


    </aside>



    <!-- =====================================================
         CONTENU PRINCIPAL
    ====================================================== -->

    <main class="main-content">


        <!-- =================================================
             BARRE SUPÉRIEURE
        ================================================== -->

        <header class="topbar">


            <div>

                <h2>

                    Bienvenue Administrateur 👋

                </h2>


                <p>

                    Gérez facilement votre plateforme EDUNOVA IA.

                </p>

            </div>



            <div class="profile">


                <img
                    src="{{ asset('images/admin.png') }}"
                    alt="Admin"
                >


                <span>

                    {{ Auth::user()->name ?? 'Administrateur' }}

                </span>


            </div>


        </header>



        <!-- =================================================
             CARTES STATISTIQUES
        ================================================== -->

        <section class="cards">


            <!-- ÉTUDIANTS -->

            <div class="card">

                <h3>

                    Étudiants

                </h3>


                <p>

                    {{ $nombreEtudiants }}

                </p>

            </div>



            <!-- ENSEIGNANTS -->

            <div class="card">

                <h3>

                    Enseignants

                </h3>


                <p>

                    {{ $nombreProfesseurs }}

                </p>

            </div>



            <!-- UTILISATEURS -->

            <div class="card">

                <h3>

                    Utilisateurs

                </h3>


                <p>

                    {{ $nombreUtilisateurs }}

                </p>

            </div>



            <!-- CLASSES -->

            <div class="card">

                <h3>

                    Classes

                </h3>


                <p>

                    {{ $nombreClasses }}

                </p>

            </div>


        </section>



        <!-- =================================================
             INFORMATIONS ADMINISTRATEURS
        ================================================== -->

        <section class="recent">


            <h3>

                Informations de la plateforme

            </h3>


            <table>


                <thead>

                    <tr>

                        <th>
                            Élément
                        </th>

                        <th>
                            Nombre
                        </th>

                    </tr>

                </thead>


                <tbody>


                    <tr>

                        <td>
                            👨‍🎓 Étudiants
                        </td>

                        <td>
                            {{ $nombreEtudiants }}
                        </td>

                    </tr>


                    <tr>

                        <td>
                            👨‍🏫 Enseignants
                        </td>

                        <td>
                            {{ $nombreProfesseurs }}
                        </td>

                    </tr>


                    <tr>

                        <td>
                            👨‍💼 Administrateurs
                        </td>

                        <td>
                            {{ $nombreAdministrateurs }}
                        </td>

                    </tr>


                    <tr>

                        <td>
                            👥 Total utilisateurs
                        </td>

                        <td>
                            {{ $nombreUtilisateurs }}
                        </td>

                    </tr>


                    <tr>

                        <td>
                            🏫 Classes
                        </td>

                        <td>
                            {{ $nombreClasses }}
                        </td>

                    </tr>


                </tbody>


            </table>


        </section>



        <!-- =================================================
             ACTIVITÉS RÉCENTES
        ================================================== -->

        <section class="recent">


            <h3>

                Dernières inscriptions

            </h3>


            <table>


                <thead>

                    <tr>

                        <th>
                            Utilisateur
                        </th>

                        <th>
                            Rôle
                        </th>

                        <th>
                            Date d'inscription
                        </th>

                    </tr>

                </thead>


                <tbody>


                    @forelse($utilisateursRecents as $user)


                        <tr>


                            <td>

                                {{ $user->name }}

                            </td>


                            <td>

                                @if($user->role === 'etudiant')

                                    Étudiant

                                @elseif($user->role === 'professeur')

                                    Enseignant

                                @elseif($user->role === 'admin')

                                    Administrateur

                                @else

                                    {{ $user->role }}

                                @endif

                            </td>


                            <td>

                                {{ $user->created_at->format('d/m/Y H:i') }}

                            </td>


                        </tr>


                    @empty


                        <tr>

                            <td colspan="3">

                                Aucune inscription récente.

                            </td>

                        </tr>


                    @endforelse


                </tbody>


            </table>


        </section>


    </main>


</div>


</body>

</html>