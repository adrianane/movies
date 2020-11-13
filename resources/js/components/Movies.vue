<template>
    <div class="row justify-content-between">
        <div class="col-md-6 col-sm-12 col-lg-4" v-for="movie in movies">
            <div class="card ">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <img class="img-fluid" :src="movie.image" alt="Movie">
                    </div>
                    <div class="col d-flex flex-column">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{movie.name}}</h5>
                            <div class="card-text container">
                                <i class="fas fa-star"></i>
                                <span class="rating">{{movie.rating}}</span>
                                <div class="artists row align-items-center">
                                    <div class="col-md-12">
                                        <div class="artist" v-for="artist in movie.artists">
                                            <span class="role">{{artist.title}}</span>: {{artist.name}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-more mt-auto" href="#" role="button">View more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
       mounted() {
           this.getMovies();
       },
       data() {
         return {
             movies: []
         }
       },
        methods: {
           getMovies() {
               let self = this;
               axios.get('../api/movies').then(function (res) {
                    self.movies = res.data
               })
           }
        }
    }
</script>

