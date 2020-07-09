<form method="post" action="/convert_music_id">
    <input type="text" name="code" placeholder="code music" value="{{$code ?? ''}}" />
    <input type="text" name="id" placeholder="id music" value="{{$id ?? ''}}" />
    <br/>
    <br/>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" name="action" value="Chuyển CODE sang ID" />
    <input type="submit" name="action" value="Chuyển ID sang CODE" />
</form>