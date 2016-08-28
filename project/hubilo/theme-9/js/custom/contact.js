/*
Name: 			Contact 
Written by: 	JanXcode Themes - (http://www.janxcode.com)
Version: 		1.0
*/

(function() {
		"use strict";
		var Contact = {
			initialized: false,
			initialize: function() {
				if (this.initialized) return;
				this.initialized = true;
				this.build();
				this.events();
			},
			build: function() {
				this.validations();
			},
			events: function() {
			},
			validations: function() {
				var contactform = $("#contactForm"),
					url = contactform.attr("action");
				contactform.validate({
					submitHandler: function(form) {
						// Loading State
						var submitButton = $(this.submitButton);
						submitButton.button("loading");
						// Ajax Submit
						$.ajax({
							type: "POST",
							url: url,
							data: {
								"first_name": $("#contactForm #first_name").val(),
								"last_name": $("#contactForm #last_name").val(),
								"email": $("#contactForm #email").val(),
								"phone": $("#contactForm #phone").val(),
								"message": $("#contactForm #message").val()
							},
							dataType: "json",
							success: function (data) {
								if (data.response == "success") {
									$("#contactSuccess").removeClass("hidden");
									$("#contactError").addClass("hidden");
									// Reset Form
									$("#contactForm .form-control")
										.val("")
										.blur()
										.parent()
										.removeClass("has-success")
										.removeClass("has-error")
										.find("label.error")
										.remove();
									if(($("#contactSuccess").position().top - 80) < $(window).scrollTop()){
										$("html, body").animate({
											 scrollTop: $("#contactSuccess").offset().top - 80
										}, 300);
									}
								} else {
									$("#contactError").removeClass("hidden");
									$("#contactSuccess").addClass("hidden");
									if(($("#contactError").position().top - 80) < $(window).scrollTop()){
										$("html, body").animate({
											 scrollTop: $("#contactError").offset().top - 80
										}, 300);
									}
								}
							},
							complete: function () {
								submitButton.button("reset");
							}
						});
					},
					rules: {
						first_name: {
							required: false
						},
						last_name: {
							required: false
						},
						email: {
							required: true,
							email: true
						},
						phone: {
							required: false
						},
						message: {
							required: true
						}
					},
					highlight: function (element) {
						$(element)
							.parent()
							.removeClass("has-success")
							.addClass("has-error");
					},
					success: function (element) {
						$(element)
							.parent()
							.removeClass("has-error")
							.addClass("has-success")
							.find("label.error")
							.remove();
					}
				});
			}
		};
		Contact.initialize();
})();