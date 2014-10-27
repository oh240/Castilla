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
    conn.send(print_voice_val);

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
    post_area.append(e.data);
};
