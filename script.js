$.getJSON("https://api.ipify.org?format=json",
function(data) {
    if ((data.ip) !== '') {
        $("#vuln").html("Potential SSRF Vulnerability at:");
        $("#ip").html(data.ip);
    } else {
        $("#vuln").html("No HTTP Request or IP Detected, It's possible to be blind SSRF please check your <em>logs.txt</em> file!");
    }	
})