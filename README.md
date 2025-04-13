# Validation de Données avec PHP

Ce projet fournit une série de validateurs PHP pour vérifier la validité des données saisies dans des formulaires ou d'autres sources.

## Installation

1.  **Installation de Composer :**

    * Téléchargez et installez Composer depuis [getcomposer.org](https://getcomposer.org/download/).

2.  **Création du projet (si nécessaire) :**

    * Créez un répertoire pour votre projet.
    * Naviguez vers ce répertoire dans votre terminal.
    * Exécutez `composer init` et suivez les instructions.

3.  **Installation de PHPUnit :**

    * Exécutez `composer require --dev phpunit/phpunit` pour installer PHPUnit comme dépendance de développement.

## Structure du Projet

td8/
├── composer.json
├── composer.lock
├── vendor/
│   └── bin/
│       └── phpunit
├── src/
│   └── Validators/
│       ├── EstUnEmail.php
│       ├── LongueurMax.php
│       ├── ... (Autres validateurs)
├── tests/
│   └── Validators/
│       ├── EstUnEmailTest.php
│       ├── LongueurMaxTest.php
│       ├── ... (Tests des validateurs)
├── public/
│   └── forms/
│       ├── exemple_email.php
│       ├── exemple_longueur_max.php
│       ├── ... (Exemples d'utilisation)
├── phpunit.xml
└── README.md


## Validateurs Disponibles

* `EstUnEmail` : Vérifie si une chaîne est une adresse email valide.
* `LongueurMax(valeur)` : Vérifie si une chaîne a une longueur inférieure ou égale à la valeur spécifiée.
* `LongueurMin(valeur)` : Vérifie si une chaîne a une longueur supérieure ou égale à la valeur spécifiée.
* `EstUnEntier` : Vérifie si une valeur est un entier.
* `EstUnReel` : Vérifie si une valeur est un nombre réel.
* `EstDuTexte` : Vérifie si une valeur est une chaîne de caractères.
* `EstUneUrl` : Vérifie si une chaîne est une URL valide.
* ... (Ajoutez les autres validateurs que vous avez implémentés)

## Utilisation

1.  **Inclure le validateur :**

    * Dans votre code PHP, incluez le fichier du validateur souhaité :

    ```php
    require_once __DIR__ . '/../vendor/autoload.php';

    use App\Validators\NomDuValidateur;
    ```

2.  **Utiliser le validateur :**

    * Appelez la méthode `valider` du validateur avec la valeur à vérifier :

    ```php
    $valide = NomDuValidateur::valider($valeur, $paramètres);
    ```

    * Les paramètres varient en fonction du validateur.

3.  **Exemples :**

    * Consultez les fichiers `exemple_*.php` dans le répertoire `public/forms` pour des exemples d'utilisation.

## Tests Unitaires

1.  **Exécuter les tests :**

    * Depuis la racine du projet, exécutez `vendor/bin/phpunit`.

2.  **Rapport de couverture :**

    * Pour générer un rapport de couverture, exécutez `vendor/bin/phpunit --coverage-html coverage`.
    * Ouvrez `coverage/index.html` dans votre navigateur.

3.  **Tests spécifiques :**

    * Pour exécuter un test spécifique, utilisez le nom de la classe de test, comme ceci :

    ```bash
    vendor/bin/phpunit tests/Validators/EstUnEmailTest.php
    ```

## Dépôt sur GitHub

1.  **Créer un dépôt :**

    * Créez un dépôt sur GitHub.

2.  **Initialiser Git :**

    * Dans votre terminal, naviguez vers le répertoire du projet et exécutez `git init`.

3.  **Ajouter et commiter les fichiers :**

    * Exécutez `git add .` et `git commit -m "Initial commit"`.

4.  **Lier et pousser le dépôt :**

    * Exécutez `git remote add origin <URL_du_dépôt>` et `git push -u origin master`.

## Conventions de Codage

* Respectez les conventions de codage de votre équipe.
* Documentez le code avec des commentaires clairs.
* Écrivez des tests unitaires complets.

## Collaboration

* Communiquez avec les autres membres de l'équipe.
* Effectuez des revues de code.
* Partagez vos connaissances et expériences.

Ce README fournit une vue d'ensemble du projet, de son installation à son utilisation et à sa contribution. N'hésitez pas à le modifier et à l'enrichir selon les besoins de votre projet.

# Validation de Données avec PHP

Ce projet fournit une série de validateurs PHP pour vérifier la validité des données saisies dans des formulaires ou d'autres sources.

## Licence

Ce projet est sous licence [MIT](https://opensource.org/licenses/MIT).

## Auteurs

- **Votre Nom** : Créateur principal du projet.
- **Collaborateurs** : Listez les autres contributeurs si applicable.

## Commandes Git Utilisées

Voici les commandes Git que j'ai utilisées pour gérer ce projet :

* **Initialiser un dépôt Git :**

    ```bash
    git init
    ```

* **Ajouter tous les fichiers au dépôt :**

    ```bash
    git add .
    ```

* **Effectuer un commit avec un message :**

    ```bash
    git commit -m "Message de commit"
    ```

* **Lier le dépôt local à un dépôt distant :**

    ```bash
    git remote add origin <URL_du_dépôt>
    ```

* **Pousser les commits vers le dépôt distant :**

    ```bash
    git push -u origin master
    ```

* **Créer une nouvelle branche :**

    ```bash
    git branch nom-de-la-branche
    ```

* **Changer de branche :**

    ```bash
    git checkout nom-de-la-branche
    ```

* **Fusionner une branche dans la branche actuelle :**

    ```bash
    git merge nom-de-la-branche
    ```

* **Afficher l'historique des commits :**

    ```bash
    git log
    ```

* **Afficher les modifications non commitées :**

    ```bash
    git status
    ```

**Conseils supplémentaires :**

* Si vous avez utilisé des fonctionnalités Git avancées, comme les tags ou les sous-modules, n'hésitez pas à les inclure dans votre documentation.
* Vous pouvez également ajouter des exemples de commandes Git spécifiques à votre projet, par exemple pour exécuter les tests ou déployer l'application.

En ajoutant les commandes Git utilisées, vous rendrez votre `README.md` encore plus complet et utile pour les autres développeurs.