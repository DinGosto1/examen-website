<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Rijschool</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Voeg hier eventuele andere CSS-bestanden toe voor styling -->
    <style>
        /* Voeg de ontbrekende CSS-selector toe */
        .contact {
            margin-bottom: 30px;
        }

        .contact h2 {
            color: #333;
            font-size: 2em;
            margin-bottom: 15px;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }

        .contact .container {
            margin-top: 20px; /* Verander de selector voor de container om het juiste element te selecteren */
        }

        .contact label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .contact input[type="text"],
        .contact textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

<!-- Contact sectie -->
<section id="contact" class="contact"> <!-- Voeg de juiste klasse toe aan de contactsectie -->
    <div class="container">
        <h2>Contacteer ons</h2>
        <form action="submit.php" method="post">
            <label for="name">Naam:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">E-mailadres:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Bericht:</label>
            <textarea id="message" name="message" rows="6" required></textarea>
            
            <input type="submit" value="Verstuur">
        </form>
    </div>
</section>

</body>
</html>
