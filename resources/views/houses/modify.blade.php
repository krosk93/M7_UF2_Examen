<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                margin: 0;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            form ul
            {
            	font-size:100%;
            	list-style-type:none;
            	margin:0;
            	padding:0;
            	width:100%;
            }

            form li
            {
            	display:block;
            	margin:0;
            	padding:4px 5px 2px 9px;
            	position:relative;
            }

            form li:after
            {
            	clear:both;
            	content:".";
            	display:block;
            	height:0;
            	visibility:hidden;
            }

            .buttons:after
            {
            	clear:both;
            	content:".";
            	display:block;
            	height:0;
            	visibility:hidden;
            }

            .buttons
            {
            	clear:both;
            	display:block;
            	margin-top:10px;
            }

            * html form li
            {
            	height:1%;
            }

            * html .buttons
            {
            	height:1%;
            }

            * html form li div
            {
            	display:inline-block;
            }

            form li div
            {
            	color:#444;
            	margin:0 4px 0 0;
            	padding:0 0 8px;
            }

            form li span
            {
            	color:#444;
            	float:left;
            	margin:0 4px 0 0;
            	padding:0 0 8px;
            }

            form li div.left
            {
            	display:inline;
            	float:left;
            	width:48%;
            }

            form li div.right
            {
            	display:inline;
            	float:right;
            	width:48%;
            }

            form li div.left .medium
            {
            	width:100%;
            }

            form li div.right .medium
            {
            	width:100%;
            }

            .clear
            {
            	clear:both;
            }

            form li div label
            {
            	clear:both;
            	color:#444;
            	display:block;
            	font-size:9px;
            	line-height:9px;
            	margin:0;
            	padding-top:3px;
            }

            form li span label
            {
            	clear:both;
            	color:#444;
            	display:block;
            	font-size:9px;
            	line-height:9px;
            	margin:0;
            	padding-top:3px;
            }

            form li .datepicker
            {
            	cursor:pointer !important;
            	float:left;
            	height:16px;
            	margin:.1em 5px 0 0;
            	padding:0;
            	width:16px;
            }

            .form_description
            {
            	border-bottom:1px dotted #ccc;
            	clear:both;
            	display:inline-block;
            	margin:0 0 1em;
            }

            .form_description[class]
            {
            	display:block;
            }

            .form_description h2
            {
            	clear:left;
            	font-size:160%;
            	font-weight:400;
            	margin:0 0 3px;
            }

            .form_description p
            {
            	font-size:95%;
            	line-height:130%;
            	margin:0 0 12px;
            }

            form hr
            {
            	display:none;
            }

            form li.section_break
            {
            	border-top:1px dotted #ccc;
            	margin-top:9px;
            	padding-bottom:0;
            	padding-left:9px;
            	padding-top:13px;
            	width:97% !important;
            }

            form ul li.first
            {
            	border-top:none !important;
            	margin-top:0 !important;
            	padding-top:0 !important;
            }

            form .section_break h3
            {
            	font-size:110%;
            	font-weight:400;
            	line-height:130%;
            	margin:0 0 2px;
            }

            form .section_break p
            {
            	font-size:85%;

            	margin:0 0 10px;
            }

            /**** Buttons ****/
            input.button_text
            {
            	overflow:visible;
            	padding:0 7px;
            	width:auto;
            }

            .buttons input
            {
            	font-size:120%;
            	margin-right:5px;
            }

            /**** Inputs and Labels ****/
            label.description
            {
            	border:none;
            	color:#222;
            	display:block;
            	font-size:95%;
            	font-weight:700;
            	line-height:150%;
            	padding:0 0 1px;
            }

            span.symbol
            {
            	font-size:115%;
            	line-height:130%;
            }

            input.text
            {
            	background:#fff url(../../../images/shadow.gif) repeat-x top;
            	border-bottom:1px solid #ddd;
            	border-left:1px solid #c3c3c3;
            	border-right:1px solid #c3c3c3;
            	border-top:1px solid #7c7c7c;
            	color:#333;
            	font-size:100%;
            	margin:0;
            	padding:2px 0;
            }

            input.file
            {
            	color:#333;
            	font-size:100%;
            	margin:0;
            	padding:2px 0;
            }

            textarea.textarea
            {
            	background:#fff url(../../../images/shadow.gif) repeat-x top;
            	border-bottom:1px solid #ddd;
            	border-left:1px solid #c3c3c3;
            	border-right:1px solid #c3c3c3;
            	border-top:1px solid #7c7c7c;
            	color:#333;
            	font-family:"Lucida Grande", Tahoma, Arial, Verdana, sans-serif;
            	font-size:100%;
            	margin:0;
            	width:99%;
            }

            select.select
            {
            	color:#333;
            	font-size:100%;
            	margin:1px 0;
            	padding:1px 0 0;
            	background:#fff url(../../../images/shadow.gif) repeat-x top;
            	border-bottom:1px solid #ddd;
            	border-left:1px solid #c3c3c3;
            	border-right:1px solid #c3c3c3;
            	border-top:1px solid #7c7c7c;
            }


            input.currency
            {
            	text-align:right;
            }

            input.checkbox
            {
            	display:block;
            	height:13px;
            	line-height:1.4em;
            	margin:6px 0 0 3px;
            	width:13px;
            }

            input.radio
            {
            	display:block;
            	height:13px;
            	line-height:1.4em;
            	margin:6px 0 0 3px;
            	width:13px;
            }

            label.choice
            {
            	color:#444;
            	display:block;
            	font-size:100%;
            	line-height:1.4em;
            	margin:-1.55em 0 0 25px;
            	padding:4px 0 5px;
            	width:90%;
            }

            select.select[class]
            {
            	margin:0;
            	padding:1px 0;
            }

            *:first-child+html select.select[class]
            {
            	margin:1px 0;
            }

            .safari select.select
            {
            	font-size:120% !important;
            	margin-bottom:1px;
            }

            input.small
            {
            	width:25%;
            }

            select.small
            {
            	width:25%;
            }

            input.medium
            {
            	width:50%;
            }

            select.medium
            {
            	width:50%;
            }

            input.large
            {
            	width:99%;
            }

            select.large
            {
            	width:100%;
            }

            textarea.small
            {
            	height:5.5em;
            }

            textarea.medium
            {
            	height:10em;
            }

            textarea.large
            {
            	height:20em;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
              <div class="title m-b-md">
                  Modificar habitatges
              </div>
              <form action="{{ route('houses.modifyPrice') }}" method="POST">
                {{ csrf_field() }}
                <ul>
                  <li id="li_6" >
                   <label class="description" for="tipus">Tipus </label>
                   <span>
                     <input id="tipus_1" name="tipus" class="element radio" type="radio" value="Pis" />
                     <label class="choice" for="tipus_1">Pis</label>
                     <input id="tipus_2" name="tipus" class="element radio" type="radio" value="Adosat" checked="checked"/>
                     <label class="choice" for="tipus_2">Adosat</label>
                     <input id="tipus_3" name="tipus" class="element radio" type="radio" value="Xalet" />
                     <label class="choice" for="tipus_3">Xalet</label>
                     <input id="tipus_4" name="tipus" class="element radio" type="radio" value="Casa" />
                     <label class="choice" for="tipus_4">Casa</label>
                   </span>
                </li>
                <li id="li_2" >
                   <label class="description" for="percent">Percentatge </label>
                   <div>
                      <input id="percent" name="percent" class="element text small" type="number" min="-100" max="100" value="40"/>%
                   </div>
                </li>
                <li class="buttons">
                   <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
                </li>
          			</ul>
              </form>
            </div>
        </div>
    </body>
</html>
