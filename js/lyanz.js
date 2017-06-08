var lz_sidebar = new Vue({
	el: '#lz_sidebar',
	data: {
		lz_side_look: true
	},
	methods: {
		lz_side_look_c: function () {
			this.lz_side_look = !'lz_side_look';
		},
	},
})
