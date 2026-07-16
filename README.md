# zerp/stripe

Stripe module for the [Zerp](https://github.com/zerp-pk) ERP platform. Stripe payment gateway integration module for the Zerp ERP platform

## Requirements

- PHP 8.2+
- A Laravel application with package auto-discovery enabled (built for Zerp, Laravel 12)

## Installation

```bash
composer require zerp/stripe
```

The package auto-registers via Laravel's package discovery - no manual service provider registration needed.

## What it provides

- `Zerp\Stripe\Providers\StripeServiceProvider` - boots this module's routes, migrations, and settings
- Frontend pages/components under `src/Resources/js`

## License

MIT - see [LICENSE](LICENSE).
