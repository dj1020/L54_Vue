Vue.component('task-list', {
    template: '<task v-for="task in tasks">{{ task.content }}</task>',

    data: function () {
        return {
            tasks: [
                {content: "Go to school", complete: true},
                {content: "Go to 7-11", complete: true},
                {content: "Go to the bank", complete: false},
                {content: "Go home", complete: false},
                {content: "Take a shower", complete: false}
            ]
        };
    }
});

Vue.component('task', {
    template: '<li><slot></slot></li>'
});

new Vue({
    el: '#root'
});