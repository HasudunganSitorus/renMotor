<template>
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <h2 class="my-4"><small>Family Tree</small></h2>
            <div class="list-group">
                <a href="#" class="list-group-item">
                </a>
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
            parent: {
                id: '',
                name: '',
                gender: ''
            },
            success: false,
            error: {}
        }
    }
}
</script>
