<?php include "./partials/head.php"?>

   
    <?php include "./partials/nav.php"?>

    <div class="py-16  overflow-hidden">
        <div class="container m-auto px-6 space-y-8 md:px-12 lg:px-20">
            <div>
                <h2 class="mt-4 text-center text-2xl text-white font-bold md:text-4xl"> Cart</h2>
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
    
      function increment(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
          'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        value++;
        target.value = value;
      }
    
      const decrementButtons = document.querySelectorAll(
        `button[data-action="decrement"]`
      );
    
      const incrementButtons = document.querySelectorAll(
        `button[data-action="increment"]`
      );
    
      decrementButtons.forEach(btn => {
        btn.addEventListener("click", decrement);
      });
    
      incrementButtons.forEach(btn => {
        btn.addEventListener("click", increment);
      });
    </script>

    </body>
</html>