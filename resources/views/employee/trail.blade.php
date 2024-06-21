<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

      @vite('resources/css/app.css')
    <title>Document</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
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


<label class="inline-flex items-center mb-5 cursor-pointer">
    <input type="checkbox" value="" class="sr-only peer">
    <div class="relative w-11 h-6 bg-gray-200  peer-focus:ring-4 peer-focus:ring-blue-800 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-bkack after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-900 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-black peer-checked:bg-blue-600"></div>
    <span class="text-sm font-medium text-gray-900 ms-3 dark:text-gray-300">Toggle me</span>
  </label>

  <label class="inline-flex items-center mb-5 cursor-pointer">
    <input type="checkbox" value="" class="sr-only peer" checked>
    <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
    <span class="text-sm font-medium text-gray-900 ms-3 dark:text-gray-300">Checked toggle</span>
  </label>

  <label class="inline-flex items-center mb-5 cursor-pointer">
    <input type="checkbox" value="" class="sr-only peer" disabled>
    <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
    <span class="text-sm font-medium text-gray-900 ms-3 dark:text-gray-300">Disabled toggle</span>
  </label>





  <br> <br> <br> <br> <br>


  {{-- Modal 3 --}}

  <div class="flex items-center justify-center h-screen">
    <button id="toggleModal" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
      Open Modal
    </button>

    <div id="myModal" class="fixed inset-0 z-50 flex items-center justify-center hidden overflow-auto bg-gray-800 bg-opacity-75">
      <div class="w-full h-full bg-white">

        {{-- Start Expander --}}

        <div id="accordion-example">
            <h2 id="accordion-example-heading-1">
              <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-gray-500 border border-b-0 border-gray-200 rtl:text-right rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" aria-expanded="true" aria-controls="accordion-example-body-1">
                <span>What is Flowbite?</span>
                <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>
            </h2>
            <div id="accordion-example-body-1" class="hidden" aria-labelledby="accordion-example-heading-1">
              <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
              </div>
            </div>
            <h2 id="accordion-example-heading-2">
              <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-gray-500 border border-b-0 border-gray-200 rtl:text-right focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" aria-expanded="false" aria-controls="accordion-example-body-2">
                <span>Is there a Figma file available?</span>
                <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>
            </h2>
            <div id="accordion-example-body-2" class="hidden" aria-labelledby="accordion-example-heading-2">
              <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
              </div>
            </div>
            <h2 id="accordion-example-heading-3">
              <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-gray-500 border border-gray-200 rtl:text-right focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" aria-expanded="false" aria-controls="accordion-example-body-3">
                <span>What are the differences between Flowbite and Tailwind UI?</span>
                <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>
            </h2>
            <div id="accordion-example-body-3" class="hidden" aria-labelledby="accordion-example-heading-3">
              <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                <ul class="text-gray-500 list-disc ps-5 dark:text-gray-400">
                  <li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                  <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                </ul>
              </div>
            </div>
          </div>


{{-- End Expander --}}

        <button id="closeModal" class="px-4 py-2 mt-4 font-bold text-white bg-gray-500 rounded hover:bg-gray-700">
          Close Modal
        </button>
      </div>
    </div>
  </div>

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


  {{-- End modal 3 --}}


 
