# About SSRF_Listener
Simple script to listen for incoming http requests to detect SSRF vulnerability. The script is alternative of burpsuite collaborator.

## Setup and Usage

- To use the script, you have to host it on your own web server making sure PHP is installed on your server:

```
https://www.example.com/?vulnparm=http://yourserver.com
```

## Examples

- You can call your `SSRF_Listener` server from any endpoint and it will log requests, as well as any HTTP request method.

- If the target is vulnerable with SSRF, you will see the following response with the received request logged in the `req-time.log` file.

![concept](https://user-images.githubusercontent.com/54465159/119935843-6ff95200-bf88-11eb-95cc-06e52d3686ce.PNG)

- The log file created in the `/logs` directory will logging the request headers and request body, example file:

```
The request was received from IP address 127.0.0.0.0.01 at [28-05-2021 05:57:51].

GET /anythinghere.bla HTTP/1.1
Connection: Keep-Alive
Proxy-Connection: Keep-Alive
Host: example.com
User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:88.0) Gecko/20100101 Firefox/88.0
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8
Accept-Language: en-US,en;q=0.5
Accept-Encoding: gzip, deflate, br
Referer: https://example.com/hack.html
Cookie: _ga=GA1.2.639464471.1621981801; _gid=GA1.2.530976924.1622177183; _omappvp=UM6KHdstPCBGls2YnTC8bNfG04QCgqIG0HI4IeMiCbVFSFiVggakE76RwStElAPDchVj0WIxPx4w0MaAhn8PJcFVbI3jktPS


RequestBodyHere

```
