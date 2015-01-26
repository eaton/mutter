# -*- mode: ruby -*-
# vi: set ft=ruby :

$script = <<SCRIPT
apt-get update
apt-get install -y avahi-daemon
apt-get install -y curl subversion git make
apt-get install -y apache2 php5 libapache2-mod-php5
apt-get install -y flex bison libgmp3-dev

svn checkout http://svn.code.sf.net/p/rmutt/code/trunk rmutt-code
cd rmutt-code/rmutt
make
make install

sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/sites-enabled/000-default

rm -rf /var/www
ln -fs /vagrant /var/www
a2enmod rewrite
/etc/init.d/apache2 restart

cd /var/www
rm composer.lock
curl -s https://getcomposer.org/installer | php
php composer.phar install

SCRIPT


# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  config.vm.box = "ubuntu/precise32"
  config.vm.network "private_network", type: "dhcp"
  config.vm.hostname = "mutter"
  config.vm.provision "shell", inline: $script

end
