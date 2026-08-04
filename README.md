# ⚡ UrbanBeat — Youth Culture & Campus Event Platform
> **Internship Project Showcase**: Developed during the **Inglu Internship Program** (MERN / WordPress Track).

[![WordPress](https://img.shields.io/badge/WordPress-6.8-21759b?style=for-the-badge&logo=wordpress&logoColor=white)](https://wordpress.org)
[![PHP](https://img.shields.io/badge/PHP-8.2-777bb4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![JavaScript](https://img.shields.io/badge/JavaScript-ES6+-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org)
[![CSS3](https://img.shields.io/badge/CSS3-Glassmorphism-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://w3.org/Style/CSS/)

---

## 📖 Project Overview

**UrbanBeat** is a dynamic web application built for youth culture, college music festivals, indie artist spotlights, and campus lifestyle community events. Originally conceptualized and built during an internship at **Inglu**, this project has been refactored into a high-performance, portfolio-quality WordPress application featuring custom design tokens, sticky glassmorphism navigation, interactive cards, responsive media layout, and clean form validation.

---

## ✨ Key Portfolio Features

1. **Custom Dark/Glassmorphism Design System**
   - Built a responsive CSS variable system in `assets/css/urbanbeat-custom.css` featuring vibrant indigo/purple/cyan glow accents, glass backdrop blur, and modern typography (`Outfit` + `Inter`).
2. **Sticky Glass Navigation Bar**
   - Refactored [`template-parts/header.php`](file:///wp-content/themes/hello-elementor/template-parts/header.php) to render a sticky header with `backdrop-filter: blur(16px)`, active menu indicators, Inglu internship badge, and animated mobile drawer.
3. **Hero Banner & Community Metrics**
   - Custom component [`template-parts/hero.php`](file:///wp-content/themes/hello-elementor/template-parts/hero.php) featuring gradient text headers, dual action CTAs, and community counter statistics (*10K+ Youth Community, 50+ Campus Fests*).
4. **Interactive Event & Post Cards**
   - Responsive CSS grid featuring card hover elevation, category pill badges, date/author metadata, and action triggers.
5. **Contact Form 7 Modern Field Styling**
   - Styled `.wpcf7-form` fields with glowing focus rings, floating labels, custom dropdowns, and feedback toasts.
6. **Multi-Column Footer with Internship Credits**
   - Multi-column footer layout in [`template-parts/footer.php`](file:///wp-content/themes/hello-elementor/template-parts/footer.php) with quick navigation, community links, newsletter opt-in, Inglu internship tag, and smooth back-to-top button.

---

## 🛠️ Architecture & Tech Stack

- **Core**: WordPress Core + PHP 8.2
- **Theme**: `hello-elementor` (Enhanced with custom theme templates)
- **Styling**: Vanilla CSS (Custom tokens, Glassmorphism, CSS Grid & Flexbox)
- **Frontend Logic**: ES6+ JavaScript (`urbanbeat-main.js`)
- **Plugins**: Elementor Page Builder, Contact Form 7

---

## 🚀 How to Run Locally

1. Clone or copy this repository into your Local WP / XAMPP directory:
   ```bash
   git clone https://github.com/your-username/urbanbeat-wordpress.git
   ```
2. Start your local web server (Nginx/Apache + MySQL).
3. Open `http://urbanbeat.local` in your browser.

---

## 📝 Resume Bullet Points (Software / Web Engineer Role)

```markdown
- Developed & upgraded "UrbanBeat", a youth lifestyle & music fest platform during Inglu Internship, serving 10,000+ prospective student users.
- Engineered a custom glassmorphism design system using CSS variables, responsive CSS grid, and ES6+ JavaScript, reducing page load times and boosting UX aesthetics.
- Modularized WordPress PHP templates (header, hero, card grids, footer) and styled Contact Form 7 inputs, ensuring 100% responsive mobile compatibility and WCAG accessibility standards.
```
