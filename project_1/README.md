# Project 1: Categories

This project lets you see and add blog categories. The page uses JavaScript, and PHP reads and saves the categories in `data/data.json`.

## What I changed

- **A `Category` class:** `backend/categorie.php` describes one category. It uses typed values for the name and ID, and `toArray()` gives the category to PHP as an array.
- **A `CategoryManager` class:** `backend/gestion.php` loads categories, checks new names, chooses the next ID, and saves the list. The file now reports problems instead of silently using an empty list.
- **A custom exception:** `backend/Exceptions/CategoryException.php` gives invalid category names a clear error type and message. Problems reading or saving the JSON file are treated as server errors.
- **A trait:** `backend/Traits/Logger.php` adds a reusable `logActivity()` method. The manager uses it to write successful additions to the PHP error log.
- **A clearer controller:** `controller/contro.php` handles GET requests (show the list) and POST requests (add a category). It returns JSON, uses HTTP error codes, catches expected and unexpected errors, and uses `finally` to log when a request finishes.
- **A better page response:** `asset/js.js` displays messages from PHP, keeps the form contents if saving fails, and adds category names as text instead of HTML.
- **Comments in the changed code:** Short comments explain the new PHP classes and the less-obvious response handling.

## New PHP ideas used

- **Namespace:** A namespace is a name group for classes. Here it keeps the category classes together under `App\Backend`.
- **Typed properties and methods:** Types such as `string` and `array` make it clearer what information a method expects and returns.
- **Constructor property promotion:** The constructor in `Category` and `CategoryManager` declares and fills properties in one place. This needs PHP 8.0 or newer.
- **Trait:** A trait shares a method (`logActivity()`) with a class.
- **Custom exception:** `CategoryException` lets PHP report a category-specific problem that the controller can catch.
- **`try`, `catch`, and `finally`:** The controller handles errors and always logs the end of the request.

## Run it

1. Use PHP 8.0 or newer with Apache.
2. Make sure `data/data.json` can be read and written by Apache.
3. Open `http://localhost/project_1/frontend/` in your browser.
4. Add a category using the form. The page will display it and PHP will save it in `data/data.json`.

The category list is stored in a JSON file, not a database.
