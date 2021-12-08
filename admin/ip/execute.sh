#!/bin/bash
#This script is created by shreyanshdadheech
#To execute the ip address

if [ -d  track/$1 ]
then echo ''
else mkdir track/$1
cd track
echo $1 > $1/ip.txt
cd $1



echo $i > $i/ip.txt
cd $i
whois -h whois.cymru.com "-v $(cat ip.txt)" |  sed '1,2d' | awk '{print $1}' > asn.txt
asn=$(cat asn.txt)
mkdir report
curl --user-agent "fogent" --silent "https://bgp.potaroo.net/cgi-bin/as-report?as=AS$asn&view=2.0" > report/index.html
nmap $i -F > nmap.txt
cd ..
fi
