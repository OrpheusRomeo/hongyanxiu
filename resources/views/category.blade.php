@extends('layout.header')

<body style=""><div id="StayFocusd-infobar" style="display:none;">
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

<div class="container">
	<div class="header">
  <div class="header_main clearfix">
    <div class="header_main_left">
      <div class="logo"><a href="http://neets.cc/">Neets.cc</a></div>
      <ul>
        
            <li class=""><a href="http://neets.cc/">首页</a></li>
            

              
                  <li><a href="javascript:void(0)" onclick="toSubCriber()">我的清单</a></li>
                  


                    
                      <li class="active"><a href="http://neets.cc/category">分类</a></li>
                      

      </ul>
    </div>
    <div class="header_main_right">
      <div class="search_about">
        <input type="text" name="search_header" id="search_header">
        <a class="search_a" onclick="_searchBtnClick(this)">
          <div class="search_btn"></div>
        </a>
      </div>

      
            <a class="login_btn" href="javascript:void(0)" onclick="showLoginWindow()">登录</a>
            

    </div>
  </div>
</div>

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


	<!--category-->
	<div class="category_nav">
  <div class="category_row">
    <div class="cate_row_l">
      状态
    </div>
    <div class="cate_row_r">
      <ul>
        
              <li class="active"><a href="javascript:void(0)" onclick="_search({state:&#39;&#39;})">全部</a></li>
              <li class=""><a href="javascript:void(0)" onclick="_search({state:&#39;0&#39;})">连载</a></li>
              <li class=""><a href="javascript:void(0)" onclick="_search({state:&#39;1&#39;})">完结</a></li>
              
      </ul>
    </div>
  </div>
  <div class="category_row">
    <div class="cate_row_l">
      类目
    </div>
    <div class="cate_row_r">
      <ul>
        
                <li class="active"><a href="javascript:void(0)" onclick="_search({type:&#39;&#39;})">全部</a></li>
                <li class=""><a href="javascript:void(0)" onclick="_search({type:&#39;tv&#39;})">电视剧</a></li>
                <li class=""><a href="javascript:void(0)" onclick="_search({type:&#39;movie&#39;})">电影</a></li>
                <li class=""><a href="javascript:void(0)" onclick="_search({type:&#39;animation&#39;})">动漫</a></li>
                
      </ul>
    </div>
  </div>
  <div class="category_row">
    <div class="cate_row_l">
      国家
    </div>
    <div class="cate_row_r">
      <ul>
        
                      <li class="active"><a href="javascript:void(0)" onclick="_search({ country:&#39;&#39; })">全部</a></li>
                      <li class=""><a href="javascript:void(0)" onclick="_search({ country:&#39;america&#39; })">美国</a></li>
                      <li class=""><a href="javascript:void(0)" onclick="_search({ country:&#39;japan&#39; })">日本</a></li>
                      <li class=""><a href="javascript:void(0)" onclick="_search({ country:&#39;korea&#39; })">韩国</a></li>
                      <li class=""><a href="javascript:void(0)" onclick="_search({ country:&#39;china&#39; })">中国</a></li>
                      <li class=""><a href="javascript:void(0)" onclick="_search({ country:&#39;thailand&#39; })">泰国</a></li>
                      <li class=""><a href="javascript:void(0)" onclick="_search({ country:&#39;england&#39; })">英国</a></li>
                      
      </ul>
    </div>
  </div>
  <div class="category_row">
    <div class="cate_row_l">
      年代
    </div>
    <div class="cate_row_r">
      <ul>
        
                      <li class="active"><a href="javascript:void(0)" onclick="_search({ startYear:&#39;&#39;,endYear:&#39;&#39;, })">全部</a></li>
                      <li class=""><a href="javascript:void(0)" onclick="_search({ startYear:&#39;2017&#39;,endYear:&#39;2017&#39;, })">2017</a></li>
                      <li class=""><a href="javascript:void(0)" onclick="_search({ startYear:&#39;2016&#39;,endYear:&#39;2016&#39;, })">2016</a></li>
                      <li class=""><a href="javascript:void(0)" onclick="_search({ startYear:&#39;2011&#39;,endYear:&#39;2015&#39;, })">2015-2011</a></li>
                      <li class=""><a href="javascript:void(0)" onclick="_search({ startYear:&#39;2000&#39;,endYear:&#39;2011&#39;, })">2011-2000</a></li>
                      <li class=""><a href="javascript:void(0)" onclick="_search({ startYear:&#39;1990&#39;,endYear:&#39;2000&#39;, })">90年代</a></li>
                      <li class=""><a href="javascript:void(0)" onclick="_search({ startYear:&#39;&#39;,endYear:&#39;1899&#39;, })">更早</a></li>
                      


      </ul>
    </div>
  </div>

  
    <div class="category_row">
      <div class="cate_row_l">
        时间表
      </div>
      <div class="cate_row_r">
        <ul>
          
                          <li class="active"><a href="javascript:void(0)" onclick="_search({ week:&#39;&#39;,state:&#39;0&#39; })">全部</a></li>
                          <li class=""><a href="javascript:void(0)" onclick="_search({ week:&#39;1&#39;,state:&#39;0&#39; })">周一</a></li>
                          <li class=""><a href="javascript:void(0)" onclick="_search({ week:&#39;2&#39;,state:&#39;0&#39; })">周二</a></li>
                          <li class=""><a href="javascript:void(0)" onclick="_search({ week:&#39;3&#39;,state:&#39;0&#39; })">周三</a></li>
                          <li class=""><a href="javascript:void(0)" onclick="_search({ week:&#39;4&#39;,state:&#39;0&#39;})">周四</a></li>
                          <li class=""><a href="javascript:void(0)" onclick="_search({ week:&#39;5&#39;,state:&#39;0&#39; })">周五</a></li>
                          <li class=""><a href="javascript:void(0)" onclick="_search({ week:&#39;6&#39;,state:&#39;0&#39; })">周六</a></li>
                          <li class=""><a href="javascript:void(0)" onclick="_search({ week:&#39;7&#39;,state:&#39;0&#39; })">周天</a></li>
                          
        </ul>
      </div>
    </div>
    
