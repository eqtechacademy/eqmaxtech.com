# Backend control: the `eqmaxtech_com` connector

All day-to-day management of the live site goes through this MCP connector. It acts on the real website, so treat every write as live.

## Tools

### Blog posts
| Tool | Purpose | Notes |
|---|---|---|
| `get_writing_guide` | Rules, services to link, keywords, all existing titles | **Call first, every time.** The list changes. |
| `list_blog_posts` | id, status, date, URL | `limit` max 50; `status`: any, publish, draft. Returns newest first; older posts are unreachable. |
| `get_blog_post` | One post's text and SEO fields | By `id`. |
| `check_blog_post` | Runs the SEO/GEO checks on a post | By `id`. Use after drafting. |
| `create_blog_post` | New post | Needs `title` and `content`. Checked on creation; **published only if it passes**, otherwise saved as draft with the problems listed. `status` defaults to draft. |
| `update_blog_post` | Change fields of a post | Only passed fields change. |
| `set_featured_image` | Set featured image from an https URL | Needs `id`, `image_url`; add `image_alt`. Image is copied into the media library. |
| `trash_blog_post` | Move to WordPress trash | Removes it from blog, sitemap and llms.txt. Owner can restore for 30 days. Ask the owner before using. |

`create_blog_post` / `update_blog_post` fields: `title`, `content` (Markdown or HTML, no H1), `answer` (40 to 60 words), `excerpt`, `category` (exact existing name), `keywords` (5 to 8, comma separated), `seo_title` (up to 60 chars), `seo_description` (120 to 155 chars), `slug` (3 to 6 hyphenated keywords), `image_url`, `image_alt` (under 125 chars), `status`.

### Pages and categories
| Tool | Purpose |
|---|---|
| `get_blog_page` | Read the blog page H1 and intro (currently "EQMax Blog: AI, Apps and Growth", at `/blogs/`). |
| `update_blog_page` | Change the H1 (up to 60 chars) or intro (one or two sentences). |
| `list_categories` | Categories with post counts, URLs, intro text. |
| `update_category` | Create or edit a category: `name`, optional `new_name`, `description` (120 to 155 chars; used as page intro and search description). |

### Leads ("Sales Engine" format)
| Tool | Purpose |
|---|---|
| `list_leads` | Newest first. Filters: `status` (new, contacted, qualified, proposal, won, lost), `form` (questionnaire, report, booking, contact, demo, career, import, whatsapp), `landing` (key such as engine, hms, svc), `search`, `limit` (max 100). |
| `get_lead` | One lead in full. |
| `add_lead` | Add a lead (name, company, email, phone, city, source, service, notes, social URLs, follow-up date, and more). Duplicates are skipped. |
| `update_lead` | Change `lead_status`, `next_followup_date` (YYYY-MM-DD) or add a `notes` entry. |

Lead records contain personal data. Never copy them into this repo, a blog post, a social post or a public document.

## Standard workflow for a new blog post
1. `get_writing_guide` and confirm the topic is not already published.
2. Draft to the rules in `content-rules.md`. Use only facts the owner gave you or that you can cite.
3. `create_blog_post` with `status: draft` and all SEO fields.
4. `check_blog_post` and fix every problem.
5. `set_featured_image` with a licensed 1200 x 630 image and real alt text.
6. Show the owner the draft. Publish only on their instruction (`update_blog_post` with `status: publish`).

## Safety rules
- No invented statistics, clients, case studies, prices or guarantees.
- Never edit `/sitemap.xml` or `/llms.txt`; they update automatically on publish and trash.
- Publishing is allowed only because the site owner enabled it. If a publish is refused, do not try to bypass it.
- A trashed post leaves the sitemap immediately. Confirm with the owner first.
- Do not store the connector's address or sign-in in this repo.
