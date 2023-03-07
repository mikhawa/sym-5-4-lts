# sym-5-4-lts

## Installation

Installation de la dernière version de `Symfony LTS` en date du `2023-03-07` sous Windows avec Wamp

### Chargement du fichier binaire

On peut le trouver à cette adresse:

https://symfony.com/download

### Environnement

Après installation et vérification que PHP 8.* est activé en tappant cette commande dans un bash (voir ajouter PHP dans les variables d'environnement) :

    php -v

On va vérifier qu'on a tout ce qu'il nous faut pour travailler :

    symfony check:requirements

### Création du projet

On va regarder sur le site de Symfony le `Long-Term Support Release` ou `LTS` à cette adresse :

https://symfony.com/releases

Pour le moment il s'agit de la version 5.4.* maintenue jusque fin 2026

Pour créer le projet :

    symfony new SymfonyProject --version=lts
    