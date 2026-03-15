# Timeline for TYPO3 CMS

Timeline events as a content element in TYPO3. Events with a name, short description, and date range are managed in the TYPO3 backend; the frontend renders a responsive two-column timeline with alternating left/right cards.

## Features

- Events with name, perex, description (RTE), date from, and optional date to
- Events sorted by date (newest first)
- Alternating left/right card layout with a central vertical line
- Customizable templates and styling

## Requirements

- PHP 8.3+
- TYPO3 13.4 or 14.x

## Installation

```bash
composer require marekskopal/typo3-timeline
```

After installation, run the database analyser in the TYPO3 Install Tool to create the required tables.

## Setup

Include the TypoScript Set **Timeline** in your site package or via the site configuration sets.

## Backend Setup

Create **Timeline Event** records on the page where the content element is placed:

- **Title** — event title (required)
- **Subtitle** — optional subtitle shown below the title
- **Perex** — short summary shown on the card
- **Description** — full RTE description
- **Date From** — event start date (required, used for sorting)
- **Date To** — event end date (optional)

Then add the **Timeline** content element to the same page.

## Customization

### Templates

Override templates by setting custom paths in TypoScript:

```typoscript
plugin.tx_mstimeline.view.templateRootPaths.10 = EXT:your_extension/Resources/Private/Templates/MsTimeline/
plugin.tx_mstimeline.view.partialRootPaths.10  = EXT:your_extension/Resources/Private/Partials/MsTimeline/
plugin.tx_mstimeline.view.layoutRootPaths.10   = EXT:your_extension/Resources/Private/Layouts/MsTimeline/
```

### Styling

The extension includes minimal CSS. Key classes:

| Class | Element |
|-------|---------|
| `.mstimeline-wrapper` | Outer wrapper |
| `.mstimeline` | Timeline container |
| `.mstimeline__item` | Single event row |
| `.mstimeline__item--left` | Card positioned on the left |
| `.mstimeline__item--right` | Card positioned on the right |
| `.mstimeline__dot` | Central dot marker |
| `.mstimeline__card` | Event card |
| `.mstimeline__date` | Date label |
| `.mstimeline__title` | Event title |
| `.mstimeline__subtitle` | Event subtitle |
| `.mstimeline__perex` | Short description |
| `.mstimeline__description` | Full RTE description |

## License

GPL-2.0-or-later
