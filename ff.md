---
marp: true
theme: default
paginate: true
header: "ART GALLERY | Technical Project"
footer: "Badreddine Hammam | Solicode"
---

<!-- _class: lead -->
<!-- _paginate: false -->

# ART GALLERY

### Technical Project Presentation

**Created by:** Badreddine Hammam

**Supervisor:** [Supervisor's Name]

![OFPPT Logo](images/ofppt-logo.png) ![Solicode Logo](images/solicode-logo.png)

---

# 1. Introduction

## What is Art Gallery?

Art Gallery is an application designed to organize and manage an art gallery.

The application focuses on three main entities:

- **Artist:** Stores information about artists.
- **Artwork:** Stores information about artworks.
- **ArtMedium:** Describes the artistic mediums used to create artworks.

**Main objective:** Organize artists and their artworks in one application.

---

# 2. Project Need

## What problem does it solve?

Managing an art gallery can become difficult when information is not well organized.

### Identified needs

- Organize artists' information.
- Keep artworks organized.
- Identify the artistic medium of each artwork.
- Make gallery information easier to manage.

### Proposed solution

Create an application that centralizes information about artists, artworks and artistic mediums.

---

# 3. Project Analysis

## Main entities

| Entity | Description |
|---|---|
| Artist | Information about an artist |
| Artwork | Information about an artwork |
| ArtMedium | Artistic medium used to create an artwork |

## Main functionalities

- Manage artists.
- Manage artworks.
- Manage artistic mediums.
- Organize artworks by artist.
- Associate artworks with their artistic mediums.

---

# 4. Database Design

## Entity Relationship Model

The project uses three main entities:

```text
Artist
   |
   | 
   |
Artwork
   |
   |
ArtMedium
```

### Proposed relationships

- One artist can create multiple artworks.
- One artwork can be associated with an artistic medium.
- One artistic medium can be used for multiple artworks.

*Note: Verify these relationships against your actual database.*

---

# 5. UML Design

## Use Case Diagram

The diagram should explain how users interact with the application.

### Possible use cases

- View artists.
- View artworks.
- Manage artists.
- Manage artworks.
- Manage artistic mediums.

**Insert your actual UML use-case diagram here.**

![Use Case Diagram](images/use-case-diagram.png)

---

# 6. Technical Implementation

## Technologies and Tools

| Category | Technology |
|---|---|
| Frontend | [Your frontend technology] |
| Backend | [Your backend technology] |
| Database | [Your database] |
| Code Editor | Visual Studio Code |
| Presentation | Markdown + Marp |
| Version Control | Git and GitHub |

### Development process

1. Design the database.
2. Develop the application.
3. Implement the functionalities.
4. Test the application.

---

# 7. Application Prototype

## Application Screenshots

Here are some screenshots of the Art Gallery application.

![Application Screenshot](images/project-screenshot.png)

### Main interface

[Describe what the screenshot shows.]

### Main functionality

[Explain one important functionality.]

---

# 8. Conclusion

## Final Result

The Art Gallery project aims to provide an organized way to manage artists, artworks and artistic mediums.

### What was achieved?

- Created the project structure.
- Identified the main entities.
- Designed the database.
- Developed the application functionalities.

### Future Improvements

- Improve the user interface.
- Add artwork search and filtering.
- Add more gallery management features.

---

<!-- _class: lead -->
<!-- _paginate: false -->

# THANK YOU

## Questions?

**Art Gallery**

Badreddine Hammam

