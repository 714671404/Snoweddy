<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSS3翻书效果</title>
    <style type="text/css">
        * {
            padding: 0;
            margin: 0;
        }
        body,html {
            height: 100%;
        }
        li{
            list-style: none;
        }
        body {
            -webkit-perspective: 2000px;
            -moz-perspective: 2000px;
            -ms-perspective: 2000px;
            perspective: 2000px;
            background-color: white#;
        }
        .book {
            position: absolute;
            top: 30%;
            left: 40%;
            width: 500px;
            height: 500px;
            background-color: #fff;
            -webkit-transform: rotateX(30deg);
            -ms-transform: rotateX(30deg);
            -o-transform: rotateX(30deg);
            transform: rotateX(30deg);
        }
        /*开3D效果*/
        .pre-3d {
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }
        .page {
            position: absolute;
            top: 0;
            left: 0;
            width: 500px;
            height: 500px;
            border: 1px solid #1976D2;
            text-align: center;
            -webkit-transform-origin: 0 50%;
            -moz-transform-origin: 0 50%;
            -ms-transform-origin: 0 50%;
            -o-transform-origin: 0 50%;
            transform-origin: 0 50%;
        }
        .front1 {
            background-color: paleturquoise;
        }
        .front2 {
            background-color: goldenrod;
        }
        img{
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<div class="book pre-3d" id="book">
    <!-- 后封面 -->
    <ul>
        <li class="" id="Rcover"><img src="img/6.jpg" alt=""></li>
        <!-- 书页 -->
        <li class="pre-3d  page front2"><img src="img/5.jpg" alt=""></li>
        <li class="pre-3d  page front2"><img src="img/4.jpg" alt=""></li>
        <li class="pre-3d  page front2"><img src="img/3.jpg" alt=""></li>
        <li class="pre-3d  page front2"><img src="img/2.jpg" alt=""></li>
        <!-- 书的封面 -->
        <li class="pre-3d  page front1"><img src="img/1.jpg" alt=""></li>
    </ul>
</div>
</body>
<script>
    var b=document.getElementById('book');
    var s=document.getElementsByTagName('li');
    var c=document.getElementById('Rcover');
    var i=5;
    b.onclick=function(){
        if(i>0){
            s[i].style.transform='rotateY(-140deg)';
            s[i].style.transition='3s';
            i--;
        }
    }
    c.onclick=function(){
        for(var j=1;j<6;j++){
            s[j].style.transform='rotateY(0deg)';
            s[j].style.transition='3s';}
    }
</script>
</html>