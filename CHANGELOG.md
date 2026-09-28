# Changelog

All notable changes to BrokriO Nexus are documented here.

## [0.1.0] — Foundation

### Added
- Initial BrokriO Nexus product and development plan.
- WordPress FSE/block-theme foundation.
- Theme metadata and GPL-3.0 licensing metadata.
- Initial `theme.json` design system with colors, typography, spacing and radius tokens.
- Header and footer template parts.
- Front page, index, home, page, single, archive, search and 404 templates.
- Basic responsive and accessibility CSS foundations.
- Reduced-motion support.
- Visible keyboard focus states.
- Mobile navigation spacing foundation.

### Fixed
- Corrected escaped font-family values in `theme.json`.
- Added foundational image sizing and link behavior.

### Validation
- Completed repository-level Phase 1 final validation.
- Confirmed required foundation files, template parts, templates, metadata and accessibility foundations are present.
- Documented runtime limitations: live WordPress activation, browser rendering, PHP lint and Theme Check remain environment-dependent.

### Design System
- Expanded global color roles and semantic status colors.
- Expanded spacing and typography tokens.
- Added radius and shadow tokens.
- Added global heading, link, button and form-control foundations.
- Documented the design system in `docs/DESIGN-SYSTEM.md`.

### UI Components
- Added reusable property card pattern.
- Added property search pattern.
- Added reusable section heading pattern.
- Added property status badge pattern.

### Property UI Patterns
- Added reusable property filter bar.
- Added property grid pattern.
- Added property metadata pattern.
- Added agent card pattern.
- Added property inquiry/viewing CTA pattern.

### Listing & Property Page Patterns
- Added listing header and toolbar patterns.
- Added property gallery and overview patterns.
- Added property details and location patterns.
- Added a composed property page layout using reusable components.

### Responsive & Component Polish
- Added responsive column behavior for property layouts.
- Improved mobile touch targets and button sizing.
- Added responsive search control behavior.
- Added focus interaction polish for controls.
- Improved image display/object-fit behavior.

### Header, Footer & Navigation
- Polished responsive header structure with logo, site title and mobile navigation.
- Expanded footer with navigation, product positioning and legal utility links.
- Improved responsive wrapping for header and footer content.

### Design System Final Validation
- Completed final repository-level review of design tokens and reusable property UI patterns.
- Added `docs/DESIGN-SYSTEM-VALIDATION.md` with validation scope and runtime limitations.
- Confirmed Phase 2 foundation is ready for the next property/business pattern layer.

### Progress
- Phase 1 FSE Foundation is complete at repository-validation level.
- Phase 2 Design System foundation is validated; Phase 3 is the next major milestone.


## Phase 3 — Property & Business Pattern Library

### Added
- Property feature list pattern
- Property status pattern
- Property contact card pattern
- Agent profile pattern
- Agent property list pattern
- Agency introduction pattern

These patterns extend the existing property discovery system into advisor and agency business experiences.

### Agency & Advisor Experience
- Added agency profile pattern.
- Added advisor directory pattern.
- Added business trust signals pattern.
- Added testimonial strip pattern.
- Added business contact conversion pattern.

### Homepage & Conversion Experience
- Added property-search hero pattern.
- Added featured properties section.
- Added three-step how-it-works section.
- Added advisor conversion CTA.
- Added composed homepage layout combining discovery, trust and conversion patterns.

### Conversion Flows & Template Integration
- Added property enquiry form pattern.
- Added seller conversion CTA.
- Added partner conversion CTA.
- Added composed homepage conversion flow.
- Added composed property conversion flow integrating discovery, trust and enquiry patterns.

### Template Integration & Final QA
- Integrated homepage conversion patterns into the main index template.
- Integrated property conversion flow into the single template.
- Simplified page template to the shared content shell.
- Aligned archive template card styling with design tokens.
- Polished the 404 template and confirmed shared header/footer usage.
- Verified all core templates reference the shared header and footer parts.

### QA Scope
Repository-level structural validation completed. Live WordPress rendering, Theme Check, PHP lint and browser/device testing remain runtime QA items.

### Release Readiness & Final Validation
- Completed repository-level release-readiness review.
- Corrected project progress/stage documentation to reflect completed Phase 3 work.
- Added `docs/RELEASE-READINESS.md` with validated checks and explicit runtime release blockers.
- Runtime certification remains pending WordPress activation, Theme Check/PHP lint, browser testing, form workflow testing and performance measurement.

### Phase 4 — Runtime Environment
- Added a Docker Compose WordPress + MySQL environment for local runtime QA.
- Mounted the repository theme directly into the WordPress themes directory for iterative testing.
- Documented the environment and remaining runtime validation gates.
