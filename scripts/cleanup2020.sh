#!/bin/bash
for line in $(lsof -n -i | grep -i 2020 | awk '{print $2}'); do kill $line; done
