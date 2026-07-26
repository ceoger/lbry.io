#!/usr/bin/env bash

set -euo pipefail

DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

if [ ! -e "$DIR/data/config.php" ]; then
  cp "$DIR/data/config.php.example" "$DIR/data/config.php"
fi

"$DIR/hooks/install.sh"

composer --working-dir="$DIR" install
php -S 0.0.0.0:8000 -t "$DIR/web" "$DIR/web/index.php"
