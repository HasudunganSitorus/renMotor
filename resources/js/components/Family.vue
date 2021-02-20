<template>
<div class="container">
    <div class="row">
        <div class="col-lg-3 text-center mt-2">
            <h4> <small> Parents Name</small></h4>
            <div class="list-group">
                <a href="" class="list-group-item mb-2" v-for="parent in parents" :key="parent.id">
                    {{parent.name}}
                </a>
            </div>
        </div>
        <div class="col-lg-9 text-center mt-2">
            <h4> <small> Childs Name</small></h4>
            <div class="row mt-4">
                <div class="col-lg-4 col-md-6 mb-4" v-for="child in childs" :key="child.id">
                    <div class="card-deck">
                        <div class="card h-100" style="width: 18rem;">
                            <a href="#">
                                <img class="card-img-top" src="http://placehold.it/700x400" alt="">
                            </a>
                            <div class="card-body text-center text-white">
                                <h4 class="card-title">
                                    <a href="#"><small> {{child.name}} </small></a>
                                </h4>
                                <p>
                                    <a href="#"> {{child.gender}} </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            parents: [],
            childs: [],
            success: false,
            error: {}
        }
    },
    name: "Family",
    // created() {
    //     let uri = 'api/parents';
    //     this.axios.get(uri).then(response => {
    //         this.parents = response.data;
    //     })
    // }
    // deklarasi method pada setiap objects
    mounted() {
        this.loadParents();
        this.loadChilds();
    },
    methods: {
        loadParents: function () {
            // load API
            axios.get('/api/parents')
                .then((response) => {
                    this.parents = response.data.data;
                })
                .catch(function (error) {
                    console.log(error);
                })
            // assign this.parents
            // catch errors
        },
        loadChilds: function () {
            axios.get('api/childs')
                .then((response) => {
                    this.childs = response.data.data;
                })
                .catch(function (error) {
                    console.log(error);
                })
        }
    }
}
</script>
