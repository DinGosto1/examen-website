 <section id="over-ons" class="about">
        <div class="container">
        </div>
    </section>
    <?php
// Variabelen voor dynamische inhoud
$rijschoolNaam = "RijschoolChallenge";
$overOnsTitel = "Over Ons";
$overOnsTekst = "Bij Rijschool Naam geloven we in het bieden van hoogwaardige rijlessen die niet alleen leerzaam zijn, maar ook leuk en boeiend. Onze missie is om onze leerlingen te helpen zelfverzekerde en bekwame bestuurders te worden die veilig en verantwoordelijk de weg op gaan. Met ervaren instructeurs, moderne lesauto's en een persoonlijke benadering, streven we ernaar om de rijopleiding voor iedereen toegankelijk en plezierig te maken.";

// Functie om het team weer te geven
function displayTeamMembers($teamMembers) {
    foreach ($teamMembers as $member) {
        echo '<div class="team-member">';
        echo '<img src="' .$member["photo"]. '" alt="' . $member["name"] . '">';
        echo '<h3>' . $member["name"] . '</h3>';
        echo '<p>' . $member["bio"] . '</p>';
        echo '</div>';
    }
}

// Teamleden array
$teamMembers = array(
    array(
        "name" => "John Doe",
        "photo" => "img/John.jpg",
        "bio" => "John is een ervaren instructeur met meer dan 10 jaar ervaring in het lesgeven. Hij is geduldig, vriendelijk en toegewijd om elke leerling te helpen slagen."
    ),
    array(
        "name" => "Emma Smith",
        "photo" => "img/Emma.jpg",
        "bio" => "Emma is een enthousiaste instructeur die gepassioneerd is over het lesgeven en het helpen van leerlingen om zelfverzekerde bestuurders te worden."
    ),
    array(
        "name" => "Lisa Johnson",
        "photo" => "img/Lisa.jpg",
        "bio" => "Lisa heeft een passie voor lesgeven en vindt het geweldig om haar kennis en ervaring door te geven aan haar leerlingen. Met haar geduld en toewijding helpt ze haar leerlingen om zelfverzekerde bestuurders te worden."
    ),
    array(
        "name" => "Peter Wilson",
        "photo" => "img/Peter.jpg",
        "bio" => "Peter is een ervaren rij-instructeur die bekend staat om zijn rustige en geduldige benadering. Hij gelooft in een persoonlijke aanpak en streeft ernaar om elke leerling op zijn eigen tempo te begeleiden."
    )
);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $rijschoolNaam ?> - <?php echo $overOnsTitel ?></title>
    <link rel="stylesheet" href="styles.css">
    <!-- Voeg hier eventuele andere CSS-bestanden toe voor styling -->
</head>
<body>

<!-- Over Ons sectie -->
<section class="about-us">
    <div class="container">
        <h2><?php echo $overOnsTitel ?></h2>
        <p><?php echo $overOnsTekst ?></p>
    </div>
</section>

<!-- Teamleden sectie -->
<section class="team">
    <div class="container">
        <h2>Ons Team</h2>
        <div class="team-members">
            <?php displayTeamMembers($teamMembers); ?>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include 'components/footer.php'; ?>

</body>
</html>
