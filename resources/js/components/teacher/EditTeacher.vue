<template>
    <div class="w-full sm:w-8/18 md:w-8/12 p-5 bg-white mb-10">
        
        <div class="pb-10 border-dashed border-b-2 border-orange-500">
            <h2 class="text-xl pb-2">Edit teacher</h2>
            <form method="POST" v-on:submit.prevent="createteacher()">
                <input type="number" v-model="teacher.dni" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="dniteacher" placeholder="DNI number">
                <input type="text" v-model="teacher.name" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="nameteacher" placeholder="Name">
                <input type="number" v-model="teacher.phone" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="phoneteacher" placeholder="Phone number">
                <input type="email" v-model="teacher.email" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="emailteacher" placeholder="E-Mail">
                <input type="text" v-model="teacher.address" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="addressteacher" placeholder="Address">
                <input type="text" v-model="teacher.city" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="cityteacher" placeholder="City">
                <input type="submit" value="Save" class="bg-orange-500 text-xl text-white px-3 py-1 m-2">
            </form>
        </div>
       
    </div>

</template>

<script>
import axios from 'axios'

    export default {
        data(){
            return{
                id: this.$route.params.id,
                teacher: []
            }
        },
        methods:{
            createteacher(){
                axios.put('/teacher/'+this.id, { 
                    dni: this.teacher.dni, 
                    name: this.teacher.name, 
                    phone: this.teacher.phone, 
                    email: this.teacher.email, 
                    address: this.teacher.address, 
                    city: this.teacher.city, 
                    semester:this.teacher.semester
                }).then(res =>{
                }).catch(err => {
                    console.log(err.response)

                })
                this.teacher=[]
            }
        },
        created(){
            axios.get('/teacher/'+this.id+'/edit').then(res=> this.teacher = res.data).catch(err => console.log(err))
        }
    }
</script>