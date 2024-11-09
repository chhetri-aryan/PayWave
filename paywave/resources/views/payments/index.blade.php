@extends('nav')
@php $total = $payments->sum('amount'); @endphp

@section('content')  
<div class="container mx-auto mt-8 p-4">
    <h2 class="text-5xl text-indigo-200 font-bold mb-6">Payments:</h2>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
            <thead>
            <tr class="bg-indigo-500 text-white text-center">
                <th class="py-3 px-6 font-semibold uppercase">ID</th>
                <th class="py-3 px-6 font-semibold uppercase">Amount</th>
                <th class="py-3 px-6 font-semibold uppercase">Date</th>
                <th class="py-3 px-6 font-semibold uppercase">Status</th>
            </tr>
            </thead>
            <tbody class="text-gray-700 text-center">
            @foreach($payments as $payment)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6">{{ $payment->id }}</td>
                <td class="py-3 px-6">${{ number_format($payment->amount, 2) }}</td>
                <td class="py-3 px-6">{{ $payment->created_at->format('Y-m-d') }}</td>
                <td class="py-3 px-6">
                    <span class="px-3 py-1 inline-flex text-sm font-medium rounded-full 
                    {{ $payment->status === 'success' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                    {{ ucfirst($payment->status) }}
                    </span>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="flex justify-end mt-4">
            <h2 class="text-2xl font-bold mb-6 text-white">Total: ${{ $total }}</h2>
        </div>
        
    </div>
</div>

@endsection