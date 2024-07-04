<!DOCTYPE html>
<html>
<head>
    <title>Ceci <?php echo "Patience"?> est une page de test avec des balises PHP</title>
    <meta charset="utf-8" />
</head>
<body style="margin-left: 50px;">

    <h2 style="color:crimson"> Travail du 04 juillet 2024 </h2>
        <?php
            // Correction de l'exercice de la fin du chapitre des boucles et des tableaux
            $recipes = [
                [
                    'title' => 'Cassoulet',
                    'recipe' => 'Etape 1 : des flageolets !',
                    'author' => 'mickael.andrieu@exemple.com',
                    'is_enabled' => true,
                ],
                [
                    'title' => 'Couscous',
                    'recipe' => 'Etape 1 : de la semoule',
                    'author' => 'mickael.andrieu@exemple.com',
                    'is_enabled' => false,
                ],
                [
                    'title' => 'Escalope milanaise',
                    'recipe' => 'Etape 1 : prenez une belle escalope',
                    'author' => 'mathieu.nebra@exemple.com',
                    'is_enabled' => true,
                ],
            ];
            foreach ($recipes as $key => $recipe) {
                $IsEnabledExiste = array_key_exists('is_enabled', $recipe);
                $ValueIsEnable = $recipe['is_enabled']; 
                if ($IsEnabledExiste === true && $ValueIsEnable == true) {
                    echo " Pour le tableau de la recette : <h4>« ". $recipe['title'] . " »</h4>, la clé 'is_enabled' existe et elle est égale à : " . $recipe['is_enabled']. " " . "<br><br>";
                    }
            }
        ?>
