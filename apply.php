<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <title>Sample</title>
    <style>
        body {
            font-family: 'Noto Sans KR', sans-serif;
            margin: 0;
        }

        header {
            border-bottom: solid 1px #CED4DA;
        }

        footer {
            background: #F8F9FA;
            text-align: center;
        }

        ul {
            list-style: none;
            display: inline-block;
        }

        footer ul {
            margin: 0;
        }

        .footer_img {
            padding-top: 30px;
            margin-bottom: 10px;
        }

        .footer_img_1 {
            margin-right: 0.4em;
        }

        .footer_copy {
            margin-top: 10px;
            padding-bottom: 30px;
            color: #ADB5BD;
        }

        #footer_img_each {
            width: 1.7em;
        }

        li {
            float: left;
            border-right: 1px solid #E3E7EB;
            overflow: visible;
            font-size: 0.9em;
            color: #343A40;
            margin-top: 0.4em;
            margin-bottom: 0.4em;
            padding: 0px;
            padding-left: 2em;
            padding-right: 2em;
        }

        footer li {
            margin: 0;
            color: #868E96;
        }

        .most_right {
            border: 0;
        }

        .container {
            text-align: center;
        }

        .subtitle {
            margin: 1.7em;
            margin-bottom: 0.6em;
            font-size: 1.1em;
        }

        .top_title {
            width: 45%;
            text-align: center;
            margin: auto;
        }

        .title_img {
            width: 50%
        }

        .top_apply {
            text-align: right;
            margin-top: 0.4em;
            margin-bottom: 1.1em;
        }

        .apply {
            border: 1px solid #03B8F1;
            border-radius: 3px;
            color: #03B8F1;
            background: #FFFFFF;
            font-weight: bold;
            font-size: 1.1em;
            padding: 1%;
            padding-left: 4%;
            padding-right: 4%;
        }

        .apply:hover {
            box-shadow: 0px 0px 5px 1px;
        }

        #apply_bottom {
            margin-top: 0.3em;
            margin-bottom: 0.3em;
            font-size: 1.3em;
            padding: 0.6%;
            padding-left: 2.4%;
            padding-right: 2.4%;
        }

        .main {
            border: 1px solid #CED4DA;
            width: 45%;
            margin: auto;
            margin-top: 1em;
            background: #F1F3F5;
            color: #495057;
            padding-bottom: 1.3%;
        }

        .title {
            background: #FFFFFF;
            margin: auto;
            padding: 1em;
            color: #343A40;
            font-weight: bold;
            border-bottom: 1px solid #CED4DA;
        }

        .welcome {
            border-radius: 0px 10px 10px 10px;
            background: #FFFFFF;
            width: 92%;
            margin: auto;
            padding: 1%;
            padding-top: 1em;
            padding-bottom: 1em;
            font-size: 2.3em;
            font-weight: bold
        }

        .question_box {
            text-align: right;
        }

        .question {
            background: lightblue;
            display: inline-block;
            margin-right: 2.9%;
            margin-top: 1.5%;
            margin-bottom: 1.5%;
            padding: 1%;
            padding-left: 1.5%;
            padding-right: 1.5%;
            border-radius: 10px 0px 10px 10px;
            background: #5DD2F6;
            color: #FFFFFF
        }

        #most_top {
            margin-top: 0%;
        }

        .answer {
            border-radius: 0px 10px 10px 10px;
            background: #FFFFFF;
            width: 92%;
            margin: auto;
            padding: 1.5%;
        }

        .info {
            padding: 2.5%;
            color: #495057;
        }

        hr {
            border: none;
            border-top: 1px solid #E3E7EB;
            overflow: visible;
            text-align: center;
            margin-top: 24px;
            height: 17px;
        }

        hr:after {
            position: relative;
            top: -15px;
            background: #F1F3F5;
            content: "Welcome";
            padding: 0 10px;
            color: #868E96;
            font-size: 0.8em;
        }

        .hr_aboutus:after {
            content: "About Us";
        }

        .answer_700 {
            font-weight: 700;
        }

        .answer_blue {
            font-weight: 600;
            color: #03B8F1;
        }

        .info_title {
            font-size: 1.5em;
            font-weight: bold;
            color: #212529
        }
    </style>
</head>

<body>
    <header>
        <ul>
            <li>44기 리크루팅</li>
            <li>디자인팀</li>
            <li class="most_right">지원하기</li>
        </ul>
    </header>

    <div class="container" style="color:#ADB5BD">
        <div class="top_title">
            <div class="subtitle">
                44기 디자인팀 리크루팅 지원서
            </div>
            <img class="title_img"
                src="https://user-images.githubusercontent.com/98504939/154136887-c8530b59-5590-4ee1-8281-41d40004de07.svg">
            <br>
        </div>
        <div class="main">
        </div>
    </div>

    <footer>
        <div class="footer_img">
            <img id="footer_img_each" class="footer_img_1"
                src="https://user-images.githubusercontent.com/98504939/154150997-7131efe1-6917-46ac-afdd-3ea4e7a14ea7.svg">
            <img id="footer_img_each"
                src="https://user-images.githubusercontent.com/98504939/154151111-79816888-df45-45fa-bbeb-ee739d7a4298.png">
        </div>
        <div class="footer_ul">
            <ul>
                <li>SNULife 소개</li>
                <li>이용약관</li>
                <li>개인정보 처리방침</li>
                <li class="most_right">커뮤니티 이용규칙</li>
            </ul>
        </div>
        <div class="footer_copy">
            Copyright 2000-2021 SNULife. All rights reserved.
        </div>
    </footer>
</body>

</html>