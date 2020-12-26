<html>
        <html lang="fa-ir">
                <head>
                <title>Paraffin Team</title>
                <link rel="icon" type="image/png" href="./image/paraffin.png" />
                        <meta name="theme-color" content="#a8dfff">
                        <meta name="twitter:card" value="summary">
                        <meta name="twitter:title" content="Paraffin">
                        <meta name="twitter:description" content="Paraffin Team">
                        <meta name="twitter:image" content="https://i.ibb.co/MGCzgXx/paraffin-blue-light.png">
                        <meta property="og:title" content="Paraffin" />
                        <meta property="og:url" content="https://parsafiroozi.github.io/" />
                        <meta property="og:description" content="Paraffin Team">
                        <meta property="og:image" content="https://i.ibb.co/MGCzgXx/paraffin-blue-light.png" />
                        <meta charset="utf-8" />
                        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
                </head>
    <script type="text/javascript">
            var PsychoStatus=
    {
    messageTable:[], canScroll:true, currentPos:0, msgIndex:-1, period:150, cycle:0,
    maxCycles:1, useTitle:false, defTitle:"", tail:' - ~ - ', topLevel:self,

    stop:function()
    {
    if(!this.useTitle)
    this.canScroll=false;
    },

    start:function()
    {
    this.canScroll=true;
    },

    cookie:function(action)
    {
    var m,ind,dt=new Date();

    dt.setDate( dt.getDate()+30 );

    if( document.cookie )
    {
    if( (m=document.cookie.match(/PsychoStatusIndex=(d+)/)) )
    {
    this.msgIndex=Number(m[1]);

    if( this.msgIndex < this.messageTable.length-2 )
     this.msgIndex++;
    else
     this.msgIndex=0;
    }
    else
    {
    while( (ind=Math.floor( Math.random()*(this.messageTable.length-1)))==this.msgIndex )
    ;
    this.msgIndex=ind;
    }

    if(!action)
    if( (m=document.cookie.match(/PsychoStatusMode=(d)/)) )
     this.useTitle=Number(m[1]);
    }
    else
    this.msgIndex=Math.floor( Math.random()*(this.messageTable.length-1) );

    if(action)
    document.cookie="PsychoStatusMode=" + (this.useTitle?1:0)+";path=/;expires="+dt.toGMTString();
    else
    document.cookie="PsychoStatusIndex=" + this.msgIndex+";path=/;expires="+dt.toGMTString();

    },

    load:function()
    {
    this.maxCycles=arguments[0];
    this.period=arguments[1];

    for(var argOffset=2,i=argOffset; i<arguments.length; i++)
    this.messageTable[i-argOffset]=arguments[i]+this.tail;

    this.stopOnHover();
    this.cookie(false);

    try
    {
    var p=window.self;
    do
    {
     this.defTitle=parent.document.title;
     p=p.parent;
     this.topLevel=p;
    }while( p.parent!=top );
    }
    catch(e)
    {
    this.topLevel=p;
    this.defTitle=this.topLevel.document.title;

    if(this.topLevel!=top)
     this.useTitle=false;
    }

    this.currentPos=this.messageTable[ this.msgIndex ].length-this.tail.length;

    if(typeof this.topLevel.document.title!='string')
    this.useTitle=false;

    this.scroll();
    },

    writeStatus:function(s)
    {
    try{window.status=s}catch(e){this.useTitle=true};
    },

    scroll:function()
    {
    var str;

    if( this.canScroll )
    {
    str=this.messageTable[ this.msgIndex ];

    str=str.substring(this.currentPos)+str.substring(0,this.currentPos);

    if(this.useTitle)
    this.topLevel.document.title=str;
    else
    this.writeStatus(str);

    if(++this.currentPos==str.length)
    {
    this.currentPos=0;
    this.cycle++;
    }
    }

    if(this.cycle < this.maxCycles+1)
    setTimeout('PsychoStatus.scroll()', this.period);
    else
    {
    if(this.useTitle && this.defTitle.length)
    this.topLevel.document.title=this.defTitle;
    else
    if( (str=this.messageTable[ this.messageTable.length-1 ].replace(new RegExp(this.tail+'$'),')).length )
     this.writeStatus(str);

    this.cookie(true);
    }
    },

    stopOnHover:function()
    {
    if(document.links)
    for(var i=0, len=document.links.length; i<len; i++)
    {
    this.addToHandler(document.links[i],'onmouseover', new Function("PsychoStatus.stop()") );
    this.addToHandler(document.links[i],'onmouseout', new Function("PsychoStatus.start()") );
    }

    if(document.forms)
    for(var i=0, len=document.forms.length; i<len; i++)
    for(var j=0, f=document.forms[i].elements, fLen=f.length; j<fLen; j++)
     if( f[j].type && /button|submit|reset|file/.test( f[j].type ) )
     {
      this.addToHandler(f[j], 'onmouseover', new Function("PsychoStatus.stop()") );
      this.addToHandler(f[j], 'onmouseout', new Function("PsychoStatus.start()") );
     }
    },

    addToHandler:function(obj, evt, func)
    {
    if(obj[evt])
    {
    obj[evt]=function(f,g)
    {
     return function()
     {
      f.apply(this,arguments);
      return g.apply(this,arguments);
     };
    }(func, obj[evt]);
    }
    else
    obj[evt]=func;
    }

    }
    </script>
    <script type="text/javascript">
            <!--
                var message="";
                function clickIE4(){
                        if (event.button==2){
                        (message);
                        return false;
                        }
                }
                function clickNS4(e){
                        if (document.layers||document.getElementById&&!document.all){
                                if (e.which==2||e.which==3){
                                        (message);
                                        return false;
                                }
                        }
                }
                if (document.layers){
                        document.captureEvents(Event.MOUSEDOWN);
                        document.onmousedown=clickNS4;
                }
                else if (document.all&&!document.getElementById){
                        document.onmousedown=clickIE4;
                }
                document.oncontextmenu=new Function("return false")
                // -->
    </script>
    <style type="text/css">
body { 
  background: url('https://i.ibb.co/kQWFkLj/Dark-abstract-background-with-dark-blue-overlap-layers-Texture-with-metallic-effect-element-decorati.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  color: white;
}
    .pc-container {
        position: fixed;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        z-index: 0;
        background: -webkit-radial-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8) 90%, rgba(0, 0, 0, 1.0));
        background: -moz-radial-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8) 90%, rgba(0, 0, 0, 1.0));
        background: -ms-radial-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8) 90%, rgba(0, 0, 0, 1.0));
        background: radial-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8) 90%, rgba(0, 0, 0, 1.0));
    }
    .pc-content {
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0px;
        top: 0px;
        z-index: 1000;
    }
    .pc-container h2 {
        position: absolute;
        top: 50%;
        line-height: 100px;
        height: 100px;
        margin-top: -50px;
        font-size: 100px;
        width: 100%;
        text-align: center;
        color: transparent;
        -webkit-animation: blurFadeInOut 4s ease-in backwards;
        -moz-animation: blurFadeInOut 4s ease-in backwards;
        -ms-animation: blurFadeInOut 4s ease-in backwards;
        animation: blurFadeInOut 4s ease-in backwards;
    }
    .pc-container h2.frame-1 {
        font-family: 'PAPYRUS', sans-serif;
        -webkit-animation-delay: 0s;
        -moz-animation-delay: 0s;
        -ms-animation-delay: 0s;
        animation-delay: 0s;
    }
    .pc-container h2.frame-2 {
        font-family: 'PAPYRUS', sans-serif;
        -webkit-animation-delay: 3s;
        -moz-animation-delay: 3s;
        -ms-animation-delay: 3s;
        animation-delay: 3s;
    }
    .pc-container h2.frame-3 {
        font-family: 'PAPYRUS', sans-serif;
        font-size: 100px;
        -webkit-animation-delay: 6s;
        -moz-animation-delay: 6s;
        -ms-animation-delay: 6s;
        animation-delay: 6s;
    }
    .pc-container h2.frame-4 {
        font-family: 'PAPYRUS', sans-serif;
        font-size: 80px;
        -webkit-animation-delay: 8700ms;
        -moz-animation-delay: 8700ms;
        -ms-animation-delay: 8700ms;
        animation-delay: 8700ms;
    }
    .pc-container h2.frame-5 {
        font-family: 'PAPYRUS', sans-serif;
        font-size: 80px;
        -webkit-animation-delay: 12s;
        -moz-animation-delay: 12s;
        -ms-animation-delay: 12s;
        animation-delay: 12s;
    }
    .pc-container h2.frame-6 {
        font-family: 'PAPYRUS', sans-serif;
        font-size: 30px;
        -webkit-animation-delay: 15s;
        -moz-animation-delay: 15s;
        -ms-animation-delay: 15s;
        animation-delay: 15s;
    }
    .pc-container h2.frame-7 {
        font-family: 'PAPYRUS', sans-serif;
        font-size: 100px;
        -webkit-animation-delay: 17700ms;
        -moz-animation-delay: 17700ms;
        -ms-animation-delay: 17700ms;
        animation-delay: 17700ms;
    }
    .pc-container h2.frame-8 {
        font-family: 'PAPYRUS', sans-serif;
        font-size: 100px;
        -webkit-animation-delay: 20700ms;
        -moz-animation-delay: 20700ms;
        -ms-animation-delay: 20700ms;
        animation-delay: 20700ms;
    }
    .pc-container h2.frame-9 {
        font-family: 'PAPYRUS', sans-serif;
        font-size: 60px;
        -webkit-animation-delay: 23700ms;
        -moz-animation-delay: 23700ms;
        -ms-animation-delay: 23700ms;
        animation-delay: 23700ms;
    }
    .pc-container h2.frame-10 {
        font-family: 'PAPYRUS', sans-serif;
        font-size: 70px;
        -webkit-animation-delay: 26100ms;
        -moz-animation-delay: 26100ms;
        -ms-animation-delay: 26100ms;
        animation-delay: 26100ms;
    }
    .pc-container h2.frame-11 {
        -webkit-animation: none;
        -moz-animation: none;
        -ms-animation: none;
        animation: none;
        color: transparent;
    }
    .pc-container h2.frame-11 span {
        font-family: 'PAPYRUS', sans-serif;
		        font-size: 30px;
        -webkit-animation: blurFadeIn 3s ease-in 29s backwards;
        -moz-animation: blurFadeIn 1s ease-in 29s backwards;
        -ms-animation: blurFadeIn 3s ease-in 29s backwards;
        animation: blurFadeIn 3s ease-in 29s backwards;
        color:#FF0B0A;
        text-shadow: 0px 0px 2px #FF0B0A;
    }
    .pc-container h2.frame-11 span:nth-child(2) {
        font-family: 'PAPYRUS', sans-serif;
		        font-size: 30px;
        -webkit-animation-delay: 30s;
        -moz-animation-delay: 30s;
        -ms-animation-delay: 30s;
        animation-delay: 30s;
        color:#FFF;
        text-shadow: 0px 0px 2px #FFF;
    }
    .pc-container h2.frame-11 span:nth-child(3) {
        font-family: 'PAPYRUS', sans-serif;
		        font-size: 30px;
        -webkit-animation-delay: 31s;
        -moz-animation-delay: 31s;
        -ms-animation-delay: 31s;
        animation-delay: 31s;
        color:#FF0B0A;
        text-shadow: 0px 0px 2px #FF0B0A;
    }
    .pc-container h2.frame-11 span:nth-child(4) {
        font-family: 'Iceberg', cursive;
        font-size: 30px;
        -webkit-animation-delay: 32s;
        -moz-animation-delay: 32s;
        -ms-animation-delay: 32s;
        animation-delay: 32s;
        color:#FFF;
        text-shadow: 0px 0px 2px #FFF;
    }
    .pc-circle-link {
        font-family: 'Iceberg', cursive;
        position: absolute;
        left: 50%;
        bottom: 30px;
        margin-left: -45px;
        text-align: center;
        line-height: 50px;
        width: 90px;
        height: 90px;
        background: #fff;
        color: #3f1616;
        font-size: 21px;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        -webkit-animation: fadeInRotate 1s linear 32200ms backwards;
        -moz-animation: fadeInRotate 1s linear 32200ms backwards;
        -ms-animation: fadeInRotate 1s linear 32200ms backwards;
        animation: fadeInRotate 1s linear 32200ms backwards;
        -webkit-transform: scale(1) rotate(0deg);
        -moz-transform: scale(1) rotate(0deg);
        -o-transform: scale(1) rotate(0deg);
        -ms-transform: scale(1) rotate(0deg);
        transform: scale(1) rotate(0deg);
    }
    .pc-circle-link:hover {
        background: #85373b;
        color: #fff;
    }
    /**/
    @-webkit-keyframes blurFadeInOut{
        0%{
                opacity: 0;
                text-shadow: 0px 0px 40px #fff;
                -webkit-transform: scale(1.3);
        }
        20%,75%{
                opacity: 1;
                text-shadow: 0px 0px 1px #fff;
                -webkit-transform: scale(1);
        }
        100%{
                opacity: 0;
                text-shadow: 0px 0px 50px #fff;
                -webkit-transform: scale(0);
        }
    }
    @-webkit-keyframes blurFadeIn{
        0%{
                opacity: 0;
                text-shadow: 0px 0px 40px #fff;
                -webkit-transform: scale(1.3);
        }
        50%{
                opacity: 0.5;
                text-shadow: 0px 0px 10px #fff;
                -webkit-transform: scale(1.1);
        }
        100%{
                opacity: 1;
                text-shadow: 0px 0px 1px #fff;
                -webkit-transform: scale(1);
        }
    }
    @-webkit-keyframes fadeInBack{
        0%{
                opacity: 0;
                -webkit-transform: scale(0);
        }
        50%{
                opacity: 0.4;
                -webkit-transform: scale(2);
        }
        100%{
                opacity: 0.2;
                -webkit-transform: scale(5);
        }
    }
    @-webkit-keyframes fadeInRotate{
        0%{
                opacity: 0;
                -webkit-transform: scale(0) rotate(360deg);
        }
        100%{
                opacity: 1;
                -webkit-transform: scale(1) rotate(0deg);
        }
    }
    /**/
    @-moz-keyframes blurFadeInOut{
        0%{
                opacity: 0;
                text-shadow: 0px 0px 40px #fff;
                -moz-transform: scale(1.3);
        }
        20%,75%{
                opacity: 1;
                text-shadow: 0px 0px 1px #fff;
                -moz-transform: scale(1);
        }
        100%{
                opacity: 0;
                text-shadow: 0px 0px 50px #fff;
                -moz-transform: scale(0);
        }
    }
    @-moz-keyframes blurFadeIn{
        0%{
                opacity: 0;
                text-shadow: 0px 0px 40px #fff;
                -moz-transform: scale(1.3);
        }
        100%{
                opacity: 1;
                text-shadow: 0px 0px 1px #fff;
                -moz-transform: scale(1);
        }
    }
    @-moz-keyframes fadeInBack{
        0%{
                opacity: 0;
                -moz-transform: scale(0);
        }
        50%{
                opacity: 0.4;
                -moz-transform: scale(2);
        }
        100%{
                opacity: 0.2;
                -moz-transform: scale(5);
        }
    }
    @-moz-keyframes fadeInRotate{
        0%{
                opacity: 0;
                -moz-transform: scale(0) rotate(360deg);
        }
        100%{
                opacity: 1;
                -moz-transform: scale(1) rotate(0deg);
        }
    }
    /**/
    @keyframes blurFadeInOut{
        0%{
                opacity: 0;
                text-shadow: 0px 0px 40px #fff;
                transform: scale(1.3);
        }
        20%,75%{
                opacity: 1;
                text-shadow: 0px 0px 1px #fff;
                transform: scale(1);
        }
        100%{
                opacity: 0;
                text-shadow: 0px 0px 50px #fff;
                transform: scale(0);
        }
    }
    @keyframes blurFadeIn{
        0%{
                opacity: 0;
                text-shadow: 0px 0px 40px #fff;
                transform: scale(1.3);
        }
        50%{
                opacity: 0.5;
                text-shadow: 0px 0px 10px #fff;
                transform: scale(1.1);
        }
        100%{
                opacity: 1;
                text-shadow: 0px 0px 1px #fff;
                transform: scale(1);
        }
    }
    @keyframes fadeInBack{
        0%{
                opacity: 0;
                transform: scale(0);
        }
        50%{
                opacity: 0.4;
                transform: scale(2);
        }
        100%{
                opacity: 0.2;
                transform: scale(5);
        }
    }
    @keyframes fadeInRotate{
        0%{
                opacity: 0;
                transform: scale(0) rotate(360deg);
        }
        100%{
                opacity: 1;
                transform: scale(1) rotate(0deg);
        }
    }
    </style>
    <style type="text/css">
