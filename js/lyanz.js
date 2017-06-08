var lz_sidebar = new Vue({
	el: '#lz_sidebar',
	data: {
		lz_side_look: true
	},
	methods: {
		lz_side_look_c: function (Plook) {
			this.lz_side_look = Plook;
			if (Plook) {
				alert("True")
			} else {
				alert("False")
			}
		},
	},
})
var lzSideMenu = new Vue({
	el: '#lzSideMenu',
	data: {
		marValue: {
			marginLeft: '15%'
		},
	},
	methods: {
		c: function (Pmar_v) {
			this.mar_value = Pmar_V;
		},
	},
})