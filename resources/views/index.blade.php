<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset('css/compiled.min.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

    </style>
</head>
<body onload="myFunction()" style="margin:0;background: #f3efe1">

<div id="loader" style="height: 100vh; background: linear-gradient(75deg, #bad1ff, #4d84ff)">
    <div class="flex-center">


        <div class="container text-center white-text">
            <img src="{{asset('img/logo.png')}}"  alt="" style="height: 400px;width: 400px">
            <h1 class="black-text wow fadeInUp font-weight-bold white-text"> MahaChandeswori Information System</h1>
        </div>
        </div>

    </div>


</div>
@guest
    <input type="hidden" value="1" id="test">
    @else
    <input type="hidden" value="2" id="test">
    @endguest
<div style="display:none;" id="myDiv" class="wow fadeInUp">
    <h2>Tada!</h2>
    <p>Some text in my newly loaded page..</p>
</div>

<script>
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 2000);
    }
    var x = document.getElementById('test').value;
    if(x == 1)
    {
        function showPage() {
            window.location.replace("/login");
        }
    }

    else {
        function showPage() {
            window.location.replace("/admin");
        }
    }

</script>
<script src="{{asset('js/compiled.min.js')}}"></script>
<script>
    new WOW().init();
</script>
</body>
</html>
