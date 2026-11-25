# Backup runbook: closing the gaps

This repo does **not** contain the live theme, plugins, database or uploads. Claude could not reach the WordPress host or its files from this environment, so these steps are for the site owner (or a developer) to perform. A new Claude can guide you through them but cannot do them alone.

Store the results in a **private** location (private Drive folder or private repo). This repo is public: do not commit exports, `wp-config.php`, database dumps or credentials here.

## What to capture
| # | Item | Why it matters |
|---|---|---|
| 1 | Full-site backup (files + database) | Complete restore point |
| 2 | Live theme folder (`wp-content/themes/<active-theme>`) and any child theme | The real design; the repo theme is only a skeleton |
| 3 | Plugin list with versions and settings | Not known to Claude; the lead forms and backend connector depend on them |
| 4 | The custom plugin or code behind the `eqmaxtech_com` connector and lead forms | Without it, the connector's blog and lead tools stop working after a rebuild |
| 5 | Media uploads (`wp-content/uploads`) | All post images |
| 6 | Content export (WordPress XML) | Posts, pages, categories in a portable form |
| 7 | Hosting, domain registrar, DNS records, email setup | Needed to move or recover the site |
| 8 | Third-party accounts (analytics, Search Console, Google Business, forms) and who owns them | Ownership continuity |

## Steps
1. **Full backup.** Use the host's backup or snapshot tool, or a backup plugin already on the site. Download the result.
2. **Plugin list.** In WordPress admin go to Plugins, Installed Plugins and screenshot or copy the names and versions. With WP-CLI on the host: `wp plugin list --format=csv`.
3. **Active theme.** Appearance, Themes shows which theme is active and whether a child theme is used. Copy the folder over SFTP or the host's file manager. With WP-CLI: `wp theme list --format=csv`.
4. **Content export.** Tools, Export, All content, Download Export File.
5. **Database dump.** Via the host (phpMyAdmin or backup tool) or `wp db export`.
6. **Uploads.** Copy `wp-content/uploads` (large; use SFTP or the host's backup).
7. **Settings record.** Note Settings, Permalinks, Reading (front page and blog page `/blogs/`), and active menus.
8. **DNS and hosting.** Export the DNS zone from the registrar. Note the host, plan and renewal dates.
9. **Credentials.** Put logins in a password manager shared with a trusted second person. Never in chat, never in this repo.

## After the export
1. Put the private files somewhere safe and note their location in the password manager.
2. Tell Claude the active theme name, plugin names and versions (not logins). Claude will add them to `HANDOVER.md` section 3.
3. If the live theme is copied into a private repo, tell Claude the repo name; it can then document the live templates the way `theme.md` documents the skeleton.
4. Test a restore on a staging site at least once. A backup that has never been restored is unproven.
5. Schedule recurring backups (weekly at minimum, daily if posts or leads change daily) and repeat this runbook after major changes.

## Restoring from scratch (outline)
1. New WordPress install on the host.
2. Restore the full backup, or import the XML export, restore uploads and the database.
3. Activate the theme and the required plugins, including the custom connector plugin.
4. Check Settings, Permalinks and the blog page address `/blogs/`.
5. Reconnect the `eqmaxtech_com` connector in the Claude account and run `get_writing_guide` to confirm it responds.
6. Confirm `/sitemap.xml` and `/llms.txt` load.
