{{--<h2>{{$template['subject'] }} </h2>--}}
{{-- <h5>{{$template['body']}}</h5>--}}
@php
    $string=str_replace("%name", $instructor['name'],$template['body']  );
    $string=str_replace("%email", $instructor['email'],$string);
    $string=str_replace("%pass", $instructor['password'],$string);
    $string=str_replace("%portal_url","https://zahra.techsgate-stage.com/auth/sign-in",$string);
 @endphp
{!! $string !!}
 {{-- <h3>your email is :.{{$instructor['name']}}</h3>--}}
{{-- <h3>your password is :.{{$instructor['password']}}</h3>--}}

