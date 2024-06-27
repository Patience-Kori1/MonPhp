<!DOCTYPE html>
<html>
<head>
    <title>Ceci <?php echo "Patience"?> est une page de test avec des balises PHP</title>
    <meta charset="utf-8" />
</head>
<body>
    <h2> Travail du 27 juin 2024</h2>
        <?php
            $fullname = "Mathieu Nebra";
            echo "Bonjour ";
            echo $fullname;
            echo " et bienvenue sur le site !<br><br>";

            $fullname = "Mathieu Nebra";
            echo 'Bonjour $fullname et bienvenue sur le site !<br><br>';

            // Concatenation avec l'opérateur .
            $prenom = "Kori";
            $nom = "Pak";
            echo $prenom . ' ' . $nom. '<br><br>'; // Affiche "John Doe"  

            // Interpolation dans une chaîne entre guillemets doubles
            $prenom = "John";
            $nom = "Doe";
            echo "Mon prénom est $prenom et mon nom est $nom <br><br>"; // Affiche "Mon prénom est John et mon nom est Doe"

            // Interpolation situation complexe: Utilisation des accolades pour des expressions complexes
            $prenom = "John";
            $nom = "Doe";
            $age = 30;
            $info = "{$prenom} {$nom} a {$age} ans.<br><br>";
            echo $info; // Affiche "John Doe a 30 ans."

            // Utilisation complexe de la concaténation
            $quantite = 3;
            $produit = "pommes";
            $prixUnitaire = 1.25;

            echo "Vous avez acheté " . $quantite . " " . $produit . " pour un total de " . ($quantite * $prixUnitaire) . " euros.<br><br>"; // Affiche "Vous avez acheté 3 pommes pour un total de 3.75 euros."

            //Utilisation complexe de l'intérpolation
            $quantite = 3;
            $produit = "pommes";
            $prixUnitaire = 1.25;
            echo "Vous avez acheté $quantite $produit pour un total de " . ($quantite * $prixUnitaire) . " euros.<br><br>";

            $number = 2 + 4; // $number prend la valeur 6
            $number = 5 - 1; // $number prend la valeur 4
            $number = 3 * 5; // $number prend la valeur 15
            $number = 10 / 2; // $number prend la valeur 5

            // Allez on rajoute un peu de difficulté
            $number = 3 * 5 + 1; // $number prend la valeur 16
            $number = (1 + 2) * 2; // $number prend la valeur 6

            // On utilise des variables
            $number = 10;
            echo ($number + 5) * $number . "<br><br>"; // $result prend la valeur 150

            // Modulo
            $number = 10 % 3; 
            echo $number // $number prend la valeur 1 car il reste 1
        ?> 
<!------------------------------------------------------------------------------------->
    <h2>Travail du 26 juin 2024 </h2>    
        <p>
            Cette page contient du code HTML avec des balises PHP.<br /> <br />
            <?php
             echo "Bonjour, le monde !"; 
             ?>
            

            <pre>
                                                      Cette ligne est affichée exactement
                comme elle apparaît ici,
                    avec les espaces et les sauts de ligne
                conservés.
            </pre>

        </p>
        
        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>
        
        <?php
        echo "Hello Boss boss";
        ?>

<!-- 1. Différentes manière d'utiliser l'expression echo -->

    <?php
        echo "echo ne requiert pas de parenthèses.<br>";

        # Les chaînes peuvent être passées soit individuellement comme plusieurs arguments à l'aide des virgule ou des points
        // concaténées ensemble et passées en tant qu'un seul argument
        echo 'This ', 'string ', 'was ', 'made ', 'with multiple parameters.', "\n"; 
        echo 'This ' . 'string ' . 'was ' . 'made ' . 'with concatenation.' . "<br>";

        // Aucune nouvelle ligne ou espace n'est ajoutée ; ci-dessous affiche "helloworld", tout sur une ligne
        echo "hello";
        echo "world<br>";

        // L'argument peut être n'importe quelle expression qui produit une chaîne de caractères
        $foo = "example";
        echo "foo is $foo <br>"; // foo is example


// 2. Découverte et utilisation de la fonction IMPLODE() pour afficher les éléments d'un tableau en une chaine de caractère

        $fruits = ["lemon", "orange", "banana"];
        echo implode(" et ", $fruits); 
        // lemon and orange and banana, ceci est possible grace à la fonction implode.

        //Exemple sans délimitateur
        $numbers = [1, 2, 3];
        echo implode($numbers); // Affiche: 123

        $person = ["name" => "John", "age" => 30, "city" => "New York"];
        echo implode(", ", $person); // Affiche: John, 30, New York
        
        // Utilisation de <br> pour le contexte HTML
        echo "Première ligne <br>";
        echo "Deuxième ligne <br>";
        echo "Troisième ligne <br>";

        // Utilisation de \n pour le contexte de texte brut, sans <pre> ça fait de l'espacement
        echo "Première ligne\n";
        echo "Deuxième ligne\n";
        echo "Troisième ligne\n"; 

        // Utilisation de \n pour le contexte de texte brut, avec <pre> ça fait des saut de ligne
        echo "<pre>";
        echo "Première ligne\n";
        echo "Deuxième ligne\n";
        echo "Troisième ligne\n";
        echo "</pre>";

        $text = "Première ligne\n    Deuxième ligne avec des espaces\nTroisième ligne";
        
        // Utilisation de nl2br pour convertir les \n en <br>
        echo nl2br("Première ligne \n Deuxième ligne \n Troisième ligne\n");

        echo "Première ligne" . PHP_EOL;
        echo "Deuxième ligne" . PHP_EOL;
        echo "Troisième ligne" . PHP_EOL;

        // Utilisation de nl2br pour convertir les nouvelles lignes en <br>
        $formattedText = nl2br($text);

        echo "<pre>$formattedText</pre>";
        

        // Les expressions qui ne sont pas des chaînes sont converties en chaînes, même si declare(strict_types=1) est utilisé
        echo 6 * 7; // 42

        // On peut meme afficher utiliser des balises qui seront prise en compte à l'intérieure de echo
        echo "Ceci est du <strong> texte en gras </strong> <br>";
        
        echo date('d/m/Y h:i:s');

        // phpinfo();

        // phpinfo(INFO_VARIABLES);

        // phpinfo(INFO_GENERAL);

        // phpinfo(INFO_ENVIRONMENT);

        

    ?>

</body>
</html>
