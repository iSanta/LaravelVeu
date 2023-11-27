<template>
    <div class="w-full sm:w-8/18 md:w-8/12 p-5 bg-white mb-10">
        
        <div class="pb-10 border-dashed border-b-2 border-orange-500">
            <h2 class="text-xl pb-2">Edit subject</h2>
            <form method="POST" v-on:submit.prevent="createsubject()">
                <input type="text" v-model="subject.name" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="nameSubject" placeholder="Name">
                <input type="text" v-model="subject.description" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="descriptionSubject" placeholder="Description">
                <input type="number" v-model="subject.credits" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="creditsSubject" placeholder="Credits">
                <input type="text" v-model="subject.knowledgeArea" class="text-xl p-2 mr-2 w-full border-b-2 border-orange-500 outline-none" name="knowledgeAreaSubject" placeholder="Knowledge Area">
                <label class="text-xl p-2 mr-2 w-full" for="isMandatorySubject">Is mandatory?</label>
                <input type="checkbox" v-model="subject.isMandatory" class="outline-none mx-3" name="isMandatorySubject" placeholder="Is mandatory?"><br>
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
                subject: []
            }
        },
        methods:{
            createsubject(){
                axios.put('/subject/'+this.id, { 
                    name: this.subject.name, 
                    description: this.subject.description, 
                    credits: this.subject.credits, 
                    knowledgeArea: this.subject.knowledgeArea, 
                    isMandatory: this.subject.isMandatory, 
                }).then(res =>{
                }).catch(err => {
                    console.log(err.response)

                })
                this.subject=[]
            }
        },
        created(){
            axios.get('/subject/'+this.id+'/edit').then((res)=> {
                this.subject = res.data
                if(this.subject.isMandatory == 1){
                    this.subject.isMandatory = true
                }
                else{
                    this.subject.isMandatory = false
                }
            }).catch(err => console.log(err))
        }
    }
</script>