# Tutorial: Namespaces

## Goal

Organize the `Article` model and `ArticleRepository` in different namespaces, then import the repository in the entry point.

## Step by step

The example uses three files: [`app/Models/Article.php`](app/Models/Article.php), [`app/Repositories/ArticleRepository.php`](app/Repositories/ArticleRepository.php), and [`demo.php`](demo.php).

1. In `Article.php`, `namespace App\Models` gives the class the full name `App\Models\Article`. Its constructor stores the title in the public, read-only `$title` property.
2. In `ArticleRepository.php`, `namespace App\Repositories` puts the repository in a different namespace. `use App\Models\Article` lets the file refer to the model by its short name.
3. The method `find(int $id): ?Article` takes an integer ID and returns either an `Article` object or `null`. In this in-memory example, ID `1` returns an article; other IDs return `null`.
4. `demo.php` uses `require __DIR__` to load both classes. `__DIR__` is the folder containing the current file, so the paths work no matter where the command is run from.
5. `use App\Repositories\ArticleRepository` imports the repository. The script creates it and calls `find(1)`.
6. If the result is `null`, the `if` block prints `Article not found.` and `exit(0)` ends the script. Otherwise, the script prints the article title.

Namespaces help prevent name conflicts and make each class's role clear. The related Laravel project maps `App\` to `app/` with Composer. This standalone example uses explicit `require` statements instead of Composer's autoloader.

## Run it

From the `pratique` folder:

```powershell
php .\namespaces\demo.php
```

Expected output:

```text
Discover namespaces
```

This is the title of the `Article` object returned by the repository for ID `1`.

## Project connection

This example mirrors the Laravel project's `App\` to `app/` PSR-4 mapping. Its objects are simulated; it does not connect to the Laravel application or a database.

## Remember

- A namespace organizes a class name; it does not load the file by itself.
- `use` imports a full class name so the short name can be used.
- Laravel normally loads classes with Composer. This exercise uses `require` to stay easy to run by itself.

## Try next

Change the ID in `demo.php` from `1` to `2` and observe the `Article not found.` message.