<template>
    <div class="pb-10 border-dashed border-b-2 border-orange-500">
        <h2 class="text-xl py-2">Regist new subjects for a student</h2>
        <h3 class="text-x py-2">Each student must have at least 7 credits, total credits: {{ this.totalCredits }}</h3>
        <form method="POST" v-on:submit.prevent="registRelation()">
            <h2 class="text-l pt-2">Select a student.</h2>
            <select placeholder="Select a student" v-model="idStudent" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2">
                <option disabled value="" default>Select a student</option>
                <option v-for="student in students" :key="student.id" :value="student.id">{{ student.name }}</option>

            </select>
            <span>
                Add or remove subjects
                <div class="flex">
                    <svg v-on:click="decreaseSubjec()" class="cursor-pointer h-8 w-8 text-red-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <line x1="8" y1="12" x2="16" y2="12" /></svg>
                    <svg v-on:click="increaseSubject()" class="cursor-pointer h-8 w-8 text-green-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <line x1="12" y1="8" x2="12" y2="16" />  <line x1="8" y1="12" x2="16" y2="12" /></svg>    
                </div>
            </span>
            <h2 class="text-l pt-2">Select a subject.</h2>
            <select @change="switchSelect($event, index)" v-for="index in iter" :key="index" v-model="regist[index]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2">
                <option disabled value="">Select a subject</option>
                <option v-for="subject in subjects" :key="subject.idSubject" :value="[subject.idPivot,subject.credits,subject.idSubject]" >{{ subject.nameSubject }} - {{ subject.nameTeacher }} - {{ subject.credits }} credits</option>
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
                regist:[],
                students:[],
                subjects:[],
                iter:1,
                allCredits: [],
                totalCredits:0,
                idStudent: null
            }
        },
        methods:{
            registRelation(){
                if(this.idStudent == null || this.idStudent == ''){
                    alert('All inputs are mandatory')
                    return
                }

                let allIdSubject = []
                let allIdPivot = []
                this.regist.forEach(element => {
                    allIdSubject.push(element[2])
                    allIdPivot.push(element[0])
                });
                let findDuplicates = arr => arr.filter((item, index) => arr.indexOf(item) !== index)

                if(findDuplicates(allIdSubject).length != 0) {
                    alert('You have duplicates subjects in this regist.')
                    return
                }

                if(this.totalCredits < 7) {
                    alert('Each student must have at least 7 credits')
                    return
                }


                let data = []
                allIdPivot.forEach((element) => {
                    data.push({ 
                        student_id: this.idStudent, 
                        subject_id: element, 
                    })
                });

                
                axios.post('/student-subject', {data: data}).then(res =>{
                    this.regist={}
                    this.totalCredits = 0
                    this.iter = 1
                    alert('successful request')
                    
                }).catch(err => {
                    console.log(err.response)
                })
            },
            increaseSubject(){
                this.iter++
            },
            decreaseSubjec(){
                if (this.iter>1) {
                    this.allCredits.splice(this.iter, 1)
                    this.regist.splice(this.iter, 1)
                    this.totalCredits =  this.allCredits.reduce((a, b) => a + b, 0);
                    this.iter--
                    
                }
            },
            switchSelect(e,index){
                let values = e.target.value.split(',')
                this.allCredits[index] = parseInt(values[1])
                this.totalCredits =  this.allCredits.reduce((a, b) => a + b, 0);

            }
        },
        created(){
            axios.get('/student').then(res=> this.students = res.data).catch(err => console.log(err))
            axios.get('/relation-subject-teacher').then((res)=> {
                let tempArr = []
                res.data.forEach(i => {
                    i.teachers.forEach(j => {
                        tempArr.push({
                            idSubject: i.id,
                            idPivot: j.pivot.id,
                            nameSubject: i.name,
                            nameTeacher: j.name,
                            credits: i.credits
                        })
                    });
                });
                this.subjects = tempArr;
            }).catch(err => console.log(err))

        }
    }
</script>
