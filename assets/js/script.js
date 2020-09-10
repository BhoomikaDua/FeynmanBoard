$(document).ready(function() {
    /* 
    LOGIN
     */

    $("body").on('click', '#signin', function() {
        var name = $('#name').val();

        if (name === '') {
            alert("Please Enter Your Name");
            return false;
        }

        $.ajax({
            type: "post",
            url: "ajax/userlog.php", //backend page
            data: {
                name: name,
                action: 'login'
            },
            dataType: 'html',
            beforeSend: function() {},
            success: function(data) {
                if (data === 'TRUE') {
                    window.location.href = 'topics.php';
                } else {
                    alert("Try Again!");
                }
            }
        });
    });

    /* 
    INSERT ESSAY
     */

    $("body").on('click', '#submitEssay', function() {
        var topic = $('#topic').val();
        var text = $('#text').val();

        let html = '<span class="block" > ';
        let temp = text;

        for (let i = 0; i < temp.length; i++) {
            let curr = temp.charAt(i);
            if (curr == ',' || curr == '.' || curr == '-' || curr == '{' || curr == '}' || curr == '(' || curr == ')' || curr == '[' ||
                curr == ']' || curr == '\\' || curr == '\"' || curr == '\'' || curr == '/' || curr == ';' || curr == ':' || curr == '?' ||
                curr == '|' || curr == '\r\n') {
                html += ' </span>';
                html += curr;
                html += '<span class="block"> ';
            } else {
                html += curr;
            }
        }
        html += '</span>';

        if (topic === '') {
            alert("Please Enter The Topic");
            return false;
        }
        if (text === '') {
            alert("Please Enter Some Content");
            return false;
        }

        $.ajax({
            type: "post",
            url: "ajax/userlog.php", //backend page
            data: {
                topic: topic,
                text: text,
                blocked: html,
                action: 'insertEssay'
            },
            dataType: 'html',
            beforeSend: function() {},
            success: function(data) {
                if (data === 'TRUE') {
                    window.location.href = 'classify.php';
                } else {
                    alert("Try Again!");
                }
            }
        });
    });

    /* 
    CLASSIFICATION HELPERS
     */

    $("body").on('click', '.block', function() {
        $(".panel").removeClass("hide");
        $(this).removeAttr('class');
        $(this).addClass("current");
        $(this).addClass("block");
    });

    $("body").on('click', '#selection', function() {
        let selection = $(this).attr("data-id");
        $(".panel").addClass("hide");
        $(".current").addClass(selection).removeClass("current");
    });

    /* 
    SAVE CLASSIFIED INFO + PERCENTAGE
     */

    $("body").on('click', '#saveClassification', function() {
        var understood = document.querySelectorAll(".understood").length;
        var somewhatUnderstood = document.querySelectorAll(".somewhatUnderstood").length;
        var notClear = document.querySelectorAll(".notClear").length;
        var rubbish = document.querySelectorAll(".rubbish").length;
        var txt = $(".content").html();



        var sum = (understood * 4) + (somewhatUnderstood * 3) + (notClear * 2) + (rubbish * 1);
        var blocks = understood + somewhatUnderstood + notClear + rubbish;
        var perc = (sum / (blocks * 4)) * 100;


        $.ajax({
            type: "post",
            url: "ajax/userlog.php", //backend page
            data: {
                txt: txt,
                perc: perc,
                action: 'classifyEssay'
            },
            dataType: 'html',
            beforeSend: function() {},
            success: function(data) {
                if (data === 'TRUE') {
                    window.location.href = 'topics.php';
                } else {
                    alert("Try Again!");
                }
            }
        });
    });


});