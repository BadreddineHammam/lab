# Tutorial: Traits

## Goal

Share timestamp behavior between two content classes without copying the same properties and methods.

## Step by step

Open [`exemple.php`](exemple.php) and follow the code from top to bottom:

1. `trait HasTimestamps` defines two `DateTimeImmutable` properties for creation and update times.
2. `initializeTimestamps()` accepts an optional time. The `??=` operator uses the current time if none was provided. Both properties receive the same time.
3. `createdAt()` and `updatedAt()` return the dates. These methods let other code read the values without direct access to the properties.
4. `Article` and `Comment` include the trait with `use HasTimestamps`. Each constructor calls `initializeTimestamps()`, so every new object gets timestamps.
5. The script creates an article and a comment, then calls `createdAt()` on each. `format('Y-m-d H:i:s')` turns each date into readable text.

The trait is useful because both classes need the same behavior but are not the same kind of object. A trait is not a replacement for inheritance or a business service.

## Run it

From the `pratique` folder:

```powershell
php .\traits\exemple.php
```

Expected output: two lines showing the article title and comment text, each followed by its creation time. The time changes each time you run the example.

## Project connection

The example shares a small behavior between article-like objects. Laravel Eloquent models already provide timestamps when configured, so this exercise demonstrates PHP traits and does not change the Laravel models.

## Remember

- A trait adds its methods and properties to a class.
- A trait can reduce repeated code when several classes need the same behavior.
- Do not add a trait just to avoid a small amount of duplication; the shared behavior should make sense for each class.

## Try next

Add a method to the trait that updates `updatedAt`, then call it after a simulated change.