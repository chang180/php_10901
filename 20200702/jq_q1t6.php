<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.5.1.js"></script>
</head>

<body>

    <div style="width:89%; height:480px;" class="dbor cent">
        <span class="t botli">校園映象區</span>
        <div onclick="pp(1);"><img src="icon/up.jpg"></div>
        <div id="list">
            <!-- <img src="img/01D01.jpg"> -->
        </div>
        <div onclick="pp(2);"><img src="icon/dn.jpg"></div>




        <script>
            let nowpage = 0,
                num = 0;
            $.getJSON("data.json", function(result) {
                todo(result.q1t6); //等json拿到了才會執行todo函式
            });

            function todo(myjson) {
                // 元素建構
                for (let i = 0; i < myjson.length; i++) {
                    $("#list").append(`<img class="im" id="ssaa${i}" src="${myjson[i]}" width="150" height="103">`);
                }
                // 全隱藏
                $(".im").hide();
                // 初始下show前三張
                // for (let j = 0; j < 3; j++) $('#ssaa' + j).show();
                $("#ssaa0,#ssaa1,#ssaa2").show();
                num = myjson.length; //回存全域變數
            }

            function pp(x) {
                if (x == 1 && nowpage > 0) { //讓圖片上跑的效果
                    $(`#ssaa${nowpage}`).slideToggle();
                    $(`#ssaa${nowpage+3}`).slideToggle();
                    nowpage--;
                }
                if (x == 2 && nowpage < num - 3) { //讓圖片下跑的效果
                    nowpage++;
                    $(`#ssaa${nowpage}`).slideToggle();
                    $(`#ssaa${nowpage+3}`).slideToggle();
                }

            }





            // 網乙趕時間做的，先註解掉
            // var nowpage = 0,

            // function pp(x) {
            // 	var s, t;
            // 	if (x == 1 && nowpage - 1 >= 0) {
            // 		nowpage--;
            // 	}
            // 	if (x == 2 && (nowpage + 1) * 3 <= num * 1 + 3) {
            // 		nowpage++;
            // 	}
            // 	$(".im").hide()
            // 	for (s = 0; s <= 2; s++) {
            // 		t = s * 1 + nowpage * 1;
            // 		$("#ssaa" + t).show()
            // 	}
            // }
            // pp(1)
        </script>
    </div>



</body>

</html>