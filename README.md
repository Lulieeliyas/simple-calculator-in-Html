# Calculator Projects Collection 🧮

Welcome to my Calculator Projects repository! This repository contains two different implementations of a web-based calculator. 

1. **HTML/JavaScript Calculator** (Client-Side)
2. **PHP Calculator** (Server-Side)

Below you will find the details, features, and instructions for both projects.

---

## 1️⃣ HTML & JavaScript Calculator (Live & Hosted on GitHub)

This is a fully functional, responsive web-based calculator built entirely using front-end technologies. It runs completely in the user's browser and is currently hosted live on GitHub Pages.

### 🚀 Live Demo
You can view the live calculator here: **[Simple HTML Calculator](https://lulieeliyas.github.io/simple-calculator-in-Html/)**

### ✨ Features
*   **Basic Math Operations:** Addition, subtraction, multiplication, and division.
*   **Clean UI:** A modern grid layout with hover and active click animations.
*   **Error Handling:** Displays "Error" if an invalid mathematical expression is entered.
*   **Responsive:** Centered layout that works beautifully on both desktop and mobile browsers.
*   **No Backend Required:** Calculations happen instantly using Vanilla JavaScript.

### 🛠️ How to Use It
1. Copy the HTML/JS code into a file named exactly **`index.html`**.
2. Commit it to your GitHub repository.
3. Enable GitHub Pages in your repository settings (Settings > Pages > Select `main` branch).
4. Wait a few minutes, and your site will be live at `https://[your-username].github.io/[repository-name]/`.

---

## 2️⃣ PHP Calculator (Requires PHP Server)

This is a server-side calculator built using **HTML, CSS, JavaScript, and PHP**. Instead of relying on the browser to do the math, it sends the mathematical expression to a PHP script on the server to calculate the result safely.

### ⚠️ IMPORTANT: Hosting Warning
**GitHub Pages CANNOT run PHP files.** If you upload the PHP calculator file to GitHub Pages, the calculator will appear, but pressing the `=` button will not work because GitHub Pages does not have a PHP engine.

To run the PHP version live on the internet, you must use a hosting provider that supports PHP (such as **InfinityFree**, **Hostinger**, or **cPanel**).

### ✨ Features
*   **Backend Math Evaluation:** Uses PHP's `eval()` function wrapped in a `try-catch` block to calculate expressions.
*   **Input Sanitization:** Uses Regular Expressions (`preg_match`) to ensure only numbers and basic operators are processed, preventing malicious code injection.
*   **Smooth JavaScript Integration:** JavaScript intercepts button clicks to build the string, then submits the form to PHP only when `=` is pressed.

### 🛠️ How to Run the PHP Version
1. Ensure the code is saved in a file named exactly **`index.php`**.
2. **Locally:** Place the file inside your `htdocs` (XAMPP) or `www` (WAMP/MAMP) folder and start your local Apache server. Visit `http://localhost/index.php`.
3. **Live Hosting:** Upload the `index.php` file to your web host via cPanel or FTP.

---

## 📂 Project Files Guide
If you are looking at the repository, here is what the files do:
*   `index.html`: The complete code for the working HTML/JS calculator.
*   `index.php`: The complete code for the PHP calculator.
*   `README.md`: This instruction file.

## 👨‍💻 Technologies Used
*   **HTML5:** Structure of the calculators.
*   **CSS3:** Styling, CSS Grid layout, Flexbox, and animations.
*   **JavaScript:** DOM manipulation and button logic.
*   **PHP:** Backend server-side calculation and security validation.
