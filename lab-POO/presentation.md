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
    font-size: 24px;
    padding: 44px 60px;
  }
  h1 { color: #155e75; }
  strong { color: #0e7490; }
  pre { font-size: 17px; }
---

<!-- _class: lead -->

# POO en PHP

### Six notions pour structurer un gestionnaire de catégories

**Student:** Badreddine Hammam<br>
**Instructor:** Fouad ES-SARRAJ<br>
**Date :** 13/11/2026

<!--
Speaker note: Présenter le thème du lab et les six notions étudiées.
Les noms sont des espaces réservés à compléter avant la présentation.
-->

---

# Parcours

1. Contexte et objectif d’apprentissage
2. Rôle des notions de POO
3. Exemples pratiques autour des catégories
4. Exécution et vérification

<!--
Speaker note: Annoncer le chemin de la présentation.
Chaque démonstration correspond à un script PHP autonome.
-->

---

# Contexte technique

- **Langage :** PHP, version CLI observée 8.1.34
- **Fil conducteur :** gestion de catégories Formation et Produit
- **Projet de référence :** `project_1/OOP-Lab`
- Les exemples sont autonomes et gardent les données en mémoire
- Ils ne sont pas intégrés à l’application existante

<!--
Speaker note: Le projet de référence contient déjà des classes de catégorie.
Le lab s’en inspire sans prétendre modifier ou intégrer ces classes.
-->

---

# Pourquoi ces notions ?

- Une classe générique ne doit pas toujours pouvoir être construite.
- Des classes différentes peuvent devoir respecter le même contrat.
- Les données doivent être lues et modifiées de façon contrôlée.
- Un comportement commun ne doit pas effacer les différences entre objets.

<!--
Speaker note: Le lab comble un besoin d’apprentissage sur des notions de POO.
Le scénario des catégories sert à tester les concepts, pas à décrire un bug réel.
-->

---

# Classe abstraite : fournir un modèle

- Une classe abstraite sert de base et ne s’instancie pas directement.
- Elle peut partager des méthodes et imposer des méthodes aux enfants.
- Dans le projet : `AbstractCategory` définit une base commune.

```php
abstract class AbstractCategory
{
    abstract public function getDetails(): string;
}

final class CourseCategory extends AbstractCategory
{
    public function getDetails(): string
    {
        return 'Formation : PHP';
    }
}
```

<!--
Speaker note: La classe abstraite donne un cadre commun sans définir tous les détails.
L’exemple Formation concrétise la méthode abstraite exigée.
-->

---

# Interface : définir un contrat

- Une interface déclare les méthodes que les classes doivent fournir.
- Elle décrit ce qu’un objet expose, pas son implémentation.
- Ici, toute catégorie doit pouvoir retourner ses détails.

```php
interface CategoryInterface
{
    public function getDetails(): string;
}

final class CourseCategory implements CategoryInterface
{
    public function getDetails(): string
    {
        return 'Formation : PHP';
    }
}
```

<!--
Speaker note: CourseCategory promet de respecter CategoryInterface.
Le script du lab retourne ensuite « Formation : PHP ».
-->

---

# Héritage : réutiliser une classe

- `extends` établit une relation entre une classe enfant et sa classe parent.
- L’enfant peut utiliser les méthodes héritées et ajouter les siennes.
- Le projet relie `CourseCategory` à sa classe de base.

```php
class Category
{
    public function __construct(private string $name) {}
    public function getName(): string { return $this->name; }
}

final class CourseCategory extends Category
{
    public function getDetails(): string
    {
        return 'Formation : ' . $this->getName();
    }
}
```

<!--
Speaker note: CourseCategory hérite du nom et de son accesseur.
Elle ajoute un détail spécialisé sans réécrire la gestion du nom.
-->

---

# Polymorphisme : même appel, résultats différents

- Un même contrat permet de traiter plusieurs types de catégories.
- La méthode `getDetails()` varie selon la classe réelle de l’objet.

```php
function displayCategory(CategoryInterface $category): void
{
    echo $category->getDetails(), PHP_EOL;
}

displayCategory(new CourseCategory());
displayCategory(new ProductCategory());
```

**Sortie :** `Formation : PHP` puis `Produit : Clavier`

<!--
Speaker note: La fonction reçoit les deux types au moyen du même contrat.
Chaque classe fournit sa propre version de getDetails().
-->

---

# Encapsulation : protéger les données

- `private` interdit l’accès direct depuis l’extérieur de la classe.
- Des méthodes dédiées contrôlent la lecture et la modification.
- L’exemple normalise le nom lors de sa création.

```php
final class Category
{
    public function __construct(private string $name)
    {
        $this->name = trim($name);
    }

    public function getName(): string
    {
        return $this->name;
    }
}
```

<!--
Speaker note: Le champ name n’est pas exposé comme propriété publique.
Le constructeur normalise la valeur et getName() offre un accès contrôlé.
-->

---

# Éléments statiques : état lié à la classe

- Une propriété statique est partagée par les instances de la classe.
- Une méthode statique s’appelle avec le nom de la classe.
- Le gestionnaire du projet compte ainsi les catégories ajoutées.

```php
private static int $totalCategories = 0;

public static function getTotalCategories(): int
{
    return self::$totalCategories;
}
```

Deux gestionnaires ajoutent une catégorie chacun : le total affiché est `2`.

<!--
Speaker note: Le compteur est partagé pendant l’exécution de ce script.
Il n’est pas persistant après la fin de la requête PHP.
-->

---

# Lancer les exemples

Depuis la racine du dépôt, exemple classe abstraite :

```powershell
php .\lab-POO\exemples\classe-abstraite\exemple.php
```

Exécuter tous les scripts :

```powershell
Get-ChildItem .\lab-POO\exemples -Filter exemple.php -Recurse | ForEach-Object { php $_.FullName }
```

<!--
Speaker note: Chaque sous-dossier contient un exemple et un tutoriel.
Les scripts ne nécessitent ni base de données ni dépendance Composer.
-->

---

# Livrables et vérification

- Six exemples PHP et six tutoriels dans `lab-POO/exemples/`
- La source de vérité du lab : [README.md](README.md)
- Vérifier la syntaxe de chaque script avec `php -l`
- Comparer les sorties réelles avec les sorties documentées
- Présentation Marp : [presentation.md](presentation.md)

<!--
Speaker note: Le README centralise le périmètre, les commandes et les liens.
Les résultats sont vérifiés en exécutant les scripts et le contrôle de syntaxe.
-->
