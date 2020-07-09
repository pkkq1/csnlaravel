<form method="post" action="/convert_music_id">
    <input type="text" name="code" placeholder="code or music_id" value="{{$code ?? ''}}" />
    <label>{{$result ?? ''}}</label>
    <br/>
    <br/>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" name="action" value="Chuyển đổi" />
</form>