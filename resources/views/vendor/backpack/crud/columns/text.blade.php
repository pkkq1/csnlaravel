{{-- regular object attribute --}}
@php
	$value = htmlspecialchars_decode(data_get($entry, $column['name']), ENT_QUOTES);
	
	if (is_array($value)) {
		$value = json_encode($value);
	}
@endphp

<span title="{{$value}}">
	{{ (array_key_exists('prefix', $column) ? $column['prefix'] : '').str_limit(strip_tags($value), array_key_exists('limit', $column) ? $column['limit'] : 50, "[...]").(array_key_exists('suffix', $column) ? $column['suffix'] : '') }}
</span>
