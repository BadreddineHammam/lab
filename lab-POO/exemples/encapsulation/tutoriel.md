# Encapsulation

## Objectif

Protéger l’état d’un objet en contrôlant comment ses données sont lues ou
modifiées.

## Fichiers et exécution

- Script : [exemple.php](exemple.php)
- Commande depuis la racine du dépôt :
  `php .\lab-POO\exemples\encapsulation\exemple.php`
- Sortie observée après exécution :

```text
Nom : PHP
Nouveau nom : POO
```

## Lecture du code

1. La propriété promue `private string $name` appartient à l’objet et n’est pas
   accessible directement depuis le code extérieur.
2. Le constructeur normalise le nom avec `trim()` au moment de créer l’objet.
3. `getName()` fournit une lecture contrôlée de la valeur.
4. `rename()` fournit un point de modification explicite ; le script lui passe
   `POO`.
5. La sortie montre le nom normalisé, puis la nouvelle valeur.

## Lien avec le projet

Le modèle reprend les propriétés privées et les accesseurs de
[AbstractCategory](../../../project_1/OOP-Lab/Classes/AbstractCategory.php).
L’exemple illustre le principe de contrôle d’accès ; il n’ajoute pas de
validation métier au projet existant.

## Limite ou extension

Ici, `rename()` normalise le texte mais n’interdit pas un nom vide. Une règle de
validation supplémentaire pourrait être ajoutée selon les besoins du projet.

## Référence PHP

[Visibilité des propriétés et méthodes](https://www.php.net/manual/fr/language.oop5.visibility.php)
