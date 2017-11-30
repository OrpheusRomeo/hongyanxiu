ejs.open = '{{';
ejs.close = '}}';
//环境常量:DEBUG RELEASE
var ENV='RELEASE';
var constant={
    APP_ID:{
        DEBUG:'wx8180603ae854c0f7',
        RELEASE:'wxb1a994fbcb2abd1f'
    },
    REDIRECT_URI:{
        DEBUG:'http%3a%2f%2ftest.neetneet.cn%2fapi%2fwx%2fcallback',
        RELEASE:'http%3A%2F%2Fneets.cc%2Fapi%2Fwx%2Fcallback'
    },
    API_DOMAIN:{
        DEBUG:'http://test.neetneet.cn/api/',
        RELEASE:'https://neets.cc/api/'
    },
    API_HOST:{
        DEBUG:'http://test.neetneet.cn',
        RELEASE:'https://neets.cc'
    },
    COOKIE_DOMAIN:{
        DEBUG:'.neetneet.cn',
        RELEASE:'.neets.cc'
    }
};
ApiHost = constant.API_HOST[ENV];
var API = {
    DYNAMIC: 'operateLog/1/10', // 动态
    NEW_VIDEO_RECOMMEND: 'video/recommend/1/3', // 新剧推荐
    SUBCRIBER_VIDEO: 'video/subscribe/', // 我的主页-订阅视频列表
    WATCHED_VIDEO: 'video/reach/', // 我的主页-已看完视频列表
    RECYCLE_VIDEO: 'video/del/', // 我的主页-回收站视频列表
    NDYNAMIC: 'operateLog/', // 动态记录-视频列表
    DETAILINFO: 'video/detail/', // 条目页详情
    FOUND: '', // 发现热剧
    SUBCRIBER: 'subscriber/', // 订阅
    WATCHED: 'subscriber/reach/',
    CANCEL_SUBCRIBER: 'subscriber/cancle/', // 取消订阅
    CANCEL_REACH: 'video/reach/cancle/', // 取消达成
    VIDEOS_LATESET: 'video/latest/1/8', // 最新美剧/韩剧/日剧
    VIDEOS_HOT: 'video/search/1/10', // 热门排行
    VIDEOS_SEARCH: 'video/search/', // 分类搜索
    REALTIVENUM: 'video/realtiveNum', // 我的主页TAB页面记录数量
    VIDEO_SERIES: 'videoSeries/list/', // 获取某个视频的分集
    CREATE_URL: 'videoSource/add', // 创建分集url
    CREATE_ITEM: 'sync', // 创建条目
    URL_LIST: 'videoSource/list', // url列表
    VIDEO_SERIES_STATE: 'videoSeries/watch', // 更改某分集的观看状态
    REGISTER_SEND_SMS: 'register/sms/', // 发送短信请求
    REGISTER: 'register/', // 注册接口
    USERINFO: 'register/userinfo/', // 获取用户信息
    UNION_USERINFO: 'users/info/', // 获取用户信息
    RANDOM_IMG: 'common/randomCode/', // 随机验证码
    ALL_SEARCH: 'video/asearch/', // 全文检索
    VS_INFO: 'videoSource/info/', // 获取链接信息
    VS_SERIES: 'videoSource/series', // 获取url链接信息
    VS_COMPILATION: 'videoSource/list/1/100?adapteType=0&enable=3&num=-1&videoId=',
    REPORT_ERROR: 'url/report', // 报错
    BATCH_ADD: 'videoSource/batchAdd/', // 批量添加URL
    VIDEO_WEBSITE: 'videos/${videoId}/websites', // 条目页的相关网页
    DOMAIN_COLLECTION: 'grabs', // 域名合集接口
    WEBSITE_COLLECTION: 'websites', // 网页合集
    ASEARCH: 'asearch', // 搜索 - 域名合集接口
    GET_VIDEOSOURCE: 'videoSource/info/',//根据VSID获取videoId
    UNBUNDLE:'register/unbindPhone/',//解绑手机号
    URL_LINKS: 'videoSource/links', //
};

