function getContent(timestamp) {
    var queryString = {'timestamp': timestamp, 'f': file, 'action': action};

    $.get('server/read.php', queryString, function (data) {

        if (data) {
            var obj = jQuery.parseJSON(data);
            $('#response').html(nl2br(obj.content) + setFocus());
            timestamp = obj.timestamp;
        } else {
            timestamp = 1;
        }

        setTimeout(function () {
            console.log(timestamp);
            getContent(timestamp)
        }, 1000);
    });
}

$(document).ready(function () {
    getContent(0);
});

function nl2br(str, is_xhtml) {
    var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
    return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
}

function setFocus() {
    return '<span id="focus"></span>';
}