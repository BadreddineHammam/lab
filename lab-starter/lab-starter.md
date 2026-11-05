---
marp: true
theme: lab-starter
paginate: true
header: "LAB STARTER"
footer: "Web Development Setup"
---

<!-- _class: title -->

<div style="
display: flex;
justify-content: center; 
align-items: center; 
gap: 50px; 
height: 64px;">


<img src="images/ofppt.png" alt="OFPPT" 
style="
width: 200px; 
height: auto; 
object-fit: contain;">


<img src="images/solicode.png" alt="Solicode" 
style="
width: 200px; 
height: auto; 
object-fit: contain;">

</div>

# LAB STARTER

## Preparing for web development

**A simple guide to setting up your tools**

---

# 1. What is Lab Starter?

## 1. What is Lab Starter?

Imagine you want to start developing websites.

Before writing code, you need to prepare your computer with useful tools.

**Lab Starter = Preparing your computer for web development.**

### Objectives
- Install useful tools.
- Organize your files.
- Prepare VS Code.
- Make coding easier.

---

## 2. Stack Technique — What tools do we need?

A stack is simply a group of tools used together.

| Tool | Simple explanation |
|---|---|
| Windows | Runs your computer. |
| VS Code | Where you write code. |
| Git | Tracks changes in your project. |
| Live Server | Shows your website in a browser. |
| Marp | Creates presentations using Markdown. |
| Better Todo Tree | Finds TODO tasks in your code. |
| Markdownlint | Checks Markdown formatting. |



---


### Remember:
- VS Code = Write code.
- Git = Track changes.
- Live Server = Preview websites.
- Better Todo Tree = Find tasks.
- Marp = Create presentations.
- Markdownlint = Check Markdown.

---

## 3. Definitions — Important words

| Word | Simple meaning |
|---|---|
| IDE | A program to write and manage code. |
| Extension | An additional tool for VS Code. |
| Git | A tool that tracks code changes. |
| Terminal | A place to write commands. |
| Local Server | Runs a website on your computer. |
| Markdown | A simple language for writing documents. |

**Example:**

- Installing Live Server = Installing an extension.
- Writing `git init` = Executing a command in the terminal

## 4. Problem and Need — Why do we need this lab?

Imagine you're working on a website.

You encounter these problems:

| Problem | Explanation |
|---|---|
| Git isn't initialized | You cannot track project changes yet. |
| Hidden files aren't visible | You cannot see `.gitignore`. |
| Extensions aren't visible | You cannot see complete file names. |
| TODO tasks are difficult to find | You waste time searching for tasks. |
| HTML needs manual refreshing | You must refresh the browser yourself. |


**The need:**

We need an organized development environment that makes working easier.

---

## 5. Solution and Practice — How do we solve these problems?

### 01. Initialize Git

**Problem:** Git is not initialized in the project.

**Solution:** Initialize Git.

Steps:
1. Open your project in VS Code.
2. Press `Ctrl + Shift + G`.
3. Click `Initialize Repository`.

Or use the terminal:

```bash
git init
```

**Result:** Git starts tracking your project.

---

### 02. Show hidden files

**Problem:** Some files are hidden, like `.gitignore` and `.env`.

**Solution:**
1. Open File Explorer (`Win + E`).
2. Click View.
3. Click Show.
4. Activate Hidden items.

**Result:** You can see hidden files.

### 03. Show file extensions

**Problem:** Windows sometimes hides file extensions.

Example: You might see `index` instead of `index.html`.

**Solution:**
1. Open File Explorer.
2. Go to View → Show.
3. Activate File name extensions.

**Result:** You can see complete file names.

---

### 04. Install Better Todo Tree

**Problem:** It's difficult to find all TODO tasks in a project.

**Solution:** Install Better Todo Tree.

Steps:
1. Open VS Code.
2. Press `Ctrl + Shift + X`.
3. Search for Better Todo Tree.
4. Install it.

Example:

```javascript
// TODO: Create login page
// FIXME: Fix this error
```

**Result:** The extension finds and groups TODO and FIXME comments.

---

### 05. Install Live Server

**Problem:** You must refresh your browser manually after changing HTML.

**Solution:** Install Live Server.

Steps:
1. Open VS Code.
2. Press `Ctrl + Shift + X`.
3. Search for Live Server.
4. Install it.
5. Open `index.html`.
6. Click `Go Live`.

**Result:** Your website opens in the browser and refreshes automatically when you save changes.

**Important:** Live Server works with HTML, CSS and JavaScript. It does not execute PHP.

---

## 6. Results and Conclusion

After completing Lab Starter:

- Git tracks project changes.
- Hidden files become visible.
- File extensions become visible.
- TODO tasks are easier to find.
- HTML pages refresh automatically.

**Conclusion:**

Lab Starter helps us prepare and organize our computers before starting web development.

It makes our work easier, faster and more organized.

---

## The Whole Lab in 6 Ideas

| Part | Main idea |
|---|---|
| Introduction | Prepare the computer. |
| Stack | Discover the tools. |
| Definitions | Understand important words. |
| Problem | Identify the difficulties. |
| Solution | Install and configure tools. |
| Conclusion | Explain what we achieved. |

**Remember:** This lab is not about creating a website. It is about preparing the tools and environment that allow you to create websites.
