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
function alertModal(content = 'Lỗi, không thực hiện được.') {
    if(!content)
        content = 'Lỗi, không thực hiện được.'
    $("#alertModal .modal-body").html('<i class="material-icons modal_icon_csn">error_outline</i><div class="modal_content_csn">' + content + '</div>');
    $('#alertModal').modal('show');
}
function successModal(content = 'Lỗi, không thực hiện được.') {
    if(!content)
        content = 'Lỗi, không thực hiện được.'
    $("#alertModal .modal-body").html('<i class="material-icons modal_icon_csn">check_circle_outline</i><div class="modal_content_csn">' + content + '</div>');
    $('#alertModal').modal('show');
}
function xoa_dau(str) {
    str = str.replace(/Ă |Ă¡|áº¡|áº£|Ă£|Ă¢|áº§|áº¥|áº­|áº©|áº«|Äƒ|áº±|áº¯|áº·|áº³|áºµ/g, "a");
    str = str.replace(/Ă¨|Ă©|áº¹|áº»|áº½|Ăª|á»|áº¿|á»‡|á»ƒ|á»…/g, "e");
    str = str.replace(/Ă¬|Ă­|á»‹|á»‰|Ä©/g, "i");
    str = str.replace(/Ă²|Ă³|á»|á»|Ăµ|Ă´|á»“|á»‘|á»™|á»•|á»—|Æ¡|á»|á»›|á»£|á»Ÿ|á»¡/g, "o");
    str = str.replace(/Ă¹|Ăº|á»¥|á»§|Å©|Æ°|á»«|á»©|á»±|á»­|á»¯/g, "u");
    str = str.replace(/á»³|Ă½|á»µ|á»·|á»¹/g, "y");
    str = str.replace(/Ä‘/g, "d");
    str = str.replace(/Ă€|Ă|áº |áº¢|Ăƒ|Ă‚|áº¦|áº¤|áº¬|áº¨|áºª|Ä‚|áº°|áº®|áº¶|áº²|áº´/g, "A");
    str = str.replace(/Ăˆ|Ă‰|áº¸|áºº|áº¼|Ă|á»€|áº¾|á»†|á»‚|á»„/g, "E");
    str = str.replace(/ĂŒ|Ă|á»|á»ˆ|Ä¨/g, "I");
    str = str.replace(/Ă’|Ă“|á»Œ|á»|Ă•|Ă”|á»’|á»|á»˜|á»”|á»–|Æ |á»œ|á»|á»¢|á»|á» /g, "O");
    str = str.replace(/Ă™|Ă|á»¤|á»¦|Å¨|Æ¯|á»ª|á»¨|á»°|á»¬|á»®/g, "U");
    str = str.replace(/á»²|Ă|á»´|á»¶|á»¸/g, "Y");
    str = str.replace(/Ä/g, "D");
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
var waitingDialog = waitingDialog || (function ($) {
    'use strict';

    // Creating modal dialog's DOM
    var $dialog = $(
        '<div class="modal fade modal-loading-waiting" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top:15%; overflow-y:visible;z-index: 9999999999999">' +
        '<div class="modal-dialog modal-m" style="text-align: center; margin-top: 100px;width: auto!important;">' +
        '<img src="/images/small-loader.gif"></div>' +
        '</div>' +
        '</div></div></div>');

    return {
        /**
         * Opens our dialog
         * @param message Custom message
         * @param options Custom options:
         *                options.dialogSize - bootstrap postfix for dialog size, e.g. "sm", "m";
         *                options.progressType - bootstrap postfix for progress bar type, e.g. "success", "warning".
         */
        show: function (message, options) {
            // Assigning defaults
            if (typeof options === 'undefined') {
                options = {};
            }
            if (typeof message === 'undefined') {
                message = 'Loading';
            }
            var settings = $.extend({
                dialogSize: 'm',
                progressType: '',
                onHide: null // This callback runs after the dialog was hidden
            }, options);

            // Configuring dialog
            $dialog.find('.modal-dialog').attr('class', 'modal-dialog').addClass('modal-' + settings.dialogSize);
            $dialog.find('.progress-bar').attr('class', 'progress-bar');
            if (settings.progressType) {
                $dialog.find('.progress-bar').addClass('progress-bar-' + settings.progressType);
            }
            $dialog.find('h3').text(message);
            // Adding callbacks
            if (typeof settings.onHide === 'function') {
                $dialog.off('hidden.bs.modal').on('hidden.bs.modal', function (e) {
                    settings.onHide.call($dialog);
                });
            }
            // Opening dialog
            $dialog.modal();
        },
        /**
         * Closes dialog
         */
        hide: function () {
            $dialog.modal('hide');
        }
    };

})(jQuery);