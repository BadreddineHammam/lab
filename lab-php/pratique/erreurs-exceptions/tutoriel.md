# Tutoriel — erreurs et exceptions

## Objectif

Refuser un titre de tâche vide et traiter proprement cette situation. Cet
exemple en mémoire est autonome ; il ne modifie pas les données de l'application
Laravel.

## Fichier et exécution

Fichier : [exemple.php](exemple.php)

Depuis la racine du dépôt :

```powershell
php .\lab-php\pratique\erreurs-exceptions\exemple.php
```

Sortie attendue :

```text
Tâche créée : Préparer la présentation PHP
Erreur traitée : Le titre de la tâche ne peut pas être vide.
Fin de la démonstration.
```

## Parcours du code

1. `declare(strict_types=1)` active les vérifications strictes des types pour
   les appels faits depuis ce fichier.
2. `TaskException` hérite de `InvalidArgumentException` : elle identifie le cas
   précis d'un titre invalide et reste une exception d'argument standard PHP.
3. `TaskService::create(string $title): string` reçoit une chaîne et retourne
   le message de confirmation si le titre, après `trim`, n'est pas vide.
4. `throw` signale le cas invalide en lançant `TaskException`. L'exécution
   quitte alors `create` et passe au `catch` correspondant.
5. `try` regroupe les opérations susceptibles d'échouer ; `catch` affiche un
   message adapté au cas métier attendu.
6. `finally` s'exécute après le traitement, que l'opération ait réussi ou
   déclenché l'exception.

Une exception est un mécanisme contrôlé de signalement et de traitement. Elle
ne représente pas toutes les erreurs PHP : les erreurs du moteur ont leur
propre hiérarchie. Il vaut mieux attraper l'exception attendue plutôt que
d'intercepter indistinctement tous les problèmes.

## Lien avec l'architecture du projet

Dans une application Laravel, un contrôleur ou un service peut recevoir et
valider une entrée, puis laisser le framework transformer le résultat en
réponse HTTP appropriée. Ici, le bloc `try/catch` joue simplement le rôle d'une
frontière observable pour apprendre le mécanisme ; ce code n'est pas branché à
une route ni au modèle `Item` de l'application.

## Limite et évolution

La démonstration conserve tout en mémoire et ne valide que le titre. Une
évolution serait d'ajouter des règles métier supplémentaires ou un test
automatisé, puis de laisser la couche HTTP de Laravel présenter l'erreur à
l'utilisateur.
