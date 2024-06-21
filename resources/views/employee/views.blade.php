<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      @vite('resources/css/app.css')

      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>







      <script>
        let timerInterval;
let seconds = 0;
let minutes = 0;
let hours = 0;

function startTimer() {
  timerInterval = setInterval(updateTimer, 1000);
}

function stopTimer() {
  clearInterval(timerInterval);
}

function resetTimer() {
  clearInterval(timerInterval);
  seconds = 0;
  minutes = 0;
  hours = 0;
  updateDisplay();
}

function updateTimer() {
  seconds++;
  if (seconds === 60) {
    seconds = 0;
    minutes++;
    if (minutes === 60) {
      minutes = 0;
      hours++;
    }
  }
  updateDisplay();
}

function updateDisplay() {
  const formattedTime = `${pad(hours)}:${pad(minutes)}:${pad(seconds)}`;
  document.getElementById('timer').innerText = formattedTime;
}

function pad(value) {
  return value < 10 ? '0' + value : value;
}

document.getElementById('start').addEventListener('click', startTimer);
document.getElementById('stop').addEventListener('click', stopTimer);
document.getElementById('reset').addEventListener('click', resetTimer);

      </script>


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
                <select name="" id="drop1" class="text-sm border border-gray-300 rounded-lg h-9 bg-slate-50">
                    <div class="mb-2" id="">
                        <option value=""></option>
                        <option value="">In Bound</option>
                        <option value="outbound" >Out Bound</option>
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

            <div class="relative left-28">
                <div>

                    @csrf
                    <select name="selectedCampaign" id="dropdown" class="text-sm border-gray-300 rounded-lg h-9 order bg-slate-50" style="display: none;">
                        <option value=""></option>
                         @foreach ($campaigns as $campaign )
                         <option value="vj">{{$campaign}}</option>
                        @endforeach


                    </select>


                </div>
            </div>
            {{-- End Campin selectio --}}

            {{-- Start START/STOP/BREAKE  Buttons--}}


            <div class="relative left-0 pt-2">
                <div class="flex gap-3">
                    <div class="">

                        <button class="text-green-500 transition duration-150 ease-in-out delay-150 hover:scale-110"  id="showResultButton" style="display: none;">
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


        </nav>

    </div>

</header>

{{--
   Start First and second body contend --}}

<div class="pt-12 px-28 ">

        <div class="grid justify-between border-black ">

            <div class="flex gap-4 ">

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
            </div>

                {{-- second row --}}

                {{-- Second row (first card) --}}
            <div class="flex gap-4 pt-3 ">

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

                <div class="w-64 border shadow-md border-slate-50 h-28 bg-slate-50">
                    <div class="">
                        <div class="h-6 px-4 pt-0 border-b border-gray-300"><h4 class="relative top-0"></h4></div>
                        <div class="">
                            <div class="grid">
                                 @foreach ($skills as $skill)
                                <div class="flex justify-between px-3">
                                     <div><h6 class="text-md">{{$skill}}</h6></div>
                                    <label class="inline-flex items-center mb-0 cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer">
                                        <div class="relative w-9 h-5 bg-gray-700  peer-focus:ring-0 peer-focus:ring-blue-800 dark:peer-focus:ring-blue-200 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-bkack after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-900 after:border after:rounded-full after:w-4 after:h-4 after:transition-all dark:border-black peer-checked:bg-blue-600"></div>
                                    </label>
                                </div>

                                 @endforeach
                            </div>
                            <div>
                                <div>


                                </div>

                                <div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Second row (third card) Number Viwe--}}

                <div class="w-64 border shadow-md border-slate-50 h-28 bg-slate-50">
                    <div class="flex justify-between px-2 pt-2">
                        <div class="grid gap-1 " id="detailsContainer">

                             <div>
                                <div class="text-md" id="Contact 1: ">
                                    <div id="resultContainer" style="display: none;" class="border border-black">
                                        @foreach ($skills as $skill )
                                        <p>Lanugage:  {{$skill}}</p>
                                        @endforeach
                                         <p>Contact 1: {{ $num->contact_1 }}</p>
                                         <p>Contact 2: {{ $num->contact_2 }}</p>
                                    </div>


                                </div>
                             </div>
                             <div>
                                <div class="text-xl" id="Contact 2:">
                                  {{-- {{$num->contact_2}} --}}

                                </div>
                             </div>
                        </div>



                        <div class="pt-8 pr-4">
                            <div>
                                <button class="text-red-600 border-b border-red-600 text-md hover:scale-110" id="toggleModal" name="" >View</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




         {{-- End second and first row  body contend --}}

            {{-- Start agent Numbers --}}

            <div class="relative p-0 border w-72 bottom-56 left-full ml-9 ">
                <div class="">
                    <div>
                        <table class="w-full">


                            <tbody>

                                <tr class="h-16 border-b border-black bg-slate-50 hover:border-b-2" >
                                    <td class="py-3 border text-md px-9">
                                        <div class="number"  style="display:;"></div>
                                      </td>
                                </tr>





                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

            {{-- End Agent Call Numbers  --}}

        </div>



