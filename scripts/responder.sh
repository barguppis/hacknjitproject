#!/bin/bash
if [ ! -d responder ]; then mkdir responder;fi
if [ ! -d /responder/$1 ]; then mkdir responder/$1;fi
responder -I $1 -wF
