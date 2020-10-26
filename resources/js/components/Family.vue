<template>
<div class="">
    <h3> ALL CHILDS</h3>

    <table class="class table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>GENDER</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for=" child in childs" :key="child.id">
                <td>{{child.id}}</td>
                <td>{{child.name}}</td>
                <td>{{child.gender}}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name:'edit', params:{id: child.id}}" class="btn btn-warning">EDIT</router-link>
                        <button class="btn btn-danger" @click="deleteChild(child.id)">DELETE</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</template>

<script>
export default {
    // data() {
    //     return {
    //         parents: [],
    //         childs: [],
    //         // parent: {
    //         //     id: '',
    //         //     name: '',
    //         //     gender: ''
    //         // },
    //         // child: {
    //         //     id: '',
    //         //     name: '',
    //         //     gender: ''
    //         // },
    //         // success: false,
    //         // error: {}
    //     }
    // },
    // created() {
    //     let uri = 'api/parents';
    //     this.axios.get(uri).then(response => {
    //         this.parents = response.data;
    //     })
    // }
    // deklarasi method pada setiap objects
    // mounted() {
    //     this.loadParents();
    //     this.loadChilds();
    // },
    // methods: {
    //     loadParents: function () {
    //         // load API
    //         axios.get('/api/parents')
    //             .then((response) => {
    //                 this.parents = response.data.data;
    //             })
    //             .catch(function (error) {
    //                 console.log(error);
    //             })
    //         // assign this.parents
    //         // catch errors
    //     },
    //     loadChilds: function () {
    //         axios.get('api/childs')
    //             .then((response) => {
    //                 this.childs = response.data.data;
    //             })
    //             .catch(function (error) {
    //                 console.log(error);
    //             })
    //     }
    // }
}
</script>
