<?php
// http://localhost:9000/AlmightyGodsendUtility9000DeluxePro/_dev/info/print-env.php



$vals = array
(
    "Current Working Directory" => getcwd()
    , "Document Root" => $_SERVER["DOCUMENT_ROOT"]
);

echo '<html>', '<body>', '<pre>', var_dump($vals), '</pre>', '</body>', '</html>';
?>