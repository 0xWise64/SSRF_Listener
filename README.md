# About SSRF_Listener
Simple script to listen for incoming http requests to detect SSRF vulnerability. The script is alternative of burpsuite collaborator.

## Setup and Usage

- To use the script, you have to host it on your own web server making sure PHP is installed on your server:

```
https://www.example.com/?vulnparm=http://yourserver.com
```

## Examples

- You can call your "SSRF_Listener" at any endpoint and it will log requests, as well as any HTTP request method.

- If the target is vulnerable with SSRF, you will see the following response with the received request logged in the `req-time.log` file.

![Concept](https://user-images.githubusercontent.com/54465159/119440259-4213d380-bd24-11eb-8915-9a819a9960d7.PNG)

- The log file created in the `/logs` directory will logging the request headers and request body, example file:

```
#req-1622096120.log, request log file sample:

[27/05/2021 06:15:20] # Time of the request

GET / HTTP/1.1
Host: Example.com
User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:88.0) Gecko/20100101 Firefox/88.0
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8
Accept-Encoding: gzip, deflate, br
Accept-Language: en-US,en;q=0.5
Cookie: ajs_anonymous_id=%22ff51523f-2801-4ab9-a171-68576cd7fa3b%22; _ga=GA1.3.232960319.1608872810; _hjid=e2457e49-2d02-406a-b77b-c56d43bc2568
Upgrade-Insecure-Requests: 1
Any-Header: Testing

RequestBodyHere
```
