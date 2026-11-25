# EQMax Tech Solutions: eqmaxtech.com

Read `HANDOVER.md` first. It explains the whole setup and links to the rest of `handover/`.

## What this repo is
- A WordPress theme called **EQMax** (v0.1.0, Tailwind CSS). It is a starter skeleton: header, footer, front page, blog index.
- The live site at https://eqmaxtech.com has more than this repo holds (service pages, product pages, the blog, the lead system). The live theme files, plugins, database and uploads are **not in this repo**. See `handover/backup-runbook.md`.
- Instagram skills (`ig-*`) in `.claude/skills/`, and a voice template in `.claude/instagram/voice.md`.

## How the website is managed
Day-to-day work (blog posts, categories, blog page text, leads) goes through the **`eqmaxtech_com` MCP connector**. Tools and rules are in `handover/backend-tools.md`.

## Hard rules
1. Call `get_writing_guide` before writing any blog post. Rules are in `handover/content-rules.md`.
2. Never invent statistics, client names, case studies, prices or guarantees.
3. Never edit `/sitemap.xml` or `/llms.txt`. They update themselves.
4. Never commit passwords, API keys, tokens or lead details to this repo.
5. Posts default to draft. Publish only when the owner asks.
6. Do not open a pull request unless asked.
