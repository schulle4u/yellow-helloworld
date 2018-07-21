#!/bin/bash
# Prepare plugin release

# Directories
YELLOWDIR="/home/steffen/yellow/"
PLUGINROOT="/mnt/e/Steffen/Documents/GitHub/"

# Check parameters
if (( $# < 1 )); then
  echo "Usage: release.sh yellow-plugin-name"
  exit 1
fi

# Execute release command
cd $YELLOWDIR
php yellow.php release $PLUGINROOT$1/