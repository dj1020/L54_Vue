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
                tableData: [{
                    name: '2016-05-03',
                    parent: 'Tom',
                    route: 'No. 189, Grove St, Los Angeles'
                },{
                    name: '2016-05-03',
                    parent: 'Tom',
                    route: 'No. 189, Grove St, Los Angeles'
                },{
                    name: '2016-05-03',
                    parent: 'Tom',
                    route: 'No. 189, Grove St, Los Angeles'
                }]
            };
        }
    }
</script>