# Classe abstraite

## Objectif

Créer un modèle commun pour des catégories sans permettre de construire
directement une catégorie générique.

## Fichiers et exécution

- Script : [exemple.php](exemple.php)
- Commande depuis la racine du dépôt :
  `php .\lab-POO\exemples\classe-abstraite\exemple.php`
- Sortie observée après exécution :

```text
Formation : PHP - Apprendre la programmation PHP
```

## Lecture du code

1. `abstract class AbstractCategory` définit une base qui ne peut pas être
   instanciée directement.
2. Son constructeur initialise le nom et la description, qui restent privés ;
   les méthodes protégées donnent accès à ces valeurs aux classes dérivées.
3. `abstract public function getDetails(): string` impose une méthode aux
   classes concrètes, sans choisir son implémentation.
4. `CourseCategory extends AbstractCategory` hérite des méthodes protégées et
   fournit sa propre version de `getDetails()`.
5. Le script construit une catégorie Formation et affiche le détail produit.

## Lien avec le projet

Le modèle reprend l’idée de
[AbstractCategory](../../../project_1/OOP-Lab/Classes/AbstractCategory.php),
dont héritent les catégories concrètes. Ce script est une démonstration
autonome, pas une modification du projet.

## Limite ou extension

Une classe abstraite ne peut pas être instanciée pour tester les valeurs
communes seule ; créer une catégorie concrète est nécessaire.

## Référence PHP

[Classes abstraites](https://www.php.net/manual/fr/language.oop5.abstract.php)
