#!/bin/bash
wfuzz -w wordlists/directory-list-2.3-medium.txt -H "Host: FUZZ.$1" $1
