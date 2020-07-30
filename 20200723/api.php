<?php
$movieName = array(
    array("id" => 1, "movie" => "十萬火急"),
    array("id" => 2, "movie" => "明天過後"),
    array("id" => 3, "movie" => "最後一戰"),
);
$movieDay = array(
    array("id" => 1, "movieName" => 1, "date" => "2020-07-22"), //電影編號1，場次日期2020-05-05
    array("id" => 2, "movieName" => 1, "date" => "2020-07-23"),
    array("id" => 3, "movieName" => 2, "date" => "2020-07-24"),
    array("id" => 4, "movieName" => 2, "date" => "2020-07-25"),
    array("id" => 5, "movieName" => 3, "date" => "2020-07-25"),
    array("id" => 6, "movieName" => 3, "date" => "2020-07-26")
);
$movieOrder = array(
    array("id" => 1, "movieDay" => 1, "time" => 1, "sellout" => 2), //第1筆訂單，第1天，第1場，賣掉2張
    array("id" => 1, "movieDay" => 1, "time" => 2, "sellout" => 2), 
    array("id" => 2, "movieDay" => 1, "time" => 2, "sellout" => 4),
    array("id" => 3, "movieDay" => 1, "time" => 3, "sellout" => 3),
    array("id" => 4, "movieDay" => 1, "time" => 4, "sellout" => 7),
    array("id" => 5, "movieDay" => 2, "time" => 1, "sellout" => 1),
    array("id" => 6, "movieDay" => 2, "time" => 3, "sellout" => 3),
    array("id" => 7, "movieDay" => 2, "time" => 3, "sellout" => 5),
    array("id" => 8, "movieDay" => 3, "time" => 1, "sellout" => 7),
    array("id" => 9, "movieDay" => 3, "time" => 2, "sellout" => 3),
    array("id" => 10, "movieDay" => 3, "time" => 3, "sellout" => 2),
    array("id" => 11, "movieDay" => 4, "time" => 1, "sellout" => 1),
    array("id" => 12, "movieDay" => 4, "time" => 2, "sellout" => 5),
    array("id" => 13, "movieDay" => 4, "time" => 3, "sellout" => 7),
    array("id" => 14, "movieDay" => 5, "time" => 1, "sellout" => 3),
    array("id" => 15, "movieDay" => 5, "time" => 2, "sellout" => 1),
    array("id" => 16, "movieDay" => 5, "time" => 3, "sellout" => 5),
    array("id" => 17, "movieDay" => 6, "time" => 1, "sellout" => 3),
    array("id" => 18, "movieDay" => 6, "time" => 2, "sellout" => 4),
);

switch ($_GET['do']) {
    case 'getmovie':
        //這裡將提供 JSON 給前端，由前端來處理 DOM (JSON_UNESCAPED_UNICODE 能確保中文，非必要因 HTML 能正常顯示 unicode)
        echo json_encode($movieName, JSON_UNESCAPED_UNICODE);
        break;

    case 'getdate':
        $result = array();
        foreach ($movieDay as $row) if ($row['movieName'] == $_GET['id']) array_push($result, $row);
        echo json_encode($result, JSON_UNESCAPED_UNICODE);
        break;

    case 'gettime':
        $result = array();
        foreach ($movieOrder as $row) if ($row['movieDay'] == $_GET['id']) array_push($result, $row);
        echo json_encode($result, JSON_UNESCAPED_UNICODE);
        break;
}
