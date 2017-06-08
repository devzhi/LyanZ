var lzSidebar = new Vue({
	el: '#lz_sidebar',
	data: {
		lzSideLook: true
	},
	methods: {
		lzSideLookC: function (pLook) {
			this.lzSideLook = pLook;
			if (pLook) {
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