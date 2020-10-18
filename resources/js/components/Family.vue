<template>
<div>
    <div class="card-body p-0">
        <div class="col-md-10"></div>
        <div class="col-md-2">
            <router-link class="btn btn-primary btn-lg float-left"> Create Parent Data</router-link>
        </div><br><br>
    </div>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th style=" width: 1%"> No </th>
                <th style="width: 20%"> Name </th>
                <th style="width: 20%"> Gender </th>
                <th style="width: 13%"> Action </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="parent in parents" :key="parent.id">
                <td>{{parent.id}}</td>
                <td>{{parent.name}}</td>
                <td>{{parent.gender}}</td>
                <td>
                    <router-link class="btn btn-warning btn-sm">EDIT</router-link>
                </td>
                <td><button class="btn btn-danger btn-sm" @click="deleteParent(parent.id)"> DELETE</button></td>
            </tr>
        </tbody>
    </table>
</div>
</template>

<script>
export default {
    data() {
        return {
            parents: [],
            fields: {},
            success: false,
            error: {}
        }
    }
}
</script>
