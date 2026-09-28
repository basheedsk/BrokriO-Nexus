# Phase 4 — Runtime QA & Performance Validation

## Runtime QA matrix
- [x] Activate theme in a current WordPress test site.
- [ ] Open Site Editor and validate templates/patterns without block recovery warnings.
- [x] Check public homepage and missing-route response through live runtime/audit tooling.
- [ ] Check archive, single property and page routes with interactive browser inspection.
- [ ] Test desktop, tablet and mobile layouts interactively.
- [ ] Keyboard navigation: skip/navigation, menus, links, forms and focus visibility.
- [ ] Reduced-motion preference: verify transitions/animations remain usable.
- [ ] Test property enquiry form submission and validation.
- [ ] Check image loading, responsive sizing and broken-media states.
- [ ] Run WordPress Theme Check and PHP lint.

## Performance checks
- [x] Measure Core Web Vitals in a production-like staging environment using mobile lab audit.
- [x] Record homepage LCP/CLS/TBT/FCP/Speed Index.
- [ ] Record single-property LCP/CLS/INP with a real property route.
- [ ] Inspect image dimensions, lazy loading and network requests.
- [ ] Confirm no unnecessary third-party assets are loaded.
- [x] Inspect cache configuration on the deployed host.
- [ ] Validate cache/compression behavior after final configuration changes.

## Runtime environment
The Hostinger staging site is connected through WPVibe. BrokriO Nexus is active and the WordPress runtime is reachable.

A local Docker Compose environment is also defined in `docker-compose.yml` using WordPress + MySQL, with the repository mounted as the BrokriO Nexus theme.

## Current result
The live staging homepage renders as an FSE WordPress site and has a 100/100 mobile performance lab score:
- LCP: 1.6s
- CLS: 0
- TBT: 0ms
- FCP: 0.9s
- Speed Index: 2.4s
- No opportunities flagged by the cached audit
- No field data available because the staging site lacks sufficient real-user traffic

SEO audit currently reports missing stored SEO title, description and canonical metadata for the Privacy Policy page.

LiteSpeed Cache is enabled, with object cache enabled. CSS/JS/HTML minification and image optimization/lazy-loading are currently disabled.

## Release gate
Phase 4 remains open until the remaining interactive browser checks, form validation, Theme Check/PHP lint and final single-property/performance checks are recorded.
