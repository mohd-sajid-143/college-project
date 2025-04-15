# Dynamic Learning Management System

[![License](https://img.shields.io/badge/License-MSK_143-blue.svg)](LICENSE)

A role-based platform leveraging web technologies to streamline academic content management and delivery for students.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Database Setup](#database-setup)
- [License](#license)
- [Contact](#contact)

## Features

- **Role-Based Access:** Distinct interfaces and functionalities tailored for administrators, teachers, and students.
- **Admin Dashboard:**
  - Intuitive tools for creating and managing the academic structure:
    - Departments
    - Branches/Specializations
    - Semesters/Terms
    - Subjects/Courses
- **Teacher Portal:**
  - Easy content upload for various learning resources:
    - Study Notes (compatible with common document formats)
    - Previous Year Question Papers (PYQs)
    - Integration for embedding external Video Links
- **Student Interface:**
  - Seamless and interactive access to organized study materials.
  - User-friendly navigation for effortless content discovery.
  - Dynamic content loading using AJAX for a smoother experience.

## Technologies Used

- **Frontend:**
  - HTML
  - CSS
  - JavaScript
  - AJAX
- **Backend:**
  - PHP
- **Database:**
  - MySQL
- **Data Format:**
  - JSON (for data exchange)
- **Local Development Environment:**
  - XAMPP
- **License:**
  - MSK_143

## Installation

Follow these steps to set up the project locally using XAMPP.

### Prerequisites

- **XAMPP:** Ensure you have XAMPP installed on your system. You can download it from the [Apache Friends website](https://www.apachefriends.org/index.html). Make sure Apache and MySQL services are running.

### Steps

1.  **Clone the repository:**
    ```bash
    git clone https://github.com/mohd-sajid-143/college-project
    cd [YOUR_PROJECT_DIRECTORY]
    ```
2.  **Move project files to XAMPP's `htdocs` directory:**
    - Locate your XAMPP installation directory (usually `C:\xampp` on Windows or `/Applications/XAMPP` on macOS).
    - Move the entire `[YOUR_PROJECT_DIRECTORY]` folder into the `htdocs` folder within your XAMPP directory.
3.  **Access the application:**
    - Open your web browser and navigate to `http://localhost/[YOUR_PROJECT_DIRECTORY]`.

## Database Setup

Instructions for setting up the MySQL database.

1.  **Open phpMyAdmin:**
    - Access phpMyAdmin through your XAMPP control panel or by navigating to `http://localhost/phpmyadmin/` in your web browser.
2.  **Create a new database:**
    - In phpMyAdmin, click on the "Databases" tab.
    - Enter a name for your database (e.g., `lms_database`) in the "Create database" field and click "Create."
3.  **Import database schema (in repo:- collegeproject.sql):**
    - If you have a `.sql` file containing your database schema, select the database you just created.
    - Click on the "Import" tab.
    - Click "Choose File" and select your `.sql` file.
    - Click "Go" to import the schema.
4.  **Configure database connection in PHP:**
    - Locate the PHP files in your project that handle database connections (e.g., configuration files or within your model files).
    - Update the database connection details with your MySQL credentials and the database name you created:
      - **Hostname:** `localhost`
      - **Username:** (usually `root` by default in XAMPP)
      - **Password:** (usually empty by default in XAMPP)
      - **Database Name:** `lms_database` (or whatever you named it)

## Usage

Explain how to interact with the platform as different users.

### Admin

1.  Navigate to the admin login page (e.g., `http://localhost/[YOUR_PROJECT_DIRECTORY]/admin`).
2.  Log in with the administrator credentials.
3.  Use the dashboard to create departments, branches, semesters, and subjects through the provided forms and interfaces.

### Teacher

1.  Access the teacher login page (e.g., `http://localhost/[YOUR_PROJECT_DIRECTORY]/teacher`).
2.  Log in with your teacher account.
3.  Select the relevant subject.
4.  Utilize the upload forms to add study notes, PYQs (potentially as file uploads), and embed video links by pasting their URLs.

### Student

1.  Go to the main platform URL (e.g., `http://localhost/[YOUR_PROJECT_DIRECTORY]`).
2.  Browse through the academic structure (departments, branches, semesters) to find your subjects.
3.  Click on a subject to view the available notes, PYQs, and embedded videos. The content should load dynamically using AJAX for a smoother browsing experience.

## License

This project is licensed under the **MSK_143** license. For more details, please refer to the [LICENSE](LICENSE) file.

## Contact

Mohd Sajid
ksajid8975@gmail.com
