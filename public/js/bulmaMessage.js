Vue.component('message', {
    props: ['title', 'description'],
    template: `
        <article class="message">
            <div class="message-header">
                <p>{{ title }}</p>
                <button class="delete" @click="hideMessage"></button>
            </div>
            <div class="message-body">
                {{ description }}
            </div>
        </article>
    `,

    methods: {
        hideMessage: function () {
            alert('hide');
        }
    }
});

new Vue({
    el: '#root'
});