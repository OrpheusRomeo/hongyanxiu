var neetsHelper = {
    key:'neets_token',
    user:{
      isAuthenticated:function(){
          return neetsHelper.cookies.getCookie(neetsHelper.key) != undefined;
      },
      getToken:function(){
          return neetsHelper.cookies.getCookie(neetsHelper.key);
      }
    },
    cookies:{
      setCookie:function(name,value,time){
          var strsec = this.getsec(time);
		      var exp = new Date();
		      exp.setTime(exp.getTime() + strsec*1);
		      document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString()+';path=/;domain='+ constant.COOKIE_DOMAIN[ENV];
      },
      delCookie:function(name){
          var exp = new Date();
          exp.setTime(exp.getTime() - 1);
          var cval = this.getCookie(name);
          if(cval!=null){
            var tmp = name + "=null;expires="+exp.toGMTString()+';path=/;domain='+ constant.COOKIE_DOMAIN[ENV];;
            document.cookie = tmp;
          }
      },
      getsec:function(str){
          var str1=str.substring(1,str.length)*1;
		      var str2=str.substring(0,1);
      		if (str2=="s"){
      			return str1*1000;
      		}else if (str2=="h"){
      			return str1*60*60*1000;
      		}else if (str2=="d"){
      			return str1*24*60*60*1000;
      		}
      },
      getCookie:function(name){
          var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
      		if(arr=document.cookie.match(reg))
      			return unescape(arr[2]);
      		else
      			return undefined;
      }
    }
}
