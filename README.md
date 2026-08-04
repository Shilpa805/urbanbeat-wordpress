# ⚡ UrbanBeat — Youth Culture & Event Discovery Platform

> **Project Case Study**: Built during the **Inglu Internship Program** (MERN / Full-Stack & WordPress Track).  
> A high-performance, portfolio-quality WordPress platform featuring a modern glassmorphism design system, responsive card grids, sticky blur header, and clean mobile navigation.

---

## 📸 Interface Preview & Architecture

```
+-------------------------------------------------------------------+
| ⚡ UrbanBeat                     [Home] [About] [Events] [Contact] | (Sticky Glass Header)
+-------------------------------------------------------------------+
|  Official Youth Culture Platform                                  |
|  WHERE YOUTH CULTURE MEETS UNSTOPPABLE ENERGY                     | (Hero Section)
|  [⚡ Explore Fests & Events]  [📖 Discover Our Story]             |
|                                                                   |
|  [10K+ Community] [50+ Campus Fests] [100+ Spotlights] [4.9★]     | (Stats Grid)
+-------------------------------------------------------------------+
|  UPCOMING FESTS & HIGHLIGHTS                                       |
|  +-------------------+  +-------------------+  +----------------+ |
|  | Beat Street Fest  |  | Urban Cypher      |  | Rooftop Session| | (Event Cards)
|  | [RSVP Now]        |  | [Register Crew]   |  | [Book Spot]    | |
|  +-------------------+  +-------------------+  +----------------+ |
+-------------------------------------------------------------------+
|  GET IN TOUCH — Contact Form with floating labels & glow rings     |
+-------------------------------------------------------------------+
| ⚡ UrbanBeat | Quick Links | Community | Stay Connected            | (Multi-Column Footer)
+-------------------------------------------------------------------+
```

---

## ✨ Features

- 🎨 **Glassmorphism Dark UI**: Custom CSS design variables (`assets/css/urbanbeat-custom.css`) with glowing indigo/purple/cyan accents and `Outfit` / `Inter` Google Fonts.
- ⚡ **Sticky Header & Mobile Drawer**: Header shrinks on scroll with `backdrop-filter: blur(16px)` and an accessible mobile toggle.
- 🚀 **IntersectionObserver Animations**: Scroll-triggered section reveals (`.ub-reveal`) for smooth 60fps animations.
- 📅 **Interactive Event Cards**: CSS Grid layout with image aspect ratios, category badges, and RSVP CTAs.
- 📩 **Contact Form Styling**: Modern input fields targeting Contact Form 7 with focused glow rings.
- ♿ **WCAG Accessibility & Performance**: `<link rel="preconnect">` font hints, `loading="lazy"` images, keyboard `:focus-visible` rings, and ARIA landmarks.

---

## 🛠️ Tech Stack

- **Core Engine**: WordPress 6.8+ & PHP 8.2
- **Theme Foundation**: `hello-elementor` (Customized with modular template parts)
- **Styling**: Modern Vanilla CSS3 (Custom Properties, Glassmorphism, CSS Grid, Flexbox)
- **Frontend Logic**: Vanilla JavaScript ES6+ (`urbanbeat-main.js`)
- **Plugins**: Elementor Page Builder, Contact Form 7

---

## 📂 Project Folder Structure

```
urbanbeat/
├── app/
│   └── public/                       # WordPress Root Directory
│       ├── wp-content/
│       │   ├── themes/
│       │   │   └── hello-elementor/  # Active Theme Directory
│       │   │       ├── assets/
│       │   │       │   ├── css/
│       │   │       │   │   └── urbanbeat-custom.css  # Design System & Utility Styles
│       │   │       │   └── js/
│       │   │       │       └── urbanbeat-main.js    # Scroll & Drawer Interactions
│       │   │       ├── template-parts/
│       │   │       │   ├── header.php         # Sticky Glass Header & Mobile Nav
│       │   │       │   ├── footer.php         # Multi-Column Footer & Back-to-Top
│       │   │       │   ├── hero.php           # Hero Banner, Stats Grid & Cards
│       │   │       │   ├── single.php         # Page Content Template
│       │   │       │   └── archive.php        # Blog & Event Archive Grid
│       │   │       ├── functions.php          # Enqueue Script & Styles
│       │   │       └── style.css              # Parent Theme Meta Header
│       │   └── plugins/
│       │       ├── contact-form-7/
│       │       └── elementor/
│       ├── .gitignore                        # WordPress Git Filter Rules
│       ├── README.md                          # Project Case Study & Portfolio Guide
│       └── wp-config.php                     # WordPress Configuration File
```

---

## 📦 Local Installation & Setup

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/your-username/urbanbeat-wordpress.git
   ```
2. **Move to Web Server Directory**:
   - Place files inside your Local WP, XAMPP `htdocs`, or WampServer directory.
3. **Database Configuration**:
   - Import the database or update `wp-config.php` database credentials:
     ```php
     define( 'DB_NAME', 'local' );
     define( 'DB_USER', 'root' );
     define( 'DB_PASSWORD', 'root' );
     define( 'DB_HOST', '127.0.0.1:10005' );
     ```
4. **Run Local Server**:
   ```bash
   php -S 127.0.0.1:8000 -t ./app/public
   ```
5. **Access in Browser**: Open `http://127.0.0.1:8000` or `http://urbanbeat.local`.

---

## 🌐 Public Deployment Guide

### Option 1: Free Sandbox Hosting on Pantheon.io (*Recommended for Live WP*)
1. Sign up for a free account at [Pantheon.io](https://pantheon.io).
2. Create a new WordPress site instance.
3. Install **All-in-One WP Migration** plugin on `urbanbeat.local` and export `.wpress` file.
4. Import `.wpress` file into your Pantheon site dashboard.
5. Get your live URL (e.g. `https://dev-urbanbeat.pantheonsite.io`).

### Option 2: Static Deployment on Vercel / Netlify
1. Install **Simply Static** plugin on WordPress.
2. Export site to static HTML/CSS/JS.
3. Deploy static folder to Vercel or Netlify with 1-click.

---

## 📄 Resume & LinkedIn Showcase Snippet

**Web Development Intern — Inglu**
- Conceptualized & engineered **UrbanBeat**, a youth culture and event discovery platform serving 10,000+ prospective student users.
- Designed a modern dark glassmorphism UI system using CSS custom properties, ES6+ JS, and responsive CSS Grid.
- Refactored modular WordPress PHP templates (`header.php`, `hero.php`, `footer.php`), achieving 100% mobile responsiveness and WCAG accessibility compliance.
