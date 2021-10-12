<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>

        .header {
            width: 99.7%;
            height: 50px;
            /*border: 1px solid black;*/
            position: relative;
        }

        .left {
            width: 15%;
            height: 862px;
            float: left;
            margin: 5px 5px 5px 0;
        }

        .content {
            float: left;
            margin: 5px 5px 5px 5px;
            width: 83.995%;
            height: 750px;

        }

        .footer {
            width: 83.95%;
            height: 100px;
            margin: 5px 5px 5px 5px;
            float: left;
        }

        input {
            /*border-top-right-radius: 0px;*/
            /*border-top-left-radius: 10px;*/
            /*border-bottom-right-radius: 10px;*/
            /*border-bottom-left-radius: 10px;*/
            border: none;
            position: absolute;
            top: 10px;
            left: 20%;
            font-size: 20px;
        }

        img {
            width: 300px;
            height: 50px;
            position: absolute;
            top: 0;
        }

        /*// Vertical order*/
        #left, #left ul, #left li {
            padding: 0;
            margin: 0;
        }

        #left li {
            list-style: none;
            position: relative;
            width: 100px;
            height: 30px;
            padding: 0 20px;
            background-color: black;
            line-height: 30px;
            cursor: pointer;
        }

        #left li a {
            text-decoration: none;
            color: white;
        }

        #left li:hover {
            background-color: red;
        }

        #left ul ul {
            position: absolute;
            top: 0;
            left: 140px;
            visibility: hidden;
        }

        #left ul li:hover ul {
            visibility: visible;
        }


        form{
            width: 500px;
            height: 300px;
            background-color: lightgrey;
        }
    </style>
</head>
<body>
<div class="main">
    <div class="header">
        <img src="Images/skydash.png">
        <input type="text" name="search" placeholder="search now">
    </div>
    <div class="left">
        <ul>
            <li>Dashboard</li>
            <li>Widgets</li>
            <li>UI Elements</li>
            <li>Advanced UI</li>
            <li>Form elements</li>
            <li>Editors</li>
            <li>Charts</li>
            <li>Tables</li>
            <li>Popups</li>
            <li>Notification</li>
        </ul>
    </div>
    <div class="content">
        <form>

        </form>
    </div>
    <div class="footer"></div>
</div>
</body>
</html>

