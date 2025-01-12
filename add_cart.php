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
                <h2 class="mt-4 text-center text-2xl text-main font-bold md:text-4xl"> Cart</h2>
            </div>
            
            <div class="   md:-mx-8  bg-white rounded overflow-hidden">
                <div class="py-16 bg-white">  
                    <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                        <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
                            <div class=" md:7/12 lg:w-10/12  space-y-2 bg-white rounded-xl shadow-lg border ">
                                <div class="  flex flex-col lg:flex-row">
                                    <div>
                                        <img  src="/img/suit/suit4.png" alt="" class=" lg:h-[10rem] hover:rotate-1">
                                    </div>
                                    <div class="m-5 flex flex-col space-x-3">
                                        <div class="flex flex-col"> 
                                          <p class="text-xl font-bold">Suite</p>
                                          <div class="flex flex-col">
                                            <div class="flex flex-row space-x-8">
                                              <p>Sixe : M</p>
                                              <p>$150  </p>

                                              <div class="flex gap-4">
                                                  <p>Quantity</p>
                                                  <div class="flex flex-row h-10 w-20 rounded-lg relative bg-transparent mt-1">
                                                    <button data-action="decrement" class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                                      <span class="m-auto text-2xl font-thin">−</span>
                                                    </button>
                                                    <input type="number" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="0"></input>
                                                    <button data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                                      <span class="m-auto text-2xl font-thin">+</span>
                                                    </button>
                                                  </div>
                                              </div>
                                              
                                            </div>
                                            <div class="flex mt-10">
                                              <a href="#" class=" font-bold text-red-400">Remove</a>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="bg-main h-1">
                                <div class="  flex flex-col lg:flex-row">
                                  <div>
                                      <img  src="/img/suit/suit2.png" alt="" class=" lg:h-[10rem] hover:rotate-1">
                                  </div>
                                  <div class="m-5 flex flex-col space-x-3">
                                      <div class="flex flex-col"> 
                                        <p class="text-xl font-bold">Suite</p>
                                        <div class="flex flex-col">
                                          <div class="flex flex-row space-x-8">
                                            <p>Sixe : M</p>
                                            <p>$150  </p>

                                            <div class="flex gap-4">
                                                <p>Quantity</p>
                                                <div class="flex flex-row h-10 w-20 rounded-lg relative bg-transparent mt-1">
                                                  <button data-action="decrement" class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                                    <span class="m-auto text-2xl font-thin">−</span>
                                                  </button>
                                                  <input type="number" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="0"></input>
                                                  <button data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                                    <span class="m-auto text-2xl font-thin">+</span>
                                                  </button>
                                                </div>
                                              
                                            </div>
                                            
                                          </div>
                                          <div class="flex mt-10">
                                            <a href="#" class=" font-bold text-red-400">Remove</a>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                                
                            </div>
                            
                            <div class="md:5/12 lg:w-7/12 flex gap-4 flex-col lg:flex lg:flex-col bg-gray-200 border rounded">
                              <div class="m-5">

                                <h5 class="font-bold text-lg">Order Summary</h5>

                                <div class="flex flex-col gap-2 items-end">
                                  <div class="flex gap-2">
                                    <p>Subtotal : </p>
                                    <p>$300</p>

                                  </div>
                                  <hr class="bg-red-900">
                                  <div class="flex gap-2">
                                    <p>Shiiping</p>
                                    <p>$10</p>

                                  </div>
                                  <div class="flex gap-2">
                                    <p>Tax</p>
                                    <p>$5</p>
                                  </div>

                                  <div class="flex gap-2">
                                    <p>Order Total</p>
                                    <p>$315</p>
                                  </div>
                                </div>
                                
                                <div class="text-white mt-4 p-3 text-center bg-main rounded-lg"> 
                                  <a href="#" class="font-bold">Checkout</a> 
                                </div>
                              </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <?php include './components/footer.php';?>
    <script>
      function decrement(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
          'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        value--;
        target.value = value;
      }
    

<?php include "./partials/footer.php"?>