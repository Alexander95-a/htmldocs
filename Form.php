<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        #div1{
            width: 1000px;
            height: 200px;
            font-size: 111px;
            line-height: 1.2em;
        }
    </style>
    <script type="text/javascript" src="src\js\jquery-3.6.0.min.js"></script>
    <script>
        $(function(){
            n = 1;
            while(n==1){
                n = 0
                if ($('#div1 .holder').outerHeight()>$('#div1').outerHeight()){
                    var fz = parseInt($('#div1').css('font-size'));
                    $('#div1').css({'font-size' : fz-1});
                    n = 1
                } else {n = 0}
            }
        });
    </script>
</head>
<body>
<div id="div1">
    <div class="holder">    I need to I need to display user entered text into a fixed size div.</div>
</body>
</html>