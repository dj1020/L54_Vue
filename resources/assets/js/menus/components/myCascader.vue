<template>
    <el-cascader
        :options="options"
        @change="onChange"
    ></el-cascader>
</template>

<script>
    export default {
        methods: {
            onChange(value) {
                console.log(value);
                console.log(value[value.length - 1]);

                this.$emit('input', value[value.length - 1]);
            }
        },

        props: ['value'],

        data() {
            return {
                options: []
            };
        },

        mounted() {
            axios.get('/menus/cascaderData')
                .then(resp => {
                    console.log(resp.data);
                    this.options = resp.data;
                })
                .catch(error => console.error(error.response));
        }
    };
</script>