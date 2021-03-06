#!/bin/bash
#This script is created by shreyanshdadheech
if [ -d  /var/www/html/admin/ip/track ]
then echo ''
else mkdir /var/www/html/admin/ip/track
fi
cd /var/www/html/admin/ip/track/
for i in $(cat /var/log/apache2/access.log  | grep admin | awk '{print $1}' | uniq)
do if [ -d  /var/www/html/admin/ip/track/$i ]
then echo ''
else mkdir /var/www/html/admin/ip/track/$i

echo $i > $i/ip.txt
cd $i
whois -h whois.cymru.com "-v $(cat ip.txt)" |  sed '1,2d' | awk '{print $1}' > asn.txt
asn=$(cat asn.txt)
mkdir report
curl --user-agent "fogent" --silent "https://bgp.potaroo.net/cgi-bin/as-report?as=AS$asn&view=2.0" > report/index.html
nmap $i -F > nmap.txt
cd ..
fi
done
