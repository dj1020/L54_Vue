Vue.component('message', {
    template: `
        <article class="message">
            <div class="message-header">
                <p>{{ title }}</p>
                <button class="delete"></button>
            </div>
            <div class="message-body">
                {{ description }}
            </div>
        </article>
    `,
});

new Vue({
    el: '#root'
});