    <!-- Instructeurs sectie -->
    <section id="instructeurs" class="instructors">
        <div class="container">
        </div>
    </section>

    <?php
// Variabelen voor dynamische inhoud
$rijschoolNaam = "RijschoolChallenge";
$overOnsTitel = "Onze Instructeurs";
$overOnsTekst = "Maak kennis met onze ervaren en toegewijde instructeurs die je helpen om zelfverzekerde bestuurders te worden.";

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
<section class="instructors">
    <div class="container">
        <h2><?php echo $overOnsTitel ?></h2>
        <p><?php echo $overOnsTekst ?></p>
    </div>
</section>

<!-- Teamleden sectie -->
<section class="team">
    <div class="container">

        <div class="team-members">
            <?php displayTeamMembers($teamMembers); ?>
        </div>
    </div>
</section>



</body>
</html>
