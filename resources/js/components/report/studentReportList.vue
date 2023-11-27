<template>
    <div class="w-full">
        <form method="POST" v-on:submit.prevent="searchRelations()">
            <select placeholder="Select a student" v-model="studentId" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2">
                <option disabled value="">Select a student</option>
                <option v-for="student in students" :key="student.id" :value="student.id">{{ student.name }}</option>
            </select>
            <input type="submit" value="Search" class="bg-orange-500 text-xl text-white px-3 py-1 m-2">
        </form>
        <div class="w-full" v-if="searchResult != null">
            <h2>The student has these subjects registered:</h2>
            <ul>
                <li v-for="subject in searchResult">- {{ subject.student__subjects[0].subjects[0].name }} with the teacher {{ subject.student__subjects[0].teachers[0].name  }}</li>
                <li v-if="searchResult.length <= 0 ">This student doesn't have any registered subject.</li>
            </ul>

        </div>
    </div>
</template>

<script>
import axios from 'axios'
    export default {
        data(){
            return{
                students:[],
                studentId: null,
                searchResult: null
            }
        },
        methods:{
            searchRelations(){
                axios.get(`/relation-student-subject/${this.studentId}`).then((res) => {
                    this.searchResult = res.data
                }).catch(err=> console.log(err))
                
            }
        },
        created(){
            axios.get('/student').then(res=>this.students = res.data).catch(err => console.log(err)) 
        }

    }
</script>
