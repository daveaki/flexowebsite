# flexocss — Documentation Website

Official documentation website for [flexocss](https://github.com/daveaki/flexocss), a lightweight utility-first CSS framework based on flexbox.

**Live site:** [flexocss.it](https://flexocss.it)

## Stack

- PHP 8.2+ / CodeIgniter 4
- flexocss (via `public/assets/css/lib/flexo.min.css`)
- Multilingual: IT / EN / FR / ES

## Local setup

```bash
composer install
cp env .env
# edit .env: set baseURL and CI_ENVIRONMENT=development
php spark serve
```

## Structure

```
app/
  Controllers/   # Main, Documentation, Customize, Home
  Views/
    website/     # Pages and partials
    website/docs/  # Documentation sections
  Language/      # IT, EN, FR, ES translations
public/
  assets/css/    # app.css + flexo.min.css
  assets/js/     # app.js
  assets/file/   # Downloadable flexo package
```

## License

MIT — created by [daveaki](https://github.com/daveaki)
