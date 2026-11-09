# Tutorial: Error and Exception Handling

## Goal

Reject an article with an empty title and show a clear message without stopping the whole example.

## Step by step

Open [`exemple.php`](exemple.php) and follow the code from top to bottom:

1. `declare(strict_types=1)` enables strict type checking for calls in this file. The function expects a string in `string $title`.
2. `publishArticle()` uses `trim()` to remove spaces from the start and end of the title. A title containing only spaces becomes an empty string.
3. The `if ($title === '')` check detects invalid input. `throw new InvalidArgumentException(...)` stops the normal function flow and sends an exception to the caller.
4. If the title is not empty, `sprintf()` creates a success message and `return` sends it back.
5. The `foreach` loop tries two values: a valid title and a title containing spaces. The `try` block calls the function and prints its result when it succeeds.
6. For the second value, the function throws an exception. PHP skips to `catch`, which prints the rejection message. The program then continues.

The function detects invalid data. The entry point decides how to show the problem. This keeps the validation rule separate from the display.

## Run it

From the `pratique` folder:

```powershell
php .\erreurs-exceptions\exemple.php
```

Expected output:

```text
Article published: Error handling in PHP
Publication rejected: The title cannot be empty.
```

The first line comes from the return value of `publishArticle()`. The second comes from `catch` because `trim()` changed the spaces-only title to an empty string.

## Project connection

This models a simple article-title validation rule. The title is test data in memory; no Laravel article is created or published.

## Remember

- An exception reports that an operation cannot follow its normal path.
- Put `catch` where the program can decide what to do next.
- Catch the specific exception you expect. Do not hide every possible error with a broad catch.

## Try next

Add a valid title with spaces at the beginning and end. Check that `trim()` removes them before the article is published.