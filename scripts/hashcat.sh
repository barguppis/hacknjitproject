#!/bin/bash
hashcat -m 5600 -o responder/$1/$2.hashout --outfile-format 3 responder/$1/$2 wordlists/xato-net-10-million-passwords-1000000.txt
hashcat -m 5600 responder/$1/$2 --show | awk -F ':' '{print $7}' > responder/$1/$2.hashout
