<form id="productCreateForm" action="{{ route('user.bobot.ahp.store') }}" method="POST">
    @csrf
  
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
      Tabel Perbandingan Berpasangan
      <button  onclick="resetTabel()" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium inline-block rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 ">Reset Table</button>
        </caption>

            <tr>
                <th scope="col" class="px-6 py-3">
                  Kriteria
                </th>
                <th scope="col" class="px-6 py-3">
                   C1
                </th>
                <th scope="col" class="px-6 py-3">
                   C2
                </th>
                <th scope="col" class="px-6 py-3">
                    C3
                </th>
                <th scope="col" class="px-6 py-3">
                  C4
                </th>
                <th scope="col" class="px-6 py-3">
                  C5
                </th>
                <th scope="col" class="px-6 py-3">
                  C6
                </th>
                <th scope="col" class="px-6 py-3">
                  C7
                </th>
            </tr>
            <datalist id="bobot">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                {{-- <option value="1">1/1</option> --}}
                <option value="0.5">1/2</option>
                <option value="0.33">1/3</option>
                <option value="0.25">1/4</option>
                <option value="0.20">1/5</option>
                <option value="0.17">1/6</option>
                <option value="0.14">1/7</option>
                <option value="0.13">1/8</option>
                <option value="0.11">1/9</option>
                {{-- <option value="1">2/2</option> --}}
                <option value="0.67">2/3</option>
                <option value="0.5">2/4</option>
                <option value="0.4">2/5</option>
                <option value="0.33">2/6</option>
                <option value="0.29">2/7</option>
                <option value="0.25">2/8</option>
                <option value="0.22">2/9</option>
                {{-- <option value="1">3/3</option> --}}
                <option value="0.75">3/4</option>
                <option value="0.6">3/5</option>
                <option value="0.5">3/6</option>
                <option value="0.43">3/7</option>
                <option value="0.38">3/8</option>
                <option value="0.33">3/9</option>
                {{-- <option value="1">4/4</option> --}}
                <option value="0.8">4/5</option>
                <option value="0.67">4/6</option>
                <option value="0.57">4/7</option>
                <option value="0.5">4/8</option>
                <option value="0.44">4/9</option>
                {{-- <option value="1">5/5</option> --}}
                <option value="0.83">5/6</option>
                <option value="0.71">5/7</option>
                <option value="0.63">5/8</option>
                <option value="0.56">5/9</option>
                {{-- <option value="1">6/6</option> --}}
                <option value="0.86">6/7</option>
                <option value="0.75">6/8</option>
                <option value="0.67">6/9</option>
                {{-- <option value="1">7/7</option> --}}
                <option value="0.88">7/8</option>
                <option value="0.78">7/9</option>
                {{-- <option value="1">8/8</option> --}}
                <option value="0.89">8/9</option>
                {{-- <option value="1">9/9</option> --}}
              </datalist>
            
<x-units.content-table/>
</table>
</form>
</div>