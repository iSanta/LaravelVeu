<template>
    <div class="w-full sm:w-8/18 md:w-10/12 p-5 bg-white">
        <h1 class="text-xl font-bold ">Teachers</h1>
        <ul class="w-full flex py-3 border-dashed border-b-2 border-orange-500">
            <li class="cursor-pointer mx-3" v-on:click="showList=true">List all teachers</li>
            <li class="cursor-pointer mx-3" v-on:click="showList=false">Create a new teacher</li>
        </ul>

        <div v-if="showList">
            <ListTeacher />
        </div>
        <div v-else>
            <CreateTeacher @changeState="doShowList"/>
        </div>
    </div>

</template>

<script>
import CreateTeacher from './createTeacher.vue'
import ListTeacher from './listTeacher.vue'

    export default {
        components: {
            CreateTeacher,
            ListTeacher,
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
