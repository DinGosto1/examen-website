     <!-- Proefles sectie -->
     <section id="proefles" class="Test Lesson">
        <div class="container">
        </div>
    </section>

    <!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aanmelden Proefles - Rijschool</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Voeg hier eventuele andere CSS-bestanden toe voor styling -->
    <style>
        /* Voeg de ontbrekende CSS-selector toe */
        .aanmeld-formulier {
            margin-bottom: 30px;
        }

        .aanmeld-formulier h2 {
            color: #333;
            font-size: 2em;
            margin-bottom: 15px;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }

        .aanmeld-formulier .container {
            margin-top: 20px; /* Verander de selector voor de container om het juiste element te selecteren */
        }

        .aanmeld-formulier label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .aanmeld-formulier input[type="text"],
        .aanmeld-formulier input[type="email"],
        .aanmeld-formulier input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .aanmeld-formulier input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .aanmeld-formulier input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

<!-- Aanmeldproefles sectie -->
<section id="aanmelden-proefles" class="aanmeld-formulier">
    <div class="container">
        <h2>Aanmelden Proefles</h2>
        <form action="submit_proefles.php" method="post">
            <label for="name">Naam:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">E-mailadres:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Telefoonnummer:</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label for="message">Opmerkingen (optioneel):</label>
            <textarea id="message" name="message" rows="6"></textarea>

            <label for="day">Kies een dag:</label>
            <select id="day" name="day" required>
                <option value="Maandag">Maandag</option>
                <option value="Dinsdag">Dinsdag</option>
                <option value="Woensdag">Woensdag</option>
                <option value="Donderdag">Donderdag</option>
                <option value="Vrijdag">Vrijdag</option>
            </select>
            
            <label for="time">Kies een tijd:</label>
            <select id="time" name="time" required>
                <option value="09:00">09:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="12:00">13:00</option>
                <option value="12:00">14:00</option>
                <option value="12:00">15:00</option>
                <option value="12:00">16:00</option>


            <input type="submit" value="Aanmelden">
        </form>
    </div>
</section>

</body>
</html>
