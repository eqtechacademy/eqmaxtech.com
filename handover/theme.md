# EQMax WordPress theme (this repo)

Status: **starter skeleton, v0.1.0.** It is not a copy of the full live theme. Treat it as the base for a rebuild, or replace it with an export of the live theme (see `backup-runbook.md`).

## Files
| File | Role |
|---|---|
| `style.css` | WordPress theme header only: name EQMax, author EQMax Tech Solutions, version 0.1.0, requires WP 6.0 and PHP 7.4, text domain `eqmax`. No styling; styles come from the Tailwind build. |
| `functions.php` | Theme supports `title-tag`, `post-thumbnails`, HTML5 markup; registers one menu location `primary`; enqueues `assets/css/main.css` and `assets/js/main.js` if they exist (versioned by file modification time). |
| `header.php` | HTML head, site name link, primary menu in a `nav`. |
| `footer.php` | Copyright line with site name and current year. |
| `front-page.php` | Home page: heading "EQMax Tech Solutions" and the line "Software, AI and digital solutions from Kochi." |
| `index.php` | Fallback loop: post titles and excerpts, pagination. |
| `src/main.css` | Tailwind entry (`base`, `components`, `utilities`). |
| `src/main.js` | Front-end entry; adds a `js` class to `<html>`. |
| `tailwind.config.js` | Scans `*.php`, `template-parts/**/*.php`, `src/**/*.js`. Brand colour `brand` = `#0f62fe`, `brand-dark` = `#0043ce`. |
| `package.json` | Build scripts and dev dependencies. |
| `Sarangi` | Empty stray file; safe to delete. |

## Build (verified 2026-11-25 with Node 22 and npm 10)
```bash
npm install
npm run build      # minified CSS + JS into assets/
npm run dev        # watch mode for CSS and JS
```
`assets/` is not committed and not git-ignored. Run the build before packaging the theme, otherwise the site loads no styles.

## Install on WordPress
1. Run `npm install && npm run build`.
2. Zip the theme folder (without `node_modules/` and `.git/`), with `style.css` at its root.
3. WordPress admin, Appearance, Themes, Add New, Upload Theme.
4. Appearance, Menus: assign a menu to **Primary Menu**.

Do this on a staging copy first. Activating it on the live site replaces the live design.

## Known limits
- No templates for single posts, pages, categories, 404, or search. WordPress falls back to `index.php`.
- No service or product page templates. The live site has these; they are not in this repo.
- No `template-parts/` folder, although the Tailwind config expects one.
- Blog design for the live site (answer paragraph under the title, category intros, `/blogs/` layout) is not in this theme.
