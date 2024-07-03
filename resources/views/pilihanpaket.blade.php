<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section class="bg-white dark:bg-gray-900">
                        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Pendaftaran Polindo Internasional</h2>
                                <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Pilih paket dan jurusan yang Anda inginkan.</p>
                            </div>
                            <input type="hidden" id="user_id" value="{{ session('id') }}">
                            <div class="space-y-8 lg:grid lg:grid-cols-2 sm:gap-6 xl:gap-10 lg:space-y-0">
                                <!-- Pricing Card -->
                                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                                    <h3 class="mb-4 text-2xl font-semibold">Freetest</h3>
                                    <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Best option for personal use & for your next project.</p>
                                    <div class="flex justify-center items-baseline my-8">
                                        <span class="mr-2 text-5xl font-extrabold">$29</span>
                                        <span class="text-gray-500 dark:text-gray-400">/month</span>
                                    </div>
                                    <!-- List -->
                                    <ul role="list" class="mb-8 space-y-4 text-left">
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                            <span>Individual configuration</span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                            <span>No setup, or hidden fees</span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                            <span>Team size: <span class="font-semibold">1 developer</span></span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                            <span>Premium support: <span class="font-semibold">6 months</span></span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                            <span>Free updates: <span class="font-semibold">6 months</span></span>
                                        </li>
                                    </ul>
                                    <a href="#" class="daftar-freetest text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-blue-900">Get started</a>
                                </div>
                                <!-- Pricing Card -->
                                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                                    <h3 class="mb-4 text-2xl font-semibold">Reguler</h3>
                                    <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Relevant for multiple users, extended & premium support.</p>
                                    <div class="flex justify-center items-baseline my-8">
                                        <span class="mr-2 text-5xl font-extrabold">$99</span>
                                        <span class="text-gray-500 dark:text-gray-400">/month</span>
                                    </div>
                                    <!-- List -->
                                    <ul role="list" class="mb-8 space-y-4 text-left">
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                            <span>Individual configuration</span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                            <span>No setup, or hidden fees</span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                            <span>Team size: <span class="font-semibold">10 developers</span></span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                            <span>Premium support: <span class="font-semibold">24 months</span></span>
                                        </li>
                                        <li class="flex items-center space-x-3">
                                            <!-- Icon -->
                                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                            <span>Free updates: <span class="font-semibold">24 months</span></span>
                                        </li>
                                    </ul>
                                    <button onclick="createFreeTest()" class="daftar-berbayar text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white dark:focus:ring-blue-900">Daftar</button>
                                </div>
                            </div>
                        </div>
                    </section> 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
 <script>
        function createFreeTest() {
            var user_id = $('#user_id').val();

            $.ajax({
                url: '{{ url('/InsertControl')}}',
                type: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    user_id: user_id
                },
                success: function(response) {
                    if (response.success) {
                        alert(response.success);
                        window.location.href = '/datapeserta'; // Redirect ke halaman lain
                    } else {
                        alert(response.error);
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        }
    </script>
