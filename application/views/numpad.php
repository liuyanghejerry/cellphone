
<body>
<div data-role="page" id="numberpad">
	<div data-role="header" data-theme="d" role="banner">
			<h1>请输入手机号码</h1>
			<a href="main.html" data-icon="alert" id="timer">30秒后自动退出</a>
	</div><!-- /header -->
	<div data-role="content" data-theme="c" role="main">
			<input type="text" name="number" id="numberbox" value=""/>
			<div class="pad">
				<div data-role="controlgroup" data-type="horizontal">
				<a href="#" data-role="button" class="numbers">1</a>
				<a href="#" data-role="button" class="numbers">2</a>
				<a href="#" data-role="button" class="numbers">3</a>
				</div>
				<div data-role="controlgroup" data-type="horizontal">
				<a href="#" data-role="button" class="numbers">4</a>
				<a href="#" data-role="button" class="numbers">5</a>
				<a href="#" data-role="button" class="numbers">6</a>
				</div>
				<div data-role="controlgroup" data-type="horizontal">
				<a href="#" data-role="button" class="numbers">7</a>
				<a href="#" data-role="button" class="numbers">8</a>
				<a href="#" data-role="button" class="numbers">9</a>
				</div>
				<div data-role="controlgroup" data-type="horizontal">
				<a href="#" data-role="button" id="del" class="func">D</a>
				<a href="#" data-role="button" class="numbers">0</a>
				<a href="#" data-role="button" id="reset" class="func">R</a>
				</div>
			</div>
			<a href="#" data-role="button" data-theme="b" id="pad_ok">确定</a>
	</div>
</div>
</body>
</html>