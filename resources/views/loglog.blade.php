    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<script src="{{ asset('js/app.js') }}" defer></script>

        <title>KOHLER</title>
            <style>
            
            @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -30px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(https://images.squarespace-cdn.com/content/v1/509d599ae4b001bf110d0511/1425337250546-5F8TD0161VK1QC8PM622/ke17ZwdGBToddI8pDm48kGGTXs_wi6viFReMV4ohJ-IUqsxRUqqbr1mOJYKfIPR7LoDQ9mXPOjoJoqy81S2I8N_N4V1vUb5AoIIIbLZhVYy7Mythp_T-mtop-vrsUOmeInPi9iDjx9w8K4ZfjXt2dhdUlOF6YnUpw0VAyRXKXNMtkYBV6Xefa6C7v5Ey3titW07ycm2Trb21kYhaLJjddA/Kloop+Studio+-+Kohler+Fixtures+Banner+2+1600x650.jpg?format=2500w);
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}



.

.login input[type=button]{
	width: 260px;
	height: 35px;
	background: gray;
	border: 1px solid gray;
	cursor: pointer;
	border-radius: 2px;
	color: white;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
            
            
            </style>
    </head>
    <body>
        
    <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div> @yield('div')</div>
		</div>
		<br>
		<div class="login">
				
             @yield('content')     
		</div>
      
    </body>
    </html>