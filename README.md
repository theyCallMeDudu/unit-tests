# unit-tests
PHP Unit content produced for studying purposes.

## Initial Steps to Set Up Unit Tests

Follow the steps below to initialize the project and set up the folder structure for unit tests.

---

## 1. **Create the Project Folder**
- Create a new folder for your project.

---

## 2. **Initialize Composer**
- Inside the folder, open the terminal and run:

  ```bash
  composer init

## 3. **Install PHPUnit**
- Inside the folder, open the terminal and run:

  ```bash
  composer require phpunit/phpunit

## 4. **Update your `composer.json`**
Open the composer.json file and modify the autoload section to the following part:

```json
"autoload": {
  "psr-4": {
      "app\\": "app/",
      "core\\": "core/"
  }
},
"scripts": {
  "serve": "php -S 127.0.0.1:8000 -t public"
}
```

## 5. **Create the folder structure**
```json
app/
  ├── database/
  └── library/

core/
  ├── database/
  └── library/

tests/
  ├── unit/
  │   ├── app/
  │   │   ├── database/
  │   │   └── library/
  │   └── core/
  │       ├── database/
  │       └── library/
```

## 6. **Install phpdotenv using Composer**
```bash
composer require vlucas/phpdotenv
```

You are now ready to start writing unit tests for your project! 🎉