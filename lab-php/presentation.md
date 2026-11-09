---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    box-sizing: border-box;
    padding: 46px 62px;
    font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif;
    background: #F8FAFC;
    color: #0F172A;
    font-size: 25px;
    line-height: 1.3;
  }
  h1 { color: #0F172A; font-size: 1.65em; border-bottom: 4px solid #14B8A6; padding-bottom: 0.18em; }
  h2 { color: #334155; font-size: 1.12em; }
  strong { color: #0F766E; }
  li { margin: 0.15em 0; }
  section.title { background: #0F172A; color: #F8FAFC; text-align: center; justify-content: center; }
  section.title h1 { color: #F8FAFC; border: 0; }
  section.title h2 { color: #CBD5E1; }
  section.problem h1 { color: #B45309; border-color: #F59E0B; }
  section.solution h1 { color: #0F766E; border-color: #14B8A6; }
  pre { font-size: 18px; line-height: 1.22; background: #0F172A; color: #F8FAFC; border-radius: 12px; padding: 16px; }
  code { font-size: 0.82em; }
---

<!-- _class: title -->

# lab-php

## PHP topics beyond the course

**Student:** [Add your name]  
**Teacher:** ES-SARRAJ Fouad  
**Date:** [Add the presentation date]

---

## Presentation Plan

1. Introduction & Technical Stack
2. Definitions
3. Problem
4. Solution

---

## Introduction & Technical Stack

- **Goal:** learn three useful PHP topics through small examples.
- **Project context:** a Laravel article-management project.
- **PHP:** `^8.3`, as declared in the project's `composer.json`.
- **Framework:** Laravel `^13.17`.
- **Autoloading:** Composer maps `App\` to the `app/` folder.
- The lab examples use plain PHP and in-memory data. They are not integrated application features.

---

## Definitions

- **Error:** a problem reported by PHP or the program.
- **Exception:** an object that reports a problem and can be handled with `try` and `catch`.
- **Namespace:** a named group for classes, such as `App\Models`.
- **Trait:** a way to share methods and properties between classes.

---

## Quick Start: Run PHP

Open a terminal in the `pratique` folder:

```powershell
php -v
php .\hello-world.php
```

`hello-world.php` prints:

```text
Hello, PHP lab!
```

Use PHP 8.3 or a compatible version for the project.

---

<!-- _class: problem -->

## Problem

**Real problem from the technical project:**  
[Student: describe the problem you actually experienced.]

**Why it matters:**  
[Explain who or what is affected.]

Do not present a practice example as a real project problem.

---

<!-- _class: solution -->

## Solution: Handle Invalid Article Data

The example checks an article title and reports an empty title to the caller.

```php
if (trim($title) === '') {
    throw new InvalidArgumentException('The title cannot be empty.');
}

try {
    echo publishArticle($title);
} catch (InvalidArgumentException $exception) {
    echo $exception->getMessage();
}
```

Run it from `pratique`:

```powershell
php .\erreurs-exceptions\exemple.php
```

---

<!-- _class: light -->

## Solution: Organize Classes with Namespaces

Namespaces give each class a clear, unique name:

```php
namespace App\Models;

final class Article
{
    public function __construct(public readonly string $title) {}
}
```

The repository is in `App\Repositories` and imports `App\Models\Article`.

The example follows the project's Composer naming convention. Run it from `pratique`:

```powershell
php .\namespaces\demo.php
```

---

<!-- _class: solution -->

## Solution: Share Behavior with a Trait

`Article` and `Comment` both use `HasTimestamps`:

```php
trait HasTimestamps
{
    private DateTimeImmutable $createdAt;

    public function createdAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }
}
```

The trait keeps shared timestamp behavior in one place. Run it from `pratique`:

```powershell
php .\traits\exemple.php
```

---

<!-- _class: solution -->

## Solution and Practical Work

- **Exceptions:** reject an empty article title and show a useful message.
- **Namespaces:** organize the article model and repository using `App\`.
- **Traits:** share timestamp behavior between an article and a comment.
- Follow the tutorials in `pratique/` to see each example, command, and expected result.

**Solution for the real project problem:**  
[Student: describe your proposed solution and how it relates to the project.]
