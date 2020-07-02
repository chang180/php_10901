<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.5.1.js"></script>
</head>

<body>

<div style="width:100%; padding:2px; height:290px;">
        <div id="mwww" loop="true" style="width:100%; height:100%;">
            沒有資料
        </div>
    </div>

    <script>
        $.getJSON("data.json", function(result) { // 取得json資料庫，可用以完全跟後端資料庫分開
            // console.log(result.q1t5);
            todo(result.q1t5);
        });


        function todo(myjson) {
            var lin = myjson; //img 資料
            if (lin.length) { //有資料才要替換HTML為輪播圖片，先把第1筆 lin[0] 拿出來看看也可以
                $("#mwww").html("<embed loop=true src='" + lin[0] + "' style='width:99%; height:100%;'></embed>")

                if (lin.length > 1) { //兩筆以上才開始做輪播
let now = 1; //3秒後從1號開始播，注意變數宣告的位置
                    setInterval(() => {
                        console.log(lin.length);
                        $("#mwww").html("<embed loop=true src='" + lin[now] + "' style='width:99%; height:100%;'></embed>")
                        now = (now + 1) % lin.length; //用圖片陣列的長度當分母，用以決定現在播第幾張
                        console.log(now);
                    }, 3000);

                }

            }







            // 乙級趕時間用的，先註解掉
            // var now = 0;
            // ww();
            // if (lin.length > 1) {
            //     setInterval("ww()", 3000);
            //     now = 1;
            // }

            // function ww() {
            //     $("#mwww").html("<embed loop=true src='" + lin[now] + "' style='width:99%; height:100%;'></embed>")

            //     //$("#mwww").attr("src",lin[now])
            //     now++;
            //     if (now >= lin.length)
            //         now = 0;
            // }
        }
    </script>

    


</body>

</html>