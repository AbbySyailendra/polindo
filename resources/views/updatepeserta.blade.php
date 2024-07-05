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
                                            <input type="hidden" id="user_id" value="{{ session('id') }}">
                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                                            <input type="text" name="name" id="mhs_nama" value="{{ $query->mhs_nama }}" @if ($query->mhs_nama)
                                                disabled
                                            @endif class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Lengkap" required="">
                                        </div>
                                        <div class="w-full">
                                            <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
                                            <input type="text" name="brand" id="mhs_tmptlahir" value="{{ $query->mhs_tmptlahir }}" @if ($query->mhs_tmptlahir)
                                                disabled
                                            @endif class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tempat Lahir" required="">
                                        </div>
                                        <div class="w-full">
                                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                                            <input type="date" name="price" id="mhs_tgllahir" value="{{ $query->mhs_tgllahir }}" @if ($query->mhs_tgllahir)
                                                disabled
                                            @endif class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" required="">
                                        </div>
                                        <div>
                                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                                            <select id="mhs_gender" @if ($query->mhs_jeniskelamin)
                                                disabled
                                            @endif class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option value="{{ $query->mhs_jeniskelamin }}" selected>
                                                    @if ($query->mhs_jeniskelamin === 'L')
                                                        Laki-laki
                                                    @elseif ($query->mhs_jeniskelamin === 'P')
                                                        Perempuan
                                                    @else
                                                        Silahkan dipilih
                                                    @endif
                                                </option>
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama</label>
                                            <select id="mhs_agama" @if ($query->mhs_agama)
                                                disabled
                                            @endif class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option value="{{ $query->mhs_agama }}" selected>
                                                    @if ($query->mhs_agama <> '')
                                                        {{ $query->mhs_agama }}
                                                    @else
                                                        Silahkan dipilih
                                                    @endif
                                                </option>

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
                                            <textarea id="mhs_alamat" rows="8" @if ($query->mhs_alamat)
                                                disabled
                                            @endif class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Alamat Lengkap">{{ $query->mhs_alamat }}</textarea>
                                        </div>
                                    </div>
                                        <!-- <div class="flex justify-end">
                                            <button type="button" class="mt-4 px-5 py-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                Next
                                            </button>
                                        </div> -->
                                    </form>
                                </div>
                                <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                                        <form action="#">
                                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                            <div class="sm:col-span-2">
                                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Ayah Kandung</label>
                                                <input type="text" name="namaayah" id="mhs_ayah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" >
                                            </div>
                                            <div class="sm:col-span-2">
                                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Ibu Kandung</label>
                                                <input type="text" name="namaibu" id="mhs_ibu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="" >
                                            </div>
                                            <div class="sm:col-span-2">
                                                <label for="category" class="block text-sm font-medium text-gray-900 dark:text-white">Hubungan</label>
                                                <div class="flex">
                                                    <select id="mhs_saudara1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-1/4">
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
                                                    <select id="mhs_saudara2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-1/4">
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
                                                    <select id="mhs_saudara3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-1/4">
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
                                                    <select id="mhs_saudara4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-1/4">
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
                                                    <select id="mhs_saudara5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-1/4">
                                                        <option selected="">Pilih Salah Satu Apabila Ada</option>
                                                        <option value="L">Kakak</option>
                                                        <option value="P">Adik</option>
                                                    </select>
                                                    <input type="text" name="saudara5" id="saudara5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-3/4 ml-2" placeholder="Nama Saudara/i">
                                                </div>
                                            </div>

                                        </div>
                                            <!-- <div class="flex justify-end">
                                                <button type="button" class="mt-4 px-5 py-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                    Next
                                                </button>
                                            </div> -->
                                    </form>
                                </div>
                                <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                                    <form action="#">
                                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Sekolah Asal</label>
                                            <input type="text" name="name" id="mhs_sekolah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Sekolah Asal" required="">
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Sekolah Asal</label>
                                            <textarea id="mhs_addsekolah" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Alamat Sekolah Asal"></textarea>
                                        </div>
                                        <div class="w-full">
                                            <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan Sekolah Asal</label>
                                            <input type="text" name="brand" id="mhs_jursekolah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                                        </div>
                                        <div class="w-full">
                                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Induk Siswa Sekolah Asal</label>
                                            <input type="text" name="price" id="mhs_nis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
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
                                        <!-- <div class="flex justify-end">
                                            <button type="button" class="mt-4 px-5 py-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                Next
                                            </button>
                                        </div> -->
                                    </form>
                                </div>
                                <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                                    <div class="w-full p-4 bg-white sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                                        <div class="flex items-center justify-between mb-4">
                                            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Pilihan Jurusan</h5>
                                    </div>
                                    <div class="flow-root">
                                            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                                <li class="py-3 sm:py-4">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0">
                                                            <input id="mhs_jurusan" type="radio" value="1" name="mhs_jurusan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        </div>
                                                        <div class="flex-1 min-w-0 ms-4">
                                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                                Accounting Computer & TAX
                                                            </p>
                                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                                Program 3 Tahun
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3 sm:py-4">
                                                    <div class="flex items-center ">
                                                        <div class="flex-shrink-0">
                                                            <input id="mhs_jurusan" type="radio" value="2" name="mhs_jurusan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        </div>
                                                        <div class="flex-1 min-w-0 ms-4">
                                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                                Public Relation, Bussiness Adm And Finance
                                                            </p>
                                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                                Program 3 Tahun
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3 sm:py-4">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0">
                                                            <input id="mhs_jurusan" type="radio" value="3" name="mhs_jurusan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        </div>
                                                        <div class="flex-1 min-w-0 ms-4">
                                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                                Accounting & Banking
                                                            </p>
                                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                                Program 3 Tahun
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3 sm:py-4">
                                                    <div class="flex items-center ">
                                                        <div class="flex-shrink-0">
                                                            <input id="mhs_jurusan" type="radio" value="4" name="mhs_jurusan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        </div>
                                                        <div class="flex-1 min-w-0 ms-4">
                                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                                Accounting Comp & Bussiness App
                                                            </p>
                                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                                Program 1 Tahun
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3 sm:py-4">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0">
                                                            <input id="mhs_jurusan" type="radio" value="5" name="mhs_jurusan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        </div>
                                                        <div class="flex-1 min-w-0 ms-4">
                                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                                Business Adm & Communication
                                                            </p>
                                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                                Program 1 Tahun
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3 sm:py-4">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0">
                                                            <input id="mhs_jurusan" type="radio" value="6" name="mhs_jurusan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        </div>
                                                        <div class="flex-1 min-w-0 ms-4">
                                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                                Information System & Network
                                                            </p>
                                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                                Program 1 Tahun
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3 sm:py-4">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0">
                                                            <input id="mhs_jurusan" type="radio" value="7" name="mhs_jurusan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        </div>
                                                        <div class="flex-1 min-w-0 ms-4">
                                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                                Web & Graphic Design
                                                            </p>
                                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                                Program 1 Tahun
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3 sm:py-4">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0">
                                                            <input id="mhs_jurusan" type="radio" value="8" name="mhs_jurusan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        </div>
                                                        <div class="flex-1 min-w-0 ms-4">
                                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                                Business Online & Sosial Media
                                                            </p>
                                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                                Program 1 Tahun
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="py-3 sm:py-4">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0">
                                                            <input id="mhs_jurusan" type="radio" value="9" name="mhs_jurusan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        </div>
                                                        <div class="flex-1 min-w-0 ms-4">
                                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                                Hospitality & Tourism
                                                            </p>
                                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                                Program 1 Tahun
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                    </div>
                                    </div>


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
 $(document).ready(function() {

    function onCancel(){ $('#smartwizard').smartWizard("reset"); }
    $('#smartwizard').smartWizard({
        theme: 'arrows',
        transitionEffect: 'fade',
        toolbarSettings: {
            toolbarButtonPosition: 'end'
        },
        toolbar: {
            showNextButton: true, // show/hide a Next button
            showPreviousButton: true, // show/hide a Previous button
            extraHtml: `<button class="btn sw-btn-end sw-btn">Simpan</button>`
  }
    });

    // Event ketika langkah berubah
    $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
        // Jika langkah ke-4 (index mulai dari 0, jadi langkah 4 adalah stepNumber 3)
        if (stepNumber === 3) {
            //$('.sw-btn-next').text('Save');
            $('.sw-btn-next').hide();
            $('.sw-btn-end').show();
        } else {
            $('.sw-btn-next').text('Next');
            $('.sw-btn-next').show();
            $('.sw-btn-end').hide();
        }
    });

    // Event ketika tombol "Next" atau "Save" diklik
    $(document).on('click', '.sw-btn-end', function() {
        // Tambahkan logika untuk menyimpan data di sini
        //alert('Data telah disimpan!');
        var user_id = $('#user_id').val();
        var mhs_nama = $('#mhs_nama').val();
        var mhs_tmptlahir = $('#mhs_tmptlahir').val();
        var mhs_tgllahir = $('#mhs_tgllahir').val();
        var mhs_gender = $('#mhs_gender').val();
        var mhs_agama = $('#mhs_agama').val();
        var mhs_alamat = $('#mhs_alamat').val();
        var mhs_ayah = $('#mhs_ayah').val();
        var mhs_ibu = $('#mhs_ibu').val();
        var mhs_saudara1 = $('#saudara1').val();
        var mhs_saudara2 = $('#saudara2').val();
        var mhs_saudara3 = $('#saudara3').val();
        var mhs_saudara4 = $('#saudara4').val();
        var mhs_saudara5 = $('#saudara5').val();
        var mhs_sekolah = $('#mhs_sekolah').val();
        var mhs_addsekolah = $('#mhs_addsekolah').val();
        var mhs_jursekolah = $('#mhs_jursekolah').val();
        var mhs_nis = $('#mhs_nis').val();
        var mhs_jurusan = $('#mhs_jurusan').val();
        //alert('User ID: ' + mhs_tmptlahir);
        $.ajax({
                url: '{{ url('/UpdatePesertaControl')}}',
                type: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    user_id: user_id,
                    mhs_nama: mhs_nama,
                    mhs_tmptlahir: mhs_tmptlahir,
                    mhs_tgllahir: mhs_tgllahir,
                    mhs_gender: mhs_gender,
                    mhs_agama: mhs_agama,
                    mhs_alamat: mhs_alamat,
                    mhs_ayah: mhs_ayah,
                    mhs_ibu: mhs_ibu,
                    mhs_saudara1: mhs_saudara1,
                    mhs_saudara2: mhs_saudara2,
                    mhs_saudara3: mhs_saudara3,
                    mhs_saudara4: mhs_saudara4,
                    mhs_saudara5: mhs_saudara5,
                    mhs_sekolah: mhs_sekolah,
                    mhs_addsekolah: mhs_addsekolah,
                    mhs_jursekolah: mhs_jursekolah,
                    mhs_nis: mhs_nis,
                    mhs_jurusan: mhs_jurusan
                },
                success: function(response) {
                    if (response.success) {
                        alert(response.success);
                        window.location.href = '{{ url('/dashboard')}}'; // Redirect ke halaman lain
                    } else {
                        alert(response.error);
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
    });
});

</script>