<!-------------------------------------------------------------------------------------->
    
    <h2 style="color:crimson"> Travail du 03 juillet 2024 </h2>
        <?php
            //NOTION DE TABLEAU : INDEX, ASSOCIATIF, UNIDIMENSIONNEL, MULTIDIMENSIONNEL

            //Tableaux Numériques (Indexés) 
            $indexedArray = ['apple', 'banana', 'cherry'];
            echo $indexedArray[0] . "<br>"; // Affiche 'apple'
            echo $indexedArray[1] . "<br>"; // Affiche 'banana'
            echo $indexedArray[2] . "<br>"; // Affiche 'cherry'

            //tableaux associatifs 
            echo"<br>";
            $associativeArray = [
                'name' => 'Alice',
                'age' => 25,
                'city' => 'Paris'
            ];
            echo $associativeArray['name']; // Affiche 'Alice'
            echo $associativeArray['age']; // Affiche 25
            echo $associativeArray['city']; // Affiche 'Paris'

            // Tableau Numérique Multidimensionnel
            $multiArray = [
                [1, 2, 3],
                [4, 5, 6],
                [7, 8, 9]
            ];
            echo $multiArray[0][1]; // Affiche 2
            echo $multiArray[2][0]; // Affiche 7
            
            // Tableau Associatif Multidimensionnel
            $multiAssocArray = [
                'person1' => [
                    'name' => 'Alice',
                    'age' => 25
                ],
                'person2' => [
                    'name' => 'Bob',
                    'age' => 30
                ]
            ];
            echo $multiAssocArray['person1']['name']; // Affiche 'Alice'
            echo $multiAssocArray['person2']['age']; // Affiche 30

            // Tableau Multidimensionnel Mixte
            $students = [
                [
                    'name' => 'Alice',
                    'grades' => [85, 90, 78]
                ],
                [
                    'name' => 'Bob',
                    'grades' => [92, 88, 79]
                ]
            ];
            echo $students[0]['name']; // Affiche 'Alice'
            echo $students[1]['grades'][1]; // Affiche 88
            
            // Tableaux Numériques avec des Indices Personnalisés
            $customIndexedArray = [
                10 => 'apple',
                20 => 'banana',
                30 => 'cherry'
            ];
            echo $customIndexedArray[10]; // Affiche 'apple'
            echo $customIndexedArray[30]; // Affiche 'cherry'
            
            // Tableaux Multidimensionnels Associatifs et Numériques Combinés
            $data = [
                'students' => [
                    'class1' => [
                        'names' => ['Alice', 'Bob', 'Charlie'],
                        'ages' => [20, 21, 22]
                    ],
                    'class2' => [
                        'names' => ['David', 'Eve', 'Frank'],
                        'ages' => [23, 24, 25]
                    ]
                ]
            ];         
            echo $data['students']['class1']['names'][0]; // Affiche 'Alice'
            echo $data['students']['class2']['ages'][1]; // Affiche 24 
            
            //IMBRICATION DE LA BOUCLE FOREACH DANS DES TABLEAUX MULTIDIMENSIONNELS
            echo"<br>";
            $recipes = [
                [
                    'title' => 'Poulet au curry',
                    'author' => 'Patos'
                ],
                [
                    'title' => 'Boeuf bourguignon',
                    'author' => 'Ousman'
                ],
                [
                    'title' => 'Les lasagnes',
                    'author' => 'Alexia'
                ]
            ];

            // Premier foreach pour itérer sur chaque recette
            foreach ($recipes as $recipe) {
                echo "Recette :<br>";
                
                // Deuxième foreach pour itérer sur chaque clé-valeur de la recette
                foreach ($recipe as $key => $value) {
                    echo " - " . ucfirst($key) . ": " . $value . "<br>";
                }
                echo "<br>";
            }
            
            echo"<br>";
            $number = 1;
            foreach ($recipes as $recipe) {
                $numberRecipe = $number++;
                echo $numberRecipe. ". Voici ma recette ". $numberRecipe . " = <br>";

                    foreach ($recipe as $key => $value) {
                        echo " - $key : $value <br>";
                    }
                echo"<br>";
            }

            // IMBRICATION DE LA BOUCLE FOREACH DANS DES TABLEAUX MULTIDIMENSIONNELS COMPLEXE
            $school = [

                'students' => [
                    [
                        'name' => 'Alice',
                        'age' => 17,
                        'classes' => [
                            [
                                'courseName' => 'Math',
                                'teacher' => 'Mr. Smith',
                                'grades' => [90, 85, 88]
                            ],
                            [
                                'courseName' => 'English',
                                'teacher' => 'Mrs. Johnson',
                                'grades' => [80, 87, 85]
                            ]
                        ]
                    ],
                    [
                        'name' => 'Bob',
                        'age' => 18,
                        'classes' => [
                            [
                                'courseName' => 'Science',
                                'teacher' => 'Dr. Brown',
                                'grades' => [78, 82, 85]
                            ],
                            [
                                'courseName' => 'History',
                                'teacher' => 'Mr. Green',
                                'grades' => [88, 89, 92]
                            ]
                        ]
                    ]
                ],

                'teachers' => [
                    [
                        'name' => 'Mr. Smith',
                        'subject' => 'Math',
                        'students' => ['Alice', 'Charlie']
                    ],
                    [
                        'name' => 'Mrs. Johnson',
                        'subject' => 'English',
                        'students' => ['Alice', 'David']
                    ],
                    [
                        'name' => 'Dr. Brown',
                        'subject' => 'Science',
                        'students' => ['Bob']
                    ],
                    [
                        'name' => 'Mr. Green',
                        'subject' => 'History',
                        'students' => ['Bob']
                    ]
                ]
            ];
            // Afficher les informations des étudiants
            foreach ($school['students'] as $student) {
                echo "Student: " . $student['name'] . " (Age: " . $student['age'] . ")<br>";
                foreach ($student['classes'] as $class) {
                    echo " - Course: " . $class['courseName'] . " (Teacher: " . $class['teacher'] . ")<br>";
                    echo "   Grades: " . implode(', ', $class['grades']) . "<br>";
                }
                echo "<br>";
            }
            
            // Afficher les informations des enseignants
            foreach ($school['teachers'] as $teacher) {
                echo "Teacher: " . $teacher['name'] . " (Subject: " . $teacher['subject'] . ")<br>";
                echo " - Students: " . implode(', ', $teacher['students']) . "<br><br>";
            }

            //FAIRE DES RECHERCHES DANS UN TABLEAU

            //Rechercher une valeur avec la fonction in_array()
            $array = ['apple', 'banana', 'cherry'];
            if (in_array('banana', $array)) {
                echo "Banana is in the array";
            }

            //Rechercher une valeur et retourner la clé avec la fonction array_search()
            $users = [
                'Mathieu Nebra',
                'Mickaël Andrieu',
                'Laurène Castor',
            ];
            $positionMathieu = array_search('Mathieu Nebra', $users);
            echo '"Mathieu" se trouve en position ' . $positionMathieu . PHP_EOL;
            
            $positionLaurène = array_search('Laurène Castor', $users);
            echo '"Laurène" se trouve en position ' . $positionLaurène . PHP_EOL;

            //Rechercher une clé avec la fonction in_array()
            $recipe3 = [
                'title' => 'Salade Romaine',
                'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
                'author' => 'laurene.castor@exemple.com',
            ];
            
            if (array_key_exists('title', $recipe3))
            {
                echo 'La clé "title" se trouve dans la recette !';
            }
            
            if (array_key_exists('commentaires', $recipe3))
            {
                echo 'La clé "commentaires" se trouve dans la recette !';
            }
        ?>
        ?>
