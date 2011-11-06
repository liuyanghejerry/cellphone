$("#recharge").live('pageshow', function() {
    var past = 0;
    $('#recharge').everyTime('1s', function(i) {
        past++;
        $('#timer span > .ui-btn-text').html(30 - past + '秒后自动退出');
        if (past == 30) {
            $("a[data-icon='home']").trigger("click");
        }
    });
});

$("#recharge").live('pagebeforehide', function() {
    var past = 0;
    $('#recharge').stopTime();
    $('#timer span > .ui-btn-text').html('30秒后自动退出');
});

$("#check").live('pageshow', function() {
    var past = 0;
    $('#check').everyTime('1s', function(i) {
        past++;
        $('#timer span > .ui-btn-text').html(30 - past + '秒后自动退出');
        if (past == 30) {
            $("a[data-icon='home']").trigger("click");
        }
    });
});

$("#check").live('pagebeforehide', function() {
    var past = 0;
    $('#check').stopTime();
    $('#timer span > .ui-btn-text').html('30秒后自动退出');
});

$("#numberpad").live('pageshow', function() {
    var past = 0;
    $('#numberpad').everyTime('1s', function(i) {
        past++;
        $('#timer span > .ui-btn-text').html(30 - past + '秒后自动退出');
        if (past == 30) {
            $("a[data-icon='home']").trigger("click");
        }
    });
});

$("#numberpad").live('pagebeforehide', function() {
    var past = 0;
    $('#numberpad').stopTime();
    $('#timer span > .ui-btn-text').html('30秒后自动退出');
});