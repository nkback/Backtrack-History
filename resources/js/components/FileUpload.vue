<template>
    <vue-dropzone ref="myVueDropzone" id="dropzone" name="dropzonePhoto" :options="dropzoneOptions" v-on:vdropzone-sending="sendingEvent"></vue-dropzone>
</template>

<script>
import vue2Dropzone from 'vue2-dropzone'
import 'vue2-dropzone/dist/vue2Dropzone.min.css'
    export default {
        components: {
            vueDropzone: vue2Dropzone
        },
        data: function () {
            return {
                dropzoneOptions: {
                    url: this.url,
                    thumbnailWidth: 150,
                    maxFilesize: 2,
                    headers: { "X-CSRF-TOKEN": document.head.querySelector("[name=csrf-token]").content },
                    maxFiles: 1,
                    addRemoveLinks: true,
                    dictDefaultMessage: "<i class='fa fa-cloud-upload'></i> UPLOAD ME"
                }
            }
        },
        methods: {
            sendingEvent (file, xhr, formData) {
                formData.append('episodeId', this.episodeId);
            }
        },
        props: ['url', 'episodeId'],
        mounted(){
            console.log(this.episodeId);
        }
    }
</script>

<style scoped>
    @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
</style>