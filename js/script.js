window.onload = function() {
    var timestamps = document.getElementsByClassName('timestamp');

    for (var i = 0; i < timestamps.length; i++) {
        var timestamp = timestamps[i].getAttribute('data-timestamp');
        var date = moment(timestamp).startOf('hour').fromNow();

        timestamps[i].innerText += date;
    }
};

function submit_tip(postId) {
    $.ajax({
        type: "POST",
        url: "/friends4sale/submit_tip.php",
        data: { post_id: postId },
        success: function(response) {
            if(response == 'success') {
                // alert(response);
                var tipCount = document.getElementById('tipCount' + postId);
                tipCount.innerText = parseInt(tipCount.innerText) + 1;
                var tipButton = document.getElementById('tipButton' + postId);
                tipButton.disabled = true;
                tipButton.innerText = 'Tipped!';
            }
            else {
                alert(response);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
}