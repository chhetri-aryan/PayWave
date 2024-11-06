@extends('nav')
@php
//random color generator for profile name
$colors = ['red', 'yellow', 'green', 'blue', 'indigo', 'purple', 'pink'];
function random_color($colors) {
    return $colors[array_rand($colors)];
}
@endphp

@section('content')
<div class="container mx-auto overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200 mx-auto bg-white">
        <thead>
            <tr>
                <th class="px-6 py-3 text-left text-lg font-medium text-gray-900 uppercase tracking-wider">Employee</th>
                <th class="px-6 py-3 text-left text-lg font-medium text-gray-900 uppercase tracking-wider">Email</th>
                <th class="px-6 py-3 text-left text-lg font-medium text-gray-900 uppercase tracking-wider">Phone</th>
                <th class="px-6 py-3 text-left text-lg font-medium text-gray-900 uppercase tracking-wider">Department</th>
                <th class="px-6 py-3 text-left text-lg font-medium text-gray-900 uppercase tracking-wider">Salary</th>
                <th class="px-6 py-3 text-left text-lg font-medium text-gray-900 uppercase tracking-wider">DOJ</th>
                <th class="px-6 py-3 text-left text-lg font-medium text-gray-900 uppercase tracking-wider"></th>
            </tr>
        </thead>
        <tbody class="bg-indigo-200 divide-y divide-gray-200">
            @foreach ($employees as $employee)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center">
                                    <span class="text-indigo-700 font-medium text-sm">
                                        {{ strtoupper(substr($employee['name'], 0, 1) . substr(strstr($employee['name'], ' '), 1, 1)) }}
                                    </span>
                                </div>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">{{ $employee['name'] }}</div>
                                <div class="text-sm text-gray-500">{{ $employee['position'] }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $employee['email'] }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $employee['phone'] }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $employee['department'] }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">${{ number_format($employee['salary'], 2) }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{$employee["hire_date"]}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="/employees/{{$employee->id}}/edit" class="text-gray-400 hover:text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                            </svg>

                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop
