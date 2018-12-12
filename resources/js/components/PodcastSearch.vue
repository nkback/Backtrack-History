<!-- Vue component -->
<template>
    <div id="multiselectapp">
        <modal name="podcast-search" style="color: black !important;" :adaptive="true" :dynamic="true" :draggable="true" :resizable="true">
            <!--<p>Hello world</p>-->
            <div class="col-lg-12 text-center">
                <button type="button" class="close" @click="close"><span aria-hidden="true">&times;</span></button>
                <h3 style="margin-top: 25px;">Search for episode</h3>
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-12">
                <!--<multiselect v-model="value" :options="options" width="50%" style="height: 100% !important; max-height: 50px !important;"></multiselect>-->
                <!--<select style="color: black;" class="form-control">-->
                    <!--<option>One</option>-->
                    <!--<option>Two</option>-->
                <!--</select>-->
                <model-select :options="options"
                              v-model="item"
                              placeholder="Search For Episode">
                </model-select>
            </div>
        </modal>
        <a @click="show">Search Podcast</a>
    </div>
</template>

<script>
    import Multiselect from 'vue-multiselect';
    import {ModelSelect} from 'vue-search-select';
    // import VModal from 'vue-js-modal';


    export default {
        // OR register locally
        components: {Multiselect, ModelSelect },
        data () {
            return {
                value: null,
                options: [
                    { value: '1', text: 'aa' + ' - ' + '1' },
                    { value: '2', text: 'ab' + ' - ' + '2' },
                    { value: '3', text: 'bc' + ' - ' + '3' },
                    { value: '4', text: 'cd' + ' - ' + '4' },
                    { value: '5', text: 'de' + ' - ' + '5' }
                ],
                item: {
                    value: '',
                    text: ''
                }
            }
        },
        methods: {
            show() {
                this.$modal.show('podcast-search');
            },
            close() {
                this.$modal.hide('podcast-search');
            }
        }
    }
</script>

<!-- New step!
     Add Multiselect CSS. Can be added as a static asset or inside a component. -->
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style scoped>
    h3 {
        color: black;
    }
</style>