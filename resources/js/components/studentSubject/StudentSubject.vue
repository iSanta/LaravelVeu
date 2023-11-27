<template>
    <div class="w-full sm:w-16/18 md:w-10/12 p-5 bg-white">
        <h1 class="text-xl font-bold ">Students - Subjects</h1>
        <RegistStudentSubject />
    </div>
</template>

<script>
import RegistStudentSubject from './registStudentSubject.vue'


    export default {
        components: {
            RegistStudentSubject
        }
}
</script>