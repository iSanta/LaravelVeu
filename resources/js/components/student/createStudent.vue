<template>
    
        <div class="pb-10 border-dashed border-b-2 border-orange-500">
            <h2 class="text-xl py-2">Create a new student</h2>
            <form method="POST" v-on:submit.prevent="createStudent()">
                <input type="number" v-model="this.student.dni" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="dniStudent" placeholder="DNI number">
                <input type="text" v-model="this.student.name" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="nameStudent" placeholder="Name">
                <input type="number" v-model="this.student.phone" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="phoneStudent" placeholder="Phone number">
                <input type="email" v-model="this.student.email" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="emailStudent" placeholder="E-Mail">
                <input type="text" v-model="this.student.address" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="addressStudent" placeholder="Address">
                <input type="text" v-model="this.student.city" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="cityStudent" placeholder="City">
                <input type="number" v-model="this.student.semester" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="semesterStudent" placeholder="Semester">
                <input type="submit" value="Create" class="bg-orange-500 text-xl text-white px-3 py-1 m-2">
            </form>
        </div>
</template>

<script>
import axios from 'axios'

    export default {
        data(){
            return{
                student:{
                    dni:'',
                    name:'',
                    phone:'',
                    email:'',
                    address:'',
                    city:'',
                    semester: ''
                }
            }
        },
        methods:{
            createStudent(){
                if(this.student.dni == '' || this.student.name == '' || this.student.phone == '' || this.student.email == '' || this.student.address == '' || this.student.city == '' || this.student.semester == '' ){
                    alert('All inputs are mandatory')
                    return
                }

                axios.post('/student', { 
                    dni: this.student.dni, 
                    name: this.student.name, 
                    phone: this.student.phone, 
                    email: this.student.email, 
                    address: this.student.address, 
                    city: this.student.city, 
                    semester:this.student.semester 
                }).then(res =>{
                    this.student ={}
                    alert('successful request')
                    this.$emit('changeState', true);
                }).catch(err => {
                    console.log(err.response)

                })
                
            }
        }
    }
</script>
