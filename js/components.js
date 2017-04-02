var app = new Vue({
    el: '#app',
    data: {
        message: 'Olá mundo!',
        seen: false,
        textInput: 'Mostrar'
    },
    methods: {
        showInput: function () {
            this.seen = !this.seen;
            if (this.textInput == 'Mostrar') {
                this.textInput = 'Fechar'
            } else {
                this.textInput = 'Mostrar'
            }
        }
    }
});

var app2 = new Vue({
    el: '#app2',
    data: {
        todos: [
            { text: 'Item 1'},
            { text: 'Item 2'},
            { text: 'Item 3'}
        ]
    }
});

var app3 = new Vue({
    el: '#app3',
    data: {
        message: 'Text Reverse Message!'
    },
    methods: {
        reverseMessage: function () {
            this.message = this.message.split(' ').reverse().join(' ');
        }
    }
})

Vue.component('todo-item', {
    props: ['todo'],
    template: '<li>{{ todo.text }}</li>'
})

var firstComponent = new Vue({
    el: '#firstComponent',
    data: {
        groceryList: [
            { text: 'Vegetables' },
            { text: 'Cheese' },
            { text: 'Whatever else humans are supposed to eat' }
        ]
    }
})