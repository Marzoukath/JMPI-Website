   
   <nav class="navbar navbar-expand-lg fixed-top custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <div class="logo-container">
                    <div class="logo-icon">
                        <img src="{{ asset('images/logon.png') }}" alt="JMPI Logo" class="img-fluid" >
                    </div>
                    {{-- <div class="logo-text">
                        <span class="logo-main">JMPI</span>
                        <span class="logo-sub" data-key="logo-subtitle">Jeunesse Musulmane</span>
                    </div> --}}
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
                        <a class="nav-link " href="{{ route('events') }}" data-key="events">Événements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#contact" data-key="contact">Contactez-nous</a>
                    </li>
                </ul>
{{--                 
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
                </div> --}}
            </div>
        </div>
    </nav>
