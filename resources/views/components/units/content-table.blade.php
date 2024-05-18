@php
$sharedOptions = [
['', '.....'],
[1, '1'],
[2, '2'],
[3, '3'],
[4, '4'],
[5, '5'],
[6, '6'],
[7, '7'],
[8, '8'],
[9, '9'],
[0.5, '1/2'],
[0.33, '1/3'],
[0.25, '1/4'],
[0.20, '1/5'],
[0.17, '1/6'],
[0.14, '1/7'],
[0.13, '1/8'],
[0.11, '1/9']
];
$amSelect = 0.9999;
@endphp
<tr>
    <td class="px-6 py-4">C1</td>
    <td><input type="text" name="c1c1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="1" disabled>
    </td>
  
    <input type="number" name="c1c1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="display: none" value="1">

    <td><select name="c1c2" id="c1c2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> @foreach ($sharedOptions as $item) <option
          value="{{ $item[0] }}" @if ($item[0]==4.0) selected='selected' @endif @if ($item[0]==='' ) disabled
          selected @endif> {{ $item[1] }} </option> @endforeach </select></td>
    <td><select name="c1c3" id="c1c3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> @foreach ($sharedOptions as $item) <option
          value="{{ $item[0] }}" @if ($item[0]==0.5) selected='selected' @endif @if ($item[0]==='' ) disabled
          selected @endif> {{ $item[1] }} </option> @endforeach </select></td>
    <td><select name="c1c4" id="c1c4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> @foreach ($sharedOptions as $item) <option
          value="{{ $item[0] }}" @if ($item[0]==7.0) selected='selected' @endif @if ($item[0]==='' ) disabled
          selected @endif> {{ $item[1] }} </option> @endforeach </select></td>
    <td><select name="c1c5" id="c1c5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> @foreach ($sharedOptions as $item) <option
          value="{{ $item[0] }}" @if ($item[0]==0.5) selected='selected' @endif @if ($item[0]==='' ) disabled
          selected @endif> {{ $item[1] }} </option> @endforeach </select></td>
    <td><select name="c1c6" id="c1c6" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> @foreach ($sharedOptions as $item) <option
          value="{{ $item[0] }}" @if ($item[0]==4.0) selected='selected' @endif @if ($item[0]==='' ) disabled
          selected @endif> {{ $item[1] }} </option> @endforeach </select></td>
    <td><select name="c1c7" id="c1c7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> @foreach ($sharedOptions as $item) <option
          value="{{ $item[0] }}" @if ($item[0]==0.5) selected='selected' @endif @if ($item[0]==='' ) disabled
          selected @endif> {{ $item[1] }} </option> @endforeach </select></td>
  </tr>
   {{-- kebawah adalah C2 dan seterusnya --}}

   <tr>
      <td class="px-6 py-4">C2</td>
      <td><input name="c2c1" id="c2c1" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
      <td><input type="text" name="c2c2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="1" disabled></td> <input type="number"
        name="c2c2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="display: none" value="1">

      <td><select name="c2c3" id="c2c3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> @foreach ($sharedOptions as $item) <option
            value="{{ $item[0] }}" @if ($item[0]==0.17) selected='selected' @endif @if ($item[0]==='' ) disabled
            selected @endif> {{ $item[1] }} </option> @endforeach </select></td>
      <td><select name="c2c4" id="c2c4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> @foreach ($sharedOptions as $item) <option
            value="{{ $item[0] }}" @if ($item[0]==6.0) selected='selected' @endif @if ($item[0]==='' ) disabled
            selected @endif> {{ $item[1] }} </option> @endforeach </select></td>
      <td><select name="c2c5" id="c2c5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> @foreach ($sharedOptions as $item) <option
            value="{{ $item[0] }}" @if ($item[0]==0.25) selected='selected' @endif @if ($item[0]==='' ) disabled
            selected @endif> {{ $item[1] }} </option> @endforeach </select></td>
      <td><select name="c2c6" id="c2c6" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> @foreach ($sharedOptions as $item) <option
            value="{{ $item[0] }}" @if ($item[0]==1.0) selected='selected' @endif @if ($item[0]==='' ) disabled
            selected @endif> {{ $item[1] }} </option> @endforeach </select></td>
      <td><select name="c2c7" id="c2c7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> @foreach ($sharedOptions as $item) <option
            value="{{ $item[0] }}" @if ($item[0]==0.17) selected='selected' @endif @if ($item[0]==='' ) disabled
            selected @endif> {{ $item[1] }} </option> @endforeach </select></td>

    </tr>

    <tr>
      <td class="px-6 py-4">C3</td>
      <td><input name="c3c1" id="c3c1" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
      <td><input name="c3c2" id="c3c2" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
      <td><input type="text" name="c3c3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="1" disabled></td> <input type="number"
        name="c3c3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="display: none" value="1">

      <td><select name="c3c4" id="c3c4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> @foreach ($sharedOptions as $item) <option
            value="{{ $item[0] }}" @if ($item[0]==9.0) selected='selected' @endif @if ($item[0]==='' ) disabled
            selected @endif> {{ $item[1] }} </option> @endforeach </select></td>
      <td><select name="c3c5" id="c3c5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> @foreach ($sharedOptions as $item) <option
            value="{{ $item[0] }}" @if ($item[0]==2.0) selected='selected' @endif @if ($item[0]==='' ) disabled
            selected @endif> {{ $item[1] }} </option> @endforeach </select></td>
      <td><select name="c3c6" id="c3c6" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> @foreach ($sharedOptions as $item) <option
            value="{{ $item[0] }}" @if ($item[0]==6.0) selected='selected' @endif @if ($item[0]==='' ) disabled
            selected @endif> {{ $item[1] }} </option> @endforeach </select></td>
      <td><select name="c3c7" id="c3c7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> @foreach ($sharedOptions as $item) <option
            value="{{ $item[0] }}" @if ($item[0]==1.0) selected='selected' @endif @if ($item[0]==='' ) disabled
            selected @endif> {{ $item[1] }} </option> @endforeach </select></td>
    </tr>

    <tr>
      <td class="px-6 py-4">C4</td>
      <td><input name="c4c1" id="c4c1" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
      <td><input name="c4c2" id="c4c2" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
      <td><input name="c4c3" id="c4c3" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
      <td><input type="text" name="c4c4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="1" disabled></td> <input type="number"
        name="c4c4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="display: none" value="1">

      <td><select name="c4c5" id="c4c5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> @foreach ($sharedOptions as $item) <option
            value="{{ $item[0] }}" @if ($item[0]==0.14) selected='selected' @endif @if ($item[0]==='' ) disabled
            selected @endif> {{ $item[1] }} </option> @endforeach </select></td>
      <td><select name="c4c6" id="c4c6" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> @foreach ($sharedOptions as $item) <option
            value="{{ $item[0] }}" @if ($item[0]==0.25) selected='selected' @endif @if ($item[0]==='' ) disabled
            selected @endif> {{ $item[1] }} </option> @endforeach </select></td>
      <td><select name="c4c7" id="c4c7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> @foreach ($sharedOptions as $item) <option
            value="{{ $item[0] }}" @if ($item[0]==0.11) selected='selected' @endif @if ($item[0]==='' ) disabled
            selected @endif> {{ $item[1] }} </option> @endforeach </select></td>
   
    </tr>

    <tr>
      <td class="px-6 py-4">C5</td>
      <td><input name="c5c1" id="c5c1" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
      <td><input name="c5c2" id="c5c2" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
      <td><input name="c5c3" id="c5c3" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
      <td><input name="c5c4" id="c5c4" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
      <td><input type="text" name="c5c5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="1" disabled></td> <input type="number"
        name="c5c5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="display: none" value="1">

      <td><select name="c5c6" id="c5c6" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> @foreach ($sharedOptions as $item) <option
            value="{{ $item[0] }}" @if ($item[0]==4.0) selected='selected' @endif @if ($item[0]==='' ) disabled
            selected @endif> {{ $item[1] }} </option> @endforeach </select></td>
      <td><select name="c5c7" id="c5c7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> @foreach ($sharedOptions as $item) <option
            value="{{ $item[0] }}" @if ($item[0]==1.0) selected='selected' @endif @if ($item[0]==='' ) disabled
            selected @endif> {{ $item[1] }} </option> @endforeach </select></td>
      

    </tr>

    <tr>
      <td class="px-6 py-4">C6</td>
      <td><input name="c6c1" id="c6c1" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
      <td><input name="c6c2" id="c6c2" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
      <td><input name="c6c3" id="c6c3" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
      <td><input name="c6c4" id="c6c4" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
      <td><input name="c6c5" id="c6c5" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
      <td><input type="text" name="c6c6" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="1" disabled></td> <input type="number"
        name="c6c6" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="display: none" value="1">

      <td><select name="c6c7" id="c6c7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required> @foreach ($sharedOptions as $item) <option
            value="{{ $item[0] }}" @if ($item[0]==0.25) selected='selected' @endif @if ($item[0]==='' ) disabled
            selected @endif> {{ $item[1] }} </option> @endforeach </select></td>
    </tr>

    <tr>
      <td class="px-6 py-4">C7</td>
      <td><input name="c7c1" id="c7c1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
      <td><input name="c7c2" id="c7c2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
      <td><input name="c7c3" id="c7c3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
      <td><input name="c7c4" id="c7c4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
      <td><input name="c7c5" id="c7c5" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
      <td><input name="c7c6" id="c7c6" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled></td>
      <td><input type="text" name="c7c7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="1" disabled></td> <input type="number"
        name="c7c7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="display: none" value="1">

     
    </tr>



    <script>
      // id="c1c2" onchange="isi_kolom_yg_satunya(event)"    <==== masukkan di element <input ....here...>
