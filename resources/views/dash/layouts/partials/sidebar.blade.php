<!-- Menu Navigation starts -->
<nav>
    <div class="app-logo">
        <a class="logo d-inline-block" href="index.html">
            <img alt="#" src="{{ asset('dash/assets/images/logo/1.png') }}">
        </a>

        <span class="bg-light-primary toggle-semi-nav d-flex-center">
            <i class="ti ti-chevron-right"></i>
        </span>

        <div class="d-flex align-items-center nav-profile p-3">
            <span class="h-45 w-45 d-flex-center b-r-10 position-relative bg-danger m-auto">
                <img alt="avatar" class="img-fluid b-r-10" src="{{ asset('dash/assets/images/avatar/woman.jpg') }}">
                <span class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
            </span>
            <div class="flex-grow-1 ps-2">
                <h6 class="text-primary mb-0">Ninfa Monaldo</h6>
                <p class="text-muted f-s-12 mb-0">Web Developer</p>
            </div>

            <div class="dropdown profile-menu-dropdown">
                <a aria-expanded="false" data-bs-auto-close="true" data-bs-placement="top" data-bs-toggle="dropdown" role="button">
                    <i class="ti ti-settings fs-5"></i>
                </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item">
                        <a class="f-w-500" href="profile.html" target="_blank">
                            <i class="ph-duotone ph-user-circle pe-1 f-s-20"></i> Profile Details
                        </a>
                    </li>
                    <li class="dropdown-item">
                        <a class="f-w-500" href="setting.html" target="_blank">
                            <i class="ph-duotone ph-gear pe-1 f-s-20"></i> Settings
                        </a>
                    </li>
                    <li class="dropdown-item">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <a class="f-w-500" href="#">
                                    <i class="ph-duotone ph-detective pe-1 f-s-20"></i> Incognito
                                </a>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch">
                                    <input class="form-check-input form-check-primary" id="incognitoSwitch" type="checkbox">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <a class="mb-0 text-secondary f-w-500" href="sign_up.html" target="_blank">
                            <i class="ph-bold ph-plus pe-1 f-s-20"></i> Add account
                        </a>
                    </li>
                    <li class="app-divider-v dotted py-1"></li>
                    <li class="dropdown-item">
                        <a class="mb-0 text-danger" href="sign_in.html" target="_blank">
                            <i class="ph-duotone ph-sign-out pe-1 f-s-20"></i> Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="app-nav" id="app-simple-bar">
        <ul class="main-nav p-0 mt-2">
            <li class="menu-title">
                <span>Dashboard</span>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-speedometer2 me-2"></i> Tableau de bord
                </a>
            </li>

            <li class="menu-title">
                <span>Menu</span>
            </li>

            <!-- Mouvements -->
            <li>
                <a aria-expanded="false" data-bs-toggle="collapse" href="#mouvements">
                    <i class="bi bi-arrow-left-right me-2"></i> Mouvements
                </a>
                <ul class="collapse" id="mouvements">
                    <li><a href="#"><i class="bi bi-box-arrow-in-down me-2"></i> Entrées</a></li>
                    <li><a href="#"><i class="bi bi-box-arrow-up me-2"></i> Sorties</a></li>
                    <li><a href="#"><i class="bi bi-arrow-left-right me-2"></i> Mutations</a></li>
                    <li><a href="#"><i class="bi bi-recycle me-2"></i> Réformes</a></li>
                </ul>
            </li>

            <!-- Demandes -->
            <li>
                <a aria-expanded="false" data-bs-toggle="collapse" href="#demandes">
                    <i class="bi bi-journal-text me-2"></i> Demandes
                </a>
                <ul class="collapse" id="demandes">
                    <li><a href="#"><i class="bi bi-card-list me-2"></i> Toutes</a></li>
                    <li><a href="#"><i class="bi bi-hourglass-split me-2"></i> En attente</a></li>
                    <li><a href="#"><i class="bi bi-tools me-2"></i> En cours</a></li>
                    <li><a href="#"><i class="bi bi-check-circle me-2"></i> Approuvées</a></li>
                    <li><a href="#"><i class="bi bi-x-circle me-2"></i> Rejetées</a></li>
                </ul>
            </li>

            <!-- Anomalies -->
            <li>
                <a aria-expanded="false" data-bs-toggle="collapse" href="#anomalies">
                    <i class="bi bi-exclamation-triangle me-2"></i> Anomalies
                </a>
                <ul class="collapse" id="anomalies">
                    <li><a href="#"><i class="bi bi-list-ul me-2"></i> Toutes</a></li>
                    <li><a href="#"><i class="bi bi-bug me-2"></i> Non traitées</a></li>
                    <li><a href="#"><i class="bi bi-wrench-adjustable me-2"></i> En traitement</a></li>
                    <li><a href="#"><i class="bi bi-check2-square me-2"></i> Résolues</a></li>
                </ul>
            </li>

            <!-- Mes biens affectés -->
            <li>
                <a href="#">
                    <i class="bi bi-person-badge me-2"></i> Mes biens affectés
                </a>
            </li>

            <!-- Matières et stock -->
            <li>
                <a aria-expanded="false" data-bs-toggle="collapse" href="#matieres">
                    <i class="bi bi-boxes me-2"></i> Matières et stock
                </a>
                <ul class="collapse" id="matieres">
                    <li><a href="#"><i class="bi bi-collection me-2"></i> Types de matières</a></li>
                    <li><a href="#"><i class="bi bi-box-seam me-2"></i> Toutes les matières</a></li>
                    <li><a href="#"><i class="bi bi-droplet-half me-2"></i> Consommables</a></li>
                    <li><a href="#"><i class="bi bi-tag me-2"></i> Immobilisations</a></li>
                </ul>
            </li>

            <!-- Inventaires -->
            <li>
                <a aria-expanded="false" data-bs-toggle="collapse" href="#inventaires">
                    <i class="bi bi-clipboard-data me-2"></i> Inventaires
                </a>
                <ul class="collapse" id="inventaires">
                    <li><a href="#"><i class="bi bi-plus-square me-2"></i> Nouvel inventaire</a></li>
                    <li><a href="#"><i class="bi bi-clock-history me-2"></i> Historique</a></li>
                    <li><a href="#"><i class="bi bi-graph-down me-2"></i> Écarts</a></li>
                </ul>
            </li>

            <!-- Utilisateurs & rôles -->
            <li>
                <a aria-expanded="false" data-bs-toggle="collapse" href="#utilisateurs">
                    <i class="bi bi-people me-2"></i> Utilisateurs & rôles
                </a>
                <ul class="collapse" id="utilisateurs">
                    <li><a href="#"><i class="bi bi-person-lines-fill me-2"></i> Liste des utilisateurs</a></li>
                    <li><a href="#"><i class="bi bi-shield-lock me-2"></i> Rôles & permissions</a></li>
                </ul>
            </li>

            <!-- Paramètres système -->
            <li>
                <a aria-expanded="false" data-bs-toggle="collapse" href="#parametres">
                    <i class="bi bi-gear me-2"></i> Paramètres système
                </a>
                <ul class="collapse" id="parametres">
                    <li><a href="#"><i class="bi bi-truck me-2"></i> Fournisseurs</a></li>
                    <li><a href="#"><i class="bi bi-building me-2"></i> Lieux / Services</a></li>
                    <li><a href="#"><i class="bi bi-code-slash me-2"></i> Code de gestion</a></li>
                </ul>
            </li>

            <!-- Sécurité -->
            <li>
                <a aria-expanded="false" data-bs-toggle="collapse" href="#securite">
                    <i class="bi bi-shield-lock me-2"></i> Sécurité
                </a>
                <ul class="collapse" id="securite">
                    <li><a href="#"><i class="bi bi-person me-2"></i> Mon profil</a></li>
                    <li><a href="#"><i class="bi bi-arrow-repeat me-2"></i> Modifier mot de passe</a></li>
                    <li><a href="#"><i class="bi bi-clipboard-check me-2"></i> Journal des actions</a></li>
                </ul>
            </li>

            <!-- Déconnexion -->
            <li>
                <a href="#">
                    <i class="bi bi-box-arrow-right me-2"></i> Déconnexion
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- Menu Navigation ends -->
