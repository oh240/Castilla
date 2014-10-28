function notifyMe(notif_body) {

    if (!Notification) {
        alert('Please us a modern version of Chrome, Firefox, Opera or Firefox.');
        return;
    }

    if (Notification.permission !== "granted") {
        Notification.requestPermission();
    }

    var notification = new Notification('Notification title', {
        icon: 'http://cdn.sstatic.net/stackexchange/img/logos/so/so-icon.png',
        body: notif_body
    });

    notification.onclick = function () {
        window.open("http://stackoverflow.com/a/13328397/1269037");
    }

    //TODO音を鳴らしたい
}


var post_area = $('#msg_area');

//WebSocket接続
var conn = new WebSocket('ws://localhost:9000');

conn.onopen = function (e) {
    console.log("Connection established!");
};

// Cheromeのデスクトップ通知

$('#post_voice_button').click(function () {

    var voice_val = $('#VoiceBody').val();

    var print_voice_val = '<div class="post_article">' + voice_val +
        '<div class="post_time_area">' +
        'post time:' + '2014 08-13 00:30:00' +
        '</div>'
    '</div>';

    //相手に送信
    conn.send(voice_val);

    // 自分の画面に出力
    post_area.append(print_voice_val);

    //Ajax処理(データの永続化?)
    $.ajax({
        type: 'POST',
        url: '/voices/ajax_add',
        data: voice_val,
        success: console.log('true')
    });

    //内容を削除
    $('#VoiceBody').val("");

});

//WebSocketで接続しているユーザーへ送信
conn.onmessage = function (e) {

    var print_voice_val = '<div class="post_article">' + e.data +
        '<div class="post_time_area">' +
        'post time:' + '2014 08-13 00:30:00' +
        '</div>'
    '</div>';
    post_area.append(print_voice_val);
    //firefoxでの通知が完了した
    notifyMe(e.data);
};
