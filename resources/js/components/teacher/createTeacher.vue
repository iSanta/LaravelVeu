<template>
    
    <div class="pb-10 border-dashed border-b-2 border-orange-500">
        <h2 class="text-xl py-2">Create a new teacher</h2>
        <form method="POST" v-on:submit.prevent="createTeacher()">
            <input type="number" v-model="teacher.dni" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="dniTeacher" placeholder="DNI number">
            <input type="text" v-model="teacher.name" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="nameTeacher" placeholder="Name">
            <input type="number" v-model="teacher.phone" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="phoneTeacher" placeholder="Phone number">
            <input type="email" v-model="teacher.email" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="emailTeacher" placeholder="E-Mail">
            <input type="text" v-model="teacher.address" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="addressTeacher" placeholder="Address">
            <input type="text" v-model="teacher.city" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="cityTeacher" placeholder="City">
            <input type="submit" value="Create" class="bg-orange-500 text-xl text-white px-3 py-1 m-2">
        </form>
    </div>
</template>

<script>
import axios from 'axios'
    export default {
        data(){
            return{
                teacher:{
                    dni:'',
                    name:'',
                    phone:'',
                    email:'',
                    address:'',
                    city:''
                }
            }
        },
        methods:{
            createTeacher(){
                if(this.teacher.dni == '' || this.teacher.name == '' || this.teacher.phone == '' || this.teacher.email == '' || this.teacher.address == '' || this.teacher.city == ''){
                    alert('All inputs are mandatory')
                    return
                }
                axios.post('/teacher', { 
                    dni: this.teacher.dni, 
                    name: this.teacher.name, 
                    phone: this.teacher.phone, 
                    email: this.teacher.email, 
                    address: this.teacher.address, 
                    city: this.teacher.city, 
                }).then(res =>{
                    this.teacher={}
                    alert('successful request')
                    this.$emit('changeState', true);
                }).catch(err => {
                    console.log(err.response)
                })
            }
        }
    }
</script>
