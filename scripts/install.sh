#!/bin/bash
apt update
apt install -y responder
apt install -y nmap
apt install -y hashcat
apt install -y python3-pip
git clone https://github.com/FortyNorthSecurity/EyeWitness.git
cd EyeWitness/Python/setup && chmod +x setup.sh && ./setup.sh
cd ../../..
apt install -y sublist3r
