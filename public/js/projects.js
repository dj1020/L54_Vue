new Vue({
    el: '#root',

    data: {
        form: {
            name: '',
            description: ''
        }
    },

    methods: {
        onSubmit: function () {
            axios.post('/projects', {
                name: this.form.name,
                description: this.form.description
            }).then(function (resp) {
                console.log(resp);
            }).catch(function (error) {
                console.log(error.response);
            });
        }
    }
});