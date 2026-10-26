---
marp: true
theme: default
paginate: true
size: 16:9
---

# Lab : Déboguer JavaScript

## Objectif

Apprendre à comprendre une erreur, trouver sa cause et vérifier une correction.

Dans ce lab, on débogue cinq problèmes courants dans une page de blog.

---

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## Une méthode simple

Pour chaque problème :

1. Lire le message dans la **Console** et repérer le fichier et la ligne.
2. Vérifier la valeur ou la requête concernée.
3. Corriger la cause, puis refaire la même action.

Pour les erreurs réseau, utiliser l’onglet **Network** et vérifier le statut et la réponse.

---

## 1. `Cannot read properties of null`

Le formulaire ne réagit pas : le script essaie d’ajouter un événement à un élément absent.

**Exercice :** [Ouvrir l’exercice HTML/JS](./exercices/erreur-1-dom/index.html)

---

## 2. `Unexpected token '<'`

La lecture avec `response.json()` échoue : l’API renvoie du HTML au lieu du JSON attendu.

**Exercice :** [Ouvrir l’exercice HTML/JS](./exercices/erreur-2-reponse-api/index.html)

---

## 3. `posts.forEach is not a function`

Les articles sont reçus, mais l’affichage plante : la valeur parcourue n’est pas un tableau.

**Exercice :** [Ouvrir l’exercice HTML/JS](./exercices/erreur-3-format-donnees/index.html)

---

## 4. `Failed to fetch`

La requête ne reçoit aucune réponse exploitable. Vérifiez le serveur, l’adresse et les éventuels messages CORS.

**Exercice :** [Ouvrir l’exercice HTML/JS](./exercices/erreur-4-reseau/index.html)

---

## 5. `ReferenceError: displayArticles is not defined`

Le bouton de rechargement déclenche une erreur : la fonction n’est pas disponible au moment de l’appel.

**Exercice :** [Ouvrir l’exercice HTML/JS](./exercices/erreur-5-ordre-scripts/index.html)

---

## Solutions Implemented

- Observer le message d’erreur et repérer le fichier et la ligne.
- Inspecter le DOM, les données reçues ou la requête dans les outils du navigateur.
- Corriger la cause, puis rejouer le scénario pour vérifier le résultat.

---

## À vous de jouer

Ouvrez les cinq pages HTML des exercices et modifiez directement leurs fichiers JavaScript ou HTML. Pour chaque erreur, reproduisez le problème, corrigez le code et vérifiez que le résultat fonctionne.

**À retenir : observer → comprendre → corriger → tester**

Pour tester les exercices qui utilisent `fetch()`, démarrez un serveur local depuis le dossier `Erreur-js` :

```bash
php -S localhost:8000
```