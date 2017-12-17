
@extends('layout.header')
<body style=""><div id="StayFocusd-infobar" style="display: none; top: 964px;">
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
    location.href = '/order';
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


      <!--banner-->
      <div class="index_banner">
	<div class="index_ban_li"><canvas class="pg-canvas" width="1509" height="265"></canvas></div>
	<div class="index_banner_pop">
		<div class="index_banner_main">
			<div class="logo">
                <a>红颜秀,一个让你追剧不用愁的秀网</a>
			</div>
			<div class="index_banner_nav">
				<ul>
					<li><a href="/category?country=america&amp;type=tv">美剧</a></li>
					<li><a href="/category?country=japan&amp;type=tv">日剧</a></li>
					<li><a href="/category?country=korea&amp;type=tv">韩剧</a></li>
					<li><a href="/category?type=animation">动漫</a></li>
					<li><a href="/category?country=china&amp;type=tv">国产剧</a></li>
					<li><a href="/category">全部</a></li>
				</ul>
			</div>
			<div class="index_banner_search">
				<input type="" name="search_ban" id="search_ban" value="" placeholder="想找什么">
				<a href="javascript:void(0)" onclick="_searchBtnClick(this)" class="search_btn_ban">
					<div class="search_btn"></div>
				</a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.index_ban_li').particleground({
		dotColor: 'rgba(255,255,255,0.5)',
		lineColor: 'rgba(255,255,255,0.7)',
		parallaxMultiplier:5,
		lineWidth:0.1,
		dotSize:2,
		density:6500,
		particleRadius:3,
		proximity:100,
		parallaxMultiplier:15,
	});
