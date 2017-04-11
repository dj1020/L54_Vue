<template>
    <el-table
        :data="tableData"
        style="width: 100%">
        <el-table-column
            prop="name"
            label="Menu Name"
            width="180">
        </el-table-column>
        <el-table-column
            prop="parent"
            label="Parent Menu"
            width="180">
        </el-table-column>
        <el-table-column
            prop="route"
            label="Route">
        </el-table-column>
    </el-table>
</template>
<script>
    export default {
        data() {
            return {
                tableData: []
            };
        },

        mounted() {
            axios.get('/menus').then((resp) => { // 如果不用 es6 arrow function 記得加 bind
                let data = resp.data;
                console.log(data);
                this.tableData = data;
            });
        }
    }
</script>