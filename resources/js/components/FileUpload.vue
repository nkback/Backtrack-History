<template>
    <vue-dropzone ref="myVueDropzone" id="dropzone" :options="dropzoneOptions"></vue-dropzone>
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
                    url: 'https://httpbin.org/post',
                    thumbnailWidth: 150,
                    maxFilesize: 0.5,
                    headers: { "My-Awesome-Header": "header value" },
                    maxFiles: 1,
                    addRemoveLinks: true,
                    dictDefaultMessage: "<i class='fa fa-cloud-upload'></i> UPLOAD ME"
                }
            }
        }
    }
</script>

<style scoped>
    @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
</style>