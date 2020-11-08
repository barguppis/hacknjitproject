#!/bin/bash
if [ ! -d scans ]; then mkdir scans;fi
if [ ! -d scans/$1 ]; then mkdir scans/$1;fi
wfuzz -f scans/$1/$1.out -w wordlists/directory-list-2.3-medium.txt --hc 404,400,401,402,403 -H "Host: FUZZ.$1" $1 > /dev/null
for line in $(cat scans/$1/$1.out | awk '{print $9}' | tr -d '"'); do echo $line.$1 >> scans/$1/$1.subdomains; done
