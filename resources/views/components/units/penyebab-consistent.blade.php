<button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
type="button">Penyebab Tidak Konsisten nya<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="m1 1 4 4 4-4" />
</svg>
</button>

<!-- Dropdown menu -->
<div id="dropdown"
class="z-10 hidden bg-red-500 divide-y divide-gray-100 rounded-lg shadow w-1/2 dark:bg-red-700 px-4 py-4 text-gray-100 font-semibold ">
<p>Misalnya Anda memasukkan nilai dengan kepentingan sebagai berikut.
- Kriteria C1 : 2 kali lebih penting C2
- Kriteria C1 : 3 kali lebih penting C3
- Kriteria C3 : 9 kali lebih penting C2
Maka pembobotan tidak konsisten karena C3 lebih penting dibanding C2, sedangkan dalam perbandingan C1 dengan C2 dan C3, C2 lebih penting dibanding C3.<span class="font-bold text-gray-800">Ketidak konsistenan tersebut akan menaikkan nilai Consistency Ratio (CR).</span> Hasil bobot perbandingan berpasangan antar kriteria dianggap tidak konsisten apabila nilai CR >= 0,1</p>
</div>