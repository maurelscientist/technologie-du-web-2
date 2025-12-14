<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Contact - Gestion UPB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', sans-serif;
    }

    .contact-section {
        padding: 60px 20px;
    }

    h1 {
        color: #003366;
        /* bleu UPB */
        font-weight: bold;
        margin-bottom: 30px;
        text-align: center;
    }

    .form-control {
        border-radius: 6px;
    }

    .btn-send {
        background-color: #ffc107;
        /* jaune accent */
        color: #000;
        font-weight: bold;
        border-radius: 6px;
    }

    .btn-send:hover {
        background-color: #e0a800;
        color: #fff;
    }
    </style>
</head>

<body>

    <section class="contact-section">
        <div class="container">
            <h1>Contactez-nous</h1>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form id="contactForm">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom :</label>
                            <input type="text" class="form-control" id="nom" name="nom" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email :</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message :</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-send w-100">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const nom = document.getElementById('nom').value.trim();
        const email = document.getElementById('email').value.trim();
        const message = document.getElementById('message').value.trim();

        if (nom && email && message) {
            alert("Merci " + nom + " ! Votre message a été envoyé avec succès.");
            // Ici tu peux ajouter du code pour envoyer les données vers ton serveur PHP
            document.getElementById('contactForm').reset();
            setTimeout(function() {
                window.history.back();
            }, 1000);
        } else {
            alert("Veuillez remplir tous les champs.");
        }
    });
    </script>

</body>

</html>