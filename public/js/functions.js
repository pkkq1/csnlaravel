$( document ).ready(function() {
    $(".this_more").click(function (a) {
        a.stopPropagation();
        if ($(".iconmenu").hasClass("active")) {
            $(".iconmenu").removeClass("active");
            $(".iconmenu .material-icons").text("more_horiz");
            $(".menu-expand-wrapper").fadeOut("fast")
        } else {
            $(".iconmenu").addClass("active");
            $(".iconmenu .material-icons").text("close");
            $(".menu-expand-wrapper").fadeIn("fast")
        }
    });
    var b;
    $(".this_more").on("mouseenter", function (a) {
        b = setTimeout(function () {
            a.stopPropagation();
            $(".iconmenu").addClass("active");
            $(".iconmenu .material-icons").text("close");
            $(".menu-expand-wrapper").fadeIn("fast")
        }, 300)
    }).on("mouseleave", function (a) {
        clearTimeout(b);
        a.stopPropagation();
        $(".iconmenu").removeClass("hidden")
    });
    $(".ghw-bottom-header").hover(function () {
    }, function (a) {
        a.stopPropagation();
        $(".iconmenu").removeClass("active");
        $(".iconmenu .material-icons").text("more_horiz");
        $(".menu-expand-wrapper").fadeOut("fast")
    });

    $('#header .top .form-group .form-control').click(function(a){
		a.stopPropagation();
		$(".suggest").fadeIn("fast")
    });
    $('body').click(function(){
        $(".suggest").fadeOut("fast")
    });
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
//
// $(function() {
//     // Initializes and creates emoji set from sprite sheet
//     window.emojiPicker = new EmojiPicker({
//       emojiable_selector: '[data-emojiable=true]',
//       assetsPath: 'assets/emoji-picker-master/lib/img/',
//       popupButtonClasses: 'fa fa-smile-o'
//     });
//     // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
//     // You may want to delay this step if you have dynamically created input fields that appear later in the loading process
//     // It can be called as many times as necessary; previously converted input fields will not be converted again
//     window.emojiPicker.discover();
// });

var upvote_position = $('#answer-12878316').position();
$('body').mousemove(function (event) {
    $(this).css({
        position: 'relative',
        left: (event.pageX - upvote_position.left - 22) + 'px',
        top: (event.pageY - upvote_position.top - 35) + 'px'
    });
});
function alertModal(content) {
    $("#myModal .modal-body").html('<i class="material-icons modal_icon_csn">error_outline</i><div class="modal_content_csn">' + content + '</div>');
    $("#myModal").modal();
}
function successModal(content) {
    $("#myModal .modal-body").html('<i class="material-icons modal_icon_csn">check_circle_outline</i><div class="modal_content_csn">' + content + '</div>');
    $("#myModal").modal();
}
String.prototype.replaceArray = function(find, replace) {
    var replaceString = this;
    var regex;
    for (var i = 0; i < find.length; i++) {
        regex = new RegExp(find[i], "g");
        replaceString = replaceString.replace(regex, replace);
    }
    return replaceString;
};
// String.prototype.replaceArray = function(str, replace) {
//     var replaceString = this;
//     for (var i = 0; i < find.length; i++) {
//         replaceString = replaceString.replace(find[i], replace[i]);
//     }
//     return replaceString;
// };
function xoa_dau(str) {
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
    str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
    str = str.replace(/đ/g, "d");
    str = str.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A");
    str = str.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E");
    str = str.replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "I");
    str = str.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O");
    str = str.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U");
    str = str.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y");
    str = str.replace(/Đ/g, "D");
    return str;
}
function searchHighlight(key, string) {
    var keyReplace = xoa_dau(key).toLowerCase();
    var stringReplace = xoa_dau(string).toLowerCase();
    n = stringReplace.indexOf(keyReplace);
    var stringPos = string.substring(n, n + key.length);
    return string.replace(stringPos, '<span class="search_highlight">' + stringPos + '</span>');
}