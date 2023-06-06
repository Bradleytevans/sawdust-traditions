<x-layout>
  <x-nav></x-nav>
  <h1 class="text-white text-5xl my-10">Contact us about your custom piece!</h1>
  <form action="https://usebasin.com/f/f09ceef67374" method="POST" enctype="multipart/form-data" id="form" class="bg-black opacity-70 px-8 pt-6 pb-8 mb-4 max-w-3xl mx-auto rounded-3xl shadow-md shadow-black">
    <div class="mb-4">
      <label class="block font-bold mb-2 text-white" for="name">Name</label>
      <input class="shadow-md rounded-xl appearance-none border w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline text-white" id="name" type="text" name="name" placeholder="Name" />
    </div>
    <div class="mb-4">
      <label class="block font-bold mb-2 text-white" for="email">Email</label>
      <input class="shadow-md rounded-xl appearance-none border w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline text-white" id="email" type="email" name="email" placeholder="Email" required />
    </div>
    <div class="mb-4">
      <label class="block font-bold mb-2 text-white" for="message">Message</label>
      <textarea class="shadow-md rounded-xl appearance-none border w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline text-white" name="message" placeholder="Message"></textarea>
    </div>
    <div class="flex items-center justify-center">
      <button class="shadow-md shadow-black bg-opacity-70 bg-white hover:bg-opacity-70 hover:bg-gray-800 hover:text-gray-200 text-gray-900 font-semibold border border-gray-400 rounded px-6 py-2" type="submit">Send</button>
    </div>
  </form>
  <x-footer></x-footer>
</x-layout>