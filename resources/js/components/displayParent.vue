<template>
<div>
    <h2><small> Parent Data </small></h2>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-2">
                <router-link :to="{name:'createParent'}" class="btn btn-primary btn-sm"> Create Parent Data</router-link>
            </div>
        </div><br>
        <table class="table table-hover">
            <thead class="text-center">
                <tr>
                    <td> ID</td>
                    <td>NAME</td>
                    <td>Gender</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <tr v-for="parent in parents" :key="parent">
                    <td>{{parent.id}}</td>
                    <td>{{parent.name}}</td>
                    <td>{{parent.gender}}</td>
                    <td>
                        <router-link :to="{name:'editParent', params:{id:parent.id}}" class="btn btn-sm btn-primary">Edit Parent</router-link>
                    </td>
                    <td><button class="btn- btn-danger" v-on:click="deleteParent(parent.id)">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            parents: []
        }
    },
    created: function () {
        this.loadParent();
        this.deleteParent();

    },
    methods: {
        loadParent: function () {
            axios.get('/api/parent')
                .then((response) => {
                    this.parents = response.data.data;
                })
                .catch(function (error) {
                    console.error();
                });
        },
        deleteParent(id) {

        }
    }
}
</script>
