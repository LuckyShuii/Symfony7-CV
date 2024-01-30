# Symfony 7 Learning Project

Bienvenue dans mon projet d'apprentissage Symfony 7 ! Ce projet a été créé pour démontrer mes compétences en développement tout en explorant les fonctionnalités les plus récentes de Symfony.

## Technologies utilisées

- Symfony 7
- NoSQL (JSON)
- AssetMapper
- Tailwind CSS
- Bibliothèque HyperUI

## Objectif du projet

L'objectif principal de ce projet est de mettre en pratique mes connaissances nouvellement acquises en Symfony 7. J'ai choisi d'explorer diverses technologies complémentaires telles que NoSQL, AssetMapper, Tailwind CSS et HyperUI pour enrichir l'expérience de développement.

## Configuration du projet

1. **Installation des dépendances**
   ```bash
   composer install
   ```

2. **Configuration de la base de données**
    ```bash
    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate
    ```

3. **Lancement du serveur local**
    ```bash
    symfony server:start
    ```
