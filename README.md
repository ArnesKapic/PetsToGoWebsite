# 🐾 PetsToGo Website

**PetsToGo** is a multi-page adoption-themed website built using **HTML5**, **CSS3**, **JavaScript**, and **PHP**, designed to simulate a nonprofit pet adoption center. The project showcases full-stack capabilities with dynamic UI elements, form processing via PHP, and responsive layout using Bootstrap.

---

## 🌐 Live Overview

This project includes:
- Interactive homepage
- About page outlining the shelter's mission
- Dynamic gallery and pet profiles
- Volunteer & contact forms with PHP backend logic

---

## 📁 Project Structure

```
PetsToGo/
├── home.html             # Main landing page
├── about.html            # Mission, vision, history
├── pets.html             # Pet listings with adoption info
├── gallery.html          # Image gallery of pets
├── contact.html          # Contact & volunteer form
├── form_response_adopt.php     # Handles pet adoption form
├── form_response_contact.php   # Handles contact form
├── style.css             # All custom styles
└── images/               # Assets like pet photos and logos
```

---

## 💻 Technologies Used

### Front-End:
- **HTML5** – Semantic structure
- **CSS3** – Custom styling for layout and responsiveness
- **Bootstrap 4** – Responsive design framework
- **JavaScript (jQuery)** – Carousel and interactions

### Back-End:
- **PHP** – Processes form submissions (contact and adoption)
- **Form handling** – Server-side sanitization and response display

---

## 🔧 Features

- 📸 **Carousel-based pet gallery**
- 🐶 **Pet profiles** with dynamic adoption buttons
- ✍️ **Volunteer and contact form** with backend processing
- 💌 **PHP-based feedback pages** to display submitted data
- 📱 **Fully responsive design** for mobile and desktop

---

## ⚙️ Setup Instructions

To run this project locally:

1. Clone the repo:
   ```bash
   git clone https://github.com/ArnesKapic/PetsToGoWebsite.git
   ```

2. Place the project in your `htdocs/` directory (XAMPP) or `www/` (WAMP).

3. Start Apache using your preferred local server (e.g., XAMPP).

4. Open your browser and go to:
   ```
   http://localhost/PetsToGoWebsite/home.html
   ```

---

## 📬 Contact Form Handling

The following PHP scripts are included:
- `form_response_adopt.php` – Handles pet adoption form POST data.
- `form_response_contact.php` – Displays submitted contact information from users.

*Note: These PHP files currently print back submitted content. In a production setting, these would be extended to send emails or store data.*

---

## 🧠 Developer Note

This project was created as part of a final academic project and is intended to demonstrate the integration of front-end and back-end skills. It reflects real-world structure, responsive design, and basic data processing capabilities.

---

## 📄 License

This project is licensed under the **MIT License**.

```
MIT License

Copyright (c) 2025 Arnes Kapic

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
```

---

## 🙋‍♂️ Author

Developed by **Arnes Kapic**  
Contact via [GitHub](https://github.com/ArnesKapic)

---

## 🐶 Final Thought

At **PetsToGo**, every line of code was written to bring animals closer to their future families — even if only virtually. 🐕 🐈
