---
marp: true
theme: default
paginate: true
size: 16:9
---

<!-- _class: lead -->

# Discovering Markdown Syntax

## Understanding Markdown the Easy Way

**Lab Presentation**

---

# 1. Introduction

## What is Markdown?

Markdown is a simple way to format text using special symbols.

It helps us create:

- Titles and subtitles
- Bold and italic text
- Lists and tables
- Links and images
- Code examples

**Example:**

```markdown
# My Website

This is **my first project**.
```

Markdown displays a large title and bold text.

---

# 2. Problem 1: Paragraphs

## The Problem

Sometimes, pressing Enter once does not create a new paragraph in the final document.

## The Solution

Leave an empty line between paragraphs.

**Example:**

```markdown
Hello.

Welcome to my website.
```

**Result:**

Hello.

Welcome to my website.

---

# 3. Problem 2: Tables

## The Problem

A table may not display correctly if we forget the line separating the headings from the data.

## The Solution

Use pipes `|` to separate columns and dashes `---` to create the separator.

**Example:**

```markdown
| Name | Age |
| --- | --- |
| Badr | 23 |
```

**Result:**

| Name | Age |
| --- | --- |
| Badr | 23 |

---

# 4. Problem 3: Code Formatting

## The Problem

Programming code may appear as ordinary text without syntax highlighting.

## The Solution

Use three backticks and write the programming language name.

**Example:**

````markdown
```javascript
let name = "Badr";
console.log(name);
```
````

This tells Markdown that the code is JavaScript.

The same method works with PHP, HTML, and other languages.

---

# 5. Problem 4: Links and Images

## The Problem

Links and images may not appear if we use incorrect syntax or an invalid address.

## The Solution: Links

Use square brackets for the text and parentheses for the URL.

```markdown
[Google](https://www.google.com)
```

**Result:** [Google](https://www.google.com)

## The Solution: Images

Use an exclamation mark, square brackets, and parentheses.

```markdown
![Markdown logo](image-url)
```

The image address must be valid for the image to appear.

---

# 6. Formatting Text

## Titles

The number of `#` symbols determines the heading level.

```markdown
# Main title
## Subtitle
### Smaller heading
```

## Text Styles

| Purpose | Syntax | Result |
|---|---|---|
| Bold | `**Hello**` | **Hello** |
| Italic | `*Hello*` | *Hello* |
| Strikethrough | `~~Hello~~` | ~~Hello~~ |
| Inline code | `` `git init` `` | `git init` |
| Quotation | `> Hello` | Quotation |

---

# 7. Creating Lists

## Bulleted List

```markdown
- HTML
- CSS
- JavaScript
```

**Result:**

- HTML
- CSS
- JavaScript

## Numbered List

```markdown
1. Install VS Code
2. Install extensions
3. Start coding
```

**Result:**

1. Install VS Code
2. Install extensions
3. Start coding

---

# 8. Creating a Checklist

## The Problem

We may need to track completed and unfinished tasks.

## The Solution

Use `[x]` for completed tasks and `[ ]` for unfinished tasks.

**Example:**

```markdown
- [x] Install VS Code
- [ ] Learn Markdown
```

**Result:**

- [x] Install VS Code
- [ ] Learn Markdown

This is useful for organizing work and tracking progress.

---

# 9. Displaying JavaScript and PHP

## The Purpose

We can display programming code inside a Markdown document.

We do not need to learn all the programming code to understand this example.

**JavaScript example:**

````markdown
```javascript
console.log("Hello");
```
````

**PHP example:**

````markdown
```php
<?php
echo "Hello";
?>
```
````

Writing `javascript` or `php` after the opening backticks helps the editor identify the language.

---

# 10. Conclusion

Markdown is a simple way to format documents using special symbols.

During this lab, we learned how to:

- Create titles and format text.
- Organize information into lists and tables.
- Add links and images.
- Display JavaScript and PHP code.
- Solve common formatting problems.

**Final message:** Using the correct Markdown syntax makes documents clearer, better organized, and easier to read.