# Perform a Git pull to update the code
git pull

npm run build

# Change ownership of storage directory
sudo chown -R www-data:www-data storage

# Change ownership of bootstrap/cache directory
sudo chown -R www-data:www-data bootstrap/cache

echo "Done!"
