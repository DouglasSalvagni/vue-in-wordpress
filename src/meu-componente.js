import Vue from 'vue';

Vue.component('meu-componente', {
  template: `
  <div id="app">
  <h1>{{ title }}</h1>
  <p>{{ message }}</p>
  <button @click="changeContent">Mudar Conteúdo</button>
</div>
  `,
  data() {
    return {
      title: 'Título Inicial',
      message: 'Conteúdo Inicial',
    };
  },
  methods: {
    changeContent() {
      this.title = 'Novo Título';
      this.message = 'Novo Conteúdo';
    }
  }
});

new Vue({
  el: "#app",
});


