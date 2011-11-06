
<body>
<div data-role="page" id="recharge">
	<div data-role="header" data-position="inline">
			<a href="main" data-icon="home">主页</a>
			<h1>缴费充值</h1>
			<a href="main" data-icon="alert" id="timer">30秒后自动退出</a>
	</div><!-- /header -->
	<div data-role="content">
		<div class="right-part">
		<h3>使用方法：</h3>
		<ol>
		<li>在下面的表单中输入您的手机号码，并选择好充值金额</li>
		<li>点击确定后，在系统的提示下刷入您的银行卡</li>
		<li>如确认无误，您将得到打印出的流水单</li>
		</ol>
			<form action="wait_for_check" method="post" id="recharge-form">
			<div data-role="fieldcontain">
				<label for="name">请输入您的手机号码:</label>
				<!--<a href="numberpad.html" data-rel="dialog">Open dialog</a>-->
				<input type="text" placeholder="13XXXXXXXXX" name="phone_number" id="phone_number" value=""/>
			</div>
			<div data-role="fieldcontain">
				<label for="name">请再输一次手机号码:</label>
				<input type="text" name="phone_number_again" id="phone_number_again" value=""  />
			</div>
			<div data-role="fieldcontain">
				<label for="name" class="select">请输入您的充值金额:</label>
				<select name="list" data-native-menu="false">
				   <option value="50">50元</option>
				   <option value="100">100元</option>
				</select>
			</div>	
			<div data-role="fieldcontain">
				<button type="reset" data-inline="true">重置</button>
				<button href="wait_for_check" data-role="button" data-inline="true" data-theme="b" data-transition="slidedown" data-rel="dialog" id="check">确认</button>
			</div>	
			</form>
		</div>
		<div class="left-part">
						<ul data-role="listview" data-theme="d">
							<li data-role="list-divider" role="heading">功能选择</li>
							<li class="nav-li" data-theme="a"><a href="">手机充值</a></li>
							<li class="nav-li"><a href="bill">账单缴费</a></li>
							<li class="nav-li"><a href="bmw.html">选号入网</a></li>
							<li class="nav-li"><a href="bmw.html">热点促销</a></li>
							<li class="nav-li"><a href="bmw.html">增值业务</a></li>
							<li class="nav-li"><a href="bmw.html">3G业务</a></li>
							<li class="nav-li"><a href="bmw.html">周边指南</a></li>
							<li class="nav-li"><a href="bmw.html">优惠券</a></li>
						</ul>
		</div>
	</div>
	<div data-role="footer">
		<h4>liuyanghejerry</h4>
	</div><!-- /footer -->
</div>
</body>
</html>