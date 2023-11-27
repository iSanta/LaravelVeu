<template>
    <div class="w-full sm:w-8/18 md:w-10/12 p-5 bg-white mb-10">
        
        <div class="pb-10 border-dashed border-b-2 border-orange-500">
            <h2 class="text-xl pb-2">Edit student</h2>
            <form method="POST" v-on:submit.prevent="createStudent()">
                <input type="number" v-model="student.dni" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="dniStudent" placeholder="DNI number">
                <input type="text" v-model="student.name" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="nameStudent" placeholder="Name">
                <input type="number" v-model="student.phone" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="phoneStudent" placeholder="Phone number">
                <input type="email" v-model="student.email" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="emailStudent" placeholder="E-Mail">
                <input type="text" v-model="student.address" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="addressStudent" placeholder="Address">
                <input type="text" v-model="student.city" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="cityStudent" placeholder="City">
                <input type="number" v-model="student.semester" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="semesterStudent" placeholder="Semester">
                <input type="submit" value="Save" class="bg-orange-500 text-xl text-white px-3 py-1 m-2">
            </form>
        </div>
       
    </div>

</template>

<script>
import axios from 'axios'
import * as VueRouter from 'vue-router';
    export default {
        data(){
            return{
                id: this.$route.params.id,
                student: []
            }
        },
        methods:{
            createStudent(){
                if(this.student.dni == '' || this.student.name == '' || this.student.phone == '' || this.student.email == '' || this.student.address == '' || this.student.city == '' || this.student.semester == '' ){
                    alert('All inputs are mandatory')
                    return
                }
                axios.put('/student/'+this.id, { 
                    dni: this.student.dni, 
                    name: this.student.name, 
                    phone: this.student.phone, 
                    email: this.student.email, 
                    address: this.student.address, 
                    city: this.student.city, 
                    semester:this.student.semester
                }).then(res =>{
                    alert('successful request')
                    this.$router.push("/students");
                }).catch(err => {
                    console.log(err.response)

                })
                this.student=[]
            }
        },
        created(){
            axios.get('/student/'+this.id+'/edit').then(res=> this.student = res.data).catch(err => console.log(err))
        }
    }
</script>