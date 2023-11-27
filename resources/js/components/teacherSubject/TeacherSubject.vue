<template>
    <div class="w-full sm:w-16/18 md:w-8/12 p-5 bg-white">
        <h1 class="text-xl font-bold ">Teachers - Subjects</h1>
            <RegistTeacherSubject />
    </div>
</template>

<script>
import RegistTeacherSubject from './registTeacherSubject.vue';
import ListTeacherSubject from './listTeacherSubject.vue';

    export default {
        components: {
            RegistTeacherSubject,
            ListTeacherSubject,
        }
}
</script>
