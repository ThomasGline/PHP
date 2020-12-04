<?php
    $name = "Thomas";
    $age = 20;
    $eye = "bleu";
    $family = array (
        0 => 'Pauline',
        1 => 'Ludo',
        2 => 'Papou',
        3 => 'Mamou',
        4 => 'Thomas',
    );
    $hunger = true;
?>

<html>
    <head><title>variable_types</title></head>
    <body>
        <p>Salut! Mon nom est <?php echo $name;?>.</p>
        <p>J'ai <?php echo $age; ?> ans.</p>
        <p>Mes yeux sont <?php echo $eye;?>.</p>
        <p>La première personne de ma famille est <?php echo $family[0]?>.</p>
        <p>Est ce que j'ai faim : <?php echo $hunger ?></p>
    </body>
</html>