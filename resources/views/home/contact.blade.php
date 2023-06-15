<x-layout>
  <x-nav></x-nav>
  <h1 class="my-10 text-3xl text-white lg:text-4xl">Contact us about your custom piece!</h1>
  <form action="https://usebasin.com/f/f09ceef67374" method="POST" enctype="multipart/form-data" id="form" class="w-5/6 max-w-3xl px-8 pt-6 pb-8 mx-auto mb-4 bg-black shadow-md opacity-70 rounded-3xl shadow-black">
    <div class="mb-4">
      <label class="block mb-2 font-bold text-white" for="name">Name</label>
      <input class="w-full px-3 py-2 leading-tight text-black border shadow-md appearance-none rounded-xl focus:outline-none focus:shadow-outline" id="name" type="text" name="name" placeholder="Name" />
    </div>
    <div class="mb-4">
      <label class="block mb-2 font-bold text-white" for="email">Email</label>
      <input class="w-full px-3 py-2 leading-tight text-black border shadow-md appearance-none rounded-xl focus:outline-none focus:shadow-outline" id="email" type="email" name="email" placeholder="Email" required />
    </div>
    <div class="mb-4">
      <label class="block mb-2 font-bold text-white" for="message">Message</label>
      <textarea class="w-full px-3 py-2 leading-tight text-black border shadow-md appearance-none rounded-xl focus:outline-none focus:shadow-outline" name="message" placeholder="Message"></textarea>
    </div>
    <div class="flex items-center justify-center">
      <button class="px-6 py-2 font-semibold text-gray-900 bg-white border border-gray-400 rounded shadow-md shadow-black bg-opacity-70 hover:bg-opacity-70 hover:bg-gray-800 hover:text-gray-200" type="submit">Send</button>
    </div>
  </form>
  <x-footer></x-footer>
</x-layout>