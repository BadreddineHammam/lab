---
marp: true
theme: default
paginate: true
size: 16:9
backgroundColor: "#f7f9fc"
color: "#1f2933"
style: |
  section {
    font-family: "Segoe UI", Arial, sans-serif;
    font-size: 25px;
    padding: 46px 62px;
  }
  h1 { color: #155e75; }
  strong { color: #0e7490; }
  pre { font-size: 17px; }
---

<!-- _class: lead -->

# PHP : trois notions utiles

### Erreurs et exceptions · Namespaces · Traits

**Étudiant :** [Nom]<br>
**Formateur :** [Nom]<br>
**Date :** [Date]

<!--
Speaker note: Présenter le thème du lab et les trois notions abordées.
Remplacer les champs d'identification par les informations réelles.
-->

---

# Plan

1. Contexte et stack technique
2. Définitions et besoin d'apprentissage
3. Trois exemples exécutables
4. Livrables et vérifications

<!--
Speaker note: Annoncer le parcours en reliant chaque notion à un exemple PHP.
Préciser que les scripts sont des exercices autonomes.
-->

---

# Contexte technique

- Projet de référence : application Laravel du dépôt
- PHP déclaré : `^8.1` · Laravel : `^10.10`
- Composer mappe `App\` vers `app/` (PSR-4)
- Les exercices sont en PHP autonome et stockent tout en mémoire
- Ils ne sont pas intégrés à l'application ni à sa base de données

<!--
Speaker note: Les versions viennent du composer.json de l'application.
Les exemples restent indépendants afin de pouvoir les lancer séparément.
-->

---

# Les trois notions

- **Exception** : objet signalant un cas anormal que le code peut traiter.
- **Namespace** : nom qui organise et distingue les classes.
- **Trait** : bloc de méthodes réutilisable dans plusieurs classes.
- Ces outils structurent le code et son comportement, chacun à sa place.

<!--
Speaker note: Définir les mots avant la démonstration.
Un trait n'est pas une classe et une exception n'est pas chaque erreur PHP.
-->

---

# Besoin pédagogique

- Le lab demande de rechercher, comprendre et tester des notions nouvelles.
- Le brief ne décrit pas de bogue réel rencontré dans l'application.
- Les exemples utilisent donc un scénario **simulé** de gestion de tâches.
- Ne pas présenter cette simulation comme une fonctionnalité déjà livrée.

<!--
Speaker note: Distinguer le besoin du lab d'un problème réel du projet.
La gestion de tâches est le contexte de démonstration, pas une intégration.
-->

---

# Exceptions · refuser un titre vide

```php
public function create(string $title): string
{
    $normalizedTitle = trim($title);
    if ($normalizedTitle === '') {
        throw new TaskException('Le titre de la tâche ne peut pas être vide.');
    }
    return 'Tâche créée : ' . $normalizedTitle;
}

try {
    echo $taskService->create('Préparer la présentation PHP'), PHP_EOL;
    echo $taskService->create('   '), PHP_EOL;
} catch (TaskException $exception) {
    echo 'Erreur traitée : ' . $exception->getMessage(), PHP_EOL;
} finally {
    echo 'Fin de la démonstration.', PHP_EOL;
}
```

**Effet observé :** la première tâche est créée ; le titre vide est traité.

<!--
Speaker note: trim retire les espaces avant le contrôle.
throw interrompt le chemin normal et le catch correspondant affiche le message.
-->

---

# Namespaces · distinguer deux `Item`

```php
namespace LabPhp\Catalog {
    final class Item {}
}

namespace LabPhp\Inventory {
    final class Item {}
}

namespace {
    use LabPhp\Catalog\Item as CatalogItem;
    use LabPhp\Inventory\Item as InventoryItem;
}
```

Les noms complets sont différents :<br>
`LabPhp\Catalog\Item` et `LabPhp\Inventory\Item`.

<!--
Speaker note: Les deux classes peuvent partager le nom court Item.
Dans l'application, App\Models\Item suit le mapping PSR-4 du projet.
-->

---

# Trait · partager la journalisation

```php
trait ActivityLogger
{
    public function logActivity(string $message): void
    {
        echo 'Activité : ' . $message, PHP_EOL;
    }
}

final class Task
{
    use ActivityLogger;
}

final class Project
{
    use ActivityLogger;
}
```

**Effet observé :** les deux classes disposent de `logActivity()`.

<!--
Speaker note: Le trait évite de recopier la méthode.
Le modèle User de l'application utilise aussi des traits Laravel comme Notifiable.
-->

---

# Quick Start · lancer les exemples

Depuis la racine du dépôt :

```powershell
php .\lab-php\pratique\erreurs-exceptions\exemple.php
php .\lab-php\pratique\namespaces\exemple.php
php .\lab-php\pratique\traits\exemple.php
```

Chaque script affiche sa sortie attendue dans le terminal.

<!--
Speaker note: Ces commandes utilisent le PHP CLI et des chemins relatifs à la racine.
Chaque exemple est autonome et ne demande ni base de données ni dépendance.
-->

---

# Livrables et vérification

- Trois scripts PHP et trois tutoriels dans `lab-php/pratique/`
- Un README avec les commandes de démarrage
- Vérifier la syntaxe : `php -l` sur chaque fichier `exemple.php`
- Comparer les sorties aux résultats indiqués dans les tutoriels
- Support : `lab-php/presentation.md`

<!--
Speaker note: Les tutoriels expliquent le code, la sortie et les limites.
La validation vérifie la syntaxe PHP, pas une intégration à l'application.
-->
