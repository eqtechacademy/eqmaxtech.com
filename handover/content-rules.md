# Content rules (from the site's writing guide, 2026-11-25)

The live source of truth is the `get_writing_guide` tool. If it differs from this file, follow the tool.

## Voice
- Write for business owners in plain English. Short sentences. No hype.
- Never invent statistics, client names, case studies, prices or guarantees. If a number was not given to you, do not use one.
- Name the business and place plainly (EQMax Tech Solutions, Kochi, Kerala) where it fits, so search engines and AI assistants connect the post to the business.

## Structure
- 700 to 1,200 words. One idea per paragraph; paragraphs of two to four sentences.
- Open with a 40 to 60 word paragraph that answers the title question directly. Pass the same text as `answer`. It appears under the title, so do not repeat it word for word in the body.
- The title is the page's only H1. Never put a `#` heading in the content. Use `##` sections and `###` under them.
- Write `##` headings as the questions readers ask. Begin each section with a one-sentence answer, then the detail.
- At least two `##` headings.
- Use bulleted lists for options, numbered lists for steps, and a table for comparisons.
- Link to one or two relevant service or product pages (list below) using Markdown links. At least one is required.
- End with a short next step inviting a free strategy session.
- Do not repeat a topic that is already published.

## SEO fields
- SEO title: up to 60 characters, main keyword near the start.
- SEO description: 120 to 155 characters, with a reason to click.
- Keywords: 5 to 8, comma separated.
- Slug: three to six keywords with hyphens.
- Excerpt: one or two sentences for blog cards.
- Featured image: 1200 x 630 JPG or WebP, licensed for use, matching the topic, with descriptive alt text under 125 characters. No images inside the body text.

## Services and products to link to
- Agency Management Software: https://eqmaxtech.com/products/eqmax-engine-pro/
- AI Automation: https://eqmaxtech.com/services/ai-automation-company-kochi/
- Custom Web App Development: https://eqmaxtech.com/services/custom-web-app-development-kochi/
- Hospital Management Software: https://eqmaxtech.com/products/eqmax-hospital-management-software/
- Car Wash Management: https://eqwash.eqmaxtech.com/features/
- Mobile App Development: https://eqmaxtech.com/services/mobile-app-development-kochi/
- Cleaning Company Management Software: https://deepcleaner.eqmaxtech.com/features/
- Website Development: https://eqmaxtech.com/services/website-development-company-kochi/
- Digital Marketing: https://eqmaxtech.com/services/digital-marketing-agency-kochi/
- Lead Generation Marketing: https://eqmaxtech.com/services/lead-generation-agency-kochi/
- Business Growth Strategy Consulting: https://eqmaxtech.com/services/business-growth-strategy-kerala/
- AI Reel Production: https://eqmaxtech.com/services/ai-reel-production/
- AI Video Creation: https://eqmaxtech.com/services/ai-video-creation/
- Content Creation: https://eqmaxtech.com/services/content-creation/
- Social Media Management: https://eqmaxtech.com/services/social-media-management/
- Meta Ads: https://eqmaxtech.com/services/meta-ads-agency-kochi/
- Google Ads: https://eqmaxtech.com/services/google-ads-agency-kochi/
- SEO Services: https://eqmaxtech.com/services/seo-services-kochi/
- GEO Optimisation: https://eqmaxtech.com/services/geo-optimization-agency-india/
- Branding and Design: https://eqmaxtech.com/services/branding-and-design/

## Target keywords
AI automation company in Kochi, AI automation Kerala, Custom web app development Kochi, Mobile app development Kochi, Website development company Kochi, Digital marketing agency Kochi, Lead generation agency Kerala, SEO and GEO services, WhatsApp automation, n8n workflow automation, Business growth consulting Kerala, Hospital management software India.

## Categories in use
Agency Management Software, AI Automation, Business Software, Digital Marketing, Growth Strategy, Healthcare, Hospital Software, Lead Generation, Mobile Apps, SEO and GEO, Software, Uncategorized, Web Apps, Website Development, Websites. Reuse one of these where it fits.

## Automatic checks
`check_blog_post` tests title and description length, the 40 to 60 word answer, headings, length, internal links, and image with alt text. A post that fails is saved as a draft with the problems listed.
