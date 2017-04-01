Vue.component('message', {
    props: ['title', 'description'],
    template: `
        <article class="message" v-show="isVisible">
            <div class="message-header">
                <p>{{ title }}</p>
                <button class="delete" @click="hideMessage"></button>
            </div>
            <div class="message-body">
                {{ description }}
            </div>
        </article>
    `,

    data: function () {
        return {
            isVisible: true
        }
    },

    methods: {
        hideMessage: function () {
            this.isVisible = false;
        }
    }
});

new Vue({
    el: '#root'
});