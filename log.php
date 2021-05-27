<?php
# Logging all requests including headers and request body
function logRequest($targetFile) {
    $headerList = [];
    foreach ($_SERVER as $name => $value) {
        if (preg_match('/^HTTP_/',$name)) {
            $name = strtr(substr($name,5),'_',' ');
            $name = ucwords(strtolower($name));
            $name = strtr($name,' ','-');
            $headerList[$name] = $value;
            }}
            $data = sprintf("[".date('d/m/Y h:i:s')."]\n\n%s %s %s\n",
            $_SERVER['REQUEST_METHOD'],
            $_SERVER['REQUEST_URI'],
            $_SERVER['SERVER_PROTOCOL']);
            foreach ($headerList as $name => $value) {
                $data .= $name.': '.$value."\n"; }
                $data .= "\n";
                file_put_contents($targetFile,
                $data.file_get_contents('php://input')."\n\n");
                };

logRequest("./logs/req-".time().".log");

?>
