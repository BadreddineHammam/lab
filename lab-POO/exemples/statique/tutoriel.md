# Propriétés et méthodes statiques

## Objectif

Partager une donnée ou appeler une méthode au niveau de la classe plutôt qu’au
niveau d’une instance particulière.

## Fichiers et exécution

- Script : [exemple.php](exemple.php)
- Commande depuis la racine du dépôt :
  `php .\lab-POO\exemples\statique\exemple.php`
- Sortie observée après exécution :

```text
Total de catégories : 2
```

## Lecture du code

1. `$categories` est une propriété d’instance : chaque gestionnaire garde sa
   propre liste.
2. `static $totalCategories` appartient à la classe et est partagé par ses
   instances durant l’exécution du script.
3. `addCategory()` ajoute une valeur à l’instance courante puis incrémente la
   propriété partagée avec `self::$totalCategories`.
4. Deux gestionnaires ajoutent chacun une catégorie ; la méthode statique
   `getTotalCategories()` lit le total avec
   `CategoryManager::getTotalCategories()`.

## Lien avec le projet

Cet exemple reprend le compteur statique du
[CategoryManager](../../../project_1/OOP-Lab/Core/CategoryManager.php). La
portée du compteur est limitée à l’exécution PHP courante, pas à une base de
données ni aux requêtes futures.

## Limite ou extension

Un compteur statique n’est pas un stockage persistant. Une application réelle
doit utiliser une source de données si le total doit survivre à la fin de la
requête.

## Référence PHP

[Membres statiques](https://www.php.net/manual/fr/language.oop5.static.php)
