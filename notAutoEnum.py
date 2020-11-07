#!/usr/bin/python3
import os
os.system("php -S 127.0.0.1:2020 &")
os.system("disown")
os.system("xdg-open http://localhost:2020")
