# sym-5-4-lts

## Installation

Installation de la dernière version de `Symfony LTS` en date du `2023-03-07` sous Windows avec Wamp

### Chargement du fichier binaire

On peut le trouver à cette adresse:

https://symfony.com/download

### Environnement

Après installation et vérification que PHP 8.* est activé en tappant cette commande dans un bash (voir ajouter PHP dans les variables d'environnement) :

    php -v

Il faut vérifier également la présence de composer qui se trouve à cette adresse :

https://getcomposer.org/download/

On va vérifier qu'on a tout ce qu'il nous faut pour travailler :

    symfony check:requirements

### Création du projet

On va regarder sur le site de Symfony le `Long-Term Support Release` ou `LTS` à cette adresse :

https://symfony.com/releases

Pour le moment il s'agit de la version 5.4.* maintenue jusque fin 2026

Pour créer le projet :

    symfony new NomDuProjet --version=lts --webapp

puis accédez au dossier

    cd NomDuProjet

Dupliquez `.env` que vous renommez en `.env.local`, puis supprimez la APP_SECRET de `.env` (pas d'envoi via git)

### Lancement du serveur

Dans le dossier du projet :

    symfony server:start -d

L'adresse devrait ressembler à celle-ci :

https://127.0.0.1:8000/

