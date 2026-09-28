# BrokriO Nexus — Theme Product & Development Plan

## Vision
BrokriO Nexus is a premium, modern WordPress Full Site Editing (FSE) block theme for real-estate brokers, agencies, developers, property marketplaces, agents and property directories.

**Positioning:** Next-Generation Real Estate WordPress FSE Theme

The theme should feel like a modern real-estate platform rather than a traditional listing template.

## Product Goals
1. Native WordPress block-theme/FSE architecture.
2. Premium, modern and trustworthy visual design.
3. Reusable block patterns and template parts.
4. Mobile-first responsive UX.
5. Plugin-friendly property/listing architecture.
6. Translation-ready, including Malayalam + English use cases.
7. Accessible, performant and maintainable code.
8. Future-ready extension points for AI, maps, analytics and 3D/AR.

## Target Users
- Real-estate brokers and agents
- Real-estate agencies
- Property marketplaces
- Builders and developers
- Rental/property management businesses
- Land and commercial property businesses
- Real-estate investment websites

## Design Direction
Avoid old-style real-estate UI: crowded layouts, generic cards, excessive shadows, heavy sliders and page-builder dependency.

Use:
- Premium typography
- Large property photography
- Generous whitespace
- Modern cards
- Clear search UX
- Subtle glass/blur effects where useful
- Strong information hierarchy
- Optional dark/light style variations
- Restrained motion

**Brand:** BrokriO Nexus

Suggested tagline: **Connect. Discover. Move.**

