#site vtc_1.html
 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VTC Premium Luxe</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #0d0d0d;
            color: #fff;
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background: linear-gradient(90deg, #111, #333);
        }
        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: rgba(255, 105, 180, 0.85)
             !important;
        }
        .hero {
            height: 100vh;
            background: url('luxury-car.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }
        .hero h1 {
            font-size: 3.5rem;
            font-weight: bold;
            color: gold;
        }
        .hero p {
            font-size: 1.5rem;
            color: white;
        }
        .card {
            background-color: #222;
            border: 1px solid gold;
            color: white;
        }
        .card-title {
            color: gold;
        }
        .btn-primary {
            background-color: gold;
            border: none;
            color: black;
            font-weight: bold;
        }
        .btn-primary:hover {
            background-color: #c7a008;
        }
        footer {
            background: linear-gradient(90deg, #111, #333);
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">City rose VTC</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#accueil">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="connexion.html">Connexion</a></li>
                        <li class="nav-item"><a class="nav-link" href="inscription.html">Inscription</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <section id="accueil" class="hero text-center">
        <div>
            <img src="voiture.jpeg" class="card-img-top" alt="voiture">
            <h1>Voyagez avec élégance</h1>
            <p>Votre chauffeur privé, votre luxe</p>
        </div>
    </section>
    
    <section id="services" class="container my-5">
        <h2 class="text-center text-gold">Nos Services</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="service1.jpg" class="card-img-top" alt="Service 1">
                    <div class="card-body">
                        <h5 class="card-title">Service Premium</h5>
                        <p class="card-text">Voyagez en toute sérénité avec nos chauffeurs professionnels.</p>
                        <a href="Transfert Aéroport.html" class="btn btn-primary">Réserver</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="service2.jpg" class="card-img-top" alt="Service 2">
                    <div class="card-body">
                        <h5 class="card-title">Transfert Aéroport</h5>
                        <p class="card-text">Un service rapide et fiable vers tous les aéroports.</p>
                        <a href="Transfert Aéroport.html" class="btn btn-primary">Réserver</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="service3.jpg" class="card-img-top" alt="Service 3">
                    <div class="card-body">
                        <h5 class="card-title">Chauffeur Privé</h5>
                        <p class="card-text">Profitez d’un chauffeur dédié pour vos déplacements.</p>
                        <a href="Transfert Aéroport.html " class="btn btn-primary">Réserver</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="contact" class="container my-5">
        <h2 class="text-center text-gold">Contactez-nous</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
            <a href="tel:+33612345678" class="btn btn-primary" onclick="copyNumber(event)">📞 Appeler / Copier</a>

<script>
function copyNumber(event) {
    event.preventDefault(); // Empêche l'ouverture de l'application d'appel automatique
    const phoneNumber = "+33651354579"; // Remplace par ton numéro

    navigator.clipboard.writeText(phoneNumber).then(() => {
        alert("Numéro copié : " + phoneNumber);
    }).catch(err => {
        console.error("Erreur lors de la copie : ", err);
    });
}
</script>

        </form>
    </section>
    
    <footer class="text-center py-3">
        <p>&copy; 2025 City rose VTC - Tous droits réservés</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
