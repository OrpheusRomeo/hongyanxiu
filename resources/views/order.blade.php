
@extends('layout.header')
<body style=""><div id="StayFocusd-infobar" style="display: none; top: 329px;">
    <img src="chrome-extension://laankejkbhbdhmipfmgcngdelahlfoji/common/img/eye_19x19_red.png">
    <span id="StayFocusd-infobar-msg"></span>
    <span id="StayFocusd-infobar-links">
        <a id="StayFocusd-infobar-never-show">hide forever</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a id="StayFocusd-infobar-hide">hide once</a>
    </span>
</div>

  <div class="md-modal md-effect-16" id="loginWindow">
  <div class="md-content">
    <div class="loginBox">
      <div class="pop_login">
        <span class="close" onclick="hideLoginWindow()"></span>
        <div class="pop_login_right">
          <div class="pop_login_er">
            <div class="pop_l_er" id="wxLogin"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="md-overlay"></div>
<!-- the overlay element -->

<script type="text/javascript">
  // function initWxLogin() {
  //   // var obj = new WxLogin({
  //   // 					id:"wxLogin",
  //   // 					appid: "wx8180603ae854c0f7",
  //   // 					scope: "snsapi_login",
  //   // 					redirect_uri: "http%3A%2F%2Fneetneet.cn%2Fapi%2Fwx%2Fcallback",
  //   // 					state: "",
  //   // 					style: "white",
  //   // 					href: ""
  //   // 		});
  //   var obj = new WxLogin({
  //     id: "wxLogin",
  //     appid: "wxb1a994fbcb2abd1f",
  //     scope: "snsapi_login",
  //     redirect_uri: "http%3A%2F%2Fneets.cc%2Fapi%2Fwx%2Fcallback",
  //     state: "",
  //     style: "white",
  //     href: ""
  //   });
  // }
  // initWxLogin();

</script>
@extends('layout.title')

<script type="text/javascript">
  //搜索
  function _searchBtnClick(obj) {
    var key = $(obj).parent().find('input').val();
    if (key.indexOf('+') != -1) {
      key = key.replace('+', '%2B');
    }
    if (key == '' || key == undefined) {
      layer.msg('请输入搜索内容', { skin: 'winning-class', offset: '80px' });
      return;
    }
    location.href = '/search?key=' + key;
  }

  function toSubCriber() {
    location.href = '/subcriberlist';
  }

  function toIsBind() {
    location.href = '/isbindphone';
  }

  $(".user_tx").click(function(e) {
    e.stopPropagation();
    $(this).find('.my_btns').show();
  });

  function login_out() {
    neetsHelper.cookies.delCookie('neets_token');
    window.location.reload();
  }

</script>


		<div class="my_main clearfix">
			
			<div class="my_nav clearfix">
	
		<div class="my_nav_li active">
			<a href="/order">
				<div class="icon_my"></div>
				<span>我的订阅</span>
			</a>
		</div>
	
	
	
	
		<div class="my_nav_li">
			<a href="/watchedlist">
				<div class="icon_sub"></div>
				<span>已看完</span>
			</a>
		</div>
	
	
	
</div>
			
			<div class="my_center">
				
				<div class="my_center_header">
					<div class="my_icon_img">
	<div class="my_icon_img_2">
		<div class="my_icon_img_2_black"></div>
		<img src="./indexcss/img_user_bg.png">
		
			<div class="my_icon_img_2_bg2"></div>
		
	</div>
</div>
<div class="my_img3">
	<div class="my_img_tit">
		
			我的订阅清单
		
	</div>
</div>
<div class="my_header_bot">
	<div class="my_header_p1">
		
		
			<div class="user_icon">
				<img src="./indexcss/unlogin.png">
			</div>
			<span class="us_name">
				未登录
			</span>
		
		<!--<span class="us_time"></span>-->
	</div>
	
	<!--<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a></div>
	<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"看剧追剧上红颜秀！动漫、美剧、日剧、韩剧…一应剧全！","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>-->
	
	<!--<div class="my_header_p2">分享至</div>-->
