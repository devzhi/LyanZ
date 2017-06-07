var sidebar = new Vue(
{
	el: '#sidebar',
	data: {
		message: 'block'
	},
	methods: {
		show: {
			this.message = "block" 
		},
		hide: {
			this.message = "none"
		}
	}
	})