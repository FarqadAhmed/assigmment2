<?php
//  link to fetch data from the Bahrain Open Data Portal API
$URL = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-studentsnationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%2
0the_programs%20like%20%22bachelor%22&limit=100";
//  Parse the JSON response
$response = file_get_contents($URL);
$result = json_decode($response, true);

?>