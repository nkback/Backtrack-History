<template>
    <div style="margin-top: 50px;">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Add Post</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="title" class="col-form-label text-md-right" style="margin-left: 14px;">Title: </label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="short_description">Short Description:</label>
                            <textarea id="short_description" name="short_description" class="form-control" required></textarea>
                        </div>
                        <vue-editor v-model="content"></vue-editor>
                        <textarea name="blog_content" id="blog_content" style="display: none;"></textarea>
                        <div class="form-group row mb-0">
                            <div class="float-left" style="margin-left: 14px; margin-top: 10px;">
                                <button type="button" @click="saveContent" class="btn btn-primary">
                                    Continue
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        &nbsp;
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 25%;">25%</div>
        </div>
    </div>
</template>
<script>

    import { VueEditor } from 'vue2-editor'

    export default {

        components: {
            VueEditor,
        },

        data() {
            return {
                content: '<h1>Your post goes here..</h1>'
            }
        },
        methods: {
            saveContent: function() {
                document.getElementById('blog_content').value = this.content;
                document.getElementById("postForm").submit();
            }
        }
    }
</script>
