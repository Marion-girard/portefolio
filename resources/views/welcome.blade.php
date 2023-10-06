
<!DOCTYPE html>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css','resources/js/app.js','resources/css/jquery.fancybox.min.css'])
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">


        
        
    </head>
    <body class="antialiased">
        <header class="">
            <nav class="dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600 my-10" >
                <ul class="flex flex-row list-none  justify-center justify-around">

                    <li class=" no-underline hover:underline bg-white opacity-60 p-2">Moi</li>
                    <li class=" no-underline hover:underline bg-white opacity-60 p-2">Compétence</li>
                    <li class=" no-underline hover:underline bg-white opacity-60 p-2">project</li>
                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Contact</button>
                </ul>
            </nav>
        </header>
        <main>
            <div  class=" fond w-full bg-[url('/resources/image/fond-steampunck3.jpg')] bg-cover bg-center bg-no-repeat bg-no-repeat flex flex-col  bg-fixed">      
                
                <div class=" depart w-screen h-screen flex justify-center items-center ">
                    <div class=" bg-white bg-opacity-60 w-2/5 ">
                        <h1 class="text-center text-lg font-medium  " >  developeuse web </h1>
                        <a href="#cv"> <p  class=" text-center "> Découvrez mon monde </p> </a>
                    </div>
                </div>

                
                <div class="w-screen h-screen">
                    <div  class=" profil   flex justify-center items-center ">
                        <div class="bg-white w-2/5 flex flex-row ">
                            <h2> profil </h2>
                            <div>Image</div>

                            <article> <p>Bienvenue sur mon portefolio, <br>
                                Je suis une développeuse web en formation à la 3W Accadémie.Je suis passionné de web depuis quelque anné.j’ai pu apprendre les base de python et de C++.Ici vous allez pouvoir en apprendre plus sur mes compétence</p>
                            </article>
                        </div>
                        
                    </div>

                    <div
                    id="carouselExampleSlidesOnly"
                    class="relative"
                    data-te-carousel-init
                    data-te-ride="carousel">
                    <!--Carousel items-->
                        <div
                            class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                            <!--First item-->
                            <div
                                class="relative float-left -mr-[100%] w-full transition-transform duration-[200ms] ease-in-out motion-reduce:transition-none"
                                data-te-carousel-item
                                data-te-carousel-active>
                                <img
                                src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp"
                                class="block w-full"
                                alt="Wild Landscape" />
                            </div>
                            <!--Second item-->
                            <div
                                class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[200ms] ease-in-out motion-reduce:transition-none"
                                data-te-carousel-item>
                                <img
                                src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp"
                                class="block w-full"
                                alt="Camera" />
                            </div>
                            <!--Third item-->
                            <div
                                class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[200ms] ease-in-out motion-reduce:transition-none"
                                data-te-carousel-item>
                                <img
                                src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp"
                                class="block w-full"
                                alt="Exotic Fruits" />
                            </div>
                        </div>
                    </div>

                </div>
                <div class="w-1/4 bg-neutral-200 dark:bg-neutral-600">
                    <div
                        class="bg-primary p-0.5 text-center text-xs font-medium leading-none text-primary-100"
                        style="width: 25%">
                        25%
                    </div>
                </div>

                <div class="w-1/4 bg-neutral-200 dark:bg-neutral-600">
                    <div
                        class="bg-primary p-0.5 text-center text-xs font-medium leading-none text-primary-100"
                        style="width: 25%">
                        25%
                    </div>
                </div>

                <div class="w-1/4 bg-neutral-200 dark:bg-neutral-600">
                    <div
                        class="bg-primary p-0.5 text-center text-xs font-medium leading-none text-primary-100"
                        style="width: 25%">
                        25%
                    </div>
                </div>

                <div class="w-1/4 bg-neutral-200 dark:bg-neutral-600">
                    <div
                        class="bg-primary p-0.5 text-center text-xs font-medium leading-none text-primary-100"
                        style="width: 25%">
                        25%
                    </div>
                </div>

                <div class="w-1/4 bg-neutral-200 dark:bg-neutral-600">
                    <div
                        class="bg-primary p-0.5 text-center text-xs font-medium leading-none text-primary-100"
                        style="width: 25%">
                        25%
                    </div>
                </div>

                <div class="w-1/4 bg-neutral-200 dark:bg-neutral-600">
                    <div
                        class="bg-primary p-0.5 text-center text-xs font-medium leading-none text-primary-100"
                        style="width: 25%">
                        25%
                    </div>
                </div>
            </div>    
            <?php  echo'<a href="https://marion-girard.github.io/mariongirard.github.io/"> Mon lien </a>'; ?>
                <div class="controls">
                    <button type="button" class="control " data-filter="all" value="All">All</button>
                    <button type="button" class="control green" data-toggle=".green">HTML</button>
                    <button type="button" class="control  pink" data-toggle=".pink">JS</button>
                    <button type="button" class="control  orange" data-toggle=".orange">PHP</button>
                </div>
        
                <div class="container">

                    <div class=" mix green group relative  h-64 overflow-hidden bg-cover bg-no-repeat">
                
                        <div>
                            <?php  echo'<a href="https://marion-girard.github.io/mariongirard.github.io/" target="_blank"> 
                                <img src="images/frechly_restaurant.png" class="group-hover:brightness-50">   
                        
                                <div class="absolute bottom-0 left-0 right-0 px-4 py-2 overflow-hidden bg-white bg-fixed opacity-100  transition duration-300 ease-in-out group-hover:opacity-100">
                                    <h3 class="text-xl text-black font-bold">
                                        Freshly Restaurant
                                    </h3>
                                </div> 
                                
                                

                                
                                
                                </a>'; ?>
                        
                        </div>
                        <div class= "h-11 bg-white text-xl bg-fixed text-black overflow-hidden">
                            <i class="fa-brands fa-laravel" style="color: #d24d14;"></i> <i class="fa-brands fa-php"></i>                   
                        </div>
                        
                    </div>
            

                    <div class="mix orange h-80">
                        <div class=" group relative  h-64  overflow-hidden bg-cover bg-no-repeat mr-2">  
                            
                            <img src="images/miam.png"  class="group-hover:brightness-50">  
                            <div
                                class=" ">
                                <div class="absolute bottom-0 left-0 right-0 px-2 py-2 overflow-hidden bg-white bg-fixed opacity-0  transition duration-300 ease-in-out group-hover:opacity-100">
                                    <h3 class="text-xl text-black font-bold">
                                        Miam
                                    </h3>
                                </div> 
                            </div>
                        </div>
                        <div class= "h-11 bg-white text-xl bg-fixed text-black overflow-hidden">
                            <i class="fa-brands fa-laravel" style="color: #d24d14;"></i> <i class="fa-brands fa-php"></i>                   
                        </div>
                    </div>
                    <div class="mix orange group relative  h-64 overflow-hidden bg-cover bg-no-repeat">  
                        <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="" type="button">
                            <img src="images/discord.png" class="group-hover:brightness-50">
                        </button>
                        <div class="absolute bottom-0 left-0 right-0 px-4 py-2 overflow-hidden bg-white bg-fixed opacity-0  transition duration-300 ease-in-out group-hover:opacity-100">
                            <h3 class="text-xl text-black font-bold">
                                Discord 2.0</h3>
                    
                        </div> 
                    </div>
                    <div id="modal" tabindex="-1" aria-hidden="true">
                        
                        <button class="button" id="close" data-modal-hide="Modal">Fermer</button>
                    </div>
                    <div class="mix pink group relative h-64 overflow-hidden bg-cover bg-no-repeat mr-2"> 
                        <img src="images/casse_brick.png" class="group-hover:brightness-50">
                    
                        <div class="absolute bottom-0 left-0 right-0 px-4 py-2 overflow-hidden bg-white bg-fixed opacity-0  transition duration-300 ease-in-out group-hover:opacity-100">
                            <h3 class="text-xl text-black font-bold">Casse brique</h3>
                            
                        </div> 
                    </div>
                    
        
                    
                </div> 
        

                <!-- Main modal -->

                <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Terms of Service
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="grid grid-cols-4">
                                
                                <img  class="hover:scale-150"  src="images/discord1.png" />
                                    
                                <img class="hover:scale-150"  src="images/discord2.png" />
                                
                                <img class="hover:scale-110" src="images/discord3.png" />
                                    
                                <img class="hover:scale-110"  src="images/discord4.png" />
                                        
                                <img class="hover:scale-110"  src="images/discord5.png" />
                                        
                                <img class="hover:scale-110"  src="images/discord6.png" />
                                            
                                <img class="hover:scale-110" src="images/discord7.png" />
                            </div> 
                            <!-- Modal footer -->
                            <div class="flex items-center p-2 space-x-6 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button data-modal-hide="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                                <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                            </div>
                        </div>
                    </div>
                </div>-
            
            
        
        </main>
        <footer>

        </footer>
        
    </body>
    <script src="js/modal.js"> </script>
    <script src="js/mixitup.min.js" ></script>
    <script>
            var containerEl = document.querySelector('.container');

            var mixer = mixitup(containerEl, {
            controls: {
                toggleLogic: 'and'
            }
        });
        </script>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <script src="js/fancybox/jquery.fancybox.min.js" ></script>
    <script
            type="text/javascript"
            src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>

    <script type="module" src="js/carousel.js"> </script>
    </html>
    