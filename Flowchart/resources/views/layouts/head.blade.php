<!doctype html>
<html lang="ja">
<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @isset($title)
    <title>{{ $title }} - -- chartman --></title>
    @else
    <title>-- chartman --></title>
    @endisset

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>
<body>
