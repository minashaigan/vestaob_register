<!DOCTYPE html>
<html>
<head>
    <title>Mail</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        @import "https://fonts.googleapis.com/css?family=Montserrat:300,400,700";
        .rwd-table {
            margin: 1em 0;
            min-width: 300px;
        }
        .rwd-table tr {
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
        }
        .rwd-table th {
            display: none;
        }
        .rwd-table td {
            display: block;
        }
        .rwd-table td:first-child {
            padding-top: .5em;
        }
        .rwd-table td:last-child {
            padding-bottom: .5em;
        }
        .rwd-table td:before {
            content: attr(data-th) ": ";
            font-weight: bold;
            width: 6.5em;
            display: inline-block;
        }
        @media (min-width: 480px) {
            .rwd-table td:before {
                display: none;
            }
        }
        .rwd-table th, .rwd-table td {
            text-align: left;
        }
        @media (min-width: 480px) {
            .rwd-table th, .rwd-table td {
                display: table-cell;
                padding: .25em .5em;
            }
            .rwd-table th:first-child, .rwd-table td:first-child {
                padding-left: 0;
            }
            .rwd-table th:last-child, .rwd-table td:last-child {
                padding-right: 0;
            }
        }

        body {

            padding: 0 2em;
            font-family: Montserrat, sans-serif;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            color: #444;
            background: #eee;
        }

        h1 {
            font-weight: normal;
            letter-spacing: -1px;
            color: #34495E;
        }

        .rwd-table {
            background: #34495E;
            color: #fff;
            border-radius: .4em;
            overflow: hidden;
        }
        .rwd-table tr {
            border-color: #46637f;
        }
        .rwd-table th, .rwd-table td {
            margin: .5em 1em;
        }
        @media (min-width: 480px) {
            .rwd-table th, .rwd-table td {
                padding: 1em !important;
            }
        }
        .rwd-table th, .rwd-table td:before {
            color: #dd5;
        }

    </style>
</head>
<body class="w3-green">
<div class="w3-container " align="center">
    <h1>User list ({{$count}})</h1>

    <table class="rwd-table">
        <tr>
            <th>ID</th>
            <th>نام و نام خانوادگی</th>
            <th>مهارت ها</th>
            <th>ایمیل</th>
            <th>شماره تماس</th>


        </tr>

        @foreach($users as $user)
            <tr>
                <td data-th="ID">{{$user->id}}</td>
                <td data-th="Mail"><a href="/pdf/{{$user->email}}/">{{$user->name}}</a></td>
                <td>
                    <?php
                        $fields="";
                    foreach ($user->data['fields'] as $field){
                        $fields=$fields." | ".$field;
                    }
                    ?>
                    {{$fields}}
                </td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>

            </tr>
        @endforeach



    </table>

    @if (count($errors) > 0)
        <div >
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>


</body>
</html>
