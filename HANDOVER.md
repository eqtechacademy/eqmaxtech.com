# EQMax Tech Solutions: Website Handover

Written 2026-11-25 for a new Claude account or Claude Code session taking over management of https://eqmaxtech.com.

## 1. The business
EQMax Tech Solutions is an AI-first technology company in Kochi, Kerala. It builds custom web apps, AI automations and digital marketing systems that help businesses generate leads and grow.

- Address: Heavenly Plaza Business Center, H3, 3rd Floor, Vazhakkala, Kochi 682021, Kerala, India
- Related brand: **EQTech Academy** ("Empowering Your IT Career"), a practical IT, AI and digital marketing training initiative.
- Owner's focus: banking technology, AI, digital transformation, entrepreneurship, education.

## 2. How the website is built
| Layer | What it is | Where it lives |
|---|---|---|
| CMS | WordPress | Live host (not in this repo) |
| Theme | **EQMax**, v0.1.0, PHP templates + Tailwind CSS 3 + esbuild | This repo (starter version only) |
| Backend control | `eqmaxtech_com` MCP connector: blog, categories, blog page, leads | Connector on the owner's Claude account |
| Lead system | "Sales Engine" format leads captured from site forms | Live site |
| SEO/GEO | Checked on every post; sitemap and `/llms.txt` auto-update | Live site |

Product sub-sites (separate apps on subdomains): Car Wash Management at `eqwash.eqmaxtech.com`, Cleaning Company Management at `deepcleaner.eqmaxtech.com`.

## 3. What is and is not in this repo
**In this repo**
- `style.css`, `functions.php`, `header.php`, `footer.php`, `front-page.php`, `index.php`: the EQMax theme.
- `src/main.css`, `src/main.js`, `tailwind.config.js`, `package.json`: the Tailwind/esbuild build.
- `.claude/skills/ig-*`: 13 Instagram skills (MIT, from Jakeschincariol/instagram-agent-skill).
- `handover/`: this documentation.

**NOT in this repo (verified 2026-11-25)**
- The live theme's full files (the repo theme is a minimal skeleton: one hero heading on the front page).
- The list of installed WordPress plugins and their settings.
- The custom plugin or code that exposes the `eqmaxtech_com` backend tools and the lead forms. Its code was not visible from here.
- The database, the media uploads, `wp-config.php`, hosting and DNS details.

Those need an export by the owner. Follow `handover/backup-runbook.md`, then store the export somewhere private (not this public repo).

## 4. Reading order for a new Claude
1. `CLAUDE.md` (rules)
2. This file
3. `handover/backend-tools.md` (what you can do to the live site)
4. `handover/content-rules.md` (how posts must be written)
5. `handover/content-inventory.md` (what already exists; do not repeat topics)
6. `handover/theme.md` (theme and build)
7. `handover/integrations.md` (social, voice, design, storage connectors)
8. `handover/backup-runbook.md` (closing the gaps in section 3)

## 5. First steps in a new account
1. In claude.ai connector settings, add the `eqmaxtech_com` connector. The owner must supply the connector address and sign-in; they are not recorded here.
2. Run `get_writing_guide`. It returns the live rules, services, keywords and existing posts.
3. Run `list_blog_posts` and `list_categories` to confirm access.
4. Reconnect the other connectors in `handover/integrations.md` that you need.

## 6. Current state snapshot (2026-11-25)
- 78 posts in the writing guide's list: 75 published, 3 drafts (see `handover/content-inventory.md`).
- 15 categories, 6 of them with no intro text (Business Software, Hospital Software, Mobile Apps, Software, Uncategorized, Website Development).
- Publishing through the connector is allowed.
- Most recent posts cover EQMax products (HMS, Car Wash, Cleaning, Agency Management, Lead Management) and local-SEO topics for Kochi.

## 7. Known gaps and risks
- Theme, plugins, database and uploads are not backed up in this repo. Until the runbook is done, a hosting failure could lose them.
- The `list_blog_posts` tool returns at most 50 posts, so IDs of the 28 older posts cannot be listed through it.
- Six categories show a default intro. Adding a 120 to 155 character description to each (`update_category`) would help SEO.
- The repo contains an empty file named `Sarangi` from an earlier commit. It is unrelated to the site and can be deleted.
