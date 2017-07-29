<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>{{$user->name}}</title>

    <meta name="viewport" content="width=device-width"/>
    <meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
    <meta charset="UTF-8">

    <style>
        html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary,time,mark,audio,video {
            border:0;
            font:inherit;
            font-size:100%;
            margin:0;
            padding:0;
            vertical-align:baseline;
        }

        article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section {
            display:block;
        }

        html, body {background: #181818; font-family: 'Lato', helvetica, arial, sans-serif; font-size: 16px; color: #222;}

        .clear {clear: both;}

        p {
            font-size: 1em;
            line-height: 1.4em;
            margin-bottom: 20px;
            color: #444;
        }

        #cv {
            width: 90%;
            max-width: 800px;
            background: #f3f3f3;
            margin: 30px auto;
        }

        .mainDetails {
            padding: 25px 35px;
            border-bottom: 2px solid #cf8a05;
            background: #ededed;
        }

        #name h1 {
            font-size: 2.5em;
            font-weight: 700;
            font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
            margin-bottom: -6px;
        }

        #name h2 {
            font-size: 2em;
            margin-right: 2px;
            font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
        }

        #mainArea {
            padding: 0 40px;
        }

        #headshot {
            width: 12.5%;
            float: right;
            margin-left: 30px;
        }

        #headshot img {
            width: 100%;
            height: auto;
            -webkit-border-radius: 50px;
            border-radius: 50px;
        }

        #name {
            float: right;
        }

        #contactDetails {
            float: left;
        }

        #contactDetails ul {
            list-style-type: none;
            font-size: 0.9em;
            margin-top: 2px;
        }

        #contactDetails ul li {
            margin-bottom: 3px;
            color: #444;
        }

        #contactDetails ul li a, a[href^=tel] {
            color: #444;
            text-decoration: none;
            -webkit-transition: all .3s ease-in;
            -moz-transition: all .3s ease-in;
            -o-transition: all .3s ease-in;
            -ms-transition: all .3s ease-in;
            transition: all .3s ease-in;
        }

        #contactDetails ul li a:hover {
            color: #cf8a05;
        }


        section {
            border-top: 1px solid #dedede;
            padding: 20px 0 0;
        }

        section:first-child {
            border-top: 0;
        }

        section:last-child {
            padding: 20px 0 10px;
        }

        .sectionTitle {
            float: right;
            width: 25%;
        }

        .sectionContent {
            float: left;
            width: 72.5%;
        }

        .sectionTitle h1 {
            font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
            font-style: italic;
            font-size: 1.5em;
            color: #cf8a05;
        }

        .sectionContent h2 {
            font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
            font-size: 1.5em;
            margin-bottom: -2px;
        }

        .subDetails {
            font-size: 0.8em;
            font-style: italic;
            margin-bottom: 3px;
        }

        .keySkills {
            list-style-type: none;
            -moz-column-count:3;
            -webkit-column-count:3;
            column-count:3;
            margin-bottom: 20px;
            font-size: 1em;
            color: #444;
        }

        .keySkills ul li {
            margin-bottom: 3px;
        }

        @media all and (min-width: 602px) and (max-width: 800px) {
            #headshot {
                display: none;
            }

            .keySkills {
                -moz-column-count:2;
                -webkit-column-count:2;
                column-count:2;
            }
        }

        @media all and (max-width: 601px) {
            #cv {
                width: 95%;
                margin: 10px auto;
                min-width: 280px;
            }

            #headshot {
                display: none;
            }

            #name, #contactDetails {
                float: none;
                width: 100%;
                text-align: center;
            }

            .sectionTitle, .sectionContent {
                float: none;
                width: 100%;
            }

            .sectionTitle {
                margin-right: -2px;
                font-size: 1.25em;
            }

            .keySkills {
                -moz-column-count:2;
                -webkit-column-count:2;
                column-count:2;
            }
        }

        @media all and (max-width: 480px) {
            .mainDetails {
                padding: 15px 15px;
            }

            section {
                padding: 15px 0 0;
            }

            #mainArea {
                padding: 0 25px;
            }


            .keySkills {
                -moz-column-count:1;
                -webkit-column-count:1;
                column-count:1;
            }

            #name h1 {
                line-height: .8em;
                margin-bottom: 4px;
            }
        }

        /*@media print {*/
        /*#cv {*/
        /*width: 100%;*/
        /*}*/
        /*}*/

        /*@-webkit-keyframes reset {*/
        /*0% {*/
        /*opacity: 0;*/
        /*}*/
        /*100% {*/
        /*opacity: 0;*/
        /*}*/
        /*}*/

        /*@-webkit-keyframes fade-in {*/
        /*0% {*/
        /*opacity: 0;*/
        /*}*/
        /*40% {*/
        /*opacity: 0;*/
        /*}*/
        /*100% {*/
        /*opacity: 1;*/
        /*}*/
        /*}*/

        /*@-moz-keyframes reset {*/
        /*0% {*/
        /*opacity: 0;*/
        /*}*/
        /*100% {*/
        /*opacity: 0;*/
        /*}*/
        /*}*/

        /*@-moz-keyframes fade-in {*/
        /*0% {*/
        /*opacity: 0;*/
        /*}*/
        /*40% {*/
        /*opacity: 0;*/
        /*}*/
        /*100% {*/
        /*opacity: 1;*/
        /*}*/
        /*}*/

        /*@keyframes reset {*/
        /*0% {*/
        /*opacity: 0;*/
        /*}*/
        /*100% {*/
        /*opacity: 0;*/
        /*}*/
        /*}*/

        /*@keyframes fade-in {*/
        /*0% {*/
        /*opacity: 0;*/
        /*}*/
        /*40% {*/
        /*opacity: 0;*/
        /*}*/
        /*100% {*/
        /*opacity: 1;*/
        /*}*/
        /*}*/

        /*.instaFade {*/
        /*-webkit-animation-name: reset, fade-in;*/
        /*-webkit-animation-duration: 1.5s;*/
        /*-webkit-animation-timing-function: ease-in;*/

        /*-moz-animation-name: reset, fade-in;*/
        /*-moz-animation-duration: 1.5s;*/
        /*-moz-animation-timing-function: ease-in;*/

        /*animation-name: reset, fade-in;*/
        /*animation-duration: 1.5s;*/
        /*animation-timing-function: ease-in;*/
        /*}*/

        /*.quickFade {*/
        /*-webkit-animation-name: reset, fade-in;*/
        /*-webkit-animation-duration: 2.5s;*/
        /*-webkit-animation-timing-function: ease-in;*/

        /*-moz-animation-name: reset, fade-in;*/
        /*-moz-animation-duration: 2.5s;*/
        /*-moz-animation-timing-function: ease-in;*/

        /*animation-name: reset, fade-in;*/
        /*animation-duration: 2.5s;*/
        /*animation-timing-function: ease-in;*/
        /*}*/

        /*.delayOne {*/
        /*-webkit-animation-delay: 0, .5s;*/
        /*-moz-animation-delay: 0, .5s;*/
        /*animation-delay: 0, .5s;*/
        /*}*/

        /*.delayTwo {*/
        /*-webkit-animation-delay: 0, 1s;*/
        /*-moz-animation-delay: 0, 1s;*/
        /*animation-delay: 0, 1s;*/
        /*}*/

        /*.delayThree {*/
        /*-webkit-animation-delay: 0, 1.5s;*/
        /*-moz-animation-delay: 0, 1.5s;*/
        /*animation-delay: 0, 1.5s;*/
        /*}*/

        /*.delayFour {*/
        /*-webkit-animation-delay: 0, 2s;*/
        /*-moz-animation-delay: 0, 2s;*/
        /*animation-delay: 0, 2s;*/
        /*}*/

        /*.delayFive {*/
        /*-webkit-animation-delay: 0, 2.5s;*/
        /*-moz-animation-delay: 0, 2.5s;*/
        /*animation-delay: 0, 2.5s;*/
        /*}*/
    </style>
    <!--<link type="text/css" rel="stylesheet" href="style.css">-->
    <!--<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>-->

    <!--[if lt IE 9]>
    <!--<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>-->
    <![endif]-->