</div>

{{-- Start Model --}}
<div class="flex items-center justify-center h-screen">

    <div id="myModal" class="fixed inset-0 z-50 items-center justify-center hidden w-full h-full overflow-auto bg-white bg-opacity-75">
      <div class="w-full h-full px-3 py-3 bg-white">

        {{-- Start Expander --}}

<div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
    <h2 id="accordion-flush-heading-1">
      <button type="button" class="flex items-center justify-between w-full gap-3 py-5 font-medium text-gray-500 border-b border-gray-200 rtl:text-right dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
        <span>Details</span>
        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
        </svg>
      </button>
    </h2>
    <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
      <div class="py-5 border-b border-gray-200 dark:border-gray-700">

           {{-- Spander Contend start --}}

           <div class="flex justify-between">

            {{-- First Contend --}}
            <div class="relative left-0 w-full">

             <form action="" >
                <div class="">
                  <div class="w-full border shadow-lg">
                     <table class="text-sm ">
                         <tr class="">

                            <td>SC1</td>
                            <td>:</td>
                         </tr>

                         <tr>
                             <td>SC2 </td>
                             <td>:</td>
                         </tr>

                         <tr>
                             <td>WO </td>
                             <td>: {{$workorder}}</td>
                         </tr>

                         <tr>
                             <td>contact_no </td>
                             <td>: {{$contact}}</td>
                         </tr>

                         <tr>
                             <td>Land No </td>
                             <td>:</td>
                         </tr>

                         <tr>
                             <td>Customer Name </td>
                             <td>: {{$custname}} </td>
                         </tr>
                         <tr>
                            <td>Product Description </td>
                            <td>:</td>
                        </tr>

                        <tr>
                            <td>language            </td>
                            <td>: {{$lang}}</td>
                        </tr>

                        <tr>
                            <td>Model Description </td>
                            <td>: {{$modeldis}} </td>
                        </tr>

                        <tr>
                            <td>Defect </td>
                            <td>: </td>
                        </tr>

                        <tr>
                            <td>SFA </td>
                            <td>: </td>
                        </tr>

                        <tr>
                            <td>...</td>
                            <td>: Null</td>
                        </tr>

                     </table>
                  </div>

                  <div class="pt-3 w-60">
                    <div class="">
                        <form action="">
                        <table class="w-full border shadow-lg ">
                          <div class="flex">
                            <tr>
                                <td>Status 01</td>
                                <td><select name="" id="" class="h-12 w-60">
                                    <option value="" class=""></option>
                                    <option value="" class="">Not Reachable/worng number</option>
                                    <option value="" class="">Rejected-Informed SC</option>
                                    <option value="" class="">Rejected</option>
                                    <option value="" class="">Pending-Language</option>
                                    <option value="" class="">CallBack</option>
                                    <option value="" class="">Rejected-AngryCustomer</option>


                                </select></td>
                            </tr>
                            <tr>
                                <td>Status 02</td>
                                <td>
                                    <select name="" id="" class="h-12 w-60">
                                        <option value="" class=""></option>
                                        <option value="" class="">Answerd</option>
                                        <option value="" class="">1 st Call No Answer</option>
                                        <option value="" class="">2nd Call No Answer</option>
                                        <option value="" class="">3rd Call No Answer</option>
                                        <option value="" class="">Not In Use</option>
                                        <option value="" class="">Unreacherble</option>


                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td><textarea name="" id="" cols="30" rows="10" class="h-16 w-60"></textarea></td>
                            </tr>
                            <tr>
                                <td>Comment</td>
                                <td><textarea name="" id="" cols="30" rows="10" class="h-16 w-60"></textarea></td>
                            </tr>

                            <tr>
                                <td>

                                    <button id="" class="px-4 py-2 mt-4 font-bold text-white bg-blue-500 rounded hover:bg-gray-700">
                                        Save
                                      </button>
                                   </td>
                            </tr>
                          </div>

                        </table>
                    </form>
                    </div>
                 </div>
                </div>


             </form>
            </div>

             {{-- Second contend --}}
            <div>
                <div class="px-5 pt-3 border w-96 h-96">
                    <div class="">
                        <div class="flex gap-2">
                            <div class="w-12 h-12 p-3 bg-blue-300 border border-blue-300 rounded-lg">
                                <div class="w-5 h-5 text-blue-900 ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" className="w-4 h-4   ">
                                    <path fillRule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clipRule="evenodd" />
                                   </svg>
                                </div>
                            </div>

                            <h3 class="relative text-sm top-2">Status</h3>
                        </div>

                        <div class="px-1 text-sm border-l">
                            <p>Desription</p>
                            <p>Comment</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{-- Spander Contend End --}}

    </div>



  </div>


      {{-- End Expander  --}}

          <button id="closeModal" class="px-4 py-2 mt-4 font-bold text-white bg-gray-500 rounded hover:bg-gray-700">
            Close
          </button>
        </div>
      </div>
    </div>

