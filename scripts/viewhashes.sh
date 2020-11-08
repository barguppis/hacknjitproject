mv /usr/share/responder/logs/SMB* responder/$1/
cat responder/$1/SMB* | sort -u > responder/$1/$2
