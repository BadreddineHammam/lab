---
marp: true
theme: default
paginate: true
---

# Lab-Starter: Preparing Your Development Environment
---
Imagine you are preparing your computer to work on a website. This lab explains **5 problems and how to solve them**.

## 1. The 5 Problems and Their Solutions

### Problem 1: Git

Imagine you change your website code and want to keep track of your changes.

**What is Git?** Git is a tool that helps you track changes in your project.

**Solution:** Start Git in your project using:

```bash
git init
```
---
### Problem 2: Hidden Files

Some files, such as `.env`, might not appear in Windows File Explorer.

**Solution:** Enable **Hidden items** in Windows so you can see them.

**Steps:**
1. Press `Win + E` to open File Explorer.
2. Click **View**.
3. Select **Show**.
4. Enable **Hidden items**.
---
### Problem 3: Hidden File Extensions

You see `README` but cannot tell whether the real filename is `README.md` or `README.txt`.

**Solution:** Enable **File name extensions** in Windows.

**Steps:**
1. Press `Win + E` to open File Explorer.
2. Click **View**.
3. Select **Show**.
4. Enable **File name extensions**.
---

### Problem 4: TODO Tasks

You write a comment in your code saying you need to fix something later, but you forget where it is.

---

**Solution:** Install the **Better Todo Tree** extension to collect TODO tasks in one place.

**Example:**

```javascript
// TODO: Fix this function later


```

The extension helps you find these comments without searching through every file manually.

---
### Problem 5: Previewing Your Website

Every time you change your HTML page, you have to refresh your browser manually.
**Solution:** Install the
 **Live Server** extension to open your HTML page in a browser and refresh it automatically when you save changes.

 ---
**Steps:**
1. Open VS Code.
2. Press `Ctrl + Shift + X` to open Extensions.
3. Search for **Live Server** by Ritwick Dey.
4. Install the extension.
5. Open your project containing `index.html`.
6. Click **Go Live** at the bottom of VS Code.

---
**Important:** Live Server works with static HTML pages. It does not execute PHP code.


---
## 2. Understanding the Important Words

- **Git:** A tool that tracks changes in your code.
- **Repository:** A project managed by Git.
- **`.gitignore`:** A file that tells Git which files not to track.
- **`.env`:** A file often used to store configuration settings.
- **Extension:** An extra tool added to VS Code.
- **TODO:** Something you need to do later.
- **HTML:** The language used to structure a web page.
- **Live Server:** A tool that displays your HTML page in a browser and refreshes it when you save changes.

---
## 3. What Should You Actually Do?

Follow these steps to complete the lab:

1. Open your project in VS Code.
2. Initialize Git using `git init`.
3. Make hidden files visible in Windows.
4. Make file extensions visible.
5. Install Better Todo Tree.
6. Install Live Server and test it with `index.html`.

---
## 4. Conclusion

This lab teaches you how to prepare your computer for web development. You learn to track code changes with Git, display hidden files and extensions, organize TODO tasks, and preview HTML pages using Live Server.

These tools help you work more efficiently as a web developer.
---