</div>

<div class="hot_new_nav clearfix">
  <!--1最热，2最新-->
  
      <div class="fornew " onclick="_search({ order:&#39;2&#39; })">最新</div>
      <div class="forhot act" onclick="_search({ order:&#39;1&#39; })">最热</div>
      
</div>

	
	<div class="video_list clearfix" id="totalPages" totalpages="743" currentpage="1">
		
			
				<div class="video_li_box">
					<div class="v_img">
						<a href="http://neets.cc/detail/91159fd3a9064b93bfbbc12b74a0484b" target="_blank">
							<img src="./Neets_最新_第1页_分类检索_files/large.jpg" onerror="onError(this)">
						</a>
					</div>
					<div class="v_box">
						<div class="v_box1">
							<p><a href="http://neets.cc/detail/91159fd3a9064b93bfbbc12b74a0484b" target="_blank">权力的游戏 第七季</a></p>
						</div>
						<div class="v_box2">
							
								共7集
							
						</div>
						
						<div videoid="91159fd3a9064b93bfbbc12b74a0484b" opstate="">
							
								<div class="subcriber_state" onclick="subState(this)">
									<div class="sub_state">订阅</div>
									<div class="sub_num">251260</div>
								</div>
							
						</div>
						
					</div>
				</div>
			
				<div class="video_li_box">
					<div class="v_img">
						<a href="http://neets.cc/detail/4c790b60b97f4489baf1c16d7336fa49" target="_blank">
							<img src="./Neets_最新_第1页_分类检索_files/large(1).jpg" onerror="onError(this)">
						</a>
					</div>
					<div class="v_box">
						<div class="v_box1">
							<p><a href="http://neets.cc/detail/4c790b60b97f4489baf1c16d7336fa49" target="_blank">春风十里，不如你</a></p>
						</div>
						<div class="v_box2">
							
								共40集
							
						</div>
						
						<div videoid="4c790b60b97f4489baf1c16d7336fa49" opstate="">
							
								<div class="subcriber_state" onclick="subState(this)">
									<div class="sub_state">订阅</div>
									<div class="sub_num">160191</div>
								</div>
							
						</div>
						
					</div>
				</div>
			
				<div class="video_li_box">
					<div class="v_img">
						<a href="http://neets.cc/detail/92aa7a1974c0406e9382caf78a1acc37" target="_blank">
							<img src="./Neets_最新_第1页_分类检索_files/large(2).jpg" onerror="onError(this)">
						</a>
					</div>
					<div class="v_box">
						<div class="v_box1">
							<p><a href="http://neets.cc/detail/92aa7a1974c0406e9382caf78a1acc37" target="_blank">白夜追凶</a></p>
						</div>
						<div class="v_box2">
							
								共32集
							
						</div>
						
						<div videoid="92aa7a1974c0406e9382caf78a1acc37" opstate="">
							
								<div class="subcriber_state" onclick="subState(this)">
									<div class="sub_state">订阅</div>
									<div class="sub_num">156522</div>
								</div>
							
						</div>
						
					</div>
				</div>
			
				<div class="video_li_box">
					<div class="v_img">
						<a href="http://neets.cc/detail/e62b116ca3db444a9006f0ce7443c53c" target="_blank">
							<img src="./Neets_最新_第1页_分类检索_files/large(3).jpg" onerror="onError(this)">
						</a>
					</div>
					<div class="v_box">
						<div class="v_box1">
							<p><a href="http://neets.cc/detail/e62b116ca3db444a9006f0ce7443c53c" target="_blank">河神</a></p>
						</div>
						<div class="v_box2">
							
								共24集
							
						</div>
						
						<div videoid="e62b116ca3db444a9006f0ce7443c53c" opstate="">
							
								<div class="subcriber_state" onclick="subState(this)">
									<div class="sub_state">订阅</div>
									<div class="sub_num">123235</div>
								</div>
							
						</div>
						
					</div>
				</div>
			
				<div class="video_li_box">
					<div class="v_img">
						<a href="http://neets.cc/detail/3c90738b85904f4c9c64e201be5d5ade" target="_blank">
							<img src="./Neets_最新_第1页_分类检索_files/large(4).jpg" onerror="onError(this)">
						</a>
					</div>
					<div class="v_box">
						<div class="v_box1">
							<p><a href="http://neets.cc/detail/3c90738b85904f4c9c64e201be5d5ade" target="_blank">当你沉睡时</a></p>
						</div>
						<div class="v_box2">
							
								共32集
							
						</div>
						
						<div videoid="3c90738b85904f4c9c64e201be5d5ade" opstate="">
							
								<div class="subcriber_state" onclick="subState(this)">
									<div class="sub_state">订阅</div>
									<div class="sub_num">121538</div>
								</div>
							
						</div>
						
					</div>
				</div>
			
				<div class="video_li_box">
					<div class="v_img">
						<a href="http://neets.cc/detail/5c3dda92725e45e8a7a0d045693acfde" target="_blank">
							<img src="./Neets_最新_第1页_分类检索_files/large(5).jpg" onerror="onError(this)">
						</a>
					</div>
					<div class="v_box">
						<div class="v_box1">
							<p><a href="http://neets.cc/detail/5c3dda92725e45e8a7a0d045693acfde" target="_blank">进击的巨人 第二季</a></p>
						</div>
						<div class="v_box2">
							
								共12集
							
						</div>
						
						<div videoid="5c3dda92725e45e8a7a0d045693acfde" opstate="">
							
								<div class="subcriber_state" onclick="subState(this)">
									<div class="sub_state">订阅</div>
									<div class="sub_num">97936</div>
								</div>
							
						</div>
						
					</div>
				</div>
			
				<div class="video_li_box">
					<div class="v_img">
						<a href="http://neets.cc/detail/9b19b45377054c8ebc8eeec9a0f76ed6" target="_blank">
							<img src="./Neets_最新_第1页_分类检索_files/large(6).jpg" onerror="onError(this)">
						</a>
					</div>
					<div class="v_box">
						<div class="v_box1">
							<p><a href="http://neets.cc/detail/9b19b45377054c8ebc8eeec9a0f76ed6" target="_blank">海贼王</a></p>
						</div>
						<div class="v_box2">
							
								
									更新至814集
								
								
							
						</div>
						
						<div videoid="9b19b45377054c8ebc8eeec9a0f76ed6" opstate="">
							
								<div class="subcriber_state" onclick="subState(this)">
									<div class="sub_state">订阅</div>
									<div class="sub_num">89294</div>
								</div>
							
						</div>
						
					</div>
				</div>
			
				<div class="video_li_box">
					<div class="v_img">
						<a href="http://neets.cc/detail/e3dc2de9e47042798cfaba5a23f83244" target="_blank">
							<img src="./Neets_最新_第1页_分类检索_files/large(7).jpg" onerror="onError(this)">
						</a>
					</div>
					<div class="v_box">
						<div class="v_box1">
							<p><a href="http://neets.cc/detail/e3dc2de9e47042798cfaba5a23f83244" target="_blank">双世宠妃</a></p>
						</div>
						<div class="v_box2">
							
								共24集
							
						</div>
						
						<div videoid="e3dc2de9e47042798cfaba5a23f83244" opstate="">
							
								<div class="subcriber_state" onclick="subState(this)">
									<div class="sub_state">订阅</div>
									<div class="sub_num">78497</div>
								</div>
							
						</div>
						
					</div>
				</div>
			
				<div class="video_li_box">
					<div class="v_img">
						<a href="http://neets.cc/detail/283380086daa4ce7adccca3743987349" target="_blank">
							<img src="./Neets_最新_第1页_分类检索_files/large(8).jpg" onerror="onError(this)">
						</a>
					</div>
					<div class="v_box">
						<div class="v_box1">
							<p><a href="http://neets.cc/detail/283380086daa4ce7adccca3743987349" target="_blank">缘之空</a></p>
						</div>
						<div class="v_box2">
							
								共12集
							
						</div>
						
						<div videoid="283380086daa4ce7adccca3743987349" opstate="">
							
								<div class="subcriber_state" onclick="subState(this)">
									<div class="sub_state">订阅</div>
									<div class="sub_num">77377</div>
								</div>
							
						</div>
						
					</div>
				</div>
			
				<div class="video_li_box">
					<div class="v_img">
						<a href="http://neets.cc/detail/5b063067cd4b4e8cb63baec11151f850" target="_blank">
							<img src="./Neets_最新_第1页_分类检索_files/large(9).jpg" onerror="onError(this)">
						</a>
					</div>
					<div class="v_box">
						<div class="v_box1">
							<p><a href="http://neets.cc/detail/5b063067cd4b4e8cb63baec11151f850" target="_blank">请回答1988</a></p>
						</div>
						<div class="v_box2">
							
								共20集
							
						</div>
						
						<div videoid="5b063067cd4b4e8cb63baec11151f850" opstate="">
							
								<div class="subcriber_state" onclick="subState(this)">
									<div class="sub_state">订阅</div>
									<div class="sub_num">74969</div>
								</div>
							
						</div>
						
					</div>
				</div>
			
				<div class="video_li_box">
					<div class="v_img">
						<a href="http://neets.cc/detail/570679a3815d4e489757938a7f15ba3e" target="_blank">
							<img src="./Neets_最新_第1页_分类检索_files/large(10).jpg" onerror="onError(this)">
						</a>
					</div>
					<div class="v_box">
						<div class="v_box1">
							<p><a href="http://neets.cc/detail/570679a3815d4e489757938a7f15ba3e" target="_blank">东京食尸鬼</a></p>
						</div>
						<div class="v_box2">
							
								共12集
							
						</div>
						
						<div videoid="570679a3815d4e489757938a7f15ba3e" opstate="">
							
								<div class="subcriber_state" onclick="subState(this)">
									<div class="sub_state">订阅</div>
									<div class="sub_num">73322</div>
								</div>
							
						</div>
						
					</div>
				</div>
			
				<div class="video_li_box">
					<div class="v_img">
						<a href="http://neets.cc/detail/3b498111c26c4ff2ab9ada04727dd294" target="_blank">
							<img src="./Neets_最新_第1页_分类检索_files/large(11).jpg" onerror="onError(this)">
						</a>
					</div>
					<div class="v_box">
						<div class="v_box1">
							<p><a href="http://neets.cc/detail/3b498111c26c4ff2ab9ada04727dd294" target="_blank">逃避虽可耻但有用</a></p>
						</div>
						<div class="v_box2">
							
								共11集
							
						</div>
						
						<div videoid="3b498111c26c4ff2ab9ada04727dd294" opstate="">
							
								<div class="subcriber_state" onclick="subState(this)">
									<div class="sub_state">订阅</div>
									<div class="sub_num">72611</div>
								</div>
							
						</div>
						
					</div>
				</div>
			
				<div class="video_li_box">
					<div class="v_img">
						<a href="http://neets.cc/detail/378e926a15cf451fa33d77da827aca17" target="_blank">
							<img src="./Neets_最新_第1页_分类检索_files/large(12).jpg" onerror="onError(this)">
						</a>
					</div>
					<div class="v_box">
						<div class="v_box1">
							<p><a href="http://neets.cc/detail/378e926a15cf451fa33d77da827aca17" target="_blank">权力的游戏 第一季</a></p>
						</div>
						<div class="v_box2">
							
								共10集
							
						</div>
						
						<div videoid="378e926a15cf451fa33d77da827aca17" opstate="">
							
								<div class="subcriber_state" onclick="subState(this)">
									<div class="sub_state">订阅</div>
									<div class="sub_num">70265</div>
								</div>
							
						</div>
						
					</div>
				</div>
			
				<div class="video_li_box">
					<div class="v_img">
						<a href="http://neets.cc/detail/88d1862d27c843ababfddb61da511f9b" target="_blank">
							<img src="./Neets_最新_第1页_分类检索_files/large(13).jpg" onerror="onError(this)">
						</a>
					</div>
					<div class="v_box">
						<div class="v_box1">
							<p><a href="http://neets.cc/detail/88d1862d27c843ababfddb61da511f9b" target="_blank">生活大爆炸 第十季</a></p>
						</div>
						<div class="v_box2">
							
								共24集
							
						</div>
						
						<div videoid="88d1862d27c843ababfddb61da511f9b" opstate="">
							
								<div class="subcriber_state" onclick="subState(this)">
									<div class="sub_state">订阅</div>
									<div class="sub_num">69828</div>
								</div>
							
						</div>
						
					</div>
				</div>
			
				<div class="video_li_box">
					<div class="v_img">
						<a href="http://neets.cc/detail/8bbfb27c098e4fa2a572098ec600b1cd" target="_blank">
							<img src="./Neets_最新_第1页_分类检索_files/large(14).jpg" onerror="onError(this)">
						</a>
					</div>
					<div class="v_box">
						<div class="v_box1">
							<p><a href="http://neets.cc/detail/8bbfb27c098e4fa2a572098ec600b1cd" target="_blank">东京食尸鬼 第二季</a></p>
						</div>
						<div class="v_box2">
							
								共12集
							
						</div>
						
						<div videoid="8bbfb27c098e4fa2a572098ec600b1cd" opstate="">
							
								<div class="subcriber_state" onclick="subState(this)">
									<div class="sub_state">订阅</div>
									<div class="sub_num">69074</div>
								</div>
							
						</div>
						
					</div>
				</div>
			
				<div class="video_li_box">
					<div class="v_img">
						<a href="http://neets.cc/detail/8fd7ad19dd7c4bee855c591e12edc87c" target="_blank">
							<img src="./Neets_最新_第1页_分类检索_files/large(15).jpg" onerror="onError(this)">
						</a>
					</div>
					<div class="v_box">
						<div class="v_box1">
							<p><a href="http://neets.cc/detail/8fd7ad19dd7c4bee855c591e12edc87c" target="_blank">那年花开月正圆</a></p>
						</div>
						<div class="v_box2">
							
								共74集
							
						</div>
						
						<div videoid="8fd7ad19dd7c4bee855c591e12edc87c" opstate="">
							
								<div class="subcriber_state" onclick="subState(this)">
									<div class="sub_state">订阅</div>
									<div class="sub_num">68715</div>
								</div>
							
						</div>
						
					</div>
				</div>
			
				<div class="video_li_box">
					<div class="v_img">
						<a href="http://neets.cc/detail/97b458141b664a1abc9dc385c03e911a" target="_blank">
							<img src="./Neets_最新_第1页_分类检索_files/large(16).jpg" onerror="onError(this)">
						</a>
					</div>
					<div class="v_box">
						<div class="v_box1">
							<p><a href="http://neets.cc/detail/97b458141b664a1abc9dc385c03e911a" target="_blank">天赋异禀</a></p>
						</div>
						<div class="v_box2">
							
								
									更新至8集
								
								
							
						</div>
						
						<div videoid="97b458141b664a1abc9dc385c03e911a" opstate="">
							
								<div class="subcriber_state" onclick="subState(this)">
									<div class="sub_state">订阅</div>
									<div class="sub_num">65410</div>
								</div>
							
						</div>
						
					</div>
				</div>
			
				<div class="video_li_box">
					<div class="v_img">
						<a href="http://neets.cc/detail/9e05047633e948e5a8f21eb82398d41f" target="_blank">
							<img src="./Neets_最新_第1页_分类检索_files/large(17).jpg" onerror="onError(this)">
						</a>
					</div>
					<div class="v_box">
						<div class="v_box1">
							<p><a href="http://neets.cc/detail/9e05047633e948e5a8f21eb82398d41f" target="_blank">生活大爆炸  第一季</a></p>
						</div>
						<div class="v_box2">
							
								共17集
							
						</div>
						
						<div videoid="9e05047633e948e5a8f21eb82398d41f" opstate="">
							
								<div class="subcriber_state" onclick="subState(this)">
									<div class="sub_state">订阅</div>
									<div class="sub_num">63821</div>
								</div>
							
						</div>
						
					</div>
				</div>
			
		
		
		<!--分页-->
		<div style="text-align: center;clear: both;" class="customBootstrap">
			<ul class="pagination" id="pagination1"><li class="first disabled" jp-role="first" jp-data="1"><a href="javascript:;">首页</a></li><li class="prev disabled" jp-role="prev" jp-data="0"><a href="javascript:;">上页</a></li><li class="page active" jp-role="page" jp-data="1"><a href="javascript:;">1</a></li><li class="page" jp-role="page" jp-data="2"><a href="javascript:;">2</a></li><li class="page" jp-role="page" jp-data="3"><a href="javascript:;">3</a></li><li class="page" jp-role="page" jp-data="4"><a href="javascript:;">4</a></li><li class="page" jp-role="page" jp-data="5"><a href="javascript:;">5</a></li><li class="page" jp-role="page" jp-data="6"><a href="javascript:;">6</a></li><li class="page" jp-role="page" jp-data="7"><a href="javascript:;">7</a></li><li class="next" jp-role="next" jp-data="2"><a href="javascript:;">下页</a></li><li class="last" jp-role="last" jp-data="743"><a href="javascript:;">尾页(743)</a></li></ul>
		</div>
		
	</div>
	<!--底部-->
	<!--底部-->