</script>

        <!--我的订阅-->
        <div class="diplayBox">
          <div class="sub_title">
            我的订阅
            <a class="sub_a" href="http://neets.cc/subcriberlist">
				查看全部
				<div class="sub_a_icon"></div>
			</a>
          </div>

          <div class="sub_box clearfix" id="sub_box">
            
                        <div class="sub_none">
                          <div class="icon"></div>
                          <div class="sub_none_txt">
                            <p>当你订阅的剧集更新时，你会在此看到它。</p>
                            <a class="toLoginBtn" href="javascript:void(0)" onclick="showLoginWindow()">登录</a>
                          </div>
                        </div>
                        
          </div>

        </div>

        <!--新剧推荐-->
        <div class="diplayBox">

          <div class="sub_title">
            新剧推荐
            <div class="sub_ul">
              <ul>
                <li class="active"><a href="javascript:void(0);" onclick="changeVideo(this,$(&#39;#videoBox_new&#39;),&#39;&#39;,&#39;&#39;,0)">全部</a></li>
                <li><a href="javascript:void(0);" onclick="changeVideo(this,$(&#39;#videoBox_new&#39;),&#39;美国&#39;,&#39;&#39;,0)">美剧</a></li>
                <li><a href="javascript:void(0);" onclick="changeVideo(this,$(&#39;#videoBox_new&#39;),&#39;韩国&#39;,&#39;&#39;,0)">韩剧</a></li>
                <li><a href="javascript:void(0);" onclick="changeVideo(this,$(&#39;#videoBox_new&#39;),&#39;日本&#39;,&#39;tv&#39;,0)">日剧</a></li>
                <li><a href="javascript:void(0);" onclick="changeVideo(this,$(&#39;#videoBox_new&#39;),&#39;&#39;,&#39;animation&#39;,0)">动漫</a></li>
              </ul>
            </div>
          </div>
          <div class="sub_box clearfix" id="videoBox_new">
            
              
                
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/23394fc6690a4a9a9639e4497d491595" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large.jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/23394fc6690a4a9a9639e4497d491595" target="_blank" rel="noreferrer">
          今生是第一次
        </a>
      </p>
      <p class="sub_p2">
        
              
                  <span>更新至14</span>
                  
                    
      </p>
      <div videoid="23394fc6690a4a9a9639e4497d491595" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                30595
              </div>
            </div>
            
      </div>
    </div>
  </div>
  
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/XuYQAFjohuEaAd9ixLdjW2" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large(1).jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/XuYQAFjohuEaAd9ixLdjW2" target="_blank" rel="noreferrer">
          最后的战士
        </a>
      </p>
      <p class="sub_p2">
        
              
                  <span>更新至2</span>
                  
                    
      </p>
      <div videoid="XuYQAFjohuEaAd9ixLdjW2" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                0
              </div>
            </div>
            
      </div>
    </div>
  </div>
  
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/AEdMbfdZJoJoJqevHwqxka" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large(2).jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/AEdMbfdZJoJoJqevHwqxka" target="_blank" rel="noreferrer">
          暖爱
        </a>
      </p>
      <p class="sub_p2">
        
              
                  <span>更新至1</span>
                  
                    
      </p>
      <div videoid="AEdMbfdZJoJoJqevHwqxka" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                0
              </div>
            </div>
            
      </div>
    </div>
  </div>
  
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/31a022ab544a4c3aac98ba4d945294f2" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large(3).jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/31a022ab544a4c3aac98ba4d945294f2" target="_blank" rel="noreferrer">
          天蝎 第四季
        </a>
      </p>
      <p class="sub_p2">
        
              
                  <span>更新至9</span>
                  
                    
      </p>
      <div videoid="31a022ab544a4c3aac98ba4d945294f2" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                3549
              </div>
            </div>
            
      </div>
    </div>
  </div>
  
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/08137977d5574a42b9c68bb7111bfaa6" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large(4).jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/08137977d5574a42b9c68bb7111bfaa6" target="_blank" rel="noreferrer">
          退休警察烦事多 第二季
        </a>
      </p>
      <p class="sub_p2">
        
              
                  <span>更新至9</span>
                  
                    
      </p>
      <div videoid="08137977d5574a42b9c68bb7111bfaa6" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                759
              </div>
            </div>
            
      </div>
    </div>
  </div>
  
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/Pm4DYeEry3NoJFmkT6xA95" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large(5).jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/Pm4DYeEry3NoJFmkT6xA95" target="_blank" rel="noreferrer">
          暗恋的秘密七重奏
        </a>
      </p>
      <p class="sub_p2">
        
              
                  <span>更新至10</span>
                  
                    
      </p>
      <div videoid="Pm4DYeEry3NoJFmkT6xA95" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                33
              </div>
            </div>
            
      </div>
    </div>
  </div>
  
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/a5e784ee8a4848cda9457a7b09f2803f" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large(6).jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/a5e784ee8a4848cda9457a7b09f2803f" target="_blank" rel="noreferrer">
          噗通噗通我爱你
        </a>
      </p>
      <p class="sub_p2">
        
              
                  <span>更新至16</span>
                  
                    
      </p>
      <div videoid="a5e784ee8a4848cda9457a7b09f2803f" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                1059
              </div>
            </div>
            
      </div>
    </div>
  </div>
  
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/Mgpnxaka31kubqkJQETMLF" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large(7).jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/Mgpnxaka31kubqkJQETMLF" target="_blank" rel="noreferrer">
          西镇警魂 第六季
        </a>
      </p>
      <p class="sub_p2">
        
              
                  <span>更新至1</span>
                  
                    
      </p>
      <div videoid="Mgpnxaka31kubqkJQETMLF" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                15
              </div>
            </div>
            
      </div>
    </div>
  </div>
  
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/EFhZV42GLE5KM2GW22boS2" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large(8).jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/EFhZV42GLE5KM2GW22boS2" target="_blank" rel="noreferrer">
          九州海上牧云记
        </a>
      </p>
      <p class="sub_p2">
        
              
                  <span>更新至12</span>
                  
                    
      </p>
      <div videoid="EFhZV42GLE5KM2GW22boS2" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                1149
              </div>
            </div>
            
      </div>
    </div>
  </div>
  
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/67634c588c6d4ac2b8e3b12219fb3cd1" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large(9).jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/67634c588c6d4ac2b8e3b12219fb3cd1" target="_blank" rel="noreferrer">
          现在开始威胁你
        </a>
      </p>
      <p class="sub_p2">
        
              
                  <span>更新至5</span>
                  
                    
      </p>
      <div videoid="67634c588c6d4ac2b8e3b12219fb3cd1" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                6306
              </div>
            </div>
            
      </div>
    </div>
  </div>
  
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/JsjgjYbQJWWQ55bxqVLWWn" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large(10).jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/JsjgjYbQJWWQ55bxqVLWWn" target="_blank" rel="noreferrer">
          我的！体育老师 DVD版
        </a>
      </p>
      <p class="sub_p2">
        
              
                  <span>更新至14</span>
                  
                    
      </p>
      <div videoid="JsjgjYbQJWWQ55bxqVLWWn" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                30
              </div>
            </div>
            
      </div>
    </div>
  </div>
  

                  
                    <div class="sub_li sub_more">
                      <a href="http://neets.cc/category?order=2" target="_blank">
					全部555条<b></b>
				</a>
                    </div>
          </div>

        </div>

        <!--完结推荐-->
        <div class="diplayBox">
          <div class="sub_title">
            完结剧集
            <div class="sub_ul">
              <ul>
                <li class="active"><a href="javascript:void(0);" onclick="changeVideo(this,$(&#39;#videoBox_over&#39;),&#39;&#39;,&#39;&#39;,1)">全部</a></li>
                <li><a href="javascript:void(0);" onclick="changeVideo(this,$(&#39;#videoBox_over&#39;),&#39;美国&#39;,&#39;&#39;,1)">美剧</a></li>
                <li><a href="javascript:void(0);" onclick="changeVideo(this,$(&#39;#videoBox_over&#39;),&#39;韩国&#39;,&#39;&#39;,1)">韩剧</a></li>
                <li><a href="javascript:void(0);" onclick="changeVideo(this,$(&#39;#videoBox_over&#39;),&#39;日本&#39;,&#39;tv&#39;,1)">日剧</a></li>
                <li><a href="javascript:void(0);" onclick="changeVideo(this,$(&#39;#videoBox_over&#39;),&#39;&#39;,&#39;animation&#39;,1)">动漫</a></li>
              </ul>
            </div>
          </div>

          <div class="sub_box clearfix" id="videoBox_over">
            
              
                
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/RB7inmS6ZEqiV7EqcZuxj4" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large(11).jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/RB7inmS6ZEqiV7EqcZuxj4" target="_blank" rel="noreferrer">
          肥猫寻亲记之明天会更好
        </a>
      </p>
      <p class="sub_p2">
        
            <span>共30集</span>
            
      </p>
      <div videoid="RB7inmS6ZEqiV7EqcZuxj4" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                0
              </div>
            </div>
            
      </div>
    </div>
  </div>
  
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/2nPHAHDCYUuCaSXsJVhZhv" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large(12).jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/2nPHAHDCYUuCaSXsJVhZhv" target="_blank" rel="noreferrer">
          至尊食王
        </a>
      </p>
      <p class="sub_p2">
        
            <span>共42集</span>
            
      </p>
      <div videoid="2nPHAHDCYUuCaSXsJVhZhv" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                0
              </div>
            </div>
            
      </div>
    </div>
  </div>
  
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/29ad0cc15d1b4d02b74872ae158dc0fc" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large(13).jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/29ad0cc15d1b4d02b74872ae158dc0fc" target="_blank" rel="noreferrer">
          读心神探
        </a>
      </p>
      <p class="sub_p2">
        
            <span>共20集</span>
            
      </p>
      <div videoid="29ad0cc15d1b4d02b74872ae158dc0fc" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                1127
              </div>
            </div>
            
      </div>
    </div>
  </div>
  
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/1468924cb4854eddb834866b4799ba00" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large(14).jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/1468924cb4854eddb834866b4799ba00" target="_blank" rel="noreferrer">
          谈情说案
        </a>
      </p>
      <p class="sub_p2">
        
            <span>共25集</span>
            
      </p>
      <div videoid="1468924cb4854eddb834866b4799ba00" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                176
              </div>
            </div>
            
      </div>
    </div>
  </div>
  
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/UY5iwjQBqbxJqBch8KWCkK" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large(15).jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/UY5iwjQBqbxJqBch8KWCkK" target="_blank" rel="noreferrer">
          金枝欲孽
        </a>
      </p>
      <p class="sub_p2">
        
            <span>共30集</span>
            
      </p>
      <div videoid="UY5iwjQBqbxJqBch8KWCkK" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                103
              </div>
            </div>
            
      </div>
    </div>
  </div>
  
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/7xb4MMJ98pZH7Xj2Yu1G65" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large(16).jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/7xb4MMJ98pZH7Xj2Yu1G65" target="_blank" rel="noreferrer">
          金枝欲孽2
        </a>
      </p>
      <p class="sub_p2">
        
            <span>共30集</span>
            
      </p>
      <div videoid="7xb4MMJ98pZH7Xj2Yu1G65" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                0
              </div>
            </div>
            
      </div>
    </div>
  </div>
  
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/7yNb9RnerjXmJipMaAr3Ta" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large(17).jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/7yNb9RnerjXmJipMaAr3Ta" target="_blank" rel="noreferrer">
          铁马战车
        </a>
      </p>
      <p class="sub_p2">
        
            <span>共20集</span>
            
      </p>
      <div videoid="7yNb9RnerjXmJipMaAr3Ta" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                0
              </div>
            </div>
            
      </div>
    </div>
  </div>
  
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/AP8paV9VYNihx51GeQTGEy" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large(18).jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/AP8paV9VYNihx51GeQTGEy" target="_blank" rel="noreferrer">
          陪着你走
        </a>
      </p>
      <p class="sub_p2">
        
            <span>共20集</span>
            
      </p>
      <div videoid="AP8paV9VYNihx51GeQTGEy" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                0
              </div>
            </div>
            
      </div>
    </div>
  </div>
  
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/6hmQXd4nPYBt1ibq8A2RfP" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large(19).jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/6hmQXd4nPYBt1ibq8A2RfP" target="_blank" rel="noreferrer">
          雪山飞狐（2007）
        </a>
      </p>
      <p class="sub_p2">
        
            <span>共40集</span>
            
      </p>
      <div videoid="6hmQXd4nPYBt1ibq8A2RfP" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                0
              </div>
            </div>
            
      </div>
    </div>
  </div>
  
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/8be310c1183a49fc9ad861f19e7b699e" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large(20).jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/8be310c1183a49fc9ad861f19e7b699e" target="_blank" rel="noreferrer">
          雷霆扫毒
        </a>
      </p>
      <p class="sub_p2">
        
            <span>共30集</span>
            
      </p>
      <div videoid="8be310c1183a49fc9ad861f19e7b699e" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                334
              </div>
            </div>
            
      </div>
    </div>
  </div>
  
  <div class="sub_li">
    <div class="sub_img">
      <a href="http://neets.cc/detail/dc594464ec834a528c575baf657bc88f" target="_blank" rel="noreferrer">
				<img onerror="onError(this)" src="./indexcss/large(21).jpg">
			</a>
    </div>
    <div class="sub_txt">
      <p class="sub_p1">
        <a href="http://neets.cc/detail/dc594464ec834a528c575baf657bc88f" target="_blank" rel="noreferrer">
          风云岁月
        </a>
      </p>
      <p class="sub_p2">
        
            <span>共22集</span>
            
      </p>
      <div videoid="dc594464ec834a528c575baf657bc88f" opstate="">
        
            <div class="subcriber_state" onclick="subState(this)">
              <div class="sub_state">订阅</div>
              <div class="sub_num">
                117
              </div>
            </div>
            
      </div>
    </div>
  </div>
  

                  
                    <div class="sub_li sub_more">
                      <a href="http://neets.cc/category?state=1">
					全部12809条<b></b>
				</a>
                    </div>
          </div>

        </div>

        <!--底部-->
@extends('layout.footer')

</body><div></div></html>
