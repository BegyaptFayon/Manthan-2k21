#!/bin/bash
#This script is created by shreyanshdadheech
for i in $(cat /var/log/apache2/access.log  | grep admin | awk '{print $1}' | uniq)
do mkdir $i
echo $i > $i/ip.txt
echo  "$i ip dir has been created"
cd $i
whois -h whois.cymru.com "-v $(cat ip.txt)" |  sed '1,2d' | awk '{print $1}' > asn.txt
asn=$(cat asn.txt)
mkdir report
curl --user-agent "fogent" --silent "https://bgp.potaroo.net/cgi-bin/as-report?as=AS$asn&view=2.0" > report/index.html
nmap $i -F > nmap.txt
done