function replaceParam(url, params) {
    if (!params) {
        return { url: url, params: params };
    }
    var result = /\$\{(.+?)\}/.exec(url);
    while (result) {
        if (params[result[1]] !== undefined) {
            url = url.replace(/\$\{(.+?)\}/g, params[result[1]]);
            delete params[result[1]];
        }
        result = /\$\{(.+?)\}/.exec(url);
    }

    return { url: url, params: params };
}

function toQueryString(obj) {
    return obj ? Object.keys(obj).sort().map(function(key) {
        var val = obj[key];
        if (Array.isArray(val)) {
            return val.sort().map(function(val2) {
                return encodeURIComponent(key) + '=' + encodeURIComponent(val2);
            }).join('&');
        }

        return encodeURIComponent(key) + '=' + encodeURIComponent(val);
    }).join('&') : '';
}
//获取URL参数
// function GetQueryString(name) {
//     var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
//     var r = window.location.search.substr(1).match(reg);
//     if (r != null) 
//         return decodeURI(r[2]);
//     return null;
// }
//将URL中的UTF-8字符串转成中文字符串
function getCharFromUtf8(str) {
    var cstr = "";
    var nOffset = 0;
    if (str == "") return "";
    str = str.toLowerCase();
    nOffset = str.indexOf("%e");
    if (nOffset == -1) return str;
    while (nOffset != -1) {
        cstr += str.substr(0, nOffset);
        str = str.substr(nOffset, str.length - nOffset);
        if (str == "" || str.length < 9) return cstr;
        cstr += utf8ToChar(str.substr(0, 9));
        str = str.substr(9, str.length - 9);
        nOffset = str.indexOf("%e");
    }
    return cstr + str;
}

//将编码转换成字符
function utf8ToChar(str) {
    var iCode, iCode1, iCode2;
    iCode = parseInt("0x" + str.substr(1, 2));
    iCode1 = parseInt("0x" + str.substr(4, 2));
    iCode2 = parseInt("0x" + str.substr(7, 2));
    return String.fromCharCode(
        ((iCode & 0x0f) << 12) | ((iCode1 & 0x3f) << 6) | (iCode2 & 0x3f)
    );
}

//获取url中的参数
function GetQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
    var r = window.location.search.substr(1).match(reg); //匹配目标参数
    if (r != null) return unescape(getCharFromUtf8(r[2])); //增加UTF-8解码处理。
    return null; //返回参数值
}

function onError(obj) {
    $(obj).attr('src', '/assets/img/icon_default.gif')
}

function showMoreSummary() {
    $("#summary2").removeClass('hidden');
    $("#summary1").addClass('hidden');
}

function hideMoreSummary() {
    $("#summary1").removeClass('hidden');
    $("#summary2").addClass('hidden');
}

function initWxLogin() {
    var obj = new WxLogin({
        id: "wxLogin",
        appid: constant.APP_ID[ENV],
        scope: "snsapi_login",
        redirect_uri: constant.REDIRECT_URI[ENV],
        state: "",
        style: "white",
        href: ""
    });
}
//登录弹层
function showLoginWindow() {
    initWxLogin();
    $("#loginWindow").addClass('md-show');
}

function hideLoginWindow() {
    $("#loginWindow").removeClass('md-show');
}
$(function() {
    //点击遮罩隐藏弹层
    $(".md-overlay").click(function() {
        $(".md-effect-16").removeClass('md-show');
        $("body").css('overflow', 'auto');
    });
})

$(document).keydown(function(event) {
    if (event.keyCode == 13) {
        if ($("#search_header").is(':focus')) {
            $(".search_a").click();
        } else if ($("#search_ban").is(':focus')) {
            $('.search_btn_ban').click();
        }
    }
});
