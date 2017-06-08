var lz_sidebar = new Vue({
	el: '#lz_sidebar',
	data: {
		lz_side_look: true
	},
	methods: {
		lz_side_look_c: function (Plook) {
			this.lz_side_look = Plook;
			if (Plook) {
				lzSideMenu.c('15');
			} else {
				lzSideMenu.c('0');
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
		c: function (marV) {
			this.marValue.marginLeft = marV + '%';
		},
	},
})