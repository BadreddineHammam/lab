# Héritage

## Objectif

Réutiliser dans une classe spécialisée une méthode définie dans une classe
parent.

## Fichiers et exécution

- Script : [exemple.php](exemple.php)
- Commande depuis la racine du dépôt :
  `php .\lab-POO\exemples\heritage\exemple.php`
- Sortie observée après exécution :

```text
Formation : PHP
```

## Lecture du code

1. `Category` est la classe parent ; son constructeur initialise le nom privé.
2. `getName()` expose ce nom sans rendre la propriété directement accessible.
3. `CourseCategory extends Category` hérite du constructeur et de
   `getName()`.
4. `getDetails()` réutilise la méthode héritée pour présenter la formation.
5. La variable est une instance de `CourseCategory`, donc le code appelle sa
   méthode spécialisée.

## Lien avec le projet

La relation parent-enfant suit le modèle de
[CourseCategory](../../../project_1/OOP-Lab/Classes/CourseCategory.php) qui
hérite de la catégorie abstraite du projet. Ce petit script ne remplace ni ne
modifie ces classes.

## Limite ou extension

L’héritage est utile lorsqu’il existe une relation « est un type de catégorie ».
Pour partager seulement un contrat, une interface peut être plus adaptée.

## Référence PHP

[Héritage](https://www.php.net/manual/fr/language.oop5.inheritance.php)
