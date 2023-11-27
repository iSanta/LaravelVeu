<template>
    <div class="w-full sm:w-8/18 md:w-10/12 p-5 bg-white">
        <h1 class="text-xl font-bold">List of reports</h1>
        <div class="w-full  py-3 border-dashed border-t-2 border-orange-500">
            <div class="w-full">Student</div>
            <studentList/>
        </div>
        <div class="w-full  py-3 border-dashed border-t-2 border-orange-500">
            <div class="w-full">Teacher</div>
            <teacherList/>
        </div>
    </div>
</template>

<script>
import studentList from './studentReportList.vue'
import teacherList from './teacherReportList.vue'

    export default {
        components:{
            studentList,
            teacherList
        }
    }
</script>
