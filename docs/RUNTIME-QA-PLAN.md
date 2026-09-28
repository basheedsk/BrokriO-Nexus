# Phase 4 — Runtime QA & Performance Validation

## Runtime QA matrix
- [ ] Activate theme in a current WordPress test site.
- [ ] Open Site Editor and validate templates/patterns without block recovery warnings.
- [ ] Check homepage, archive, single property, page and 404 routes.
- [ ] Test desktop, tablet and mobile layouts.
- [ ] Keyboard navigation: skip/navigation, menus, links, forms and focus visibility.
- [ ] Reduced-motion preference: verify transitions/animations remain usable.
- [ ] Test property enquiry form submission and validation.
- [ ] Check image loading, responsive sizing and broken-media states.
- [ ] Run WordPress Theme Check and PHP lint.

## Performance checks
- [ ] Measure Core Web Vitals in a production-like environment.
- [ ] Check LCP/CLS/INP on homepage and single-property pages.
- [ ] Inspect image dimensions, lazy loading and network requests.
- [ ] Confirm no unnecessary third-party assets are loaded.
- [ ] Test cache/compression behavior on the deployed host.

## Runtime environment
A local Docker Compose environment is now defined in `docker-compose.yml` using WordPress + MySQL, with the repository mounted as the BrokriO Nexus theme. Start it locally with Docker Compose, complete the WordPress setup, activate the theme, and use the checklist below.

## Current result
Runtime environment definition is complete. Actual browser/rendering, form, Theme Check, PHP lint and performance measurements still require the environment to be started and tested.

## Release gate
Phase 4 remains open until the runtime checklist and performance measurements are recorded.
