<button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation"
    class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900 "
    type="button">Acuan Skala Perbandingan Kriteria <svg class="w-2.5 h-2.5 ms-3 inline-block" aria-hidden="true"
        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
    </svg>
</button>

<!-- Dropdown menu -->
<div id="dropdownInformation"
    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-1/2 dark:bg-gray-700 dark:divide-gray-600">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead
            class="text-xs  uppercase text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Intensitas kepentingan
                </th>
                <th scope="col" class="px-6 py-3">
                    Definisi
                </th>

            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    1
                </th>
                <td class="px-6 py-4">
                    Kedua kriteria tersebut sama pentingnya.
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    3
                </th>
                <td class="px-6 py-4">
                    Satu kriteria sedikit lebih penting.
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    5
                </th>
                <td class="px-6 py-4">
                    Satu kriteria lebih penting.
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    7
                </th>
                <td class="px-6 py-4">
                    Satu kriteria jauh lebih penting.
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    9
                </th>
                <td class="px-6 py-4">
                    Satu kriteria sangatlah penting.
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    2, 4, 6, 8
                </th>
                <td class="px-6 py-4">
                    Nilai antara dua penilaian yang berdekatan.
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Timbal-Balik
                </th>
                <td class="px-6 py-4">
                    Jika kriteria i ditetapkan dengan salah satu nilai di atas jika dibandingkan dengan kriteria j, maka
                    kriteria j memiliki nilai timbal balik jika dibandingkan dengan kriteria i. (Contoh: i : j = 3 maka
                    j : i = 1 / 3)
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4" colspan="3">
                    <p><span class="font-bold">Catatan </span>cara melakukan perbandingan berpasangan: Perbandingan dibaca dari kriteria baris terhadap kriteria kolom. Misalnya kriteria C1 empat kali lebih penting terhadap kriteria C2 maka diisi nilai 4 pada baris C1 kolom C2 pada Tabel Perbandingan Berpasangan di bawah ini.</p>
                  
                </td>
            </tr>
        </tbody>
    </table>
</div>