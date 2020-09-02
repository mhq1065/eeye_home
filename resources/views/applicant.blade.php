<html>

<head>
	<meta charset="utf-8" />
	<title>你的邀请函</title>
	<link rel=icon href=/myicon.ico>
	<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<style>
		body,
		div,
		h1,
		h2,
		form,
		fieldset,
		input,
		textarea,
		footer,
		p {
			margin: 0;
			padding: 0;
			border: 0;
			outline: none;
		}

		#headline {
			color: #EDE7AB;
			letter-spacing: 10px;
			font-family: "黑体";
			display: block;
			margin-top: -160px;
			margin-bottom: 50px;
			top: -32px;
		}

		@font-face {
			font-family: 'YanoneKaffeesatzRegular';
			src: url('fonts/yanonekaffeesatz-regular-webfont.ttf') format('truetype'),
			font-weight: normal;
			font-style: normal;
		}

		body {
			background: #ccc url('images/bg_out.png');
			font-family: 'YanoneKaffeesatzRegular';
		}

		p {
			text-shadow: 0 1px 0 #fff;
			font-size: 24px;
		}

		#wrap {
			width: 530px;
			margin: 15% auto 0;
		}

		h1 {
			margin-bottom: 20px;
			text-align: center;
			font-size: 48px;
			text-shadow: 0 1px 0 #ede8d9;
		}

		#form_wrap {
			overflow: hidden;
			height: 446px;
			position: relative;
			top: 0px;
			-webkit-transition: all 1s ease-in-out .3s;
			-moz-transition: all 1s ease-in-out .3s;
			-o-transition: all 1s ease-in-out .3s;
			transition: all 1s ease-in-out .3s;
		}

		#form_wrap:before {
			content: "";
			position: absolute;
			bottom: 128px;
			left: 0px;
			background: url('images/before.png');
			width: 530px;
			height: 316px;
		}

		#form_wrap:after {
			content: "";
			position: absolute;
			bottom: 0px;
			left: 0;
			background: url('images/after.png');
			width: 530px;
			height: 260px;
		}

		#form_wrap.hide:after,
		#form_wrap.hide:before {
			display: none;
		}

		#form_wrap:hover {
			height: 776px;
			top: -200px;
		}

		form {
			background: #f7f2ec url('images/letter_bg.png');
			position: relative;
			top: 181px;
			overflow: hidden;
			height: 200px;
			width: 400px;
			margin: 0px auto;
			padding: 20px;
			border: 1px solid #fff;
			border-radius: 3px;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			box-shadow: 0px 0px 3px #9d9d9d, inset 0px 0px 27px #fff;
			-moz-box-shadow: 0px 0px 3px #9d9d9d, inset 0px 0px 14px #fff;
			-webkit-box-shadow: 0px 0px 3px #9d9d9d, inset 0px 0px 27px #fff;
			-webkit-transition: all 1s ease-in-out .3s;
			-moz-transition: all 1s ease-in-out .3s;
			-o-transition: all 1s ease-in-out .3s;
			transition: all 1s ease-in-out .3s;
		}

		#form_wrap:hover form {
			height: 530px;
		}

		label {
			margin: 11px 20px 0 0;
			font-size: 16px;
			color: #b3aba1;
			text-transform: uppercase;
			text-shadow: 0px 1px 0px #fff;
		}

		input[type=text],
		textarea {
			font: 14px normal normal uppercase helvetica, arial, serif;
			color: #7c7873;
			background: none;
			width: 380px;
			height: 36px;
			padding: 0px 10px;
			margin: 0 0 10px 0;
			border: 1px solid #f8f5f1;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			border-radius: 5px;
			-moz-box-shadow: inset 0px 0px 1px #726959;
			-webkit-box-shadow: inset 0px 0px 1px #b3a895;
			box-shadow: inset 0px 0px 1px #b3a895;
		}

		textarea {
			height: 80px;
			padding-top: 14px;
		}

		textarea:focus,
		input[type=text]:focus {
			background: rgba(255, 255, 255, .35);
		}

		#form_wrap input[type=submit] {
			position: relative;
			font-family: 'YanoneKaffeesatzRegular';
			font-size: 24px;
			color: #7c7873;
			text-shadow: 0 1px 0 #fff;
			width: 100%;
			text-align: center;
			opacity: 0;
			background: none;
			cursor: pointer;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-webkit-transition: opacity .6s ease-in-out 0s;
			-moz-transition: opacity .6s ease-in-out 0s;
			-o-transition: opacity .6s ease-in-out 0s;
			transition: opacity .6s ease-in-out 0s;
		}

		#form_wrap:hover input[type=submit] {
			z-index: 1;
			opacity: 1;
			-webkit-transition: opacity .5s ease-in-out 1.3s;
			-moz-transition: opacity .5s ease-in-out 1.3s;
			-o-transition: opacity .5s ease-in-out 1.3s;
			transition: opacity .5s ease-in-out 1.3s;
		}

		#form_wrap:hover input:hover[type=submit] {
			color: #435c70;
		}

		#greet {
			text-shadow: 0 1px 0 #fff;
			font-size: 24px;
			font-family: 'YanoneKaffeesatzRegular'
		}

		.content {
			line-height: 70px;
			text-indent: 2em;
		}


		@media screen and (max-width: 1000px) {
			#headline {
				font-size: 85px;
				margin-bottom: 60%;
				margin-top: 20px;
			}

			#greet {
				font-size: 30px;
			}

			.content {
				font-size: 23px;
				line-height: 45px;
			}

		}
	</style>
</head>

<body style="background-size: 100% 100%;">
	<div id="app">
		<div id="wrap">
			<h1 id="headline">邀请函</h1>
			<div id='form_wrap'>
				<form>
					<p id="greet">亲爱的@{{info.name}}：</p>
					<p class="content">
						感谢你报名参加e瞳网@{{info.department}}部门，我们希望进一步了解你。请你于@{{info.time}}到@{{info.position}}和我们见面。</p>
					<p class="content">如有特殊情况，请点击下面的按钮。</p>

					</br>
					<input type="submit" name="submit" value="下次一定" onclick="defer()" />
				</form>
			</div>
		</div>
	</div>
</body>
<script>
	function defer() {
		alert("请联系：18267493600")
	}
	function getQueryVariable(variable)
	{
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i=0;i<vars.length;i++) {
                var pair = vars[i].split("=");
                if(pair[0] == variable){return pair[1];}
        }
        return(false);
	}
	var student_id = getQueryVariable('xh')
	console.log(student_id)
	api_url = "/api/applicants/"
	var vm = new Vue({
		el: "#app",
		data: {
			info: []
		},
		watch: {
			student_id: {
				handler: function () {
					this.get_info()
				},
				immediate: true
			}
		},
		methods: {
			async get_info() {
				let res = await axios({
					method: "get",
					url: `${api_url}${student_id}`
				})
				console.log(res)
				this.info = res.data.state==='fail'?{}:res.data.data[0]
			}
		}
	})
</script>

</html>