@extends('layout.theme')
@section('content')
<div class="flex flex-col justify-normal min-h-screen mt-16">
    <div class=" overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="overflow-hidden">
          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead>
              <tr>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Nama Pembeli</th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Tanggal Pembelian</th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Alamat</th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Nama Barang</th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Jumlah Barang</th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Total</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-center font-medium text-gray-800 dark:text-gray-200">Abdul</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-800 dark:text-gray-200">23-agustus-2023</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-800 dark:text-gray-200">JATIBARANG, KAB. INDRAMAYU, JAWA BARAT, ID, 45252</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-800 dark:text-gray-200">List Plafon Polos</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-800 dark:text-gray-200">25</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-800 dark:text-gray-200">2000000</td>
                <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                 </td>
              </tr>
  
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-center font-medium text-gray-800 dark:text-gray-200">Ahmad</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-800 dark:text-gray-200">21-maret-2023</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm  text-center text-gray-800 dark:text-gray-200">SINDANG, KAB. INDRAMAYU, JAWA BARAT, ID, 45252</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-800 dark:text-gray-200">List Plafon Mata Sapi</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-800 dark:text-gray-200">15</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-800 dark:text-gray-200">1500000</td>
                <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
              </tr>
  
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-center font-medium text-gray-800 dark:text-gray-200">Jamal</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-800 dark:text-gray-200">31-maret-2023</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-800 dark:text-gray-200">LOHBENER, KAB. INDRAMAYU, JAWA BARAT, ID, 45252</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-800 dark:text-gray-200">List Plafon Piano</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-800 dark:text-gray-200">10</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-800 dark:text-gray-200">2500000</td>
                <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @endsection