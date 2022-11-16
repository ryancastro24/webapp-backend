@extends('layouts.app')



@section('content')



<?php 

$users = array("ryan","anna","patrick","tom");

$text = "something";
$reverseText = strrev($text);

$output = "";
if($text == $reverseText){
    $output = "it is a palindrome";
}
else{
    $output = "it is not a palindrome";
}

?>


<!---->
<h1> <?php echo $output ?> </h1>

<div>
   @foreach($users as $user)
    <h1>Hello , {{$user}}</h1>
    @endforeach
</div>


@endsection