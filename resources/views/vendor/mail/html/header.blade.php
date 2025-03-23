- @props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://i.postimg.cc/JzMVZ5dK/pblogo.png" class="logo" alt="PB Logo" style="height: 75px; width: 75px;">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
