#!/bin/bash
if [ ! -d scans ]; then mkdir scans;fi
if [ ! -d scans/$1 ]; then mkdir scans/$1;fi
sublist3r -d $1 -o scans/$1/$1.sublist3r > /dev/null
