#!/usr/bin/env bash
set -u

echo "=== LARAVEL FCM ENVIRONMENT ==="
php -v 2>/dev/null | head -n 1 || true
composer --version 2>/dev/null || true
[ -f artisan ] && echo "Laravel artisan: present" || echo "Laravel artisan: not found"
[ -f .env ] && echo "Environment file: present (do not commit it)" || echo "Environment file: not found"
