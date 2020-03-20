Nova.booting((Vue, router, store) => {
  Vue.component('html', require('./components/Field'))
  Vue.component('detail-html', require('./components/Field'))
  Vue.component('form-html', require('./components/Field'))
})
