<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')


</head>
<body>
    @if(isset($message))
        <script>alert("{{ $message }}")</script>
    @endif
<div class="relative top-40  left-1/3 ">
    <div class=" border border-black w-96 h-80">
        <div class="relative top-10 left-36">
            <h2 class=" text-2xl font-medium ml-4">Login</h2>
        </div>
        <form action="{{route('agent.login')}}" method="POST" class=" pl-16 pt-20 grid w-80 gap-3">
            @csrf
            @method('post')

            <input type="text" name="email" placeholder="Email">
            <input type="password" name="pword" placeholder="Password">
         <div class="relative left-24">
            <div class="border w-20 h-10 p-1 rounded-md bg-slate-900 text-white font-bold hover:bg-red-700 ">
            <input type="submit" value="Login" class="ml-3">
           </div>
       </div>
        </form>

    </div>
</div>

</body>
</html>
