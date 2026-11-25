# Connected tools and accounts (state seen 2026-10-29 to 2026-11-25)

Connections belong to the previous Claude account. A new account must reconnect them in claude.ai connector settings. No passwords, tokens or API keys are recorded here and none should be.

## Social publishing: SocialAPI connector
- Plan: **free**. Limits per billing period: 10 posts, 50 interactions (each automated DM costs 1), 2 brands. Upgrade for real volume.
- One brand holds all six accounts:

| Platform | Account | Access granted |
|---|---|---|
| Instagram | @eqmaxtech (EQMax Tech Solutions) | posts, comments, DMs, analytics |
| Facebook | the owner's personal login, with two Pages: **Eqmax Tech Solutions** (default) and **Eqtech.academy** | posts, comments, DMs, analytics |
| WhatsApp | Eqmax Tech Solutions business number (see the SocialAPI account list) | DMs only |
| LinkedIn | the owner's personal profile | publish only; cannot read comments or send messages |
| Google Business Profile | EQMax Tech Solutions: Digital Marketing Company in Kochi | posts, reviews, analytics; profile details cannot be edited through this connector |
| YouTube | @eqtech.academy (EQtech Academy) | posts, comments, analytics |

- **Instagram comment-to-DM:** the connector can create a follow-gated automation (keyword comment triggers a private reply; the link is sent only if the person follows). Built for a "SKILL" PDF-guide campaign; nothing was switched on.
- LinkedIn auto-reply to commenters is not possible with this connection.

## Instagram skills (this repo)
13 skills in `.claude/skills/ig-*`, source https://github.com/Jakeschincariol/instagram-agent-skill (MIT): ig-reel, ig-viral, ig-caption, ig-carousel, ig-story, ig-profile, ig-plan, ig-human, ig-comment, ig-reply, ig-dm, ig-repurpose, ig-audit. They write; the owner posts. They read `~/.claude/instagram/voice.md`. A blank template is at `.claude/instagram/voice.md`; fill it in or provide three of the owner's own reels.

## Voice and video: ElevenLabs
- Malayalam voice chosen by the owner: **Mahendran J, Relatable & Natural** (voice id `r5NKPDP5GRBdMttFWA9M`). The News Bulletin Anchor variant is `Unkn6jPAqw7ltVslVduh`.
- Credits were **0** on 2026-10-29, so no voiceover has been generated. A short sample costs about 200 credits.
- Scripts are written in Malayalam script; a native speaker should proof them.

## Other connectors seen (availability varies by session)
Canva (one brand kit), Google Drive, Gmail, Google Calendar, Slack, Supabase, Vercel (team `Eqmax`, no projects found 2026-11-25), GitHub, Metricool, Orshot, Shopify, Speko, Hugging Face, EQ Wash website tools.

## GitHub repositories on the owner's account
| Repo | Visibility | Note |
|---|---|---|
| eqtechacademy/eqmaxtech.com | public | This repo: theme skeleton, skills, handover |
| eqtechacademy/eqmaxwhatsapp | private | Not reviewed |
| eqtechacademy/aegis | public | Not reviewed |
| eqtechacademy/saragi | private | Not reviewed |

This repo is public. Keep anything private out of it.

## Open work in progress
- Campaign: 15 Malayalam reels on "AI skills" (Claude skills, custom GPTs, Jarvis-style assistants), each with a blog post, a PDF guide, LinkedIn, Google Business and YouTube Shorts versions. Only reel 1's script exists (a Claude Skills reel). Not yet created: blog drafts, PDFs, automations.
- Publishing mode agreed with the owner: drafts first, owner approves before anything goes public.
