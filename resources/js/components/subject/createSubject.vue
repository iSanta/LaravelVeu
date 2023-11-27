<template>
    <div class="pb-10 border-dashed border-b-2 border-orange-500">
        <h2 class="text-xl py-2">Create a new subject</h2>
        <form method="POST" v-on:submit.prevent="createSubject()">
            <input type="text" v-model="subject.name" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="nameSubject" placeholder="Name">
            <input type="text" v-model="subject.description" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="descriptionSubject" placeholder="Description">
            <input type="number" v-model="subject.credits" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="creditsSubject" placeholder="Credits">
            <input type="text" v-model="subject.knowledgeArea" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="knowledgeAreaSubject" placeholder="Knowledge Area">
            <label class="text-xl p-2 mr-2 w-full" for="isMandatorySubject">Is mandatory?</label>
            <input type="checkbox" v-model="subject.isMandatory" class="outline-none mx-3" name="isMandatorySubject" placeholder="Is mandatory?"><br>
            <input type="submit" value="Create" class="bg-orange-500 text-xl text-white px-3 py-1 m-2">
        </form>
    </div>
</template>

<script>
import axios from 'axios'
    export default {
        data(){
            return{
                subject:{
                    name:'',
                    description:'',
                    credits:'',
                    knowledgeArea:'',
                    isMandatory:''
                }
            }
        },
        methods:{
            createSubject(){
                if(this.subject.name == '' || this.subject.description == '' || this.subject.credits == '' || this.subject.knowledgeArea == ''){
                    alert('All inputs are mandatory')
                    return
                }
                axios.post('/subject', { 
                    name: this.subject.name, 
                    description: this.subject.description, 
                    credits: this.subject.credits, 
                    knowledgeArea: this.subject.knowledgeArea, 
                    isMandatory: this.subject.isMandatory, 
                }).then(res =>{
                    this.subject={}
                    alert('successful request')
                    this.$emit('changeState', true);
                }).catch(err => {
                    console.log(err.response)
                })
            }
        }
    }
</script>
