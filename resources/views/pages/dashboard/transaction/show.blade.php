<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Transaction &raquo; #{{ $transaction->id }} {{ $transaction->name }}
        </h2>
    </x-slot>

    <x-slot name="script">
        <script>
            var datatable = $('#crudTable').DataTable({
                ajax: {
                    url: '{!! url()->current() !!}'
                },
                columns: [{
                        data: 'id',
                        name: 'id',
                        width: '5%'
                    },
                    {
                        data: 'product.name',
                        name: 'product.name'
                    },
                    {
                        data: 'product.price',
                        name: 'product.price'
                    },
                ]
            })
        </script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden sm-rounded-md">
                <h2 class="font-semibold text-lg text-gray-800 leading-tight mb-5 ">
                    Transaction Details
                </h2>

                <div class="bg-white overflow-hidden shadow sm:rounded-lg mb-10">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <table class="table-auto w-full">
                            <tbody>
                                <tr>
                                    <th class="border px-6 py-4 text-center">Name</th>
                                    <th class="border px-6 py-4">{{ $transaction->name }}</th>
                                </tr>
                                <tr>
                                    <th class="border px-6 py-4 text-center">Email</th>
                                    <th class="border px-6 py-4">{{ $transaction->email }}</th>
                                </tr>
                                <tr>
                                    <th class="border px-6 py-4 text-center">Addres</th>
                                    <th class="border px-6 py-4">{{ $transaction->address }}</th>
                                </tr>
                                <tr>
                                    <th class="border px-6 py-4 text-center">Phone</th>
                                    <th class="border px-6 py-4">{{ $transaction->phone }}</th>
                                </tr>
                                <tr>
                                    <th class="border px-6 py-4 text-center">Courier</th>
                                    <th class="border px-6 py-4">{{ $transaction->courier }}</th>
                                </tr>
                                <tr>
                                    <th class="border px-6 py-4 text-center">Payment</th>
                                    <th class="border px-6 py-4">{{ $transaction->payment }}</th>
                                </tr>
                                <tr>
                                    <th class="border px-6 py-4 text-center">Payment URL</th>
                                    <th class="border px-6 py-4">{{ $transaction->payment_url }}</th>
                                </tr>
                                <tr>
                                    <th class="border px-6 py-4 text-center">Total Price</th>
                                    <th class="border px-6 py-4">{{ number_format($transaction->total_price) }}</th>
                                </tr>
                                <tr>
                                    <th class="border px-6 py-4 text-center">Status</th>
                                    <th class="border px-6 py-4">{{ $transaction->status }}</th>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <h2 class="font-semibold text-lg text-gray-800 leading-tight mb-5 ">
                    Transaction Items
                </h2>
                <div class="px-4 py-5 bg-white sm:p-6">
                    <table id="crudTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>PRODUCT</th>
                                <th>HARGA</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
