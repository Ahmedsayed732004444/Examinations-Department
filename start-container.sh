#!/bin/bash

set -e

if [ "$IS_LARAVEL" = "true" ]; then
  # Clear any cached configurations, routes, and views created during build-time
  # so that migrations and runtime queries read the correct environment variables.
  # We avoid 'optimize:clear' because it triggers 'cache:clear', which fails if the
  # database connection is not yet established (when using a database cache store).
  echo "Clearing cached configurations, routes, and views..."
  php artisan config:clear
  php artisan route:clear
  php artisan view:clear

  if [ "$RAILPACK_SKIP_MIGRATIONS" != "true" ]; then
    # Run migrations and seeding
    echo "Running migrations and seeding database ..."
    php artisan migrate --force
  fi

  php artisan storage:link
fi

# Start the FrankenPHP server
docker-php-entrypoint --config /Caddyfile --adapter caddyfile 2>&1
