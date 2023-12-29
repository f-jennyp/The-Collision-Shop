window.addEventListener("load", function () {
	window.cookieconsent.initialise({
		"palette": {
			"popup": {
				"background": "#000"
			},
			"button": {
				"background": "#3085d6"
			}
		},
		"type": "opt-out",
		onInitialise: function (status) {
			var type = this.options.type;
			var didConsent = this.hasConsented();
			if (type == 'opt-in' && didConsent) {
				cookie_set = true;
				console.log(status);
			}
			if (type == 'opt-out' && !didConsent) {
				cookie_set = false;
				console.log(status);
			}
		},

		onStatusChange: function (status, chosenBefore) {
			var type = this.options.type;
			var didConsent = this.hasConsented();
			if (type == 'opt-in' && didConsent) {
				cookie_set = true;
				console.log(status);
			}
			if (type == 'opt-out' && !didConsent) {
				cookie_set = false;
				console.log(status);
			}
		},

		onRevokeChoice: function () {
			var type = this.options.type;
			if (type == 'opt-in') {
				cookie_set = false;
				console.log(status);
			}
			if (type == 'opt-out') {
				cookie_set = true;
				console.log(status);
			}
		},
	})
});