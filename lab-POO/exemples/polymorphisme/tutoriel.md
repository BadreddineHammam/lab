# Polymorphisme

## Objectif

Appeler la même méthode sur des objets différents et laisser chaque classe
fournir le comportement qui lui convient.

## Fichiers et exécution

- Script : [exemple.php](exemple.php)
- Commande depuis la racine du dépôt :
  `php .\lab-POO\exemples\polymorphisme\exemple.php`
- Sortie observée après exécution :

```text
Formation : PHP
Produit : Clavier
```

## Lecture du code

1. `CategoryInterface` garantit que chaque catégorie possède `getDetails()`.
2. `CourseCategory` et `ProductCategory` implémentent la même méthode, mais
   retournent des textes différents.
3. `displayCategory(CategoryInterface $category)` accepte tout objet qui
   respecte le contrat.
4. À chaque appel, PHP exécute la version de `getDetails()` de la classe réelle
   de l’objet reçu.
5. Les deux appels partagent la même fonction d’affichage, avec des résultats
   adaptés au type de catégorie.

## Lien avec le projet

La démonstration reprend les deux types de
[catégories concrètes](../../../project_1/OOP-Lab/Classes/) du projet. Dans son
[gestionnaire](../../../project_1/OOP-Lab/Core/CategoryManager.php), les détails
sont également affichés en parcourant les catégories.

## Limite ou extension

Le comportement partagé ne fonctionne que si chaque classe respecte le même
contrat ; un type de retour ou une méthode incompatible empêche l’implémentation
correcte de l’interface.

## Référence PHP

[Interfaces objet](https://www.php.net/manual/fr/language.oop5.interfaces.php)
