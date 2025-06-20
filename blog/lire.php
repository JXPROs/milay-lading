
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Confirmation de réception</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      background-color: #ffffff;
      padding: 40px;
      box-sizing: border-box;
    }

    .card {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      width: 100%;
      text-align: center;
    }

    .card h1 {
      color: #e60000;
      margin-bottom: 20px;
    }

    .card p {
      font-size: 16px;
      line-height: 1.6;
      color: #333333;
    }

    .cta {
      margin-top: 25px;
    }

    .cta a {
      display: inline-block;
      background-color: #e60000;
      color: #ffffff;
      text-decoration: none;
      padding: 12px 20px;
      border-radius: 6px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .cta a:hover {
      background-color: #cc0000;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <h1>Bonjour cher client,</h1>
      <p>
        Nous avons bien reçu votre recommandation.<br>
        Notre équipe va évaluer votre requête dans les plus brefs délais.<br>
        En attendant, merci de patienter quelques minutes.
      </p>
      <div class="cta">
        <a href="https:milay.alwaysdata.net">Découvrir nos autres produits</a>
      </div>
    </div>
  </div>
</body>
</html>