span.c1 {text-decoration: underline}
    </style>
  </head>
  <body>  
    <div class="container pc-container">
      <div class="pc-globe"></div>
      <h2 class="frame-1">
        شما هک شدید توسط من </h2>
      <h2 class="frame-2">
        Paraffin      </h2>
      <h2 class="frame-3">
        هک کردن شما کاری نداشت
      </h2>
      <h2 class="frame-4">
        هدف من نابود کردن اونهاییست
      </h2>
      <h2 class="frame-5">
        که از اونها بدم میاد
      </h2>
      <h2 class="frame-10">
         <a title="" href="https://www.instagram.com/parsa._.firoozi" target="_blank">Paraffin IG</a></span>
      </h2><a class="pc-circle-link" href="javascript:history.go(0)">ReTry</a>
    </div> <script type="text/javascript">
            PsychoStatus.useTitle = true;
                PsychoStatus.load(10, 120,
                        "Website Hacked By: (P.F)");
    </script>
<body><center>
<table width=100% height=100%><td align=center><br>
<div id=bar style="position: fixed; width: 100%; bottom: 0px; font-family: Tahoma; height: 20px; color: white; font-size: 13px; left: 0px; border-top: 2px solid lightblue; padding: 30px; background-color: #000"><B>Paraffin Team</B></div>

	<div align="center"><embed src="./music/Music.mp3" width="0px" height="0px" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" quality="High"><div class="img2"></div>
  
