<template>
    <div class="col-md-4">
        <form action="">
            <div class="form-group">
                <textarea name=""
                          id=""
                          cols="8"
                          rows="8"
                          maxlength="130"
                class="form-control"
                required>
                </textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">
                    Amping
                </button>
            </div>
        </form>
    </div>
</template>
<script>

import Event from '../event.js';
    export default {
     data() {
        return {
            body: '',
            postData: {}
        }
    },
    methods: {
        saveTweet() {
            axios.post('/tweet/save', {body: this.body}).then(res => {
                this.postData = res.data;
                // console.log(res.data);
                Event.$emit('added_tweet', this.postData);
            }).catch(e => {
                console.log(e);
            });
                this.body = '';
        }
    }
}
</script>