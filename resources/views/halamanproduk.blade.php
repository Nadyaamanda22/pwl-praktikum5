@extends('layout.main')
@section('content')
<div class="w-full px-6 py-6 mx-auto">
  <h1 class="text-2xl font-bold mb-8">Products</h1>
  <div class="flex flex-wrap -mx-3">
    <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-6">
      <div class="bg-white rounded-lg shadow-lg">
        <img src="https://erigostore.co.id/cdn/shop/products/37cf4082125dacbdc3ec8d14e15a00c4.jpg?v=1647952377" alt="Erigo T-Shirt Project Summer Black" class="w-full h-auto rounded-t-lg">
        <div class="px-6 py-4">
          <h2 class="font-bold text-xl mb-2">Erigo</h2>
          <p class="text-gray-700 text-base">Erigo T-Shirt Project Summer Black</p>
          <p class="text-gray-700 text-base">Rp 65.000</p>
        </div>
      </div>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-6">
      <div class="bg-white rounded-lg shadow-lg">
        <img src="https://erigostore.co.id/cdn/shop/files/id-11134201-7r98u-ls2jrk4b3juf28_597e9c60-5e09-41ff-8697-8252cd6a5a9a.jpg?v=1709114011" alt="Erigo T-Shirt Oversize Kyzer Black Unisex" class="w-full h-auto rounded-t-lg">
        <div class="px-6 py-4">
          <h2 class="font-bold text-xl mb-2">Erigo</h2>
          <p class="text-gray-700 text-base">Erigo T-Shirt Oversize Kyzer Black Unisex</p>
          <p class="text-gray-700 text-base">Rp 99.0000</p>
        </div>
      </div>
    </div>
  </div>
  <footer class="pt-4">
    <div class="w-full px-6 mx-auto">
      <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
        <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
          <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
            © <script>document.write(new Date().getFullYear() + ",");</script> made with <i class="fa fa-heart"></i> by <a href="https://www.creative-tim.com" class="font-semibold text-slate-700" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
        <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
          <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</div>
@endsection