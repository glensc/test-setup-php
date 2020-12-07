v=5.3
sudo rm -rf /usr/bin/pecl /usr/bin/pear* 2>/dev/null || true
for tool in pear peardev pecl php phar phar.phar php-cgi php-fpm php-config phpize; do
  if [ -e ~/php/5.3.29/bin/"$tool" ]; then
    sudo cp ~/php/5.3.29/bin/"$tool" /usr/bin/"$tool$v"
    sudo update-alternatives --install /usr/bin/"$tool" "$tool" /usr/bin/"$tool$v" 50
    sudo update-alternatives --set $tool /usr/bin/"$tool$v"
  fi
done
ini_file=$(php -d "date.timezone=UTC" --ini | grep "Loaded Configuration" | sed -e "s|.*:s*||" | sed "s/ //g")
sudo chmod 777 "$ini_file"
echo -e "\ndate.timezone=UTC\nmemory_limit=-1" >>"$ini_file"
sudo mkdir -p /usr/lib/systemd/system
sudo cp -f ~/php/5.3.29/etc/init.d/php-fpm /etc/init.d/php5.3-fpm
sudo cp -f ~/php/5.3.29/etc/systemd/system/php-fpm.service /lib/systemd/system/php5.3-fpm.service
sudo chmod a+x ~/php/5.3.29/bin/php-fpm-socket-helper
sudo service php5.3-fpm start