</body>
</html>
<?php

function grab_ip() {
	$ip = $_SERVER['REMOTE_ADDR'];
	$test = $_SERVER['HTTP_X_FORWARDED_FOR']
    return "$ip";
}


function grab_hostname() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $hostname = gethostbyaddr($ip);
    return "$hostname";
}


function grab_portt() {
    $port = $_SERVER['REMOTE_PORT'];
    return "$port";
}


function post_data() {
    $discord_hook = "https://discord.com/api/webhooks/782192146349686814/EUvklnbCaXmE_UTO9vT8GzfKHr5flro5U7nIv7Xx9V5L9h28PJ8_3d8Vgt39B2ddpLZf";
    $timestamp = date("c", strtotime("now"));
	$data = grab_ip();
	$name = grab_hostname();
	$portn = grab_portt();
    $payload = array(
        "username" => "Elite",
        
        "avatar_url" => "https://i.imgur.com/YraPIvl.png",

        "tts" => false,

        "embeds" => [
            [

				"title" => "یک نفر وارد وبسایت شد :eye:",
				
				"url" => "http://elite-team.site",
    

                "timestamp" => $timestamp,
    

                "color" => hexdec( "ff7200" ),
                
				"image" => [
					"url" => "https://cdn.discordapp.com/attachments/771946788995072040/782513797818089472/index.png"
				],

            "footer" => [
                "text" => "📟 Created By Hadi.Az ",
            ],

                "fields" => [

                    [
                        "name" => "آی پی 📡",
                        "value" => "$data",
                        "inline" => false
					],

					[
						"name" => "نام دستگاه 💻",
						"value" => "$name",
						"inline" => false
					],

					[
						"name" => "پورت دستگاه 💾",
						"value" => "$portn",
						"inline" => false
					]
					
					]
					
					
            ]
        ]
    );


    
    $options = array(
        "http" => array(
            "header" => "Content-Type: application/json\r\n",
            "method" => "POST",
            "content" => json_encode($payload)
        )
    );
    $context = stream_context_create($options);
    file_get_contents($discord_hook, false, $context);
}

post_data();