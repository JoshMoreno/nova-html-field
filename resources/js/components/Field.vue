<template>
    <div v-html="field.html"></div>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],

	mounted() {
    	this.field.fill = this.fill
	},

	methods: {
		fill(formData) {
			// nothing to fill, we're just an html field
		}
	}
}
</script>
