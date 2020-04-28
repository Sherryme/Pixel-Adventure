<!DOCTYPE html>
<!-- 

 , __                                   __                      
/|/  \                                 /  \                     
 | __/ ,_    __           ,   _   ,_  | __ |          _   , _|_ 
 |   \/  |  /  \_|  |  |_/ \_|/  /  | |/  \|  |   |  |/  / \_|  
 |(__/   |_/\__/  \/ \/   \/ |__/   |_/\__/\_/ \_/|_/|__/ \/ |_/

Mozilla presents an HTML5 mini-MMORPG by Little Workshop http://www.littleworkshop.fr

* Client libraries used: RequireJS, Underscore.js, jQuery, Modernizr
* Server-side: Node.js, Worlize/WebSocket-Node, miksago/node-websocket-server
* Should work in latest versions of Firefox, Chrome, Safari, Opera, Safari Mobile and Firefox for Android

 -->
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=0.56, maximum-scale=0.56, user-scalable=no">
        <link rel="icon" type="image/png" href="img/common/favicon.png">
        <meta property="og:title" content="BrowserQuest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://browserquest.mozilla.org/">
        <meta property="og:image" content="http://browserquest.mozilla.org/img/common/promo-title.jpg">
        <meta property="og:site_name" content="BrowserQuest">
        <meta property="og:description" content="Play Mozilla's BrowserQuest, an HTML5 massively multiplayer game demo powered by WebSockets!">
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/achievements.css" type="text/css">
        <script src="js/lib/modernizr.js" type="text/javascript"></script>
        <!--[if lt IE 9]>
                <link rel="stylesheet" href="css/ie.css" type="text/css">
                <script src="js/lib/css3-mediaqueries.js" type="text/javascript"></script>
                <script type="text/javascript">
                document.getElementById('parchment').className = ('error');
                </script>
        <![endif]-->
        <script src="js/detect.js" type="text/javascript"></script>
        <title>像素大冒险</title>
	</head>
    <!--[if lt IE 9]>
	<body class="intro upscaled">
    <![endif]-->
	<body class="intro">
	    <noscript>
	       <div class="alert">
	           你需要启用 JavaScript 才能玩像素大冒险.
	       </div>
	    </noscript>
	    <div id="intro">
	        <h1 id="logo">
	           <span id="logosparks">
	               
	           </span>
	        </h1>
	        <article id="portrait">
	            <p>
                    请将设备旋转到横屏模式，并在浏览器软件中打开（QQ内置是不可以的）
	            </p>
	            <div id="tilt"></div>
	        </article>
	        <section id="parchment" class="createcharacter">
	            <div class="parchment-left"></div>
	            <div class="parchment-middle">
                    <article id="createcharacter">
          	           <h1>
          	               <span class="left-ornament"></span>
          	               一个大型多人冒险游戏
          	               <span class="right-ornament"></span>
                         </h1>
                         <div id="character" class="disabled">
                             <div></div>
                         </div>
                         <form action="none" method="get" accept-charset="utf-8">
                             <input type="text" id="nameinput" class="stroke" name="player-name" placeholder="Name your character" maxlength="15">
                         </form>
                         <div class="play button disabled">
                             <div></div>
                             <img src="img/common/spinner.gif" alt="">
                         </div>
                         <div class="ribbon">
                            <div class="top"></div>
                            <div class="bottom"></div>
                         </div>
                    </article>
                    <article id="loadcharacter">
          	           <h1>
          	               <span class="left-ornament"></span>
          	               载入您的角色
          	               <span class="right-ornament"></span>
                         </h1>
                         <div class="ribbon">
                            <div class="top"></div>
                            <div class="bottom"></div>
                         </div>
                         <img id="playerimage" src="">
                         <div id="playername" class="stroke">
                         </div>
                         <div class="play button">
                             <div></div>
                             <img src="img/common/spinner.gif" alt="">
                         </div>
                         <div id="create-new">
                            <span><span>或者</span> 创建一个新角色</span>
                         </div>
                    </article>
                    <article id="confirmation">
          	           <h1>
          	               <span class="left-ornament"></span>
          	               确认要删除角色码？
          	               <span class="right-ornament"></span>
                         </h1>
                         <p>
                            您将会失去所有的物品和成就<br>
                            您确定要继续吗？
                         </p>
                         <div class="delete button"></div>
                         <div id="cancel">
                            <span>取消</span>
                         </div>
                    </article>
    	            <article id="credits">
        	            <h1>
         	               <span class="left-ornament"></span>
         	               <span class="title">
         	                   Made for Mozilla by <a target="_blank" class="stroke clickable" href="http://www.littleworkshop.fr/">Little Workshop</a>
         	               </span>
         	               <span class="right-ornament"></span>
                        </h1>
                        <div id="authors">
                            <div id="guillaume">
                                <div class="avatar"></div>
                                Pixels by
                                <a class="stroke clickable" target="_blank" href="http://twitter.com/glecollinet">Guillaume Lecollinet</a>
                            </div>
                            <div id="franck">
                                <div class="avatar"></div>
                                Code by
                                <a class="stroke clickable" target="_blank" href="http://twitter.com/whatthefranck">Franck Lecollinet</a>
                            </div>
                        </div>
                        <div id="seb">
                            
                            <span id="note"></span>
                            Music by <a class="clickable" target="_blank" href="http://soundcloud.com/gyrowolf/sets/gyrowolfs-rpg-maker-music-pack/">Gyrowolf</a>, <a class="clickable" target="_blank" href="http://blog.dayjo.org/?p=335">Dayjo</a>, <a class="clickable" target="_blank" href="http://soundcloud.com/freakified/what-dangers-await-campus-map">Freakified</a>, &amp; <a target="_blank" class="clickable" href="http://www.newgrounds.com/audio/listen/349734">Camoshark</a>
                           
                        </div>
	                    <div id="close-credits">
	                        <span>- 单击任意位置关闭 -</span>
                        </div>
    	            </article>
    	            <article id="about">
        	            <h1>
         	               <span class="left-ornament"></span>
         	               <span class="title">
         	                   像素大冒险是什么?
         	               </span>
         	               <span class="right-ornament"></span>
                        </h1>
                        <p id="game-desc">
                            像素大冒险是一款多人在线游戏，邀请你从你的浏览器中探索一个冒险世界
                        </p>
                        <div class="left">
                            <div class="img"></div>
                            <p>
                                这个演示项目由HTML5和WebSockets支持，它们允许在Web上进行实时游戏和应用程序。
                            </p>
                            <span class="link">
                                <span class="ext-link"></span>
                                <a target="_blank" class="clickable" href="http://hacks.mozilla.org/2012/03/browserquest/">了解更多</a>相关技术
                            </span>
                        </div>
                        <div class="right">
                            <div class="img"></div>
                            <p>
                                像素大冒险可在Firefox、Chrome、Safari以及iOS设备和Android版Firefox上运行。
                            </p>
                            <span class="link">
                                <span class="ext-link"></span>
                                在Github上<a target="_blank" class="clickable" href="http://github.com/mozilla/BrowserQuest">获取源代码</a>
                            </span>
                        </div>
	                    <div id="close-about">
	                        <span>- 单击任意位置关闭 -</span>
                        </div>
    	            </article>
    	            <article id="death">
                        <p>胜败乃兵家常事，大侠请重新来过</p>
    					<div id="respawn" class="button"></div>
    	            </article>
                    <article id="error">
          	           <h1>
          	               <span class="left-ornament"></span>
          	               您的浏览器不支持 BrowserQuest!
          	               <span class="right-ornament"></span>
                         </h1>
                         <p>
                             抱歉，您的浏览器不支持 WebSockets.<br>
                             我们推荐您使用 Firefox、 Chrome 、 Safari.
                         </p>
                    </article>
	            </div>
	            <div class="parchment-right"></div>
	        </section>
	    </div>
		<div id="container">
		    <div id="canvasborder">
		        <article id="instructions" class="clickable">
		            <div class="close"></div>
		            <h1>
     	               <span class="left-ornament"></span>
     	               怎么玩？
     	               <span class="right-ornament"></span>
	                </h1>
	                <ul>
	                   <li><span class="icon"></span>左键点击移动、攻击和拾起物品。</li>
	                   <li><span class="icon"></span>按回车键聊天。</li>
	                   <li><span class="icon"></span>游戏会自动保存。</li>
	                </ul>
	                    <p>- 单击任意位置关闭 -</p>
		        </article>
		        <article id="achievements" class="page1 clickable">
		            <div class="close"></div>
		            <div id="achievements-wrapper">
		                <div id="lists">
        		        </div>
    		        </div>
    		        <div id="achievements-count" class="stroke">
                        完成
    		            <div>
    		                <span id="unlocked-achievements">0</span>
    		                /
    		                <span id="total-achievements"></span>
    		            </div> 
    		        </div>
		            <nav class="clickable">
		                <div id="previous"></div>
		                <div id="next"></div>
		            </nav>
		        </article>
    			<div id="canvas">
    				<canvas id="background"></canvas>
    				<canvas id="entities"></canvas>
    				<canvas id="foreground" class="clickable"></canvas>
    			</div>
    			<div id="bubbles">				
    			</div>
    			<div id="achievement-notification">
    			    <div class="coin">
    			        <div id="coinsparks"></div>
    			    </div>
    			    <div id="achievement-info">
        			    <div class="title">新成就解锁！</div>
        			    <div class="name"></div>
    			    </div>
    			</div>
    			<div id="bar-container">
					<div id="healthbar">
					</div>
					<div id="hitpoints">
					</div>
					<div id="weapon"></div>
					<div id="armor"></div>
					<div id="notifications">
					    <div>
					       <span id="message1"></span>
					       <span id="message2"></span>
					    </div>
					</div>
                    <div id="playercount" class="clickable">
                        <span class="count">0</span> <span>个玩家</span>
                    </div>
                    <div id="barbuttons">
                        <div id="chatbutton" class="barbutton clickable"></div>
                        <div id="achievementsbutton" class="barbutton clickable"></div>
                        <div id="helpbutton" class="barbutton clickable"></div>
                        <div id="mutebutton" class="barbutton clickable active"></div>
                    </div>
    			</div>
				<div id="chatbox">
				    <form action="none" method="get" accept-charset="utf-8">
					    <input id="chatinput" class="gp" type="text" maxlength="60">
				    </form>
				</div>
                <div id="population">
                    <div id="instance-population" class="">
                        本区：<span>0</span> <span>个玩家</span>
                    </div>
                    <div id="world-population" class="">
                        共计：<span>0</span> <span>个玩家</span>
                    </div>
                </div>
		    </div>
		</div>
		<footer>
		    <div id="sharing" class="clickable">

		    </div>
		    <div id="credits-link" class="clickable">
		      <!-- - <span id="toggle-credits">Credits</span> -->
		    </div>
		</footer>
		
		<ul id="page-tmpl" class="clickable" style="display:none">
        </ul>
        <ul>
            <li id="achievement-tmpl" style="display:none">
                <div class="coin"></div>
                <span class="achievement-name">成就名称</span>
                <span class="achievement-description">成就描述</span>
                <div class="achievement-sharing">
                  <a href="" class="twitter"></a>
                </div>
            </li>
        </ul>
        
        <img src="img/common/thingy.png" alt="" class="preload">
        
        <div id="resize-check"></div>
		
        <script type="text/javascript">
            var ctx = document.querySelector('canvas').getContext('2d'),
                parchment = document.getElementById("parchment");
            
            if(!Detect.supportsWebSocket()) {
                parchment.className = "error";
            }
            
            if(ctx.mozImageSmoothingEnabled === undefined) {
                document.querySelector('body').className += ' upscaled';
            }
            
            if(!Modernizr.localstorage) {
                var alert = document.createElement("div");
                    alert.className = 'alert';
                    alertMsg = document.createTextNode("You need to enable cookies/localStorage to play BrowserQuest");
                    alert.appendChild(alertMsg);

                target = document.getElementById("intro");
                document.body.insertBefore(alert, target);
            } else if(localStorage && localStorage.data) {
                parchment.className = "loadcharacter";
            }
        </script>
        
        <script src="js/lib/log.js"></script>
        <script>
                var require = { waitSeconds: 60 };
        </script>
        <script data-main="js/home" src="js/lib/require-jquery.js"></script>
	</body>
</html>