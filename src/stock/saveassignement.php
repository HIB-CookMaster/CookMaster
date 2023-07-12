<?php

$entityBody = file_get_contents('php://input');

// gets the data from the request and store it in tool_list.json
file_put_contents('distribution.json', $entityBody);

echo 1;

?>