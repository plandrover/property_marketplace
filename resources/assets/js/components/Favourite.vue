<template>
    <span>
        <a href="#" v-if="isFavourited" @click.prevent="unFavourite(post)">
            <!--<i  class="fa fa-heart"></i>-->
        </a>
        <a href="#" v-else @click.prevent="favourite(post)">
            <!--<i  class="far fa-heart"></i>-->
             <i class="fa fa-heart"></i>
        </a>
    </span>
</template>

<script>
    export default {
        props: ['post', 'favourited'],

        data: function() {
            return {
                isFavourited: '',
            }
        },

        mounted() {
            this.isFavourited = this.isFavourite;
        },

        computed: {
            isFavourite() {
                return this.favourited;
            },
        },

        methods: {
            favourite(post) {
                axios.post('/favourite/'+post)
                    .then(response => this.isFavourited = true)
                    .catch(response => console.log(response.data));
            },

            unFavourite(post) {
                axios.post('/unfavourite/'+post)
                    .then(response => this.isFavourited = false)
                    .catch(response => console.log(response.data));
            }
        }
    }
</script>