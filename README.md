# sym-5-4-lts

## Menu
* [Installation](#installation)
    * [Chargement du fichier binaire](#chargement-du-fichier-binaire)
    * [Environnement](#environnement)
    * [Création du projet](#création-du-projet)

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

Ils permettent d'exécuter des commandes rapidement

* [Retour au menu](#menu)