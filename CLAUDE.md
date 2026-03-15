# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Build & Quality Commands

```bash
# Install dependencies
composer install

# Static analysis (level max)
./vendor/bin/phpstan analyse

# Code style check (PSR-12 + Slevomat)
./vendor/bin/phpcs

# Auto-fix code style
./vendor/bin/phpcbf

# Run tests (no tests exist yet)
./vendor/bin/phpunit
```

## Architecture

This is a TYPO3 CMS extension (`ms_timeline`) that provides a timeline view of events.

**Namespace:** `MarekSkopal\MsTimeline`

### Key Components

- **TimelineController** (`Classes/Controller/`) - Extbase controller with `listAction()` to render the timeline
- **Event** (`Classes/Domain/Model/`) - Domain model with name, perex, description (RTE), dateFrom, dateTo
- **EventRepository** (`Classes/Domain/Repository/`) - `findAllOrdered()` returns events sorted by dateFrom DESC (newest first)

### Data Flow

1. `listAction()` loads all events ordered by `dateFrom` descending
2. Fluid template renders a timeline with alternating left/right items (odd → right, even → left)
3. CSS handles the two-column layout with a central vertical line and dot markers

### Template Structure

- `Layouts/Default.html` — wraps content in `.mstimeline-wrapper`
- `Templates/Timeline/List.html` — iterates events, passes `isOdd` flag to partial
- `Partials/Event/Item.html` — renders a single event card with date, title, perex, description

### Configuration

TypoScript Sets (TYPO3 13+) are in `Configuration/Sets/MsTimeline/`. No configurable settings — the CSS is included automatically.

## Requirements

- PHP 8.3+
- TYPO3 13.4+ or 14.1+

## Code Style

- Strict types enabled in all files
- **No constructor property promotion in Extbase domain models** — TYPO3 Extbase hydrates models by setting protected properties directly (bypassing the constructor), so properties must be declared classically with default values
- PHPStan level `max` with bleeding edge; `method.internalClass` ignored globally (needed for `getUid()` on Extbase entities)
- PSR-12 with Slevomat Coding Standard
