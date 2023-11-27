@extends("layouts.app")
@section("content")
<nav class="flex p-4 bg-orange-500">
    <router-link to="/" class="text-xl text-white mx-3 p-2" active-class="font-bold" exact>Reports</router-link>
    <router-link to="/students" class="text-xl text-white mx-3 p-2" active-class="font-bold" exact>Students</router-link>
    <router-link to="/teachers" class="text-xl text-white mx-3 p-2" active-class="font-bold" exact>Teachers</router-link>
    <router-link to="/subjects" class="text-xl text-white mx-3 p-2" active-class="font-bold" exact>Subjects</router-link>
    <router-link to="/teachers-subjects" class="text-xl text-white mx-3 p-2" active-class="font-bold" exact>Subjects for teachers</router-link>
    <router-link to="/students-subjects" class="text-xl text-white mx-3 p-2" active-class="font-bold" exact>Subjects for students</router-link>
</nav>
<div class="flex justify-center mt-8">
   <router-view></router-view>
</div>
@endsection
