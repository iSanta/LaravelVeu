<template>
    <div class="w-full">
        <form method="POST" v-on:submit.prevent="searchRelations()">
            <select placeholder="Select a teacher" v-model="teacherId" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2">
                <option disabled value="">Select a teacher</option>
                <option v-for="teacher in teachers" :key="teacher.id" :value="teacher.id">{{ teacher.name }}</option>
            </select>
            <input type="submit" value="Search" class="bg-orange-500 text-xl text-white px-3 py-1 m-2">
        </form>
        <div class="w-full" v-if="searchResult != null">
            <h2>The teacher {{ searchResult.name }} has these subjects registered:</h2>
            <ul>
                <li v-for="subject in searchResult.subjects">- {{ subject.name }}</li>
                <li v-if="searchResult.subjects.length <= 0 ">This teacher doesn't have any registered subject.</li>
            </ul>

        </div>
    </div>
</template>

<script>
import axios from 'axios'
    export default {
        data(){
            return{
                teachers:[],
                teacherId: null,
                searchResult: null
            }
        },
        methods:{
            searchRelations(){
                axios.get(`/relation-teacher-subject/${this.teacherId}`).then((res) => {
                    this.searchResult = res.data
                }).catch(err=> console.log(err))
                
            }
        },
        created(){
            axios.get('/teacher').then(res=>this.teachers = res.data).catch(err => console.log(err)) 
        }

    }
</script>
