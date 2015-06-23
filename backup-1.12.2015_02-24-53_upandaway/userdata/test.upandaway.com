--- 
customlog: 
  - 
    format: combined
    target: /usr/local/apache/domlogs/test.upandaway.com
  - 
    format: "\"%{%s}t %I .\\n%{%s}t %O .\""
    target: /usr/local/apache/domlogs/test.upandaway.com-bytes_log
documentroot: /home/upandaway/public_html
group: upandaway
hascgi: 1
homedir: /home/upandaway
ip: 160.153.73.72
owner: gdresell
phpopenbasedirprotect: 1
port: 80
scriptalias: 
  - 
    path: /home/upandaway/public_html/cgi-bin
    url: /cgi-bin/
serveradmin: webmaster@test.upandaway.com
serveralias: www.test.upandaway.com
servername: test.upandaway.com
usecanonicalname: 'Off'
user: upandaway
