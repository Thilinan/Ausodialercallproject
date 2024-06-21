<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Hello wowrld</h1>

<div class="relative flex flex-col m-8 shadow-inner flex-lg ">
    <div>
    <table class="w-full">
        <thead>
            <tr class="border-b-4 border-black">
            <th class="grid grid-cols-1 px-6 py-3 border ">Name</th>
            <th class="px-6 py-3 border text-md" >email</th>
            <th class="px-6 py-3 border text-md">mobile</th>
            <th class="px-6 py-3 border text-md">province</th>
            <th class="px-6 py-3 border text-md">Distric</th>
            <th class="px-6 py-3 border text-md">Skill</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($employee as $Employee)
            <tr>
                <td class="px-6 py-3 border text-md">{{$Employee->name}}</td>
                <td class="px-6 py-3 border text-md">{{$Employee->email}}</td>
                <td class="px-6 py-3 border text-md">{{$Employee->mobile}}</td>
                <td class="px-6 py-3 border text-md">{{$Employee->province}}</td>
                <td class="px-6 py-3 border text-md">{{$Employee->district}}</td>
                <td class="px-6 py-3 border text-md">{{$Employee->skill}}</td>
                </tr>


            @endforeach

        </tbody>
    </table>
    </div>
</div>


</body>
</html>
