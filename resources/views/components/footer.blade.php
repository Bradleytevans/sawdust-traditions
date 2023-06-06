    <!-- Footer -->
    <footer>
        <h2 class="shadow-md shadow-black text-xl text-center bg-gray-200 bg-opacity-80 w-10/12 rounded-xl mx-auto mt-10 mb-8 p-2">
            From our family to yours!
        </h2>
        <div class="flex mb-10 items-top justify-center text-gray-200">
            <img src="{{ asset('images/evansfam.png') }}" alt="" class="rounded-lg  shadow-black shadow-lg mx-5 h-20">
            <div>
                <div class="lg:hidden bg-black bg-opacity-60 shadow-md shadow-black rounded-xl px-2 py-1 text-md">
                    <!-- Content for small screens (less than LG breakpoint) -->
                    <p class="grid grid-col-1">
                        <i class="fa-solid fa-envelope"></i> <a href="mailto: Sawdusttraditions@gmail.com">Email</a>
                    </p>
                    <p class="grid grid-col-1">
                        <i class="fa-brands fa-square-facebook"></i> <a href="">Facebook</a>
                    </p>
                </div>

                <div class="hidden lg:block bg-black bg-opacity-60 shadow-md shadow-black rounded-xl px-2 py-1 text-md">
                    <!-- Content for large screens (LG breakpoint and above) -->
                    <p>
                        <i class="fa-solid fa-envelope"></i> <a href="mailto: Sawdusttraditions@gmail.com">Email</a>
                    </p>
                    <p>
                        <i class="fa-brands fa-square-facebook"></i> <a href="">Facebook</a>
                    </p>
                </div>
            </div>
            <img src="{{ asset('images/sawdust.png') }}" alt="" class="rounded-lg shadow-black shadow-lg mx-5 h-20">
        </div>
    </footer>