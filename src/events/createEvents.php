<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $thumbnail = $_POST['thumbnail'];
    $name = $_POST['name'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $eventPrice = $_POST['eventPrice'];
    $nbPers = $_POST['nbPers'];
    $location = $_POST['location'];

    $startDateTime = date_create($start);
    $endDateTime = date_create($end);

    $startDate = date_format($startDateTime, 'd/m/Y');
    $startTime = date_format($startDateTime, 'H:i');
    $endDate = date_format($endDateTime, 'd/m/Y');
    $endTime = date_format($endDateTime, 'H:i');

    $location = explode("-", $location);
    $localName = $location[0];
    $roomNumber = $location[1];

    // Get the current number of JSON files in the directory
    $files = glob('*.json');
    $count = count($files);

    // The id for the new JSON will be current count + 1
    $id = $count + 1;

    $data = array(
        'id' => $id,
        'thumbnail' => $thumbnail,
        'name' => $name,
        'startDate' => $startDate,
        'startTime' => $startTime,
        'endDate' => $endDate,
        'endTime' => $endTime,
        'eventPrice' => $eventPrice,
        'nbPers' => $nbPers,
        'location' => [
            'localName' => $localName,
            'roomNumber' => $roomNumber
        ],
    );
    $json = json_encode($data);

    // The filename will be the name plus the ID to keep it unique
    file_put_contents($name . "_" . $id . ".json", $json);
}