</head>
<body id="top" dir="rtl">

<div id="cv" class="instaFade">
    <div class="mainDetails">
        <div id="headshot" class="quickFade">
            <!--<img src="headshot.jpg" alt="Alan Smith" />-->
        </div>

        <div id="name">
            <h1 class="quickFade delayTwo">{{$user->name}}</h1>
            <h2 class="quickFade delayThree"></h2>
        </div>

        <div id="contactDetails" class="quickFade delayFour">
            <ul>
                <li>ایمیل : {{$user->email}}</li>
                <li>شماره موبایل : {{$user->phone}}</li>

            </ul>
        </div>
        <div class="clear"></div>
    </div>

    <div id="mainArea" class="quickFade delayFive">
        <section>
            <article>
                <div class="sectionTitle">
                    <h1>اطلاعات شخصی</h1>
                </div>

                <div class="sectionContent">
                    <ul >
                        @foreach($intro as $value=>$data)

                        <li>مقطع تحصیلی :{{$data->grade}}</li><br>
                        <li>دانشگاه :{{$data->university}}</li><br>
                        <li>رشته تحصیلی :{{$data->major}}</li><br>

                        @endforeach
                        {{--@endforeach--}}
                    </ul>
                </div>
            </article>
            <div class="clear"></div>
        </section>


        <section>
            <div class="sectionTitle">
                <h1>گرایش  ها</h1>
            </div>

            <div class="sectionContent">
                <article>
                    @foreach($fields as $data=>$val)
                        @foreach($val as $all)
                    <h2>*{{$all}}</h2><br>
                            @endforeach
                    @endforeach

            </div>
            <div class="clear"></div>
        </section>


        <section>
            <div class="sectionTitle">
                <h1>مهارت ها</h1>
            </div>

            <div class="sectionContent">
                <ul class="keySkills">
                    @foreach($skills as $data=>$value)
                        @foreach($value as $all=>$val)
                            @foreach($val as $al=>$a)
                    <li>{{$a->name}} ({{$a->rate}})</li>
                            @endforeach
                        @endforeach
                    @endforeach
                </ul>
            </div>


            <div class="clear"></div>

        </section>
        <section>
            <div class="sectionTitle">
                <h1>می خواهد یاد بگیرد</h1>
            </div>

            <div class="sectionContent">
                <ul class="keySkills">
                    @foreach($tobelearn as $all)
                        @foreach($all as $value)
                            @foreach($value as $item)
                                {{$item}}
                            @endforeach
                        @endforeach
                    @endforeach
                </ul>
            </div>


            <div class="clear"></div>

        </section>




    </div>
</div>

</body>
</html>