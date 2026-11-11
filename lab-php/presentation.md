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

# PHP: Three Useful Concepts

### Errors and Exceptions · Namespaces · Traits

**Student:** Badreddine Hammam<br>
**Instructor:** Fouad ES-SARRAJ<br>
**Date:** 11/11/2026

<!--
Speaker note: Introduce the lab topic and the three concepts covered.
The presenter details have already been filled in.
-->

---

# Agenda

1. Context and technical stack
2. Definitions and learning objectives
3. Three runnable examples
4. Deliverables and verification

<!--
Speaker note: Outline the presentation and connect each concept to a PHP example.
Clarify that the scripts are standalone exercises.
-->

---

# Technical Context

- Reference project: the repository's Laravel application
- Declared versions: PHP `^8.1` · Laravel `^10.10`
- Composer maps `App\` to `app/` (PSR-4)
- The exercises use standalone PHP and keep data in memory
- They are not integrated with the application or its database

<!--
Speaker note: The versions come from the application's composer.json.
The examples remain independent so they can be run separately.
-->

---

# The Three Concepts

- **Exception**: an object that signals an unusual condition the code can handle.
- **Namespace**: a name that organizes and distinguishes classes.
- **Trait**: a set of methods reusable across multiple classes.
- Each tool structures code and behavior in a different way.

<!--
Speaker note: Define the terms before the demonstrations.
A trait is not a class, and not every PHP error is an exception.
-->

---

# Learning Goal

- The lab asks learners to research, understand, and test new concepts.
- The brief does not describe a real bug encountered in the application.
- The examples therefore use a **simulated** task-management scenario.
- Do not present this simulation as an implemented feature.

<!--
Speaker note: Distinguish the lab's learning goal from a real project problem.
Task management is the demonstration context, not an integration.
-->

---

# Exceptions · Rejecting an Empty Title

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

**Observed result:** the first task is created; the empty title is handled.

<!--
Speaker note: trim removes whitespace before validation.
throw interrupts the normal flow, and the matching catch displays the message.
-->

---

# Namespaces · Distinguishing Two `Item` Classes

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

The fully qualified names are different:<br>
`LabPhp\Catalog\Item` and `LabPhp\Inventory\Item`.

<!--
Speaker note: Both classes can share the short name Item.
In the application, App\Models\Item follows the project's PSR-4 mapping.
-->

---

# Traits · Sharing Activity Logging

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

**Observed result:** both classes have access to `logActivity()`.

<!--
Speaker note: The trait avoids duplicating the method.
The application's User model also uses Laravel traits such as Notifiable.
-->

---

# Quick Start · Run the Examples

From the repository root:

```powershell
php .\lab-php\pratique\erreurs-exceptions\exemple.php
php .\lab-php\pratique\namespaces\exemple.php
php .\lab-php\pratique\traits\exemple.php
```

Each script prints its expected output in the terminal.

<!--
Speaker note: These commands use the PHP CLI and paths relative to the repository root.
Each example is standalone and requires neither a database nor dependencies.
-->

---

# Deliverables and Verification

- Three PHP scripts and three tutorials in `lab-php/pratique/`
- A README with the startup commands
- Check syntax with `php -l` on each `exemple.php` file
- Compare the output with the results listed in the tutorials
- Slides: `lab-php/presentation.md`

<!--
Speaker note: The tutorials explain the code, output, and limitations.
Syntax validation checks the PHP files; it does not verify application integration.
-->