@extends('layout.footer')
<script type="text/javascript">
	var subState = function(obj){
		if(!neetsHelper.user.isAuthenticated()){
			showLoginWindow();
			return;
		}
		var id = $(obj).parent().attr('videoId');
		var opState = $(obj).parent().attr('opState');
		if((opState == 0 || opState == 1)&&opState != '') {
			var url = ApiHost+'/api/order/cancle/'+ id;
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
		}else if(opState == 1){
			var url = ApiHost+'/api/'+API.CANCEL_REACH+id;
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
			url = ApiHost+'/api/order/'+id;
			$.ajax({
				type:"get",
				url:url,
				async:true,
				beforeSend:function(xhr){
					xhr.setRequestHeader("Authorization",'userId='+neetsHelper.user.getToken());
				},
				success:function(data){
					$(obj).parent().attr('opState',0)
					$(obj).addClass('subcriber_alr');
					$(obj).find('.sub_state').text('已订阅');
				}
			});
		}
	};
	
	//selectBox
	var page = GetQueryString('page')?GetQueryString('page'):'';
	var state = GetQueryString('state')?GetQueryString('state'):'';
	var type = GetQueryString('type')?GetQueryString('type'):'';
	var country = GetQueryString('country')?GetQueryString('country'):'';
	var endYear = GetQueryString('endYear')?GetQueryString('endYear'):'';
	var startYear = GetQueryString('startYear')?GetQueryString('startYear'):'';
	var week = GetQueryString('week')?GetQueryString('week'):'';
	var order = GetQueryString('order')?GetQueryString('order'):'';//最新，最热
	var searchParams ={
		state:state,
		page:page,
		type:type,
		country:country,
		endYear:endYear,
		startYear:startYear,
		week:week,
		order:order
	}
	function _search(params){
		console.log(params);
		params = $.extend({},searchParams,params);
		console.log(params);
		location.href = '/category?state='+params.state+'&page='+page+'&type='+params.type
		+'&country='+params.country+'&endYear='+params.endYear+'&startYear='+params.startYear
		+'&week='+params.week+'&order='+params.order;
	};
	
	
	//page
	var totalPages =$("#totalPages").attr('totalPages')-0;
	var currentPage =$("#totalPages").attr('currentPage')-0;
	
	$.jqPaginator('#pagination1',{
	    totalPages: totalPages,
	    currentPage: currentPage,
	    prev: '<li class="prev"><a href="javascript:;">上页</a></li>',
	    next: '<li class="next"><a href="javascript:;">下页</a></li>',
	    page: '<li class="page"><a href="javascript:;"></a></li>',
	    last: '<li class="last"><a href="javascript:;">尾页</a></li>',
	    first: '<li class="first"><a href="javascript:;">首页</a></li>',
	    onPageChange: function (num, type) {
	    	params = $.extend({},searchParams,{page:num});
	    	console.log(params);
	    	console.log(currentPage);
	    	location.href = '/category?state='+params.state+'&page='+params.page+'&type='+params.type
			+'&country='+params.country+'&endYear='+params.endYear+'&startYear='+params.startYear
			+'&week='+params.week+'&order='+params.order;
	    }
	});
</script>
    <script defer="defer" type="text/javascript">
      if (!isIE) {
        var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape(
          "%3Cspan style='display:none;' id='cnzz_stat_icon_1260732280'%3E%3C/span%3E%3Cscript src='" +
          cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1260732280' type='text/javascript'%3E%3C/script%3E"));
      }

    </script><span style="display:none;" id="cnzz_stat_icon_1260732280"><a href="http://www.cnzz.com/stat/website.php?web_id=1260732280" target="_blank" title="站长统计">站长统计</a></span><script src="./Neets_最新_第1页_分类检索_files/z_stat.php" type="text/javascript"></script><script src="./Neets_最新_第1页_分类检索_files/core.php" charset="utf-8" type="text/javascript"></script>


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

</script><script src="./Neets_最新_第1页_分类检索_files/11.0.1.js" id="sozz"></script><script charset="utf-8" src="./Neets_最新_第1页_分类检索_files/ab77b6ea7f3fbf79.js"></script>


</body><div></div></html>
