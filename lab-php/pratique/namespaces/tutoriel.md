# Tutoriel — namespaces

## Objectif

Organiser les classes par domaine et permettre à deux classes de s'appeler
`Item` sans collision. L'exemple est autonome et ne déclare aucune classe dans
l'application Laravel.

## Fichier et exécution

Fichier : [exemple.php](exemple.php)

Depuis la racine du dépôt :

```powershell
php .\lab-php\pratique\namespaces\exemple.php
```

Sortie attendue :

```text
Élément du catalogue : Carnet de croquis
Élément du stock : Toile
```

## Parcours du code

1. `namespace LabPhp\Catalog` place une première classe `Item` dans l'espace
   de noms du catalogue.
2. `namespace LabPhp\Inventory` déclare une autre classe `Item`, cette fois
   pour le stock. Son nom complet diffère : `LabPhp\Inventory\Item`.
3. Dans l'espace global, `use ... as ...` importe chaque classe avec un alias
   lisible, `CatalogItem` et `InventoryItem`.
4. Chaque objet appelle sa propre méthode `label()`, ce qui rend visible la
   différence entre les deux classes.

Un nom de classe complet combine son namespace et le nom de la classe. Les
aliases `use` raccourcissent ce nom dans le fichier qui l'importe.

## Lien avec l'architecture du projet

L'application Laravel emploie déjà des namespaces : son modèle est
`App\Models\Item`, et `composer.json` associe le préfixe `App\` au dossier
`app/` grâce à l'autoload PSR-4. Le script de lab montre l'organisation
logique, mais reste volontairement autonome : il n'utilise pas l'autoloader
Composer et n'est pas une nouvelle classe de l'application.

## Limite et évolution

Les classes sont dans un seul fichier pour rendre l'exemple directement
exécutable. Dans un projet, on les répartirait généralement dans des fichiers
dont les chemins correspondent au mapping PSR-4, puis on utiliserait
l'autoloader Composer.
