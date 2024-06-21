<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="numberDisplay">
    @foreach ( $agent as $age)
    <div class="number"  style="display:none; ">{{$age}}</div>
    @endforeach
</div>

    <button id="next" >Next</button>

    <script>
        let currentIndex = 0;
        const names = document.querySelectorAll('.number');
        const nextBtn = document.getElementById('next');

        nextBtn.addEventListener('click', function() {
            names[currentIndex].style.display = 'none';
            currentIndex = (currentIndex + 1) % names.length;
            names[currentIndex].style.display = 'block';
        });
    </script>

</body>
</html>
