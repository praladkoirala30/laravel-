<x-layout>
    @push('css')
        <style>
            h2{
                color:red;
            }
        </style>
    @endpush
<section>
    <div class="container mx-auto">
        <h1 class="text-green-500 text-4xl text-center ">
            Create course
        </h1>
<form action="/save-record" method="post" class="space-y-6">
    @csrf
    {{-- <label for="name">Enter your name</label>
    <input type="text" name="name" id="name" value="pralad" class="border px-1 py-2 w-full focus:border-green-700 focus:border-2  focus:outline-none rounded-md">

     <label for="age">Enter your age </label>
    <input type="number" name="age" id="age" class="border px-1 py-2 w-full  focus:border-green-700 focus:border-2  focus:outline-none rounded-md">

       <label for="age">DOB </label>
    <input type="date" name="Dob" id="dob" class="border px-1 py-2 w-full  focus:border-green-700 focus:border-2  focus:outline-none rounded-md">

    <label for="course">Course</label>
    <select name="course" id="course" class="border px-1 py-2 w-full  focus:border-green-700 focus:border-2  focus:outline-none rounded-md">
<option value="laravel">laravel</option>
<option value="react">React</option>
<option value="node">Node</option>
    </select>

    <button type="submit" class="bg-[green] px-5 py-2 rounded-md text-white"> Save Record </button> --}}
    <div class=" grid grid-cols-2 mt-5 gap-4">
        <div>
            <label for="course_name"> course name</label>
            <input type="text" name="course_name" id="course_name" class="border px-1 py-2 w-full  focus:border-green-700 focus:border-2  focus:outline-none rounded-md">
        </div>
        <div>
            <label for="course_price"> course price</label>
            <input type="text" name="course_price" id="course_price" class="border px-1 py-2 w-full  focus:border-green-700 focus:border-2  focus:outline-none rounded-md">
        </div>
        <div class="col-span-2">
            <label for="description"> course description</label>
            <textarea name="description" id="description"  rows="4" class="border px-1 py-2 w-full  focus:border-green-700 focus:border-2  focus:outline-none rounded-md"></textarea>
        </div>
    </div>
    <button type="submit" class="bg-[green] px-5 py-2 rounded-md text-white"> Save Record </button>
</form>
    </div>
</section>
</x-layout>
