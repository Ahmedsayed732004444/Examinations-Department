#!/bin/bash

set -e

if [ "$IS_LARAVEL" = "true" ]; then
  # Clear any cached configurations created during build-time so that migrations
  # and runtime queries read the correct environment variables.
  echo "Clearing cached configuration to load environment variables..."
  php artisan optimize:clear

  if [ "$RAILPACK_SKIP_MIGRATIONS" != "true" ]; then
    # Run migrations and seeding
    echo "Running migrations and seeding database ..."
    php artisan migrate --force
  fi

  php artisan storage:link
fi

# Start the FrankenPHP server
docker-php-entrypoint --config /Caddyfile --adapter caddyfile 2>&1
