# sym-5-4-lts

## Menu
* [Installation](#installation)
    * [Chargement du fichier binaire](#chargement-du-fichier-binaire)
    * [Environnement](#environnement)
    * [Création du projet](#création-du-projet)
* [Lancement du serveur](#lancement-du-serveur)
* [Vue sur les makers](#vue-sur-les-makers)
    * [Création d'un contrôleur](#création-dun-contrôleur)

## Installation

Installation de la dernière version de `Symfony LTS` en date du `2023-03-07` sous Windows avec Wamp

### Chargement du fichier binaire

On peut le trouver à cette adresse:

https://symfony.com/download

Il faut l'installer soit avec le fichier binaire, soit  scoop,  soit avec composer :

https://symfony.com/doc/5.4/setup.html

### Environnement

Après installation et vérification que PHP 8.* est activé en tappant cette commande dans un bash (voir ajouter PHP dans les variables d'environnement) :

    php -v

Il faut vérifier également la présence de composer qui se trouve à cette adresse :

https://getcomposer.org/download/

On va vérifier qu'on a tout ce qu'il nous faut pour travailler :

    symfony check:requirements

* [Retour au menu](#menu)

### Création du projet

On va regarder sur le site de Symfony le `Long-Term Support Release` ou `LTS` à cette adresse :

https://symfony.com/releases

Pour le moment il s'agit de la version 5.4.* maintenue jusque fin 2026

Pour créer le projet :

    symfony new NomDuProjet --version=lts --webapp

puis accédez au dossier

    cd NomDuProjet

Dupliquez `.env` que vous renommez en `.env.local`, puis supprimez la APP_SECRET de `.env` (pas d'envoi via git)

    ###> symfony/framework-bundle ###
    APP_ENV=dev
    APP_SECRET=nothing
    ###< symfony/framework-bundle ###

* [Retour au menu](#menu)

### Lancement du serveur

Pour que https soit activé en local :

    symfony server:ca:install

Dans le dossier du projet :

    symfony server:start -d

L'adresse devrait ressembler à celle-ci :

https://127.0.0.1:8000/

Pour la sécurité il est toujours intéressant de la tester avec un :

    symfony check:security

        et / ou un

    composer update

* [Retour au menu](#menu)

## Vue sur les makers

Pour afficher les makers de base :

    php bin/console list make
    # ou
    symfony console list make

Ils permettent d'exécuter des commandes rapidement. Il peut y avoir plus de maker suivant les projets.

Pour voir toutes les commandes dipsonibles depuis la console :

    php bin/console
    # ou
    symfony console

* [Retour au menu](#menu)

### Création d'un contrôleur

Nous allons créer notre premier contrôleur avec maker en le nommant HomeController :

    symfony console make:controller

    # ou 

    php bin/console make:controller

2 fichiers sont créés, le premier dans les contrôleurs, le deuxième dans les templates (vues) :

    created: src/Controller/HomeController.php
    created: templates/home/index.html.twig

Le contrôleur créé rajoute un chemin vers `/home` et appel une vue en `twig` :

```php
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
```

On va changer la route pour que ça soit notre page d'accueil via l'attribut (depuis PHP 8) :

    #[Route('/', name: 'app_home')]

https://127.0.0.1:8000/


* [Retour au menu](#menu)