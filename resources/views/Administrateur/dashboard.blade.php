<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/admin/dashboard.css">
    
    <title>Document</title>
</head>
<body>
    
/




<div class="admin-container">

    <!-- Sidebar -->
    <aside class="sidebar">

        <div class="logo">
            <h2>EDUNOVA IA</h2>
        </div>

        <ul class="menu">
            <li class="active"><a href="/admin/dasboard">🏠 Tableau de bord</a></li>
            <li><a href="/admin/users">👥 Utilisateurs</a></li>
            <li><a href="/admin/cours">📚 Cours</a></li>
            <li><a href="/admin/examens">📝 Examens</a></li>
            <li><a href="/admin/statistiques">📊 Statistiques</a></li>
            <li><a href="/admin/parametres">⚙ Paramètres</a></li>
            <li><a href="#">🚪 Déconnexion</a></li>
        </ul>

    </aside>

    <!-- Contenu principal -->
    <main class="main-content">

        <header class="topbar">

            <div>
                <h2>Bienvenue Administrateur 👋</h2>
                <p>Gérez facilement votre plateforme EDUNOVA IA.</p>
            </div>

            <div class="profile">
                <img src="{{ asset('images/admin.png') }}" alt="Admin">
                <span>{{ Auth::user()->name ?? 'Administrateur' }}</span>
            </div>

        </header>

        <!-- Cartes -->
        <section class="cards">

            <div class="card">
                <h3>Étudiants</h3>
                <p>245</p>
            </div>

            <div class="card">
                <h3>Enseignants</h3>
                <p>18</p>
            </div>

            <div class="card">
                <h3>Cours</h3>
                <p>52</p>
            </div>

            <div class="card">
                <h3>Examens</h3>
                <p>14</p>
            </div>

        </section>

        <!-- Activités -->
        <section class="recent">

            <h3>Activités récentes</h3>

            <table>

                <thead>
                    <tr>
                        <th>Utilisateur</th>
                        <th>Action</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>Daniella</td>
                        <td>Ajout d'un cours</td>
                        <td>Aujourd'hui</td>
                    </tr>

                    <tr>
                        <td>Kevin</td>
                        <td>Inscription</td>
                        <td>Aujourd'hui</td>
                    </tr>

                    <tr>
                        <td>Marie</td>
                        <td>Ajout d'un examen</td>
                        <td>Hier</td>
                    </tr>

                </tbody>

            </table>

        </section>

    </main>

</div>


</body>
</html>