## FSE Architecture
Core files:
- \`style.css\`
- \`theme.json\`
- \`functions.php\`

Directories:
- \`templates/\`
- \`parts/\`
- \`patterns/\`
- \`styles/\`

Initial templates:
- \`index.html\`
- \`home.html\`
- \`front-page.html\`
- \`page.html\`
- \`single.html\`
- \`archive.html\`
- \`search.html\`
- \`404.html\`

Future specialized templates can be added only when justified by UX requirements.

## Template Parts
- Header
- Mobile Header
- Footer
- Property Search
- Announcement Bar
- Breadcrumbs
- CTA
- Lead/Newsletter
- Optional Mobile Bottom Navigation

## Core Block Patterns
Homepage:
- Hero Search
- Featured Properties
- Property Categories
- Popular Locations
- Latest Projects
- Agents
- Why BrokriO Nexus
- Market Insights
- Investment CTA
- Testimonials
- Final CTA

Property:
- Property Card
- Property Grid
- Property List
- Search Results
- Property Detail Header
- Gallery
- Features
- Location
- Agent Card
- Similar Properties

Business:
- About Agency
- Services
- Team
- Contact
- FAQ

## Homepage UX
### Header
Navigation: Home, Buy, Rent, Land, Projects, Agents, About, Resources.

Actions: Search, Language, Login, Post Property.

### Hero
Headline: **A Smarter Way to Find Property**

Search:
- Buy / Rent
- Location
- Property Type
- Budget
- Area
- Bedrooms

### Categories
- Homes & Villas
- Apartments
- Residential Land
- Commercial
- Rentals
- New Projects
- Investment

### Featured Properties
Cards should show image, status, type, title, location, price, key facts, favourite and CTA.

### Smart Discovery
Provide UI foundations for future AI matching, natural-language search, saved searches and map-based discovery. These are integration points, not base-theme promises.

### Locations
Image-based location cards with name and listing count.

### Projects
Project image, location, starting price, status and CTA.

### Agents
Photo, name, location, specialization, listings and contact.

### Trust
Use UI for verification, direct contact and transparent information. Do not claim a listing is verified unless an actual verification process exists.

## Property Listing UX
Filters:
- Keyword
- Location
- Property type
- Transaction type
- Price
- Area
- Bedrooms
- Bathrooms

Views:
- Grid
- List
- Map + List (integration-ready)

Sorting:
- Newest
- Price low to high
- Price high to low
- Featured

## Single Property UX
Recommended order:
1. Breadcrumb
2. Title and location
3. Price
4. Gallery
5. Key facts
6. Description
7. Features
8. Map/location
9. Agent/owner contact
10. Enquiry form
11. Similar properties

## Design System
Use \`theme.json\` as the source of truth for:
- Typography
- Colors
- Spacing
- Border radius
- Buttons
- Layout widths

Visual direction:
- Deep navy/charcoal
- Fresh green accent
- White and soft neutral surfaces
- Strong readable typography
- Consistent rounded corners
- Systematic spacing scale

## Responsive Strategy
Mobile-first:
- Mobile
- Tablet
- Desktop
- Large desktop

Mobile UX should prioritize touch targets, compact property cards, sticky search and easy contact actions.

## Accessibility
Target modern WordPress accessibility expectations:
- Keyboard navigation
- Visible focus states
- Semantic structure
- Accessible labels
- Adequate contrast
- Alt text support
- Reduced-motion consideration
- Accessible forms

## Performance
Priorities:
- Minimal dependencies
- Minimal JavaScript
- Efficient CSS
- Native WordPress blocks
- Responsive images
- Lazy loading where appropriate
- No page-builder dependency
- Restrained animation

## Plugin Compatibility
BrokriO Nexus should be plugin-friendly rather than plugin-dependent.

Potential integration categories:
- Property/listing plugins
- Custom Post Types
- Advanced Custom Fields
- Maps
- Forms
- SEO
- WooCommerce where relevant
- Multilingual plugins

Keep plugin-specific functionality outside the core theme whenever possible.

## Future Extension Points
### AI
- AI property search
- Property recommendations
- Natural-language search
- AI enquiry assistant

### Maps
- Map search
- Radius search
- Location intelligence
- Nearby amenities

### 3D / AR / VR
- Virtual tours
- 360 galleries
- AR property previews

### Analytics
- Property views
- Enquiries
- Lead tracking
- Market dashboards

## Internationalization
Translation-ready text domain: \`brokrio-nexus\`

Potential languages:
- English
- Malayalam
- Hindi
- Arabic

Do not hard-code user-facing strings where WordPress translation functions are appropriate.

## WordPress Standards
Follow:
- WordPress coding standards
- Block Theme conventions
- \`theme.json\`
- Translation-ready practices
- Accessibility best practices
- Security best practices
- Escaping and sanitization where PHP is used

## License
Planned license: **GNU General Public License v3.0**

Confirm final licensing metadata before release.

## Development Phases
### Phase 1 — Foundation
Repository structure, theme metadata, \`style.css\`, \`theme.json\`, base templates, header, footer and global styles.

### Phase 2 — Design System
Typography, colors, spacing, buttons, cards, forms and responsive rules.

### Phase 3 — Patterns
Hero, search, property cards, property grids, categories, locations, agents, projects and CTAs.

### Phase 4 — Templates
Homepage, archive, search, single property, standard pages and 404.

### Phase 5 — Integration Readiness
Property plugin compatibility, maps, forms, custom data and translation.

### Phase 6 — QA
Responsive testing, accessibility, WordPress standards, browser testing and performance review.

### Phase 7 — Release
Documentation, screenshots, demo content, changelog, versioning and release package.

## Versioning
Initial development: \`0.1.0\`

Suggested milestones:
- \`0.1.x\` Foundation
- \`0.2.x\` Design system
- \`0.3.x\` Patterns
- \`0.4.x\` Templates
- \`0.5.x\` Integrations
- \`0.9.x\` Release candidate
- \`1.0.0\` Stable

Use semantic versioning.

## Definition of Done for v1.0
- Genuine WordPress block/FSE theme
- Activates without fatal errors
- Complete responsive homepage
- Reusable block patterns
- Global styles controlled by \`theme.json\`
- Core property layouts
- Translation-ready
- Basic accessibility expectations met
- WordPress theme standards followed
- No unnecessary dependencies
- Clear documentation
- Ready for plugin-based property data integration

## Product Principle
**BrokriO Nexus is the presentation and experience layer.**

Property management, listings, authentication, maps, AI, payments and other advanced business functions should be integrations/extensions where appropriate.

This keeps the theme lightweight, maintainable, reusable, plugin-friendly and easier to update.

## Immediate Build Order
1. \`theme.json\`
2. \`style.css\`
3. Base FSE templates
4. Header and Footer
5. Design tokens
6. Homepage
7. Property card system
8. Core patterns
9. Listing/archive templates
10. Single property template
11. Documentation and QA

**This document is the source of truth for the initial BrokriO Nexus theme build.**
