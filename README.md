# SSRF_Listener
Simple script to listen for incoming http requests to detect SSRF vulnerability. The script is sample alternative of burp collaborator.

## Setup and Usage

- To use the script, you have to host it on your own web server making sure PHP is installed on your server:
```
https://www.example.com/?vulnparm=http://yourserver.com
```
- If the target is vulnerable with SSRF, you will see the following response with the received request logged in the `logs.txt` file.

![Concept](https://user-images.githubusercontent.com/54465159/119440259-4213d380-bd24-11eb-8915-9a819a9960d7.PNG)


`logs.txt` file:

```
[25/05/2021 04:29:02]: 172.18.0.1 /index.php Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:88.0) Gecko/20100101 Firefox/88.0
```
