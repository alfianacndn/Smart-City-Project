@extends ('layout_user.template')

@section ('content')
<!DOCTYPE html>
<html>

<head>
    <title>MEMBUAT JAM DIGITAL SENDIRI</title>
    <script type="text/javascript">
        window.onload = function() {
            jam();
        }

        function jam() {
            var e = document.getElementById('jam'),
                d = new Date(),
                h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());

            e.innerHTML = h + ':' + m + ':' + s;

            setTimeout('jam()', 1000);
        }

        function set(e) {
            e = e < 10 ? '0' + e : e;
            return e;
        }
    </script>
</head>

<body>
    <div class="page-wrapper">
        <br></br>
        <br></br>

        <center>
            <h1>What's Up Today?</h1>
            <br></br>
            <h1 style="font-size: 120px; font-family: verdana;" id="jam"></h1>
            <?php
            echo date('l, d M Y');

            ?>
        </center>
    </div>
</body>

</html>


@endsection