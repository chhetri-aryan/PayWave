@extends('nav')

@section('content')
<div class="container mx-auto p-6">
  <h1 class="text-5xl font-semibold text-indigo-700 mb-4 text-center">Add New Employee</h1>

  <form action="/employees" method="POST" class="max-w-2xl mt-10 mx-auto grid grid-cols-1 gap-4">
    @csrf
    <div class="col-span-full">
      <label for="name" class="sr-only">Full Name</label>
      <input type="text" name="name" id="name" class="w-full p-3 rounded-lg border-2 border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-300" placeholder="Full Name" required>
    </div>

    <div class="bg-white rounded-md p-1">
      <label class="block text-gray-600 mb-2">Gender</label>
      <div class="flex items-center space-x-4">
          <label class="inline-flex items-center">
              <input type="radio" name="gender" value="male"  class="form-radio text-indigo-600">
              <span class="ml-2 text-blue-600 font-semibold">Male</span>
            </label>
          <label class="inline-flex items-center">
              <input type="radio" name="gender" value="female"  class="form-radio text-indigo-600">
              <span class="ml-2 text-pink-600 font-semibold">Female</span>
            </label>
          <label class="inline-flex items-center">
              <input type="radio" name="gender" value="other"  class="form-radio text-indigo-600">
              <span class="ml-2 text-purple-600 font-semibold">Other</span>
            </label>
      </div>
    </div>
  
  
    <div class="col-span-full">
      <label for="email" class="sr-only">Email Address</label>
      <input type="email" name="email" id="email" class="w-full p-3 rounded-lg border-2 border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-300" placeholder="Email Address" required>
    </div>
    
    <div class="col-span-full">
      <label for="phone" class="sr-only">Phone Number</label>
      <input type="text" name="phone" id="phone" class="w-full p-3 rounded-lg border-2 border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-300" placeholder="Phone Number" required>
    </div>
    
    <div class="col-span-full">
      <label for="department" class="sr-only">Department</label>
      <input type="text" name="department" id="department" class="w-full p-3 rounded-lg border-2 border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-300" placeholder="Department" required>
    </div>
    
    <div class="col-span-full">
      <label for="salary" class="sr-only">Salary</label>
      <input type="number" name="salary" id="salary" class="w-full p-3 rounded-lg border-2 border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-300" placeholder="Salary" required>
    </div>
    
    <div class="col-span-full flex justify-between">
      <label for="hire_date" class="sr-only">Hire Date</label>
      <input type="date" name="hire_date" id="hire_date" class="w-full p-3 rounded-lg border-2 border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-300">
    </div>

    <div class="col-span-full flex justify-end">
      <button type="submit" class="bg-indigo-600 text-white px-5 py-2.5 rounded-lg hover:bg-indigo-700 transition-all ease-in-out duration-300">Save Employee</button>
    </div>
  </form>
</div>
@endsection
