<template>
    <div class="w-full sm:w-8/18 md:w-10/12 p-5 bg-white mb-10">
        <h1 class="text-xl font-bold">Students</h1>
        <ul class="w-full flex py-3 border-dashed border-b-2 border-orange-500">
            <li class="cursor-pointer mx-3" v-on:click="showList=true">List all students</li>
            <li class="cursor-pointer mx-3" v-on:click="showList=false">Create a new student</li>
        </ul>
        <div v-if="showList">
            <ListStudent/>
        </div>
        <div v-else>
            <CreateStudent @changeState="doShowList"/>
        </div>
    
    
    </div>
</template>

<script>
import CreateStudent from './createStudent.vue'
import ListStudent from './listStudent.vue'

    export default {
        components:{
            CreateStudent,
            ListStudent
        },
        data(){
            return{
                showList: true
            }
        },
        methods:{
            doShowList(){
                this.showList = true
            }
        },
    }
</script>
