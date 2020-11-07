#!/bin/bash
nmap -iL $1 -oN scans/$1/$1.nmap $2 $3 $4 $5 $6 $7 $8 $9
