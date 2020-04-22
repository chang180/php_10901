<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日曆</title>
    <style>
        body {
            margin: 0;
            font-family: "Microsoft JhengHei", Arial, Helvetica, sans-serif;
        }

        .container {
            width: 1000px;
            border: 0;
            text-align: center;
            background: rgb(240, 229, 135);
            margin: auto;

        }

        .calendar {
            width: 600px;
            height: 600px;
            text-align: center;
            background: rgb(170, 216, 189);

        }

        .calendar .week td {
            background: rgb(130, 222, 238);
            font-size: 30px;
        }

        .month {
            width: 600px;
            background: aqua;
            font-size: 20px;
        }

        .calendar td {
            font-size: 25px;
            background: #becdd3;
        }

        .calendar td:hover {
            background: #ff0000;
            font-weight: bold;
        }

        .date {
            font-size: 50px;
            font-weight: bold;
        }

        .rCol {
            background: url("https://picsum.photos/400/640/?random=1");
        }

        .calendar .selected {
            background: #3e70db;
        }

        .month .selected {
            background: blueviolet
        }

        .rCol {
            width: 400px;
        }
    </style>


</head>


<body>

    <table class="container">
        <tr>
            <td class="date">
                <?php
                echo "<span>", date("Y年m月d日"), "</span>";
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <table class="month">
                    <tr>
                        <td>1月</td>
                        <td>2月</td>
                        <td>3月</td>
                        <td>4月</td>
                        <td>5月</td>
                        <td>6月</td>
                        <td>7月</td>
                        <td>8月</td>
                        <td>9月</td>
                        <td>10月</td>
                        <td>11月</td>
                        <td>12月</td>
                    </tr>
                </table>
                <table class="calendar">
                    <tr>
                        <th>一</th>
                        <th>二</th>
                        <th>三</th>
                        <th>四</th>
                        <th>五</th>
                        <th>六</th>
                        <th>日</th>
                    </tr>
                    <?php
                    // 開工用php填日期了
                    $today = date("d-m-Y");
                    // 第一天是該週的第幾天
                    // $firstDayWeek = getdate(strtotime(date("1-m-Y")));
                    $firstDayWeek = date("w", strtotime($firstDay));
                    // echo $firstday["wday"];
                    $weekday = $firstday["wday"];
                    // $days=date("t",strtotime(date("Y-m")."-1"));
                    // 先定出月份的第1天
    // 當月份總共有幾天
    $days = date("t",strtotime($firstDay));
    // 當月份跨了幾週，這很重要
    $totalWeeks = ceil(($days+$firstDayWeek)/7);


                    for ($i = 0; $i < $totalWeeks; $i++) {

                        echo "<tr>";
                        for ($j = 0; $j < 7; $j++) {
                
                            if ($i == 0 && $j < $firstDayWeek) {
                                echo "<td>";
                                echo "</td>";
                            } else {
                                if ($i * 7 + $j + 1 - $firstDayWeek <= $days) {
                                    echo "<td>";
                                    echo $i * 7 + $j + 1 - $firstDayWeek;
                                    echo "</td>";
                                } else {
                                    echo "<td>";
                                    echo "</td>";
                                }
                            }
                        }
                        echo "</tr>";
                    }


                    ?>
                    <!-- <tr>
            <td></td>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
          </tr>
          <tr>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <td>12</td>
          </tr>
          <tr>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
            <td>19</td>
          </tr>
          <tr>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
            <td>26</td>
          </tr>
          <tr>
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td></td>
            <td></td>
            <td></td>
          </tr> -->
                </table>
            </td>
            <td class="rCol">
            </td>
        </tr>
    </table>
</body>