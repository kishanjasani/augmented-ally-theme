# Augmented Ally Theme
Fullsite Editing Theme for Augmented Ally.

## Understand the Folder Structure :open_file_folder:
```
├── assets (theme's assets)
│   └── src
│       └── js
│       └── css
├── functions.php (PHP entry point)
├── index.php
├── parts (Block Template Parts)
├── patterns (Block Patterns)
├── style.css
├── templates (Block Templates)
│   └── *.html
└── theme.json
```

## Development :computer:


**Linting & Formatting**

Lint JS, CSS & PHP.
```bash
npm run lint:css
npm run lint:php #phpcs
```

Auto fix fixable linting errors for JS, CSS & PHP.

```bash
npm run lint:css:fix
npm run lint:php:fix #phpcbf
```
