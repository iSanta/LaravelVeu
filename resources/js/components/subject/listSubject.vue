<template>
    <div class="pb-10 border-dashed border-b-2 border-orange-500">
        <h2 class="text-xl py-2">Subject list</h2>
        <div class="flex justify-content-center p-2 border-b-2 border-gray-300 my-2">
            <div class="w-full">
                <div class="w-full flex justify-content-center" v-for="subject in subjects" :key="subject.id">
                    <div class="md:w-2/12">{{ subject.name }}</div>
                    <div class="md:w-7/12">{{ subject.description }}</div>
                    <div class="md:w-1/12">{{ subject.credits }}</div>
                    <div class="md:w-1/12">{{ subject.knowledgeArea }}</div>
                    <div class="md:w-1/12"><span v-if="subject.isMandatory == 1">Yes</span> <span v-else>No</span> </div>
                    <div class="ml-auto flex md:w-1/12">
                        <router-link :to="'/editSubject/'+ subject.id">
                            <svg class="h-6 w-6 text-orange-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </router-link>
                        <form v-on:submit.prevent="deleteSubject(subject.id)">
                            <button type="submit"><svg class="h-6 w-6 text-red-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="3 6 5 6 21 6" />  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />  <line x1="10" y1="11" x2="10" y2="17" />  <line x1="14" y1="11" x2="14" y2="17" /></svg></button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</template>

<script>
import axios from 'axios'
    export default {
        data(){
            return{
                subjects:[]
            }
        },
        methods:{
            getSubjects(){
                axios.get('/subject').then(res=> this.subjects = res.data).catch(err => console.log(err))
                
            },
            deleteSubject(id){
                axios.delete('/subject/'+id).then(res =>{
                    this.getSubjects()
                }).catch(err => {
                    console.log(err.response)
            })}
        },
        created(){
            this.getSubjects()
        }
    }
</script>
