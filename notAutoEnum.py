#!/usr/bin/python3
from os import popen
popen("php -S 127.0.0.1:2020 &","r",0)
popen("xdg-open http://localhost:2020","r",0)
