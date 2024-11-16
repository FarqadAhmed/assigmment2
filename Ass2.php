<?php
//  link to fetch data from the Bahrain Open Data Portal API
$URL = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";
//  Parse the JSON response
$response = file_get_contents($URL);
$result = json_decode($response, true);

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://picocss.com/docs/overflow-auto">
<link rel="stylesheet" href="https://picocss.com/docs/table">

<title> UOB student nationality data from the Bahrain Open Data Portal</title>
</head>
<body>

</body>
</html>
?>