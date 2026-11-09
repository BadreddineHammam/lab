# PHP Practice

Each topic has its own folder with a runnable PHP example and a tutorial. The examples use articles as a simple project-related theme.

The related Laravel project requires PHP `^8.3` and maps the `App\` namespace to the `app/` folder with Composer. The namespace exercise follows that convention. These examples run without Laravel or a database.

The examples use in-memory data. They are learning exercises, not features already added to the Laravel application.

## Quick Start

Use PHP 8.3 or a compatible version. From this `pratique` folder, run:

```powershell
php -v
php .\hello-world.php
php .\erreurs-exceptions\exemple.php
php .\namespaces\demo.php
php .\traits\exemple.php
```

The first example prints:

```text
Hello, PHP lab!
```

## Topics

- [Error and exception handling](erreurs-exceptions/tutoriel.md): validate an article title and handle an `InvalidArgumentException`.
- [Namespaces](namespaces/tutoriel.md): organize an article model and repository using the `App\` namespace.
- [Traits](traits/tutoriel.md): share timestamp behavior between an article and a comment.

Each tutorial explains the example, command, expected result, project connection, and a next exercise.