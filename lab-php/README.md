# Lab PHP — notions complémentaires

## Objectif

Découvrir trois notions PHP, les expliquer et les tester à travers un exemple
autonome inspiré de la gestion de projets et de tâches :

- **Erreurs et exceptions** : signaler une donnée invalide et traiter le cas à
  l'endroit approprié.
- **Namespaces** : organiser les classes et distinguer des classes qui portent
  le même nom.
- **Traits** : partager un comportement commun entre plusieurs classes.

Les scripts sont des démonstrations autonomes en mémoire. Ils ne sont pas
intégrés à l'application Laravel [my-laravel-app](../my-laravel-app). Celle-ci
déclare PHP `^8.1`, Laravel `^10.10` et le mapping Composer `App\` vers `app/`
dans son `composer.json`. Les exemples utilisent une syntaxe compatible avec
PHP 8.1 et ne nécessitent ni Composer ni base de données.

## Démarrage rapide

Depuis la racine du dépôt, exécuter chaque exemple :

```powershell
php .\lab-php\pratique\erreurs-exceptions\exemple.php
php .\lab-php\pratique\namespaces\exemple.php
php .\lab-php\pratique\traits\exemple.php
```

Les commandes affichent le résultat attendu directement dans le terminal.
Chaque fichier `tutoriel.md` détaille le code, la sortie, le lien avec
l'architecture du projet et une limite ou une piste d'évolution.

Sur l'environnement de travail actuel, le CLI PHP affiche aussi des
avertissements de configuration (`php_xml.dll` et `php_bcmath.dll` introuvables,
`zip` chargé deux fois). Ils précèdent la sortie des exemples et ne sont pas
causés par le code du lab.

| Notion | Exemple exécutable | Tutoriel |
|---|---|---|
| Erreurs et exceptions | [exemple.php](pratique/erreurs-exceptions/exemple.php) | [tutoriel.md](pratique/erreurs-exceptions/tutoriel.md) |
| Namespace | [exemple.php](pratique/namespaces/exemple.php) | [tutoriel.md](pratique/namespaces/tutoriel.md) |
| Trait | [exemple.php](pratique/traits/exemple.php) | [tutoriel.md](pratique/traits/tutoriel.md) |

## Présentation

Le support [presentation.md](presentation.md) est une présentation Marp en
français. Remplacer les champs d'identification par les informations réelles
avant de présenter.
