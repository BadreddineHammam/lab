# Tutoriel — traits

## Objectif

Partager la même méthode de journalisation entre une tâche et un projet sans
dupliquer son implémentation. L'exemple affiche les activités au terminal et
ne configure aucun journal Laravel.

## Fichier et exécution

Fichier : [exemple.php](exemple.php)

Depuis la racine du dépôt :

```powershell
php .\lab-php\pratique\traits\exemple.php
```

Sortie attendue :

```text
Tâche créée : Tester le lab
Activité : création de tâche
Projet créé : Gestion des tâches
Activité : création de projet
```

## Parcours du code

1. `trait ActivityLogger` définit `logActivity(string $message): void`, la
   méthode commune aux deux classes.
2. `use ActivityLogger` insère ce comportement dans `Task` puis dans `Project`.
   Chaque classe peut ainsi appeler `$this->logActivity(...)`.
3. `Task::create` et `Project::create` affichent d'abord leur résultat, puis
   tracent leur activité avec le même code partagé.
4. Les deux appels en bas du fichier rendent visible que le trait fonctionne
   pour les deux objets.

Un trait réutilise des méthodes dans une classe ; ce n'est ni une classe à
instancier ni une relation d'héritage.

## Lien avec l'architecture du projet

Le modèle `App\Models\User` du projet Laravel utilise déjà plusieurs traits
fournis par Laravel, dont `HasFactory` et `Notifiable`. Cela illustre l'usage
des traits dans le projet réel. `ActivityLogger`, `Task` et `Project` restent
des exemples indépendants et ne sont pas intégrés à l'application.

## Limite et évolution

Écrire dans le terminal convient à une démonstration, mais pas à un journal
applicatif en production. Une évolution serait d'utiliser le système de logs
de Laravel et de vérifier si ce comportement est réellement partagé ; si le
besoin devient plus configurable, un service injecté peut être préférable.
