<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Événements - JMPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <div class="logo-container">
                    <div class="logo-icon">
                        <i class="fas fa-mosque"></i>
                    </div>
                    <div class="logo-text">
                        <span class="logo-main">JMPI</span>
                        <span class="logo-sub" data-key="logo-subtitle">Jeunesse Musulmane</span>
                    </div>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" data-key="home">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <span data-key="jmpi">JMPI</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('home') }}#presentation" data-key="presentation">Présentation</a></li>
                            <li><a class="dropdown-item" href="{{ route('home') }}#bureau" data-key="bureau">Bureau</a></li>
                            <li><a class="dropdown-item" href="{{ route('home') }}#mot-du-jour" data-key="mot-du-jour">Mot du jour</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="events.html" data-key="events">Événements</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="{{ route('home') }}#contact" data-key="contact">Contactez-nous</a>
                    </li>
                </ul>
                
                <div class="language-selector">
                    <div class="dropdown">
                        <button class="btn btn-language dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="fas fa-globe"></i> <span id="current-lang">FR</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#" onclick="changeLanguage('fr')">🇫🇷 Français</a></li>
                            <li><a class="dropdown-item" href="#" onclick="changeLanguage('en')">🇬🇧 English</a></li>
                            <li><a class="dropdown-item" href="#" onclick="changeLanguage('ar')">🇸🇦 العربية</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Events Header -->
    <section class="events-header">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <div class="floating-elements">
                <div class="floating-shape shape-1"></div>
                <div class="floating-shape shape-2"></div>
                <div class="floating-shape shape-3"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="page-header">
                        <span class="page-badge" data-key="events-badge">
                            <i class="fas fa-calendar-alt"></i>
                            <span>Événements</span>
                        </span>
                        <h1 class="page-title" data-key="events-title">Nos Événements</h1>
                        <p class="page-subtitle" data-key="events-subtitle">Découvrez nos prochains événements et rejoignez notre communauté dynamique pour des moments enrichissants</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Filter -->
    <section class="events-filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-container">
                        <div class="filter-buttons">
                            <button class="filter-btn active" data-filter="all" data-key="all-events">
                                <i class="fas fa-th"></i>
                                <span>Tous les événements</span>
                            </button>
                            <button class="filter-btn" data-filter="conference" data-key="conferences">
                                <i class="fas fa-microphone"></i>
                                <span>Conférences</span>
                            </button>
                            <button class="filter-btn" data-filter="workshop" data-key="workshops">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span>Ateliers</span>
                            </button>
                            <button class="filter-btn" data-filter="community" data-key="community-events">
                                <i class="fas fa-users"></i>
                                <span>Communautaires</span>
                            </button>
                            <button class="filter-btn" data-filter="youth" data-key="youth-events">
                                <i class="fas fa-user-friends"></i>
                                <span>Jeunesse</span>
                            </button>
                        </div>
                        <div class="search-container">
                            <div class="search-box">
                                <i class="fas fa-search"></i>
                                <input type="text" id="searchInput" data-key-placeholder="search-events" placeholder="Rechercher un événement...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events List -->
    <section class="section-padding">
        <div class="container">
            <div class="events-grid" id="eventsGrid">
                <!-- Event Card 1 -->
                <div class="event-card-horizontal" data-category="conference" onclick="openEventDetail(1)">
                    <div class="event-date-badge green">
                        <div class="date-day">15</div>
                        <div class="date-month" data-key="march">MAR</div>
                        <div class="date-year">2024</div>
                    </div>
                    <div class="event-image">
                        <div class="event-category conference">
                            <i class="fas fa-microphone"></i>
                            <span data-key="conference">Conférence</span>
                        </div>
                        <div class="event-overlay"></div>
                        <div class="event-pattern"></div>
                    </div>
                    <div class="event-content">
                        <div class="event-meta">
                            <span class="event-time">
                                <i class="fas fa-clock"></i>
                                14:00 - 17:00
                            </span>
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span data-key="mosque-center">Centre Mosquée Al-Nour</span>
                            </span>
                        </div>
                        <h3 class="event-title" data-key="conference-title">Conférence sur l'Islam et la Science</h3>
                        <p class="event-description" data-key="conference-desc">Une exploration fascinante des contributions islamiques à la science moderne et de l'harmonie entre foi et raison dans notre époque contemporaine.</p>
                        <div class="event-footer">
                            <div class="event-attendees">
                                <div class="attendees-avatars">
                                    <div class="avatar green"><i class="fas fa-user"></i></div>
                                    <div class="avatar blue"><i class="fas fa-user"></i></div>
                                    <div class="avatar orange"><i class="fas fa-user"></i></div>
                                </div>
                                <span class="attendees-count">+120 <span data-key="participants">participants</span></span>
                            </div>
                            <button class="btn btn-sponsor" onclick="event.stopPropagation()" data-key="sponsor">
                                <i class="fas fa-handshake"></i>
                                <span>Sponsoriser</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Event Card 2 -->
                <div class="event-card-horizontal" data-category="youth" onclick="openEventDetail(2)">
                    <div class="event-date-badge blue">
                        <div class="date-day">22</div>
                        <div class="date-month" data-key="march">MAR</div>
                        <div class="date-year">2024</div>
                    </div>
                    <div class="event-image">
                        <div class="event-category youth">
                            <i class="fas fa-users"></i>
                            <span data-key="youth">Jeunesse</span>
                        </div>
                        <div class="event-overlay"></div>
                        <div class="event-pattern"></div>
                    </div>
                    <div class="event-content">
                        <div class="event-meta">
                            <span class="event-time">
                                <i class="fas fa-clock"></i>
                                19:00 - 22:00
                            </span>
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span data-key="cultural-center">Centre Culturel Islamique</span>
                            </span>
                        </div>
                        <h3 class="event-title" data-key="youth-gathering">Rassemblement de la Jeunesse</h3>
                        <p class="event-description" data-key="youth-gathering-desc">Une soirée dédiée aux jeunes avec des activités interactives, des discussions enrichissantes et des moments de partage dans une ambiance conviviale.</p>
                        <div class="event-footer">
                            <div class="event-attendees">
                                <div class="attendees-avatars">
                                    <div class="avatar cyan"><i class="fas fa-user"></i></div>
                                    <div class="avatar green"><i class="fas fa-user"></i></div>
                                    <div class="avatar orange"><i class="fas fa-user"></i></div>
                                </div>
                                <span class="attendees-count">+85 <span data-key="participants">participants</span></span>
                            </div>
                            <button class="btn btn-sponsor" onclick="event.stopPropagation()" data-key="sponsor">
                                <i class="fas fa-handshake"></i>
                                <span>Sponsoriser</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Event Card 3 -->
                <div class="event-card-horizontal" data-category="community" onclick="openEventDetail(3)">
                    <div class="event-date-badge orange">
                        <div class="date-day">05</div>
                        <div class="date-month" data-key="april">AVR</div>
                        <div class="date-year">2024</div>
                    </div>
                    <div class="event-image">
                        <div class="event-category community">
                            <i class="fas fa-heart"></i>
                            <span data-key="charity">Caritatif</span>
                        </div>
                        <div class="event-overlay"></div>
                        <div class="event-pattern"></div>
                    </div>
                    <div class="event-content">
                        <div class="event-meta">
                            <span class="event-time">
                                <i class="fas fa-clock"></i>
                                10:00 - 16:00
                            </span>
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span data-key="community-hall">Salle Communautaire</span>
                            </span>
                        </div>
                        <h3 class="event-title" data-key="charity-event">Événement Caritatif</h3>
                        <p class="event-description" data-key="charity-event-desc">Une journée de solidarité avec collecte de dons, distribution de repas et sensibilisation aux causes humanitaires locales et internationales.</p>
                        <div class="event-footer">
                            <div class="event-attendees">
                                <div class="attendees-avatars">
                                    <div class="avatar blue"><i class="fas fa-user"></i></div>
                                    <div class="avatar cyan"><i class="fas fa-user"></i></div>
                                    <div class="avatar green"><i class="fas fa-user"></i></div>
                                </div>
                                <span class="attendees-count">+200 <span data-key="participants">participants</span></span>
                            </div>
                            <button class="btn btn-sponsor" onclick="event.stopPropagation()" data-key="sponsor">
                                <i class="fas fa-handshake"></i>
                                <span>Sponsoriser</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Event Card 4 -->
                <div class="event-card-horizontal" data-category="conference" onclick="openEventDetail(4)">
                    <div class="event-date-badge cyan">
                        <div class="date-day">12</div>
                        <div class="date-month" data-key="april">AVR</div>
                        <div class="date-year">2024</div>
                    </div>
                    <div class="event-image">
                        <div class="event-category conference">
                            <i class="fas fa-book-open"></i>
                            <span data-key="competition">Concours</span>
                        </div>
                        <div class="event-overlay"></div>
                        <div class="event-pattern"></div>
                    </div>
                    <div class="event-content">
                        <div class="event-meta">
                            <span class="event-time">
                                <i class="fas fa-clock"></i>
                                15:00 - 18:00
                            </span>
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span data-key="main-mosque">Grande Mosquée</span>
                            </span>
                        </div>
                        <h3 class="event-title" data-key="quran-competition">Concours de Récitation du Coran</h3>
                        <p class="event-description" data-key="quran-competition-desc">Un concours de récitation coranique ouvert à tous, célébrant la beauté et la spiritualité du Livre Saint avec des participants de tous âges.</p>
                        <div class="event-footer">
                            <div class="event-attendees">
                                <div class="attendees-avatars">
                                    <div class="avatar orange"><i class="fas fa-user"></i></div>
                                    <div class="avatar blue"><i class="fas fa-user"></i></div>
                                    <div class="avatar green"><i class="fas fa-user"></i></div>
                                </div>
                                <span class="attendees-count">+150 <span data-key="participants">participants</span></span>
                            </div>
                            <button class="btn btn-sponsor" onclick="event.stopPropagation()" data-key="sponsor">
                                <i class="fas fa-handshake"></i>
                                <span>Sponsoriser</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Event Card 5 -->
                <div class="event-card-horizontal" data-category="workshop" onclick="openEventDetail(5)">
                    <div class="event-date-badge green">
                        <div class="date-day">20</div>
                        <div class="date-month" data-key="april">AVR</div>
                        <div class="date-year">2024</div>
                    </div>
                    <div class="event-image">
                        <div class="event-category workshop">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <span data-key="workshop">Atelier</span>
                        </div>
                        <div class="event-overlay"></div>
                        <div class="event-pattern"></div>
                    </div>
                    <div class="event-content">
                        <div class="event-meta">
                            <span class="event-time">
                                <i class="fas fa-clock"></i>
                                16:00 - 19:00
                            </span>
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span data-key="education-center">Centre d'Éducation</span>
                            </span>
                        </div>
                        <h3 class="event-title" data-key="workshop-title">Atelier sur l'Éthique Islamique</h3>
                        <p class="event-description" data-key="workshop-desc">Un atelier interactif explorant les principes éthiques islamiques et leur application pratique dans la vie moderne et professionnelle.</p>
                        <div class="event-footer">
                            <div class="event-attendees">
                                <div class="attendees-avatars">
                                    <div class="avatar cyan"><i class="fas fa-user"></i></div>
                                    <div class="avatar orange"><i class="fas fa-user"></i></div>
                                    <div class="avatar blue"><i class="fas fa-user"></i></div>
                                </div>
                                <span class="attendees-count">+60 <span data-key="participants">participants</span></span>
                            </div>
                            <button class="btn btn-sponsor" onclick="event.stopPropagation()" data-key="sponsor">
                                <i class="fas fa-handshake"></i>
                                <span>Sponsoriser</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Event Card 6 -->
                <div class="event-card-horizontal" data-category="community" onclick="openEventDetail(6)">
                    <div class="event-date-badge blue">
                        <div class="date-day">28</div>
                        <div class="date-month" data-key="april">AVR</div>
                        <div class="date-year">2024</div>
                    </div>
                    <div class="event-image">
                        <div class="event-category community">
                            <i class="fas fa-home"></i>
                            <span data-key="family">Famille</span>
                        </div>
                        <div class="event-overlay"></div>
                        <div class="event-pattern"></div>
                    </div>
                    <div class="event-content">
                        <div class="event-meta">
                            <span class="event-time">
                                <i class="fas fa-clock"></i>
                                09:00 - 17:00
                            </span>
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span data-key="park">Parc Municipal</span>
                            </span>
                        </div>
                        <h3 class="event-title" data-key="family-day">Journée Familiale</h3>
                        <p class="event-description" data-key="family-day-desc">Une journée de détente et de divertissement pour toute la famille avec activités ludiques, jeux traditionnels et moments de convivialité.</p>
                        <div class="event-footer">
                            <div class="event-attendees">
                                <div class="attendees-avatars">
                                    <div class="avatar green"><i class="fas fa-user"></i></div>
                                    <div class="avatar orange"><i class="fas fa-user"></i></div>
                                    <div class="avatar cyan"><i class="fas fa-user"></i></div>
                                </div>
                                <span class="attendees-count">+300 <span data-key="participants">participants</span></span>
                            </div>
                            <button class="btn btn-sponsor" onclick="event.stopPropagation()" data-key="sponsor">
                                <i class="fas fa-handshake"></i>
                                <span>Sponsoriser</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Detail Modal -->
    <div class="modal fade" id="eventModal" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title-container">
                        <h5 class="modal-title" id="eventModalTitle"></h5>
                        <div class="modal-meta">
                            <span id="eventModalDate"></span>
                            <span id="eventModalTime"></span>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="event-detail-container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="event-detail-content">
                                    <div class="event-info-section">
                                        <h6 data-key="event-details">
                                            <i class="fas fa-info-circle"></i>
                                            Détails de l'événement
                                        </h6>
                                        <div class="detail-grid">
                                            <div class="detail-item green">
                                                <i class="fas fa-calendar"></i>
                                                <div>
                                                    <strong data-key="date">Date</strong>
                                                    <span id="eventDate"></span>
                                                </div>
                                            </div>
                                            <div class="detail-item blue">
                                                <i class="fas fa-clock"></i>
                                                <div>
                                                    <strong data-key="time">Heure</strong>
                                                    <span id="eventTime"></span>
                                                </div>
                                            </div>
                                            <div class="detail-item orange">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <div>
                                                    <strong data-key="location">Lieu</strong>
                                                    <span id="eventLocation"></span>
                                                </div>
                                            </div>
                                            <div class="detail-item cyan">
                                                <i class="fas fa-users"></i>
                                                <div>
                                                    <strong data-key="capacity">Capacité</strong>
                                                    <span id="eventCapacity"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="event-description-section">
                                        <h6 data-key="description">
                                            <i class="fas fa-align-left"></i>
                                            Description
                                        </h6>
                                        <p id="eventDescription"></p>
                                    </div>

                                    <div class="event-program-section">
                                        <h6 data-key="program">
                                            <i class="fas fa-list-ul"></i>
                                            Programme
                                        </h6>
                                        <div id="eventProgram"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="event-sidebar">
                                    <div class="organization-committee">
                                        <h6 data-key="organization-committee">
                                            <i class="fas fa-user-friends"></i>
                                            Comité d'Organisation
                                        </h6>
                                        <div id="committeeList"></div>
                                    </div>
                                    
                                    <div class="event-sponsors">
                                        <h6 data-key="sponsors">
                                            <i class="fas fa-handshake"></i>
                                            Sponsors
                                        </h6>
                                        <div class="sponsors-grid">
                                            <div class="sponsor-slot">
                                                <i class="fas fa-plus"></i>
                                                <span data-key="become-sponsor">Devenez sponsor</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sponsor btn-lg" data-key="sponsor-event">
                        <i class="fas fa-handshake"></i>
                        <span>Sponsoriser cet événement</span>
                    </button>
                    <button type="button" class="btn btn-outline-primary btn-lg" data-key="register">
                        <i class="fas fa-user-plus"></i>
                        <span>S'inscrire</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="copyright">&copy; 2024 JMPI - Jeunesse Musulmane pour la Promotion de l'Islam. <span data-key="rights">Tous droits réservés.</span></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js')  }}"></script>
</body>
</html>
