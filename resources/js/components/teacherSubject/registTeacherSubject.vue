<template>
    <div class="pb-10 border-dashed border-b-2 border-orange-500">
        <h2 class="text-xl py-2">Regist new subject for a teacher</h2>
        <form method="POST" v-on:submit.prevent="registRelation()">
            <select placeholder="Select a teacher" v-model="regist.teacherId" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2">
                <option disabled value="" default>Select a teacher</option>
                <option v-for="teacher in teachers" :key="teacher.id" :value="teacher.id">{{ teacher.name }}</option>

            </select>
            <select v-model="regist.subjectId" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2">
                <option disabled value="">Select a subject</option>
                <option v-for="subject in subjects" :key="subject.id" :value="subject.id">{{ subject.name }}</option>


            </select>
            <input type="submit" value="Regist" class="bg-orange-500 text-xl text-white px-3 py-1 m-2">
        </form>
    </div>
</template>

<script>
import axios from 'axios'
    export default {
        data(){
            return{
                regist:{
                    teacherId: '',
                    subjectId: ''
                },
                teachers:[],
                subjects:[]
            }
        },
        methods:{
            registRelation(){
                if(this.regist.teacherId == '' || this.regist.subjectId == ''){
                    alert('All inputs are mandatory')
                    return
                }
                axios.post('/teacher-subject', { 
                    teacher_id: this.regist.teacherId, 
                    subject_id: this.regist.subjectId, 
                }).then(res =>{
                    this.regist={}
                    alert('successful request')

                }).catch(err => {
                    console.log(err.response)
                })
            }
        },
        created(){
            axios.get('/teacher').then(res=> this.teachers = res.data).catch(err => console.log(err))
            axios.get('/subject').then(res=> this.subjects = res.data).catch(err => console.log(err))

        }
    }
</script>
