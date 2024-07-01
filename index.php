<!DOCTYPE html>
<html>
<head>
    <title>Ceci <?php echo "Patience"?> est une page de test avec des balises PHP</title>
    <meta charset="utf-8" />
</head>
<body>
    <h3> Travail du 01 juillet 2024 </h3>
        <?php
            $isEnabled = true; // La condition d'accès

            if ($isEnabled === true) {
                echo "Vous êtes autorisé(e) à accéder au site ✅<br><br>";
            }
            else {
                echo "Vous n'êtes pas autorisé(e) à accéder au site ❌<br><br>";
            }

            // Les méthodes courtes de faire des booleans
            $isAllowedToEnter = false;
            if ($isAllowedToEnter) {
                echo "Bienvenue petit nouveau. :o)<br><br>";
            }
            else {
                echo "T'as pas le droit d'entrer !!!<br><br>";
            }

            if (! $isAllowedToEnter) {

            }

            $isEnabled = true;
            $isOwner = false;
            if ($isEnabled && $isOwner) {
                echo 'Accès à la recette validé ✅';
            } else {
                echo 'Accès à la recette interdit ! ❌';
            }
        ?>

    <h3>Travail du 28 juin 2024</h3>
        <?php
            // if (condition1) {
            //     // Code à exécuter si la condition1 est vraie
            // } elseif (condition2) {
            //     // Code à exécuter si la condition2 est vraie
            // } else {
            //     // Code à exécuter si aucune des conditions précédentes n'est vraie
            // }

            // Structure if...else
            $age = 2;
            if ($age >= 18) {
                echo "Vous êtes majeur.";
            } else {
                echo "Vous êtes mineur.<br><br>";
            };
            
            // Structure if... elseif .... else if
            $note = 85;
            if ($note >= 90) {
                echo "Excellent";
            } else if ($note >= 75) {
                echo "Très bien";
            } else if ($note >= 50) {
                echo "Bien";
            } else {
                echo "Échec";
            }

            // switch (n) {
            //     case valeur1:
            //         // Code à exécuter si n == valeur1
            //         break;
            //     case valeur2:
            //         // Code à exécuter si n == valeur2
            //         break;
            //     default:
            //         // Code à exécuter si n ne correspond à aucune valeur
            // }
            
            // Structure switch / case
            $jour = "Dada";
            switch ($jour) {
                case "lundi":
                    echo "Aujourd'hui, c'est lundi.";
                    break;
                case "mardi":
                    echo "Aujourd'hui, c'est mardi.";
                    break;
                case "mercredi":
                    echo "Aujourd'hui, c'est mercredi.";
                    break;
                default:
                    echo "Aujourd'hui, ce n'est ni lundi, ni mardi, ni mercredi.<br><br>";
            }
            
            // L'opérateur ternaire
            // variable = (condition) ? valeur_si_vrai : valeur_si_faux;
            $age = 10;
            $status = ($age >= 18) ? "majeur" : "mineur<br><br>";
            echo "Vous êtes " . $status;

            // L'opérateur de coalescence nulle (??) 
            $nom = null;
            $nomComplet = $nom ?? "Anonyme";
            echo "Nom: " . $nomComplet;

            // Notion de Boucle en PHP
            // Boucle while
            $i = 2;
            while ($i < 10) {
                echo $i."<br>";
                $i++;
            }

            //Boucle do...while
            $i = 0;
            do {
                echo $i;
                $i++;
            } while ($i < 10);

            //Boucle for
            for ($i = 0; $i < 10; $i++) {
                echo $i."<br>";
            }   
            
            // Boucle foreach
            $personne = ["nom" => "John", "age" => 30, "ville" => "Paris"];
            foreach ($personne as $cle => $valeur) {
                echo "$cle: $valeur <br>";
            }

            //Instruction de control Break
            for ($i = 0; $i < 10; $i++) {
                if ($i == 5) {
                    break; // Sort de la boucle lorsque $i est égal à 5
                }
                echo $i;
            }
            
            // Instruction de control continue
            for ($i = 0; $i < 10; $i++) {
                if ($i == 5) {
                    continue; // Passe à l'itération suivante lorsque $i est égal à 5
                }
                echo $i;
            }                  
        ?>
<!------------------------------------------------------------------------------------>
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
