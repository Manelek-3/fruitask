<!DOCTYPE html>
<html lang="en">
<head>
<?php include './components/meta.php';?>
</head>
<body >
    <nav class="bg-main shadow p-5">
        <div class="container mx-auto px-6 py-3 md:flex md:justify-between md:items-center">
            <div class="flex justify-between items-center">
                <div>
                <a class="text-white text-xl font-bold md:text-2xl hover:text-second-main" href="#">Fruitask</a>
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
    
    <div class="py-16  overflow-hidden">
        <div class="container m-auto px-6 space-y-8 md:px-12 lg:px-20">
            <div>
                <h2 class="mt-4 text-center text-2xl text-main font-bold md:text-4xl"> Products Details</h2>
            </div>
            
            <div class="   md:-mx-8  bg-white rounded overflow-hidden">
                <div class="py-16 bg-white">  
                    <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                        <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
                            <div class="md:5/12 lg:w-5/12">
                                <div class="bg-second-main rounded-xl">
                                    <img  src="./img/suit/suit1.png" alt="" class="hover:rotate-1">
                                </div>
                                <div class=" flex flex-row space-x-2 mt-5">
                                    <div class="bg-second-main rounded p-2   shadow-2xl">
                                        <div class="">
                                            <img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1">
                                        </div>
                                    </div>
                                    <div class="bg-second-main roundedg p-2   shadow-2xl">
                                        <div class="">
                                            <img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1">
                                        </div>
                                    </div>
                                    <div class="bg-second-main rounded p-2   shadow-2xl">
                                        <div class="">
                                            <img  src="./img/suit/suit3.png" alt="" class="hover:rotate-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="md:7/12 lg:w-6/12 flex gap-4 flex-col lg:flex lg:flex-col ">
                                <div>
                                    <h5 class="font-bold text-lg">Fruitask Suit</h5>
                                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa veniam dicta beatae eos ex error culpa delectus rem tenetur, architecto quam nesciunt, dolor veritatis nisi minus inventore, rerum at recusandae?
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat nam sapiente nobis ea veritatis error consequatur nisi exercitationem iure laudantium culpa, animi temporibus non! Maxime et quisquam amet. A, deserunt!</p>
                                        <div class="flex mt-2 -ml-0.5">
                                            <svg
                                            class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                            
                                            <svg
                                            class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                            
                                            <svg
                                            class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                            
                                            <svg
                                            class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                            
                                            <svg
                                            class="w-5 h-5 text-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>
                                    <div class="flex items-baseline mt-4 mb-6 pb-6 ">
                                        <div class="space-x-2 flex text-sm">
                                            <label>
                                                <input class="sr-only peer" name="size" type="radio" value="xs" checked />
                                                <div class="w-9 h-9 rounded-lg flex items-center justify-center text-second-main peer-checked:font-semibold peer-checked:bg-main peer-checked:text-white">XS
                                                </div>
                                            </label>
                                            <label>
                                                <input class="sr-only peer" name="size" type="radio" value="s" />
                                                <div class="w-9 h-9 rounded-lg flex items-center justify-center text-second-main peer-checked:font-semibold peer-checked:bg-main peer-checked:text-white">
                                                S
                                                </div>
                                            </label>
                                            <label>
                                                <input class="sr-only peer" name="size" type="radio" value="m" />
                                                <div class="w-9 h-9 rounded-lg flex items-center justify-center text-second-main peer-checked:font-semibold peer-checked:bg-main peer-checked:text-white">
                                                M
                                                </div>
                                            </label>
                                            <label>
                                                <input class="sr-only peer" name="size" type="radio" value="l" />
                                                <div class="w-9 h-9 rounded-lg flex items-center justify-center text-second-main peer-checked:font-semibold peer-checked:bg-main peer-checked:text-white">
                                                L
                                                </div>
                                            </label>
                                            <label>
                                                <input class="sr-only peer" name="size" type="radio" value="xl" />
                                                <div class="w-9 h-9 rounded-lg flex items-center justify-center text-second-main peer-checked:font-semibold peer-checked:bg-main peer-checked:text-white">
                                                XL
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <fieldset>
                                        <legend class="mb-1 text-sm font-medium">Color:</legend>
                            
                                        <div class="flow-root">
                                          <div class="flex flex-wrap -m-0.5">
                                            <label for="color_tt" class="cursor-pointer p-0.5">
                                              <input type="radio" name="color" id="color_tt" class="sr-only peer" />
                            
                                              <span class="inline-block px-3 py-1 text-xs font-medium border rounded-full group peer-checked:bg-blue-600 peer-checked:text-white">
                                                blue
                                              </span>
                                            </label>
                            
                                            <label for="color_fr" class="cursor-pointer p-0.5">
                                              <input type="radio" name="color" id="color_fr" class="sr-only peer" />
                            
                                              <span class="inline-block px-3 py-1 text-xs font-medium border rounded-full group peer-checked:bg-red-600 peer-checked:text-white">
                                                Red
                                              </span>
                                            </label>
                            
                                            <label for="color_cb" class="cursor-pointer p-0.5">
                                              <input type="radio" name="color" id="color_cb" class="sr-only peer" />
                            
                                              <span class="inline-block px-3 py-1 text-xs font-medium border rounded-full group peer-checked:bg-yellow-300 peer-checked:text-white">
                                                Yellow
                                              </span>
                                            </label>
                                          </div>
                                        </div>
                                      </fieldset>
                                </div>
                                <div class="">
                                    <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">$119.99</h2>
                                </div>
                                <div class="text-white mt-4 p-3 h-[3rem] w-[8rem] text-center bg-main rounded-lg"> 
                                    <a href="#" class="font-bold">Add to Cart</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


    </div> 
    <?php include './components/footer.php';?>
</body>
</html>
