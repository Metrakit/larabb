#!/bin/bash

export DEBIAN_FRONTEND=noninteractive

VAGRANT_CORE_FOLDER=$(cat '/.puphpet-stuff/vagrant-core-folder.txt')

OS=$(/bin/bash "${VAGRANT_CORE_FOLDER}/shell/os-detect.sh" ID)
RELEASE=$(/bin/bash "${VAGRANT_CORE_FOLDER}/shell/os-detect.sh" RELEASE)
CODENAME=$(/bin/bash "${VAGRANT_CORE_FOLDER}/shell/os-detect.sh" CODENAME)

if [[ -f '/.puphpet-stuff/install-ruby' ]]; then
    exit 0
fi

echo 'Installing Ruby 1.9.3 using RVM'

curl -sSL https://get.rvm.io | bash -s stable --ruby=1.9.3
source /usr/local/rvm/scripts/rvm

if [[ -f '/usr/bin/ruby' ]]; then
    mv /usr/bin/ruby /usr/bin/ruby-old
fi

if [[ -f '/usr/bin/gem' ]]; then
    mv /usr/bin/gem /usr/bin/gem-old
fi

ln -s /usr/local/rvm/rubies/ruby-1.9.3-*/bin/ruby /usr/bin/ruby
ln -s /usr/local/rvm/rubies/ruby-1.9.3-*/bin/gem /usr/bin/gem

gem update --system >/dev/null

touch '/.puphpet-stuff/install-ruby'

echo 'Finished install Ruby 1.9.3 using RVM'


