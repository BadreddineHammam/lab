
---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background: #fbfaf6;
    border-top: 8px solid #d2704e;
    color: #183b39;
    font-family: "Aptos", "Segoe UI", sans-serif;
  }

  section h1,
  section h2 {
    color: #a94732;
  }

  section code,
  section pre {
    background: #e9efeb;
    color: #183b39;
  }

  section.light {
    background: #eaf2ee;
    color: #183b39;
  }

  section.light h1,
  section.light h2 {
    color: #a94732;
  }

  section.light code,
  section.light pre {
    background: #dfeae5;
    color: #183b39;
  }

  section.lead {
    align-items: center;
    justify-content: center;
    text-align: center;
    background: #eaf2ee;
  }

  section strong {
    color: #925c16;
  }
---

<!-- _class: lead -->

# Découvrir Marp

Introduction, problèmes et solutions

---

<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented
4. Mise en pratique
5. Conclusion

---

## 1. Introduction

Marp transforme du **Markdown** en diapositives de présentation.

- **Objectif :** écrire, prévisualiser et exporter un diaporama.
- **Outils :** Marp for VS Code et Marp CLI.
- **Notions :** front matter, séparateurs, directives et thèmes.

Le but de ce lab est de créer une présentation simplement à partir d'un fichier `.md`.

---

<!-- _class: light -->

## 2. Problème 1 : l'aperçu ne fonctionne pas

Si Marp ne reconnaît pas le fichier comme une présentation, l'aperçu peut ne pas fonctionner correctement.

**Cause possible :** la configuration Marp manque au début du fichier.

---

## Solution 1 : activer Marp

Ajouter ce front matter au début du fichier :

```yaml
---
marp: true
theme: default
paginate: true
size: 16:9
---
```

- `marp: true` active Marp pour ce fichier.
- `theme: default` choisit le thème par défaut.
- `paginate: true` affiche les numéros des diapositives.
- `size: 16:9` définit le format des diapositives.

---

<!-- _class: light -->

## Problème 2 : les diapositives sont mal séparées

Un séparateur `---` mal placé peut créer une diapositive inattendue.

Il peut aussi être difficile de distinguer le contenu de deux diapositives.

**Exemple incorrect :**

```markdown
# Première diapositive
Voici mon texte.
# Deuxième diapositive
Voici un autre texte.
```

Sans séparateur, Marp peut placer les deux titres sur la même diapositive.

---

## Solution 2 : utiliser `---`

Placer trois tirets entre les diapositives :

```markdown
# Première diapositive

Voici mon texte.

---

# Deuxième diapositive

Voici un autre texte.
```

Chaque séparateur marque la limite entre deux diapositives.

Attention : ne pas confondre les séparateurs de diapositives avec ceux utilisés dans le front matter ou dans certains exemples de code.

---

<!-- _class: light -->

## Problème 3 : les diapositives manquent de style

Le thème par défaut peut ne pas correspondre au design souhaité.

Les couleurs, les polices et l'apparence des titres peuvent être trop simples.

---

## Solution 3 : personnaliser avec CSS

Utiliser CSS pour modifier l'apparence :

```css
section {
  background: #fbfaf6;
  color: #183b39;
  font-family: "Aptos", "Segoe UI", sans-serif;
}

section h1,
section h2 {
  color: #a94732;
}
```

- `background` définit la couleur du fond.
- `color` définit la couleur du texte.
- `font-family` choisit la police.
- `h1` et `h2` représentent les titres.

Marp propose également les thèmes `default`, `gaia` et `uncover`.

---

<!-- _class: light -->

## Problème 4 : une diapositive a besoin d'un style différent

Parfois, une diapositive doit avoir un fond clair ou un titre centré, sans changer toutes les autres diapositives.

---

## Solution 4 : utiliser les directives locales

Pour appliquer le style `light` :

```markdown
<!-- _class: light -->

## Lab Plan
```

Pour centrer le contenu avec `lead` :

```markdown
<!-- _class: lead -->

# Découvrir Marp
```

Le CSS définit l'apparence de ces classes. La directive locale applique le style à la diapositive concernée.

---

<!-- _class: light -->

## Problème 5 : les images ne s'affichent pas correctement

Une image peut être absente si le chemin est incorrect ou si le fichier n'existe pas.

Une image peut aussi occuper trop de place sur la diapositive.

---

## Solution 5 : vérifier le chemin et le placement

Pour afficher une image :

```markdown
![Schéma du projet](images/schema.png)
```

Pour la placer à droite comme arrière-plan :

```markdown
![bg right:40%](images/schema.png)
```

- Vérifier que le dossier `images` existe.
- Vérifier que `schema.png` se trouve dans ce dossier.
- Utiliser un texte alternatif qui décrit l'image.

---

<!-- _class: light -->

## Problème 6 : l'aperçu ou l'exportation ne fonctionne pas

Il peut manquer l'extension Marp for VS Code ou Marp CLI.

L'exportation en PDF ou PowerPoint peut également dépendre du navigateur et des dépendances nécessaires.

---

## Solution 6 : installer les outils et tester

**Dans VS Code :**

1. Installer l'extension Marp for VS Code.
2. Ouvrir la palette avec `Ctrl + Shift + P`.
3. Choisir `Marp: Open Preview to the Side`.
4. Vérifier les diapositives.

**Pour utiliser Marp CLI :**

```bash
npm install -g @marp-team/marp-cli
marp --version
```

Node.js et npm sont nécessaires pour installer Marp CLI.

---

<!-- _class: light -->

## 3. Solutions Implemented : récapitulatif

| Problème | Solution |
|---|---|
| Marp ne reconnaît pas la présentation | Ajouter `marp: true` |
| Diapositives mal séparées | Utiliser `---` correctement |
| Style trop simple | Personnaliser avec CSS |
| Style différent pour une diapositive | Utiliser `lead` ou `light` |
| Image absente ou mal placée | Vérifier le chemin et les directives |
| Aperçu ou exportation impossible | Installer les outils et vérifier les dépendances |

Ces problèmes sont des exemples fréquents à vérifier. Ils ne signifient pas nécessairement que chaque problème s'est produit pendant le lab.

---

## 4. Mise en pratique

Créer un fichier `presentation.md` avec deux diapositives :

```markdown
---
marp: true
theme: default
paginate: true
---

# Objectif

Présenter une idée.

---

# Résultat

Prévisualiser les deux diapositives.
```

Ensuite :

1. Ouvrir le fichier dans VS Code.
2. Lancer l'aperçu Marp.
3. Vérifier que les deux diapositives apparaissent.

---

<!-- _class: light -->

## Exporter la présentation

Pour créer un PDF :

```bash
marp presentation.md --pdf
```

Pour créer un fichier PowerPoint :

```bash
marp presentation.md --pptx
```

Pour créer une version HTML :

```bash
marp presentation.md --html
```

Le fichier généré est placé dans le dossier courant, sauf si un autre chemin de sortie est indiqué.

---

<!-- _class: lead -->

# Conclusion

Marp transforme un fichier Markdown en présentation.

- **Introduction :** comprendre le rôle de Marp.
- **Problèmes :** identifier les erreurs possibles.
- **Solutions :** configurer, personnaliser, prévisualiser et exporter.

**Une bonne présentation commence par un fichier bien structuré et un rendu vérifié.**

---

<!-- _class: light -->

## Ressources utiles

- [Site officiel de Marp](https://marp.app/)
- [Extension Marp for VS Code](https://marketplace.visualstudio.com/items?itemName=marp-team.marp-vscode)
