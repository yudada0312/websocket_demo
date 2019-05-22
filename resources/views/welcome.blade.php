<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hello</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
</head>

<body>
    <div id="app">
    </div>
    <script src="/js/app.js"></script>
    <script>
        var $app = document.getElementById('app');
        var user_id = 1;
        // 建立監聽
        Echo.private("personal-channel." + user_id)
        .listen("MemberInfoUpdatedEvent", msg => {
            var e = document.createElement('span');
            e.innerHTML = '錢包更新:'+msg.member_info.aa;
            $app.appendChild(e);
            $app.appendChild(document.createElement('br'));
        });

        Echo.channel("notice").listen("GetNewOpencodeEvent", msg => {
            var e = document.createElement('span');
            e.innerHTML = '開獎號碼:'+ msg.opencode
            $app.appendChild(e);
            $app.appendChild(document.createElement('br'));
        });
    </script>
</body>

</html>