# Lab PHP — programmation orientée objet

## Besoin

Étudier et tester six notions de POO en PHP qui ne sont pas détaillées dans les
tutoriels précédents : classe abstraite, interface, héritage, polymorphisme,
encapsulation et éléments statiques.

Le fil conducteur est la gestion de catégories du projet
[project_1/OOP-Lab](../project_1/OOP-Lab/index.php). Les exemples de ce lab sont
des scripts autonomes inspirés de ses catégories Formation et Produit ; ils ne
modifient pas et ne sont pas intégrés à l'application.

## Objectifs et périmètre

À la fin du lab, l’apprenant doit pouvoir expliquer le rôle de chaque notion,
exécuter un exemple et relier son comportement à une classe de gestion de
catégories.

- **Prérequis :** bases de PHP, classes, objets, méthodes et terminal.
- **Environnement observé :** PHP CLI 8.1.34. Les exemples n’ont pas besoin de
  Composer, Laravel, base de données ou dépendance supplémentaire.
- **Hors périmètre :** transformer l’application du projet en fonctionnalité
  intégrée ou configurer une architecture de production.
- **Critères de réussite :** les six scripts passent `php -l`, s’exécutent et
  affichent les sorties documentées ; la présentation Marp décrit les mêmes
  exemples.

## Démarrage rapide

Depuis la racine du dépôt, exécuter un exemple :

```powershell
php .\lab-POO\exemples\classe-abstraite\exemple.php
```

Exécuter tous les exemples :

```powershell
Get-ChildItem .\lab-POO\exemples -Filter exemple.php -Recurse | ForEach-Object { php $_.FullName }
```

Vérifier la syntaxe de tous les exemples :

```powershell
Get-ChildItem .\lab-POO\exemples -Filter exemple.php -Recurse | ForEach-Object { php -l $_.FullName }
```

Chaque sous-dossier contient un script exécutable et son tutoriel détaillé.

| Notion | Exemple | Tutoriel |
|---|---|---|
| Classe abstraite | [exemple.php](exemples/classe-abstraite/exemple.php) | [tutoriel.md](exemples/classe-abstraite/tutoriel.md) |
| Interface | [exemple.php](exemples/interface/exemple.php) | [tutoriel.md](exemples/interface/tutoriel.md) |
| Héritage | [exemple.php](exemples/heritage/exemple.php) | [tutoriel.md](exemples/heritage/tutoriel.md) |
| Polymorphisme | [exemple.php](exemples/polymorphisme/exemple.php) | [tutoriel.md](exemples/polymorphisme/tutoriel.md) |
| Encapsulation | [exemple.php](exemples/encapsulation/exemple.php) | [tutoriel.md](exemples/encapsulation/tutoriel.md) |
| Éléments statiques | [exemple.php](exemples/statique/exemple.php) | [tutoriel.md](exemples/statique/tutoriel.md) |

## Présentation

La présentation en français est dans [presentation.md](presentation.md). Les
champs étudiant et encadrant sont à compléter avant la présentation.

## Sources de référence

Les définitions et comportements du langage sont vérifiables dans le manuel PHP :

- [Classes abstraites](https://www.php.net/manual/fr/language.oop5.abstract.php)
- [Interfaces objet](https://www.php.net/manual/fr/language.oop5.interfaces.php)
- [Héritage](https://www.php.net/manual/fr/language.oop5.inheritance.php)
- [Visibilité et encapsulation](https://www.php.net/manual/fr/language.oop5.visibility.php)
- [Membres statiques](https://www.php.net/manual/fr/language.oop5.static.php)

Le choix des catégories Formation et Produit est un scénario pédagogique fondé
sur [les exemples de l’OOP-Lab](../project_1/OOP-Lab/Classes/).