function roundToTwo(num) {
return +(Math.round(num + "e+2")  + "e-2");
}
function round_if(num) {
if (num >= 9) { return 9 } 
else if (num >= 1) { return num.toFixed(0) }
else { return roundToTwo(num) }
}

var onChangeCoba = function(evt) {
console.log('x');
// or
// console.log(evt.target.value);
};
function isi_kolom_yg_satunya(e)
{
var source = event.target || event.srcElement;
var source_element = document.getElementById(source.id)

var id = source.id
var first_c = 'c' + id.split("c")[1]
var last_c = 'c' + id.split("c")[2]
var full_el_target_id = last_c + first_c
// console.log(full_el_target_id)
// alert(id)

var target_element = document.getElementById(full_el_target_id)
// console.log(source_element.options[source_element.selectedIndex].text)
var source_str = source_element.options[source_element.selectedIndex].text;
var temp = ''
console.log(source_str.includes("/"))
if (source_str.includes("/")) {
temp = source_str.split("/")[1]
} else if (!source_str.includes("1")) {
temp = '1/' + source_str
} else {
temp = source_str
}
target_element.value = temp
}

var elements = document.getElementsByClassName("bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-2/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500");

var myFunction = function() {
var attribute = this.getAttribute("data-myattribute");
alert(attribute);
};

for (var i = 0; i < elements.length; i++) {
elements[i].addEventListener('load', isi_kolom_yg_satunya, false);
elements[i].addEventListener('keyup', isi_kolom_yg_satunya, false);
elements[i].addEventListener('change', isi_kolom_yg_satunya, false);
elements[i].addEventListener('click', isi_kolom_yg_satunya, false);
}

function resetTabel(e) {
for (var i = 0; i < elements.length; i++) {
if (elements[i].id.includes('c'))  {
  elements[i].value = '1'
}
}
}
    </script>