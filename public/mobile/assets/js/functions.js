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
function alertModal(content) {
    $("#alertModal .modal-body").html('<i class="material-icons modal_icon_csn">error_outline</i><div class="modal_content_csn">' + content + '</div>');
    $('#alertModal').modal('show');
}
function successModal(content) {
    $("#alertModal .modal-body").html('<i class="material-icons modal_icon_csn">check_circle_outline</i><div class="modal_content_csn">' + content + '</div>');
    $('#alertModal').modal('show');
}
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
    if(n === -1) {
        // console.log(key);
        // console.log(string);
        // searchHighlight(key.substring(0, key.length - 1), string);
        return string;
    }
    return string.replace(stringPos, '<span class="search_highlight">' + stringPos + '</span>');
}
function copyClipboardAction(copyValue){
    // we need to create element or use existing element but should n't visible to user.
    var hiddenEleForCopy = $('#_hiddenEleForCopy_');
    // Checking Element exists or not
    if(!hiddenEleForCopy.length){
        $('body').append('<input style="position:absolute;top: -9999px;" id="_hiddenEleForCopy_" value=""></input>');
        hiddenEleForCopy = $('#_hiddenEleForCopy_');
    }
    hiddenEleForCopy.val(copyValue);
    hiddenEleForCopy.select();
    document.execCommand('copy');
    document.getSelection().removeAllRanges();
}