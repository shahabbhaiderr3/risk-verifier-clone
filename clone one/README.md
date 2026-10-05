# Risk Verifier - Landing Page & WordPress Theme

This project provides a pixel-perfect, clean, high-performance landing page cloned from [riskverifier.com](https://riskverifier.com/) engineered to work **both** as a standalone website and as an easily installable **WordPress Theme**.

---

## 🚀 How to Use

### Option 1: Standalone HTML / Direct Browser Preview
- Open [`index.html`](./index.html) directly in any web browser or through VS Code Live Server.
- All styles, images, fonts, and scripts are fully bundled and functional.

---

### Option 2: Deploy as a WordPress Theme (Zero-Hassle)
The files in this directory are structured according to standard WordPress Theme architecture:

- **`style.css`**: Standard WordPress theme header declaration + all responsive CSS styles.
- **`functions.php`**: Automatically enqueues Google Fonts (`Exo`, `Roboto`), Font Awesome 6 icons, main CSS, and JavaScript, while registering navigation menus and theme supports.
- **`header.php`**: Semantic `<head>` with `wp_head()`, top contact bar, sticky navbar, and responsive mobile navigation drawer.
- **`front-page.php`**: Full landing page template with hero section, feature badges, About Us, What We Do, 12 Available Services cards, Why Choose Us, and CTA banner.
- **`footer.php`**: Footer with Regional Offices, PBSA accreditation badge, service navigation links, newsletter form, and copyright.
- **`index.php`**: Core WordPress fallback template.
- **`script.js`**: Mobile drawer toggle, sticky header scroll shadow, and smooth scroll-to-top interaction.

#### Installation Steps in WordPress:
1. **Via FTP / File Manager**:
   - Copy this folder into your WordPress installation at:
     ```
     /wp-content/themes/riskverifier/
     ```
   - Go to **WP Admin &rarr; Appearance &rarr; Themes**.
   - Click **Activate** on **Risk Verifier**.

2. **Via WordPress Admin Zip Upload**:
   - Compress the files (`style.css`, `index.php`, `front-page.php`, `header.php`, `footer.php`, `functions.php`, `script.js`) into a `.zip` file (e.g. `riskverifier-theme.zip`).
   - In WP Admin, navigate to **Appearance &rarr; Themes &rarr; Add New &rarr; Upload Theme**.
   - Select the zip file and click **Install Now**, then **Activate**.

---

## 🎨 Design System & Highlights
- **Primary Navy**: `#000F41`
- **Forest Green**: `#0C522D`
- **Risk Red**: `#A31D1D`
- **Light Background**: `#F8FAFD`
- **Typography**: Google Fonts (*Exo* for headings, *Roboto* for body text)
- **Icons**: Font Awesome 6
- **Responsiveness**: Fully responsive across mobile (< 600px), tablet (600px - 1024px), and desktop.
