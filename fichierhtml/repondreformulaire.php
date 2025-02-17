<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    form {
      max-width: 500px;
      margin: 20px auto;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input,
    textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    textarea {
      resize: vertical;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
  <title>Formulaire</title>
</head>
<body>

  <form action="repondre.php" method="post">
    <label for="ID">ID demande:</label>
    <input type="text" id="ID" name="ID" required>

    <label for="prof">Nom</label>
    <input type="text" id="prof" name="prof" required>

    <label for="Email">Email de l'étudaint:</label>
    <input type="email" id="Email" name="Email" required>

    <label for="etudiant">Sujet:</label>
    <input type="text" id="etudiant" name="etudiant" required>

    

    <label for="reponse">Réponse:</label>
    <textarea id="reponse" name="reponse" rows="4" required></textarea>

    <button type="submit">Soumettre</button>
  </form>
  

</body>
</html>
