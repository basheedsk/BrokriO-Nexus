# BrokriO Nexus — Design System

## Phase 2 Foundation

The design system is the shared visual language for the theme. It is implemented primarily through `theme.json` so the WordPress Site Editor remains the source of truth.

### Color roles
- **Ink:** primary text and high-contrast surfaces.
- **Ink Soft:** secondary headings and emphasis.
- **Muted:** supporting text.
- **Surface:** subtle page sections.
- **Surface Strong:** elevated neutral surfaces.
- **White:** primary light surface.
- **Brand:** primary actions and links.
- **Brand Dark:** deeper brand states.
- **Brand Soft:** soft brand backgrounds.
- **Border / Border Strong:** component separation.
- **Success / Warning / Danger:** semantic status states.

### Typography
- Interface Sans: primary UI and body type.
- Editorial Serif: optional editorial accent.
- Responsive display scale from compact labels through large hero headings.
- Tight heading line-height and subtle negative tracking for premium presentation.

### Spacing
A consistent token scale runs from 0 through 4XL. Patterns should use tokens rather than arbitrary spacing wherever possible.

### Surfaces
Cards and panels should remain restrained:
- medium/large corner radius
- subtle shadows
- clear borders
- strong whitespace

### Controls
Buttons use pill geometry by default. Inputs and textareas use medium radius and comfortable touch spacing.

### Accessibility
Focus visibility, readable contrast, reduced-motion behavior and touch-friendly controls remain mandatory foundations.

## Phase 2 Rule

Build reusable patterns from these tokens. Avoid introducing one-off colors, spacing values or component styles unless there is a documented design reason.
