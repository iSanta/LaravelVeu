<template>
    <div class="w-full sm:w-8/18 md:w-8/12 p-5 bg-white">
        <h1 class="text-xl font-bold ">Subjects</h1>
        <ul class="w-full flex py-3 border-dashed border-b-2 border-orange-500">
            <li class="cursor-pointer mx-3" v-on:click="showList=true">List all subjects</li>
            <li class="cursor-pointer mx-3" v-on:click="showList=false">Create a new subject</li>
        </ul>

        <div v-if="showList">
            <ListSubject />
        </div>
        <div v-else>
            <CreateSubject @changeState="doShowList"/>
        </div>
    </div>

</template>

<script>
import CreateSubject from './createSubject.vue'
import ListSubject from './listSubject.vue'

    export default {
        components: {
            CreateSubject,
            ListSubject,
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
