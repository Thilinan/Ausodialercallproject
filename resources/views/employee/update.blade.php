<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-neutral-200">
{{-- Header top contend (first navbar--}}

<header class="h-36 bg-neutral-50">
    <div class="border-b-2 ">
        <nav class="flex justify-between h-16 pt-4 border px-28">
          <div class="">
            <ul class="flex items-center gap-9">
                {{-- logo --}}
                <div>
                    <img src="" alt="Logo" class="h-12 p-1 ">
                </div>

                {{-- nav contend --}}
                <li class="h-12 p-1 border-b-2 hover:border-blue-700">
                    <a href="" class="p-3">Dashbord</a>
                </li>
                <li class="h-12 p-1 border-b-2 hover:border-blue-700">
                    <a href="" class="p-3">Lates</a>
                </li>
                <li class="h-12 p-1 border-b-2 hover:border-blue-700">
                    <a href="" class="p-3">Tcall</a>
                </li>
                <li class="h-12 p-1 border-b-2 hover:border-blue-700">
                    <a href="" class="p-3">Chatapp</a>
                </li>
            </ul>
        </div>
        {{-- select inbound outbound --}}

        <div class="pb-4">
            <div class="">
                <select name="" id="" class="text-sm border border-gray-300 rounded-lg h-9 bg-slate-50">
                    <div class="mb-2">
                        <option value="">In Bound</option>
                        <option value="">Out Bound</option>
                    </div>


                </select>

            </div>
        </div>
        {{--End select inbound outbound --}}

        {{-- Time arrivel --}}
        <div class="w-64 mb-3 border border-gray-300 bg-slate-50">
            <div class="flex justify-between pt-0.5 pl-4 px-">
                <div>
                    <h4>Total Times</h4>

                </div>

                <div class="w-32 h-8 p-0 px-5 text-lg ">
                    <span class="">00:00:00</span>
                 </div>
                </div>
            </div>


        {{-- EndTime arrivel --}}

        {{-- right button --}}
              <div>
                    <button><a href="">All</a></button>
              </div>

     </nav>
    </div>

    {{-- Header bottom contend (second navbar) --}}

    <div>
        <nav class="flex justify-between h-16 pt-6 px-28">
            <div class="">
                <h3 class="text-xl font-bold"><a href=""></a></h3>
            </div>

            {{-- Start campain selection --}}

            <div class="relative left-80">
                <div>
                    <select name="" id="" class="text-sm border-gray-300 rounded-lg h-9 order bg-slate-50">
                        <option value="">Campain 1</option>
                        <option value="">Campain 2</option>
                        <option value="">Campain 3</option>
                        <option value="">Campain 4</option>
                    </select>

                </div>
            </div>
            {{-- End Campin selectio --}}

            {{-- Start START/STOP/BREAKE  Buttons--}}
            <div class="relative pt-2 left-56">
                <div class="flex gap-3">
                    <div class="">
                        <button class="text-green-500 transition duration-150 ease-in-out delay-150 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm14.024-.983a1.125 1.125 0 0 1 0 1.966l-5.603 3.113A1.125 1.125 0 0 1 9 15.113V8.887c0-.857.921-1.4 1.671-.983l5.603 3.113Z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    <div>
                        <button class="text-red-500 transition duration-150 ease-in-out delay-150 hover:scale-110 ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm6-2.438c0-.724.588-1.312 1.313-1.312h4.874c.725 0 1.313.588 1.313 1.313v4.874c0 .725-.588 1.313-1.313 1.313H9.564a1.312 1.312 0 0 1-1.313-1.313V9.564Z" clip-rule="evenodd" />
                              </svg>
                        </button>

                    </div>

                    <div>
                        <button class="text-blue-500 transition duration-150 ease-in-out delay-150 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM9 8.25a.75.75 0 0 0-.75.75v6c0 .414.336.75.75.75h.75a.75.75 0 0 0 .75-.75V9a.75.75 0 0 0-.75-.75H9Zm5.25 0a.75.75 0 0 0-.75.75v6c0 .414.336.75.75.75H15a.75.75 0 0 0 .75-.75V9a.75.75 0 0 0-.75-.75h-.75Z" clip-rule="evenodd" />
                              </svg>
                        </button>
                    </div>
                </div>
            </div>

            {{-- End START/STOP/BREAKE  Buttons--}}

            <div>
                <button class="items-center pb-1 border rounded-lg h-9 w-36 bg-slate-900 hover:bg-slate-700"><a href="" class=" text-slate-300" >StartProject</a></button>
            </div>

        </nav>

    </div>

</header>

{{--
   Start First and second body contend --}}

    <div class="pt-12 border px-28">
        <div class="flex justify-between border-black">
            <div class="grid grid-cols-3 gap-4 ">

                {{-- first row (first card)--}}
                <div class="w-64 h-24 border shadow-md border-slate-50 bg-slate-50">
                    <div class="flex justify-between px-5 pt-5">
                        <div>
                            <h4>Total Calls</h4>
                            <span>0</span>
                        </div>

                        <div class="w-12 h-12 p-3 bg-blue-300 border border-blue-300 rounded-lg">
                            <div class="w-5 h-5 text-blue-900 ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" className="w-4 h-4   ">
                                <path fillRule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clipRule="evenodd" />
                               </svg>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- first row (second card) --}}

                <div class="w-64 h-24 border shadow-md border-slate-50 bg-slate-50">
                    <div class="flex justify-between px-5 pt-5">
                        <div>
                            <h4>Complted</h4>
                            <span>0</span>
                        </div>

                        <div class="w-12 h-12 p-3 bg-green-300 border border-green-300 rounded-lg">
                            <div class="w-5 h-5 text-green-500 ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" className="w-6 h-6">
                                    <path fillRule="evenodd" d="M15 3.75a.75.75 0 0 1 .75-.75h4.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-1.5 0V5.56l-4.72 4.72a.75.75 0 1 1-1.06-1.06l4.72-4.72h-2.69a.75.75 0 0 1-.75-.75Z" clipRule="evenodd" />
                                    <path fillRule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clipRule="evenodd" />
                                  </svg>

                                 </div>
                            </div>
                        </div>
                    </div>

                {{-- First row (third card) --}}

                <div class="w-64 h-24 border shadow-md border-slate-50 bg-slate-50">

                    <div class="flex justify-between px-5 pt-5">
                        <div>
                            <h4>break</h4>
                            <span>0</span>
                        </div>

                        <div class="w-12 h-12 p-3 bg-yellow-300 border border-yellow-300 rounded-lg">
                            <div class="w-5 h-5 text-yellow-900 ">

                            </div>
                        </div>
                    </div>
                </div>

                {{-- second row --}}

                {{-- Second row (first card) --}}

                <div class="w-64 border shadow-md border-slate-50 h-28 bg-slate-50">
                    <div class="flex justify-between px-5 pt-5">
                        <div>
                            <h4>message</h4>
                            <span>0</span>
                        </div>

                        <div class="w-12 h-12 p-3 bg-red-300 border border-red-300 rounded-lg">
                            <div class="w-5 h-5 text-red-600 ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" className="w-6 h-6">
                                    <path fillRule="evenodd" d="M4.848 2.771A49.144 49.144 0 0 1 12 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 0 1-3.476.383.39.39 0 0 0-.297.17l-2.755 4.133a.75.75 0 0 1-1.248 0l-2.755-4.133a.39.39 0 0 0-.297-.17 48.9 48.9 0 0 1-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97ZM6.75 8.25a.75.75 0 0 1 .75-.75h9a.75.75 0 0 1 0 1.5h-9a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H7.5Z" clipRule="evenodd" />
                                  </svg>

                            </div>
                        </div>
                    </div>
                </div>

                {{-- second Row (second card) Skill selection --}}

                <div class="w-64 pb-5 border shadow-md border-slate-50 h-28 bg-slate-50">
                    <div class="px-5 pt-5 ">
                        <div>
                            <h4>Skill</h4>
                        </div>
                        <div class="pt-4">
                            <select name="" id="" class="text-sm border-0 border-b-2 focus:outline-white w-52 gray-300 h-9 bg-slate-50">
                                <option value="">Sinhala</option>
                                <option value="">Tamil</option>
                                <option value="">English</option>
                            </select>

                        </div>


                    </div>
                </div>

                {{-- Third row (third card) Number Viwe--}}

                <div class="w-64 border shadow-md border-slate-50 h-28 bg-slate-50">
                        @foreach ($agent as $age)
                        <div class="number"  style="display:none;">{{$age}}</div>
                        @endforeach

                        <button id="next" >Next</button>
                </div>



            </div>
         {{-- End second and first row  body contend --}}

            {{-- Start agent Numbers --}}

            <div class="">
                <div class="h-lhv">
                    <div>world</div>
                    <div>world</div>
                    <div>world</div>
                    <div>world</div>
                    <div>world</div>
                    <div>world</div>
                    <div>world</div>
                    <div>world</div>
                    <div>world</div>
                    <div>world</div>
                    <div>world</div>
                    <div>world</div>
                    <div>world</div>
                    <div>world</div>
                    <div>world</div>
                    <div>world</div>


                </div>
            </div>

            {{-- End Agent Call Numbers  --}}

        </div>
    </div>








    {{-- Start third body contend (Call Details And Call Log) --}}

    <div class="px-28">
       <div class="flex justify-between h-16 pt-6 px-96">
        <div class="relative right-96">
            <h1>Details</h1>

        </div>
        <div>
           <h1>Call LOG</h1>
        </div>
       </div>
    </div>

    {{-- End third body contend (Call Details And Call Log)--}}





     {{-- Start Script --}}


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
      {{-- End Script --}}







</body>
</html>
