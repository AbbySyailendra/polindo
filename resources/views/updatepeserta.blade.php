<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Peserta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   <!-- SmartWizard html -->
                        <div id="smartwizard">
                            <ul class="nav">
                                <li class="nav-item">
                                <a class="nav-link" href="#step-1">
                                    <div class="num">1</div>
                                    Data Pribadi
                                </a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#step-2">
                                    <span class="num">2</span>
                                    Data Orang Tua
                                </a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#step-3">
                                    <span class="num">3</span>
                                    Data Sekolah
                                </a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link " href="#step-4">
                                    <span class="num">4</span>
                                    Pemilihan Jurusan
                                </a>
                                </li>
                            </ul>
                        
                            <div class="tab-content">
                                <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                                    <form action="#">
                                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Lengkap" required="">
                                        </div>
                                        <div class="w-full">
                                            <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
                                            <input type="text" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tempat Lahir" required="">
                                        </div>
                                        <div class="w-full">
                                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                                            <input type="date" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                                        </div>
                                        <div>
                                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                                            <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option selected="">Silahkan dipilih</option>
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama</label>
                                            <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option selected="">Silahkan dipilih</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen Protestan">Kristen Protestan</option>
                                                <option value="Kristen Katolik">Kristen Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            </select>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                                            <textarea id="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Alamat Lengkap"></textarea>
                                        </div>
                                    </div>
                                        <div class="flex justify-end">
                                            <button type="button" class="mt-4 px-5 py-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                Next
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                                        <form action="#">
                                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                            <div class="sm:col-span-2">
                                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Ayah Kandung</label>
                                                <input type="text" name="namaayah" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" >
                                            </div>
                                            <div class="sm:col-span-2">
                                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Ibu Kandung</label>
                                                <input type="text" name="namaibu" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" >
                                            </div>
                                            <div class="sm:col-span-2">
                                                <label for="category" class="block text-sm font-medium text-gray-900 dark:text-white">Hubungan</label>
                                                <div class="flex">
                                                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-1/4">
                                                        <option selected="">Pilih Salah Satu Apabila Ada</option>
                                                        <option value="L">Kakak</option>
                                                        <option value="P">Adik</option>
                                                    </select>
                                                    <input type="text" name="saudara1" id="saudara1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-3/4 ml-2" placeholder="Nama Saudara/i">
                                                </div>
                                            </div>
                                            <div class="sm:col-span-2">
                                                <label for="category" class="block text-sm font-medium text-gray-900 dark:text-white">Hubungan</label>
                                                <div class="flex">
                                                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-1/4">
                                                        <option selected="">Pilih Salah Satu Apabila Ada</option>
                                                        <option value="L">Kakak</option>
                                                        <option value="P">Adik</option>
                                                    </select>
                                                    <input type="text" name="saudara2" id="saudara2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-3/4 ml-2" placeholder="Nama Saudara/i">
                                                </div>
                                            </div>
                                            <div class="sm:col-span-2">
                                                <label for="category" class="block text-sm font-medium text-gray-900 dark:text-white">Hubungan</label>
                                                <div class="flex">
                                                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-1/4">
                                                        <option selected="">Pilih Salah Satu Apabila Ada</option>
                                                        <option value="L">Kakak</option>
                                                        <option value="P">Adik</option>
                                                    </select>
                                                    <input type="text" name="saudara3" id="saudara3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-3/4 ml-2" placeholder="Nama Saudara/i">
                                                </div>
                                            </div>
                                            <div class="sm:col-span-2">
                                                <label for="category" class="block text-sm font-medium text-gray-900 dark:text-white">Hubungan</label>
                                                <div class="flex">
                                                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-1/4">
                                                        <option selected="">Pilih Salah Satu Apabila Ada</option>
                                                        <option value="L">Kakak</option>
                                                        <option value="P">Adik</option>
                                                    </select>
                                                    <input type="text" name="saudara4" id="saudara4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-3/4 ml-2" placeholder="Nama Saudara/i">
                                                </div>
                                            </div>
                                            <div class="sm:col-span-2">
                                                <label for="category" class="block text-sm font-medium text-gray-900 dark:text-white">Hubungan</label>
                                                <div class="flex">
                                                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-1/4">
                                                        <option selected="">Pilih Salah Satu Apabila Ada</option>
                                                        <option value="L">Kakak</option>
                                                        <option value="P">Adik</option>
                                                    </select>
                                                    <input type="text" name="saudara5" id="saudara5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-3/4 ml-2" placeholder="Nama Saudara/i">
                                                </div>
                                            </div>

                                        </div>
                                            <div class="flex justify-end">
                                                <button type="button" class="mt-4 px-5 py-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                    Next
                                                </button>
                                            </div>
                                    </form> 
                                </div>
                                <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                                    <form action="#">
                                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Sekolah Asal</label>
                                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Sekolah Asal" required="">
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Sekolah Asal</label>
                                            <textarea id="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Alamat Sekolah Asal"></textarea>
                                        </div>
                                        <div class="w-full">
                                            <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan Sekolah Asal</label>
                                            <input type="text" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                                        </div>
                                        <div class="w-full">
                                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Induk Siswa Sekolah Asal</label>
                                            <input type="text" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                                        </div>
                                        <div class="w-full">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Foto</label>
                                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                        </div>
                                        <div class="w-full">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Rapor Terakhir</label>
                                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                        </div>
                                        <div class="w-full">
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Ijazah</label>
                                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                        </div>
                                        
                                    </div>
                                        <div class="flex justify-end">
                                            <button type="button" class="mt-4 px-5 py-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                Next
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                                    Step content
                                </div>
                            </div>
                        
                            <!-- Include optional progressbar HTML -->
                            <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>
<script>
    $(function() {
    // SmartWizard initialize
    $('#smartwizard').smartWizard();
});
</script>


