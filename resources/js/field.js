Nova.booting((Vue) => {
    Vue.component('index-nova-html-field', require('./components/Field').default)
    Vue.component('detail-nova-html-field', require('./components/Field').default)
    Vue.component('form-nova-html-field', require('./components/Field').default)
})