</div>
				</div>
				
				<div class="my_center_main">
					<div class="my_center_boxL">
						
							<div class="my_row">
								<div class="sub_title">
									0条记录
									<a class="sub_a" href="javascript:void(0)" onclick=" showLoginWindow()">
										去订阅
										<div class="sub_a_icon"></div>
									</a>
								</div>
								<div class="my_sub_list">
									<div class="sub_none">
										<div class="icon"></div>
										<div class="sub_none_txt">
											<p>当你订阅的剧集更新时，你会在此看到它。</p>
											<a class="toLoginBtn" href="javascript:void(0)" onclick="showLoginWindow()">登录</a>
										</div>
									</div>
								</div>
							</div>
						
					</div>
		
					<div class="my_center_boxR">
						<div class="video_box">
	<div class="sub_title">
		新剧推荐
		<a class="sub_a" href="http://neets.cc/category">
			更多
			<div class="sub_a_icon"></div>
		</a>
	</div>
	<div class="video_box_main">
		
		
		 	
				<div class="sub_li">
					<div class="sub_img">
						<a href="http://neets.cc/detail/23394fc6690a4a9a9639e4497d491595" target="_blank" rel="noreferrer">
							<img src="./indexcss/large.jpg" onerror="onError(this)">
						</a>
					</div>
					<div class="sub_txt">
						<p class="sub_p1"><a href="http://neets.cc/detail/23394fc6690a4a9a9639e4497d491595" target="_blank" rel="noreferrer">今生是第一次</a></p>
						<p class="sub_p2">
							 
								<span>更新至14</span>
							
						</p>
						<div videoid="23394fc6690a4a9a9639e4497d491595" opstate="">
							
								<div class="subcriber_state" onclick="subState(this)">
									<div class="sub_state">订阅</div>
									<div class="sub_num">30595</div>
								</div>
							
						</div>
					</div>
				</div>
		 	
				<div class="sub_li">
					<div class="sub_img">
						<a href="http://neets.cc/detail/XuYQAFjohuEaAd9ixLdjW2" target="_blank" rel="noreferrer">
							<img src="./indexcss/large(1).jpg" onerror="onError(this)">
						</a>
					</div>
					<div class="sub_txt">
						<p class="sub_p1"><a href="http://neets.cc/detail/XuYQAFjohuEaAd9ixLdjW2" target="_blank" rel="noreferrer">最后的战士</a></p>
						<p class="sub_p2">
							 
								<span>更新至2</span>
							
						</p>
						<div videoid="XuYQAFjohuEaAd9ixLdjW2" opstate="">
							
								<div class="subcriber_state" onclick="subState(this)">
									<div class="sub_state">订阅</div>
									<div class="sub_num">0</div>
								</div>
							
						</div>
					</div>
				</div>
		 	
				<div class="sub_li">
					<div class="sub_img">
						<a href="http://neets.cc/detail/AEdMbfdZJoJoJqevHwqxka" target="_blank" rel="noreferrer">
							<img src="./indexcss/large(2).jpg" onerror="onError(this)">
						</a>
					</div>
					<div class="sub_txt">
						<p class="sub_p1"><a href="http://neets.cc/detail/AEdMbfdZJoJoJqevHwqxka" target="_blank" rel="noreferrer">暖爱</a></p>
						<p class="sub_p2">
							 
								<span>更新至1</span>
							
						</p>
						<div videoid="AEdMbfdZJoJoJqevHwqxka" opstate="">
							
								<div class="subcriber_state" onclick="subState(this)">
									<div class="sub_state">订阅</div>
									<div class="sub_num">0</div>
								</div>
							
						</div>
					</div>
				</div>
		 	
			
		
	</div>
</div>
<script type="text/javascript">
	var subState = function(obj){
		if(!neetsHelper.user.isAuthenticated()){
			showLoginWindow();
			return;
		}
		var id = $(obj).parent().attr('videoId');
		var opState = $(obj).parent().attr('opState');
		console.log(opState);
		if((opState == 0 || opState == 1)&&opState != '') {
			var url = ApiHost+'/api/subscriber/cancle/'+ id;
			$.ajax({
				type:"get",
				url:url,
				async:true,
				beforeSend:function(xhr){
					xhr.setRequestHeader("Authorization",'userId='+neetsHelper.user.getToken());
				},
				success:function(data){
					console.log(data);
					$(obj).parent().attr('opState',null)
					$(obj).removeClass('subcriber_alr');
					$(obj).find('.sub_state').text('订阅');
				}
			});
		}else{
			var url = "";
			url = ApiHost+'/api/subscriber/'+id;
			$.ajax({
				type:"get",
				url:url,
				async:true,
				beforeSend:function(xhr){
					xhr.setRequestHeader("Authorization",'userId='+neetsHelper.user.getToken());
				},
				success:function(data){
					$(obj).parent().attr('opState',1)
					$(obj).addClass('subcriber_alr');
					$(obj).find('.sub_state').text('已订阅');
				}
			});
		}
	}
</script>
					</div>
				</div>
			</div>
		</div>
	<!--底部-->
@extends('layout.footer')
    <script defer="defer" type="text/javascript">
      if (!isIE) {
        var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape(
          "%3Cspan style='display:none;' id='cnzz_stat_icon_1260732280'%3E%3C/span%3E%3Cscript src='" +
          cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1260732280' type='text/javascript'%3E%3C/script%3E"));
      }

    </script><span style="display:none;" id="cnzz_stat_icon_1260732280"><a href="http://www.cnzz.com/stat/website.php?web_id=1260732280" target="_blank" title="站长统计">站长统计</a></span><script src="./indexcss/z_stat.php" type="text/javascript"></script><script src="./indexcss/core.php" charset="utf-8" type="text/javascript"></script>


<script>
  (function() {
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
      bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    } else {
      bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
  })();

</script>
<!-- 
<script>
  (function() {
    var src = (document.location.protocol == "http:") ?
      "http://js.passport.qihucdn.com/11.0.1.js?b7b2bf71d7f0ba4c005944da5add782c" :
      "https://jspassport.ssl.qhimg.com/11.0.1.js?b7b2bf71d7f0ba4c005944da5add782c";
    document.write('<script src="' + src + '" id="sozz"><\/script>');
  })();

</script> -->

<script>
  (function() {
    var src = (document.location.protocol == "http:") ?
      "http://js.passport.qihucdn.com/11.0.1.js?aa350ba7f3e81ffa74b15ba60183cc50" :
      "https://jspassport.ssl.qhimg.com/11.0.1.js?aa350ba7f3e81ffa74b15ba60183cc50";
    document.write('<script src="' + src + '" id="sozz"><\/script>');
  })();

</script><script src="./indexcss/11.0.1.js" id="sozz"></script><script charset="utf-8" src="./indexcss/ab77b6ea7f3fbf79.js"></script>


</body><div></div></html>