{{-- Start JS All Code --}}

    <script>
      const toggleModal = document.getElementById('toggleModal');
      const myModal = document.getElementById('myModal');
      const closeModal = document.getElementById('closeModal');

      toggleModal.addEventListener('click', () => {
        myModal.classList.toggle('hidden');
      });

      closeModal.addEventListener('click', () => {
        myModal.classList.add('hidden');
      });
    </script>


{{-- End model --}}

<!--Start JavaScript code for data pass And BUtton hiddin and othe things -->

{{-- js code for data pass --}}
<script>
    $(document).ready(function() {
        $('#showResultButton').click(function() {
            $('#resultContainer').toggle();
        });
    });
</script>
{{-- End datapass js code --}}

{{-- Start button display js code --}}
<script>
     document.getElementById('dropdown').addEventListener('change', function() {
    var selectedValue = this.value;
    var hiddenButton = document.getElementById('showResultButton');
    if (selectedValue !== 'vj') {
      hiddenButton.style.display = 'none';
    } else {
      hiddenButton.style.display = 'inline-block';
    }
  });

     alert(dropdown.selectedValue);

  </script>
{{-- End Button display js code --}}
{{-- Start JavaScript code for data pass And BUtton hiddin and othe things --}}

{{-- campain display js code --}}
<script>
    document.getElementById('drop1').addEventListener('change', function() {
   var selectedValue = this.value;
   var hiddenButton = document.getElementById('dropdown');
   if (selectedValue !== 'outbound') {
     hiddenButton.style.display = 'none';
   } else {
     hiddenButton.style.display = 'inline-block';
   }
 });
 </script>
{{-- End Campain display js code --}}
</body>
</html>
