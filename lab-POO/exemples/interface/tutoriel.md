# Interface

## Objectif

Définir les méthodes qu’une classe de catégorie doit fournir, sans imposer la
façon dont elle les réalise.

## Fichiers et exécution

- Script : [exemple.php](exemple.php)
- Commande depuis la racine du dépôt :
  `php .\lab-POO\exemples\interface\exemple.php`
- Sortie observée après exécution :

```text
Formation : PHP
```

## Lecture du code

1. `CategoryInterface` déclare les méthodes publiques `getName()` et
   `getDetails()`, ainsi que leurs types de retour.
2. `CourseCategory implements CategoryInterface` annonce qu’elle respecte ce
   contrat.
3. La classe fournit les deux méthodes demandées ; ici le détail est construit
   à partir du nom de la formation.
4. Le script crée une instance et appelle `getDetails()` pour rendre le contrat
   visible dans la sortie.

## Lien avec le projet

Le contrat est inspiré de
[CategoryInterface](../../../project_1/OOP-Lab/Interfaces/CategoryInterface.php)
du projet de catégories. L’exemple demeure autonome et ne charge pas
l’application.

## Limite ou extension

Une interface décrit les méthodes attendues, mais ne stocke pas l’état partagé
et ne fournit pas leur implémentation.

## Référence PHP

[Interfaces objet](https://www.php.net/manual/fr/language.oop5.interfaces.php)