<!------------------------------------------------------------------------------------>
    <h2 style="color:crimson"> Travail du 02 juillet 2024 </h2>
        <?php
            //NOTION DE TABLEAU EN PHP

            $user1 = ['Mickaël Andrieu', 'email', 'S3cr3t', 34];
            echo $user1[0]."<br>"; // "Mickaël Andrieu"
            echo $user1[1]."<br>"; // "email"
            echo $user1[3]."<br><br>"; // 34

            $mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34, 65.4];
            $mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
            $laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];
            $users = [$mickael, $mathieu, $laurene];
            echo $users[2][3]."<br>";

            //METHODES D'AFFICHAGE DU CONTENU D'UN TABLEAU

            // Utiliser print_r pour afficher le tableau sans la balise <pre>
            echo "<h4>Utiliser print_r pour afficher le tableau sans  la balise pre </h4>";
            echo print_r($mickael)."<br><br>"; 

            // Utiliser print_r pour afficher le tableau avec  la balise <pre>
            echo "<h4>Utiliser print_r pour afficher le tableau avec  la balise pre </h4>";
            echo "<pre>";
            print_r($mickael);
            echo "</pre>";

            // Utiliser var_dump pour afficher le tableau sans la balise <pre>
            echo "<h4>Utiliser var_dump pour afficher le tableau sans  la balise pre </h4>";
            echo var_dump($mickael)."<br><br>";

            // Utiliser var_dump pour afficher le tableau avec la balise <pre>
            echo "<h4>Utiliser var_dump pour afficher le tableau avec la balise pre </h4>";
            echo "<pre>";
            var_dump($mickael);
            echo "</pre>";

            // Utiliser var_export pour afficher le tableau sans la balise <pre>
            echo "<h4>Utiliser var_export pour afficher le tableau sans  la balise pre </h4>";
            echo var_export($mickael)."<br><br>"; 

            // Utiliser var_export pour afficher le tableau avec la balise <pre>
            echo "<h4>Utiliser var_export pour afficher le tableau avec  la balise pre </h4>";
            echo "<pre>";
            var_export($mickael);
            echo "</pre>";

            // Utiliser implode pour afficher le tableau sans la balise <pre>
            echo "<h4>Utiliser implode pour afficher le tableau sans  la balise pre </h4>";
            echo implode(" ; ", $mickael);
            // Utiliser implode pour afficher le tableau avec la balise <pre>
            echo "<h4>Utiliser implode pour afficher le tableau avec  la balise pre </h4>";
            echo "<pre>";
            echo implode(" ; ", $mickael);
            echo "</pre>";

            //Itérer sur un tableau des tableaux
            $users = [
                [
                    'full_name' => 'Mickaël Andrieu',
                    'email' => 'mickael.andrieu@exemple.com',
                    'age' => 34,
                ],
                [
                    'full_name' => 'Mathieu Nebra',
                    'email' => 'mathieu.nebra@exemple.com',
                    'age' => 34,
                ],
                [
                    'full_name' => 'Laurène Castor',
                    'email' => 'laurene.castor@exemple.com',
                    'age' => 28,
                ],
            ];
            $lines = 3; // nombre d'utilisateurs dans le tableau
            $counter = 0;
            while ($counter < $lines) {
                echo $users[$counter]['full_name'] . ' =>' . $users[$counter]['email'] . ' =>' .$users[$counter]['age'].' years old'.'<br />';
                $counter++;
            }   

            //Itérer sur un tableau des tableaux : Tableau des utilisateurs
            $users = [
                [
                    'full_name' => 'Mickaël Andrieu',
                    'email' => 'mickael.andrieu@exemple.com',
                    'age' => 34,
                ],
                [
                    'full_name' => 'Mathieu Nebra',
                    'email' => 'mathieu.nebra@exemple.com',
                    'age' => 34,
                ],
                [
                    'full_name' => 'Laurène Castor',
                    'email' => 'laurene.castor@exemple.com',
                    'age' => 28,
                ],
            ];

            $lines = count($users); // nombre d'utilisateurs dans le tableau
            $counter = 0;
            while ($counter < $lines) {
                echo $users[$counter]['full_name'] . ' =>' . $users[$counter]['email'] . ' =>' .$users[$counter]['age'].' years old'.'<br />';
                $counter++;
            } 
            echo "<br><br>";

            //Tableaux des recettes et son affichage
            $recipes = [
                [
                    'title' => 'Poulet au cury',
                    'author' =>'Patos'
                ],
                [
                    'title'=> 'Boeuf bourgignon',
                    'author' =>'Ousman'
                ],
                [
                    'title'=> 'Les lasagnes',
                    'author'=> 'Alexia'
                ],
                [
                    'title'=> 'Poulet au curry',
                    'author'=> 'Garcin'
                ],
            ];

            $length = count($recipes);
            $counter1 = 0;
            $number = 1;
            for ($counter1=0; $counter1 < $length; $counter1++) {
                $numberRecipe = $number++;
                echo $numberRecipe .". Recette : " . $recipes[$counter1]['title'] . " || Auteur : ". $recipes[$counter1]['author']. "<br>";
            } 

            //Itération avec la boucle foreach avec clé
            echo "<br><br>";
            $number = 1;
            foreach ($recipes as $cle => $property) {
                $numberRecipe = $number++;
                echo $numberRecipe . ". Recette : " . $property['title'] . " || Auteur : ". $property['author']. "<br>". " <p style=\"margin-left: 50px;\">" . "Et voilà la clé " . $cle . "</p><br><br>";
            }

            //Itération avec la boucle foreach sans clé
            $number = 1;
            foreach ($recipes as $recipe) {
                $numberRecipe = $number++;
                echo $numberRecipe . ". Je vous présente une recette « ". $recipe['title'] ." ». Elle a été réalisé par « " . $recipe['author'] . " ». <br><br>";
            }
        ?>
<!-------------------------------------------------------------------------------------->
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

           // Les comparaisons avec conditions multiples
           $isEnabled = true;
           $isOwner = false;
           if ($isEnabled && $isOwner) {
               echo 'Accès à la recette validé ✅';
           } else {
               echo 'Accès à la recette interdit ! ❌';
           }

           $isEnabled = true;
           $isOwner = false;
           $isAdmin = true;
           if (($isEnabled && $isOwner) || $isAdmin) {
               echo 'Accès à la recette validé ✅';
           } else {
               echo 'Accès à la recette interdit ! ❌';
           }
        ?>
        <!--La syntaxe alternative des conditions et boucles -->
        <?php $chickenRecipesEnabled = true; ?>

        <?php if ($chickenRecipesEnabled): ?> <!-- Ne pas oublier le ":" -->
            <h4>Liste des recettes à base de poulet</h4>
        <?php endif; ?> <!-- Ni le ";" après le endif -->

        <?php $recipes = ['Poulet rôti', 'Poulet curry', 'Poulet basquaise']; ?>
        <ul>
            <?php foreach ($recipes as $recipe): ?>
                <li><?php echo $recipe; ?></li>
            <?php endforeach; ?>
        </ul>


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
