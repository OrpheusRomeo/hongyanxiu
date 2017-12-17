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
      <div class="logo"><a href="http://www.neets.cc/">红颜秀</a></div>
      <ul>
        
            <li class=""><a href="http://www.neets.cc/">首页</a></li>
            

              
                  <li><a href="javascript:void(0)" onclick="toSubCriber()">我的清单</a></li>
                  


                    
                        <li class=""><a href="http://www.neets.cc/category">分类</a></li>
                        

      </ul>
    </div>
    <div class="header_main_right">
      <div class="search_about">
        <input type="text" name="search_header" id="search_header">
        <a class="search_a" onclick="_searchBtnClick(this)">
          <div class="search_btn"></div>
        </a>
      </div>

      
        
          <div class="user_tx">
            <img class="" src="./neets_files/64">
            <div class="my_btns">
              <div class="icon_san">
              </div>
              <div class="my_btn_li">
                长岛冰茶
              </div>
              <div class="my_btn_li" onclick="toIsBind()">手机号</div>
              <div class="my_btn_li" onclick="login_out()">退出登录</div>
            </div>
          </div>
          

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


	<div style="height: 80px;"></div>
	<div class="mainze_box">
		<h4>
			免责声明
		</h4>
        <h4>一</h4>
        <p>
　用户以各种方式使用红颜秀服务和数据（包括但不限于发表、宣传介绍、转载、浏览及利用红颜秀或红颜秀用户发布内容）的过程中，不得以任何方式利用红颜秀直接或间接从事违反中国法律、以及社会公德的行为，且用户应当恪守下述承诺：
<br/><br/>
    1. 发布、转载或提供的内容符合中国法律、社会公德；<br/>
　　2. 不得干扰、损害和侵犯豆瓣网的各种合法权利与利益；<br/>
　　3. 遵守红颜秀以及与之相关的网络服务的协议、指导原则、管理细则等；<br/>

　　红颜秀有权对违反上述承诺的内容予以删除。
        </p>
        <h4>二</h4>
        <p>
　  1. 红颜秀仅为用户发布的内容提供存储空间，红颜秀不对用户发表、转载的内容提供任何形式的保证：不保证内容满足您的要求，不保证红颜秀的服务不会中断。因网络状况、通讯线路、第三方网站或管理部门的要求等任何原因而导致您不能正常使用红颜秀，红颜秀不承担任何法律责任。<br/>

　　2. 用户在红颜秀发表的内容仅表明其个人的立场和观点，并不代表红颜秀的立场或观点。作为内容的发表者，需自行对所发表内容负责，因所发表内容引发的一切纠纷，由该内容的发表者承担全部法律及连带责任。红颜秀不承担任何法律及连带责任。<br/>

　　3. 用户在红颜秀发布侵犯他人知识产权或其他合法权益的内容，红颜秀有权予以删除，并保留移交司法机关处理的权利。<br/>

　　4. 个人或单位如认为红颜秀上存在侵犯自身合法权益的内容，应准备好具有法律效应的证明材料，及时与红颜秀取得联系，以便红颜秀迅速做出处理。<br/>
        </p>
		<p>当权利人发现在本站中的链接所指向的内容侵犯其版权时，请权利人通知本站，提供身份证明、权属证明及详细侵权情况证明，我们将及时采取措施移除相关内容链接！如对版权存有异议请联系“邮箱”</p>
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

    </script><span style="display:none;" id="cnzz_stat_icon_1260732280"><a href="http://www.cnzz.com/stat/website.php?web_id=1260732280" target="_blank" title="站长统计">站长统计</a></span><script src="./neets_files/z_stat.php" type="text/javascript"></script><script src="./neets_files/core.php" charset="utf-8" type="text/javascript"></script>


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

</script><script src="./neets_files/11.0.1.js" id="sozz"></script><script charset="utf-8" src="./neets_files/ab77b6ea7f3fbf79.js"></script>


</body><div></div></html>
