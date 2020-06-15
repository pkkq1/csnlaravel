<div class="list_comment">
    <div class="list_body">
        <div class="stage_music">
            @include('web.user.report_user.report_parent', ['reportMusicData' => $result])
        </div>
    </div>
</div>
<script>
    function showReport(id, type) {
        $('#report-'+type +'-'+id).css('background', 'none');
        var status = $('#report-' + type + '-' + id).data('status');
        $('#report-' + type + '-' + id).data('status', 0);
        if(status == 1) {
            $.ajax({
                url: window.location.origin + "/user/show_report",
                type: "POST",
                dataType: "json",
                data: {id: id, type: type},
                beforeSend: function () {
                    if(loaded) return false;
                    loaded = true;
                },
                success: function(data) {

                }
            });
        }
    }
</script>