@if(session()->has('alert'))
<?php $msg = session()->pull('alert'); ?>
<div class="alert alert-{{ $msg['class'] }} fade in hidden-print">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
    <strong>{{ $msg['status'] }}</strong> {{ $msg['message'] }}
    @if($msg['url'] != '')
    <a class="{{ $msg['url_class']}}" href="{{ url($msg['url'])}}">{{$msg['url_title']}}</a>
    @endif
</div>
@endif
