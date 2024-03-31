    <!-- Home sectie -->
    <section class="hero"></section>
    <section id="home">
        <div class="container">
            <h2>Welkom bij Rijschool Challenge</h2>
            <p>De beste rijschool om veilig en zelfverzekerd de weg op te gaan!</p>
            <a href="?page=tarieven" >Ontdek onze Tarieven</a>
        </div>
    </section>

    <?php
// Variabelen voor dynamische inhoud
$rijschoolNaam = "Rijschool Challenge";
$slogan = "Rijles voor Iedereen";
$ctaTekst = "Schrijf je nu in voor een proefles";
$testimonialData = array(
    array(
        "quote" => "Ik ben zo blij dat ik voor Rijschool Naam heb gekozen. De instructeurs zijn geduldig en professioneel, en ik heb mijn rijbewijs in één keer gehaald!",
        "author" => "Emma, geslaagde leerling"
    ),
    array(
        "quote" => "Geweldige ervaring bij Rijschool Naam! Ik voelde me altijd op mijn gemak tijdens de rijlessen, en ik heb veel geleerd van mijn instructeur.",
        "author" => "Mark, leerling"
    ),
    
    array(
        "quote" => "Fantastische rijschool! De lessen waren goed gestructureerd en de instructeurs waren erg geduldig. Ik heb mijn rijbewijs snel en met vertrouwen gehaald.",
        "author" => "Sophie, geslaagde leerling"
    )
);

// Functie om testimonials weer te geven
function displayTestimonials($data) {
    foreach ($data as $testimonial) {
        echo '<div class="testimonial">';
        echo '<p>"' . $testimonial["quote"] . '"</p>';
        echo '<cite>- ' . $testimonial["author"] . '</cite>';
        echo '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $rijschoolNaam ?> - <?php echo $slogan ?></title>
    <link rel="stylesheet" href="styles.css">
    <!-- Voeg hier eventuele andere CSS-bestanden toe voor styling -->
</head>
<body>

<!-- Sectie met klantbeoordelingen -->
<section class="testimonials">
    <div class="container">
        <h2>Wat onze leerlingen zeggen</h2>
        <?php displayTestimonials($testimonialData); ?>
    </div>
</section>

<!-- Sectie met diensten en voordelen -->
<section class="services">
    <div class="container">
        <h2>Onze diensten en voordelen</h2>
        <div class="service">
            <h3>Ervaring Instructeurs</h3>
            <p>Onze instructeurs zijn ervaren en geduldig, waardoor je zelfvertrouwen opbouwt achter het stuur.</p>
        </div>
        <div class="service">
            <h3>Flexibele Lessen</h3>
            <p>We bieden flexibele lestijden aan die passen bij jouw schema, zodat je altijd kunt leren op een moment dat jou uitkomt.</p>
        </div>
        <!-- Voeg meer diensten en voordelen toe indien nodig -->
    </div>
</section>


</body>
</html>
