# Project 1: Categories

A small category manager built with PHP, JavaScript, and a JSON file. It is organized to make each part easier to find while you learn.

## Folder guide

```text
project_1/
├── assets/
│   └── js/
│       └── app.js
├── backend/
│   ├── api/
│   │   └── api.php
│   ├── classes/
│   │   └── Category.php
│   ├── dao/
│   │   └── CategoryDAO.php
│   ├── data/
│   │   └── data.json
│   ├── services/
│   │   ├── BaseService.php
│   │   └── CategoryService.php
├── index.html
└── tests/
    └── test_category.php
```

- **`index.html`** is the page shown in the browser.
- **`assets/js/`** contains the browser JavaScript.
- **`backend/api/`** handles requests from the page.
- **`backend/classes/`** contains the category class.
- **`backend/dao/`** reads and saves categories in the JSON file.
- **`backend/services/`** checks category names and asks the DAO to save them.
- **`backend/data/`** keeps the saved categories.
- **`tests/`** has a small PHP script to check creating and validating categories.

The code follows the simple example: `Category` holds category details, `CategoryDAO` reads and writes JSON, `CategoryService` checks input, and `api.php` connects the page to the service.

## Run it

1. Install PHP.
2. Make sure `backend/data/data.json` can be read and written by your web server.
3. Serve this folder, then open the page in your browser.
   For a quick local test, run `php -S localhost:8000` from this folder and visit `http://localhost:8000`.
4. To run the simple test, run `php tests/test_category.php`.

The project stores categories in JSON; it does not need a database.
