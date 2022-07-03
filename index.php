<!DOCTYPE html>
<html lang="en">
<head>
   <?php include './components/meta.php';?>
</head>
<body >

    <!-- component -->
    <nav class="bg-main shadow p-5">
        <div class="container mx-auto px-6 py-3 md:flex md:justify-between md:items-center">
            <div class="flex justify-between items-center">
                <div>
                <a class="text-white text-xl font-bold md:text-2xl hover:text-second-main" href="#">
                    <img class="w-auto h-12" src="https://fruitask.com/assets/logo/Fruitask-logo.svg" alt="logo">
                </a>
                </div>
                <!-- Mobile menu button -->
                <div class="flex md:hidden">
                <button type="button" class="text-gray-500 hover:text-second-main focus:outline-none focus:text-gray-600" aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                    <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                    </svg>
                </button>
                </div>
            </div>
        
            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div class="md:flex items-center">


                <?php include './components/nav.php';?>



                <div class="flex justify-center md:block">
                    <a class="relative text-white hover:text-gray-600" href="add_cart.html">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 3H5L5.4 5M7 13H17L21 5H5.4M7 13L5.4 5M7 13L4.70711 15.2929C4.07714 15.9229 4.52331 17 5.41421 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 17.8954 5.89543 17 7 17C8.10457 17 9 17.8954 9 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
            
                        <span class="absolute top-0 left-0 rounded-full bg-indigo-500 text-white p-1 text-xs"></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="py-16 bg-main overflow-hidden">
        <div class="container m-auto px-6 space-y-8 md:px-12 lg:px-20">
            <!-- search -->
            <div class="  overflow-hidden ]">
                <div class="container m-auto px-6 space-y-8 md:px-12 lg:px-20">
                  <form>   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only :text-gray-300">Search</label>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 :text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input type="search" id="default-search" class="focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500  " placeholder="Search for Shoes, Bags, Suit ...." required>
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
                    </div>
                  </form>
                </div>
            </div>
            <!-- search -->

            <div class="   md:-mx-8  bg-white shadow-xl rounded overflow-hidden">
                <div class="bg-second-main p-2">
                    <p class="text-white ml-5 text-xl">Top suit</p>
                </div>
                <div class="py-16 bg-white">  
                    <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                        <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
                            <div class="-mb-6 -mt-10 flex gap-8 flex-col lg:grid lg:grid-cols-5">

                                <div style="position: relative; display:inline-block" class="relative bg-main rounded p-2">
                                    <div class=" flex flex-col items-center">
                                        <div class="relative">
                                        <div class="text-white ribbon bg-rose-400 text-sm whitespace-no-wrap px-4 text-center">50% OFF</div>
                                            <a href="#">
                                            <img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1">
                                        </a> 
                                         </div>
                                         
                                    </div>
                                </div>

                                <div class="relative bg-main rounded p-2   shadow-2xl">
                                <span class="text-white ribbon bg-rose-400 text-sm whitespace-no-wrap px-4 text-center">50% OFF</span>
                                    <div class="relative flex flex-col items-center">
                                    
                                        <div class="">
                                            <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                         </div>
                                    </div>

                                </div>


                                <div class="bg-main rounded p-2   shadow-2xl">
                                    <div class="flex flex-col items-center">
                                        <div class="">
                                            <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                         </div>
                                    </div>
                                </div>
                                <div class="bg-main rounded p-2   shadow-2xl">
                                    <div class="flex flex-col items-center">
                                        <div class="">
                                            <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                         </div>
                                    </div>
                                </div>
                                <div class="bg-main roundedg p-2   shadow-2xl">
                                    <div class="flex flex-col items-center">
                                        <div class="">
                                            <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                         </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fashion -->
            <div class="   md:-mx-8  bg-white rounded overflow-hidden">
                <div class="bg-second-main p-2">
                    <p class="text-white ml-5 text-xl">Fashion | Top Deals</p>
                </div>
                <div class="py-16 bg-white">  
                    <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                        <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
                            <div class="-mb-6 -mt-10 flex gap-8 flex-col lg:grid lg:grid-cols-5">
                                <div class="bg-main rounded p-2   shadow-2xl">
                                    <div class="flex flex-col items-center">
                                        <div class="">
                                            <span class=" inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-second-main rounded-full">-15%</span>
                                            <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                         </div>
                                         
                                    </div>
                                </div>
                                <div class="bg-main rounded p-2   shadow-2xl">
                                    <div class="flex flex-col items-center">
                                        <div class="">
                                            <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                         </div>
                                    </div>
                                    
                                </div>
                                <div class="bg-main rounded p-2   shadow-2xl">
                                    <div class="flex flex-col items-center">
                                        <div class="">
                                            <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                         </div>
                                    </div>
                                </div>
                                <div class="bg-main rounded p-2   shadow-2xl">
                                    <div class="flex flex-col items-center">
                                        <div class="">
                                            <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                         </div>
                                    </div>
                                </div>
                                <div class="bg-main roundedg p-2   shadow-2xl">
                                    <div class="flex flex-col items-center">
                                        <div class="">
                                            <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                         </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="  md:-mx-8  bg-white rounded overflow-hidden">
                <div class="py-16 bg-white">  
                    <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                        <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
                            <div class="-mb-6 -mt-10 space-y-2">
                                <div class="lflex gap-8 flex-col lg:grid lg:grid-cols-10">
                                    <div class="bg-main rounded p-2   shadow-2xl">
                                        <div class="">
                                            <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:"></a> 
                                         </div>
                                         <p>Sneakers</p>
                                    </div>
                                    <div class="bg-main rounded p-2   shadow-2xl">
                                        <div class="flex flex-col items-center">
                                            <div class="">
                                                <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                             </div>
                                            <p>Heals</p>
                                        </div>
                                    </div>
                                    <div class="bg-main rounded p-2   shadow-2xl">
                                        <div class="flex flex-col items-center">
                                            <div class="">
                                                <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                             </div>
                                             <p>Jeans</p>
                                        </div>
                                    </div>
                                    <div class="bg-main rounded p-2   shadow-2xl">
                                        <div class="flex flex-col items-center">
                                            <div class="">
                                                <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                             </div>
                                             <p>Bags</p>
                                        </div>
                                    </div>
                                    <div class="bg-main roundedg p-2   shadow-2xl">
                                        <div class="flex flex-col items-center">
                                            <div class="">
                                                <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                             </div>
                                             <p>Shoes</p>
                                        </div>
                                    </div>
                                    <div class="bg-main rounded p-2   shadow-2xl">
                                        <div class="flex flex-col items-center">
                                            <div class="">
                                                <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                             </div>
                                             <p>Shirts</p>

                                        </div>
                                    </div>
                                    <div class="bg-main roundedg p-2   shadow-2xl">
                                        <div class="flex flex-col items-center">
                                            <div class="">
                                                <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                             </div>
                                             <p>Ties</p>
                                        </div>
                                    </div>
                                    <div class="bg-main roundedg p-2   shadow-2xl">
                                        <div class="flex flex-col items-center">
                                            <div class="">
                                                <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                             </div>
                                             <p>Shoes</p>
                                        </div>
                                    </div>
                                    <div class="bg-main rounded p-2   shadow-2xl ">
                                        <div class="flex flex-col items-center">
                                            <div class="">
                                                <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                             </div>
                                             <p>Shoes</p>
                                        </div>
                                    </div>
                                    <div class="bg-main roundedg p-2   shadow-2xl">
                                        <div class="flex flex-col items-center">
                                            <div class="">
                                                <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                             </div>
                                             <p>Shoes</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="lflex gap-8 flex-col lg:grid lg:grid-cols-10">
                                    <div class="bg-main rounded p-2   shadow-2xl">
                                        <div class="">
                                            <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                         </div>
                                             <p>Shoes</p>
                                    </div>
                                    <div class="bg-main rounded p-2   shadow-2xl">
                                        <div class="flex flex-col items-center">
                                            <div class="">
                                                <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                             </div>
                                             <p>Shoes</p>
                                        </div>
                                        
                                    </div>
                                    <div class="bg-main rounded p-2   shadow-2xl">
                                        <div class="flex flex-col items-center">
                                            <div class="">
                                                <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                             </div>
                                             <p>Shoes</p>
                                        </div>
                                    </div>
                                    <div class="bg-main rounded p-2   shadow-2xl">
                                        <div class="flex flex-col items-center">
                                            <div class="">
                                                <a href="#"><img  src="/img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                             </div>
                                             <p>Shoes</p>
                                        </div>
                                    </div>
                                    <div class="bg-main roundedg p-2   shadow-2xl">
                                        <div class="flex flex-col items-center">
                                            <div class="">
                                                <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                             </div>
                                             <p>Shoes</p>

                                        </div>
                                    </div>
                                    <div class="bg-main rounded p-2   shadow-2xl">
                                        <div class="flex flex-col items-center">
                                            <div class="">
                                                <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                             </div>
                                             <p>Shoes</p>
                                        </div>
                                    </div>
                                    <div class="bg-main roundedg p-2   shadow-2xl">
                                        <div class="flex flex-col items-center">
                                            <div class="">
                                                <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                             </div>
                                             <p>Shoes</p>
                                        </div>
                                    </div>
                                    <div class="bg-main roundedg p-2   shadow-2xl">
                                        <div class="flex flex-col items-center">
                                            <div class="">
                                                <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                             </div>
                                             <p>Shoes</p>
                                        </div>
                                    </div>
                                    <div class="bg-main rounded p-2   shadow-2xl">
                                        <div class="flex flex-col items-center">
                                            <div class="">
                                                <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                             </div>
                                             <p>Shoes</p>
                                        </div>
                                    </div>
                                    <div class="bg-main roundedg p-2   shadow-2xl">
                                        <div class="flex flex-col items-center">
                                            <div class="">
                                                <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                             </div>
                                             <p>Shoes</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fashion -->

            <!-- prodcut category -->
            <div class="   md:-mx-8  bg-white rounded overflow-hidden">
                <div class="bg-second-main p-2">
                    <p class="text-white ml-5 text-xl">We've got all your needs covered </p>
                </div>
                <div class="py-16 bg-white">  
                    <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                        <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
                            <div class="-mb-6 -mt-10 flex gap-4 flex-col lg:grid lg:grid-cols-8">
                                <div class="bg-main rounded p-2   shadow-2xl">
                                    <div class="">
                                        <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                     </div>
                                </div>
                                <div class="bg-main rounded p-2   shadow-2xl">
                                    <div class="flex flex-col items-center">
                                        <div class="">
                                            <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                         </div>
                                    </div>
                                    
                                </div>
                                <div class="bg-main rounded p-2   shadow-2xl">
                                    <div class="flex flex-col items-center">
                                        <div class="">
                                            <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                         </div>
                                    </div>
                                </div>
                                <div class="bg-main rounded p-2   shadow-2xl">
                                    <div class="flex flex-col items-center">
                                        <div class="">
                                            <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                         </div>
                                    </div>
                                </div>
                                <div class="bg-main roundedg p-2   shadow-2xl">
                                    <div class="flex flex-col items-center">
                                        <div class="">
                                            <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                         </div>
                                    </div>
                                </div>
                                <div class="bg-main rounded p-2   shadow-2xl">
                                    <div class="flex flex-col items-center">
                                        <div class="">
                                            <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                         </div>
                                    </div>
                                </div>
                                <div class="bg-main rounded p-2   shadow-2xl">
                                    <div class="flex flex-col items-center">
                                        <div class="">
                                            <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                         </div>
                                    </div>
                                </div>
                                <div class="bg-main rounded p-2   shadow-2xl">
                                    <div class="flex flex-col items-center">
                                        <div class="">
                                           <a href="#"><img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1"></a> 
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- product category -->

        </div>
        
    </div> 
    
<?php include './components/footer.php';?>


     <script>
         const btn = document.querySelector('button.menu-button');
         const menu = document.querySelector(".mobile-menu");
         btn.addEventListener("click", () => {
             menu.classList.toggle("hidden");
         })
     </script>

</body>
</html>