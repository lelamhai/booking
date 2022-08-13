// ======================================== Tab1 ======================================== \\
// Business info
$(document).ready(function() {
	$('.save-business').click(function() {
		$('#loading').modal('toggle');

		$(".wrap-business").each(function(index, obj) {
			let elements = $(this).children(".input-business");
			let key = elements.data("key");
			let name = elements.val();

			$.ajax({
				type: "GET",
				dataType: 'html',
				url: "./wp-admin/admin-ajax.php",
				data: {
					action: "addOption",
					key: key,
					name: name
				},
				beforeSend: function() {

				},
				success: function(response) {
					console.log(response);
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(errorThrown);
				}
			});
		});
		setTimeout(
			function() {
				localStorage.setItem("isFinish", 1);
				location.reload();
			}, 2000);
	});
});

// Your Services
$(document).ready(function() {
	$(document).on('click', '.delete-nemu', function() {
		clearInputPopup();
		let id = $(this).parents(".wrap-level").data('id');
		$("#popup-id").val(id);
		if (id == 0) {
			let title = $(this).parents(".wrap-level").data('title');
			$("#popup-title").val(title);
			if (title == "parent") {
				let tempParentID = $(this).parents(".wrap-level").data('tempparent');
				$("#popup-tempParentId").val(tempParentID);

			} else {
				let tempChildrenID = $(this).parents(".wrap-level").data('tempchildren');
				$("#popup-tempChildId").val(tempChildrenID);
			}
		} else {
			let taxonomy = $(this).parents(".wrap-level").data('taxonomy');
			$("#popup-taxonomy").val(taxonomy);
		}
	});
	$('.yes-serivces').click(function() {
		let id = $("#popup-id").val();
		if (id == 0) {
			let title = $("#popup-title").val();
			if (title == "parent") {
				let parentId = $("#popup-tempParentId").val();
				$('.wrap-level[data-tempparent="' + parentId + '"]').parents(".block-level1").remove();

			} else {
				let childrenId = $("#popup-tempChildId").val();
				let count = $('.wrap-level[data-tempchildren="' + childrenId + '"]').parents(".block-level2").children().length;
				if (count == 1) {
					let html = "<div class='add-sub-service'><button class='add-sub'>Add sub-services</button></div>";
					$('.wrap-level[data-tempchildren="' + childrenId + '"]').parents(".block-level1").append(html);

					$('.wrap-level[data-tempchildren="' + childrenId + '"]').parents(".block-level2").remove();
				}

				$('.wrap-level[data-tempchildren="' + childrenId + '"]').remove();
			}
			$('#deleteModal').modal('toggle');
		} else {
			let taxonomy = $("#popup-taxonomy").val();
			$.ajax({
				type: "GET",
				dataType: 'html',
				url: "./wp-admin/admin-ajax.php",
				data: {
					action: "deleteTaxonomy",
					id: id,
					taxonomy: taxonomy
				},
				beforeSend: function() {

				},
				success: function(response) {
					$('#deleteModal').modal('toggle');
					location.reload();
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(errorThrown);
				}
			});
		}

	});
	let tempParent = 1;
	let tempChild = 1;
	$(document).on('click', '.create-menu', function() {
		let title = $(this).parents(".wrap-level").data("title");
		let parentId = $(this).parents(".wrap-level").data("parent");
		let html = "";
		if (title === "parent") {
			html = "<div class='wrap-menu-block block-level1'><div class='wrap-level' data-id='0' data-taxonomy='services' data-parent='0' data-title='parent' data-tempparent='" + tempParent + "'><div class='level'><div class='title-level'>Level 1</div><div class='wrap-right'><div class='button-menu'><button class='create-menu'>Add</button></div><div class='delete-level'><button class='delete-nemu' data-toggle='modal' data-target='#deleteModal'>Delete</button></div></div></div><div class='menu-title'><span>Title</span><input type='text' class='title' value=''></div><div class='menu-price'><span>Price</span><input type='number' class='price' value=''><div class='price-dolla'>$</div></div><div class='menu-description'><span>Description</span><input type='text' class='description' value=''></div><div class='add-sub-service'><button class='add-sub'>Add sub-services</button></div></div>";
			$(this).parents(".wrap-level").parent().after(html);
			tempParent++;
		} else {
			html = "<div class='wrap-level' data-id='0' data-taxonomy='services' data-parent='" + parentId + "' data-title='children' data-tempchildren='" + tempChild + "'><div class='level'><div class='title-level'>Level 2</div><div class='wrap-right'><div class='button-menu'><button class='create-menu'>Add</button></div><div class='delete-level'><button class='delete-nemu' data-toggle='modal' data-target='#deleteModal'>Delete</button></div></div></div><div class='menu-title'><span>Title</span><input type='text' class='title' value=''></div><div class='menu-price'><span>Price</span><input type='number' class='price' value=''><div class='price-dolla'>$</div></div><div class='menu-description'><span>Description</span><input type='text' class='description' value=''></div></div>";
			$(this).parents(".wrap-level").after(html);
			tempChild++;
		}
	});
	$(document).on('click', '.add-sub', function() {
		let parentId = $(this).parents(".block-level1").children().data("id");
		let html = "";
		html = "<div class='wrap-menu-block block-level2'><div class='wrap-level' data-id='0' data-taxonomy='services' data-parent='" + parentId + "' data-title='children' data-tempchildren='" + tempChild + "'><div class='level'><div class='title-level'>Level 2</div><div class='wrap-right'><div class='button-menu'><button class='create-menu'>Add</button></div><div class='delete-level'><button class='delete-nemu' data-toggle='modal' data-target='#deleteModal'>Delete</button></div></div></div><div class='menu-title'><span>Title</span><input type='text' class='title' value=''></div><div class='menu-price'><span>Price</span><input type='number' class='price' value=''><div class='price-dolla'>$</div></div><div class='menu-description'><span>Description</span><input type='text' class='description' value=''></div></div></div>";
		$(this).parents(".block-level1").append(html);
		$(this).parents(".add-sub-service").remove();
		tempChild++;
	});
	
	$(document).on('click', '.save-services', function() {
		$('#loading').modal('toggle');
		let indexParent = 1;

		//parent
		$(".block-level1").each(function(index, obj) {
			let id = $(this).children(".wrap-level").data("id");
			let parentId = $(this).children(".wrap-level").data("parent");
			let taxonomy = $(this).children(".wrap-level").data("taxonomy");
			let title = $(this).children(".wrap-level").children('.menu-title').children('.title').val();
			let price = $(this).children(".wrap-level").children('.menu-price').children('.price').val();
			let description = $(this).children(".wrap-level").children('.menu-description').children('.description').val();

			if (id != 0) {
				$.ajax({
					type: "GET",
					dataType: 'html',
					url: "./wp-admin/admin-ajax.php",
					data: {
						action: "updateMenu",
						id: id,
						parentId: parentId,
						taxonomy: taxonomy,
						title: title,
						price: price,
						description: description,
						index: indexParent
					},
					beforeSend: function() {

					},
					success: function(response) {

					},
					error: function(jqXHR, textStatus, errorThrown) {}
				});
				indexParent++
			} else {
				$.ajax({
					type: "GET",
					dataType: 'html',
					url: "./wp-admin/admin-ajax.php",
					data: {
						action: "createMenu",
						id: id,
						parentId: parentId,
						taxonomy: taxonomy,
						title: title,
						price: price,
						description: description,
						index: indexParent
					},
					beforeSend: function() {

					},
					success: function(response) {
						// $(this).children(".block-level2").children(".wrap-level").css("background-color","red");
						let indexChildren = 1;
						$(this).children(".block-level2").children(".wrap-level").each(function(index, obj) {
							let parentId = response;
							let taxonomy = $(obj).data("taxonomy");
							let title = $(obj).children('.menu-title').children('.title').val();
							let price = $(obj).children('.menu-price').children('.price').val();
							let description = $(obj).children('.menu-description').children('.description').val();

							$.ajax({
								type: "GET",
								dataType: 'html',
								url: "./wp-admin/admin-ajax.php",
								data: {
									action: "createMenu",
									id: id,
									parentId: parentId,
									taxonomy: taxonomy,
									title: title,
									price: price,
									description: description,
									index: indexChildren
								},
								beforeSend: function() {

								},
								success: function(response) {},
								error: function(jqXHR, textStatus, errorThrown) {}
							});
							indexChildren++;
						});

					}.bind(this),

					error: function(jqXHR, textStatus, errorThrown) {}
				});
				indexParent++;
			}

			// children
			if (id != 0) {
				if ($(this).children(".wrap-menu-block").hasClass("block-level2")) {
					let indexChildren = 1;
					$(this).children(".block-level2").children(".wrap-level").each(function(index, obj) {
						let id = $(this).data("id");
						let parentId = $(this).data("parent");
						let taxonomy = $(this).data("taxonomy");
						let title = $(this).children('.menu-title').children('.title').val();
						let price = $(this).children('.menu-price').children('.price').val();
						let description = $(this).children('.menu-description').children('.description').val();

						if (id != 0) {
							$.ajax({
								type: "GET",
								dataType: 'html',
								url: "./wp-admin/admin-ajax.php",
								data: {
									action: "updateMenu",
									id: id,
									parentId: parentId,
									taxonomy: taxonomy,
									title: title,
									price: price,
									description: description,
									index: indexChildren
								},
								beforeSend: function() {

								},
								success: function(response) {

								},
								error: function(jqXHR, textStatus, errorThrown) {}
							});
							indexChildren++;
						} else {
							$.ajax({
								type: "GET",
								dataType: 'html',
								url: "./wp-admin/admin-ajax.php",
								data: {
									action: "createMenu",
									id: id,
									parentId: parentId,
									taxonomy: taxonomy,
									title: title,
									price: price,
									description: description,
									index: indexChildren
								},
								beforeSend: function() {

								},
								success: function(response) {},
								error: function(jqXHR, textStatus, errorThrown) {}
							});
							indexChildren++;
						}
					});
				}
			}
		});
		setTimeout(
			function() {
				localStorage.setItem("isFinish", 1);
				location.reload();
			}, 2000);
	});

	function clearInputPopup() {
		$("#popup-id").val("");
		$("#popup-taxonomy").val("");
		$("#popup-tempParentId").val("");
		$("#popup-tempChildId").val("");
	}
});

// Your Opening Hours
$(document).ready(function() {
	$('.save-hours').click(function() {
		$('#loading').modal('toggle');
		$(".wrap-hours").each(function(index, obj) {
			let timeFrom = $(this).children(".wrap-input-hours").children(".time-from").val();
			let optionFrom = $(this).children(".wrap-input-hours").children(".option-from").val();
			let timeTo = $(this).children(".wrap-input-hours").children(".time-to").val();
			let optionTo = $(this).children(".wrap-input-hours").children(".option-to").val();
			let active = $(this).children(".wrap-input-hours").children(".hours-active").val();

			let key = "week" + (index + 2);
			let name = timeFrom + "-" + optionFrom + "-" + timeTo + "-" + optionTo + "-" + active;

			$.ajax({
				type: "GET",
				dataType: 'html',
				url: "./wp-admin/admin-ajax.php",
				data: {
					action: "addOption",
					key: key,
					name: name
				},
				beforeSend: function() {

				},
				success: function(response) {

				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(errorThrown);
				}
			});
		});
		setTimeout(
			function() {
				localStorage.setItem("isFinish", 1);
				location.reload();
			}, 2000);
	});

	$('.hours-active').change(function() {
		let index = $(this).find('option:selected').val();
		if (index == 0) {
			$(this).css("background-color", "#ac2b2b");
		} else {
			$(this).css("background-color", "#008037");
		}
	});
});

// Time & Seat Available for Online Appointments
$(document).ready(function() {
	let tempId = 1;
	$(document).on('click', '.create-time', function() {
		let html = "<div class='wrap-times-row' data-id='0' data-taxonomy='times' data-tempid='" + tempId + "'><div class='time'><input type='text'  class='input-time' value=''><select class='time-option'><option value='0' selected>AM</option><option value='1'>PM</option></select></div><div class='seats'><input type='number' class='input-slots' value=''></div><div class='group-button'><div class='button-menu'><button class='create-time'>Add</button></div><div class='delete-level'><button class='delete-time' data-toggle='modal' data-target='#deleteTimes'>Delete</button></div></div></div>";
		$(this).parents(".wrap-times-row").after(html);
		tempId++;
	});

	$(document).on('click', '.save-time', function() {
		$('#loading').modal('toggle');
		let indexTime = 1;
		$(".wrap-times-row").each(function(index, obj) {
			let id = $(this).data("id");
			let taxonomy = $(this).data("taxonomy");
			let time = $(this).children(".time").children(".input-time").val();
			let timeOption = $(this).children(".time").children(".time-option").val();
			let slots = $(this).children(".seats").children().val();
			strTime = time + " " + timeOption;
			if (id != 0) {
				$.ajax({
					type: "GET",
					dataType: 'html',
					url: "./wp-admin/admin-ajax.php",
					data: {
						action: "updateTime",
						id: id,
						taxonomy: taxonomy,
						time: strTime,
						slots: slots,
						index: indexTime
					},
					beforeSend: function() {

					},
					success: function(response) {

					},
					error: function(jqXHR, textStatus, errorThrown) {}
				});
				indexTime++;
			} else if (time != "") {
				$.ajax({
					type: "GET",
					dataType: 'html',
					url: "./wp-admin/admin-ajax.php",
					data: {
						action: "createTime",
						taxonomy: taxonomy,
						time: strTime,
						slots: slots,
						index: indexTime
					},
					beforeSend: function() {

					},
					success: function(response) {

					},
					error: function(jqXHR, textStatus, errorThrown) {}
				});
				indexTime++;
			}
		});
		setTimeout(
			function() {
				localStorage.setItem("isFinish", 1);
				location.reload();
			}, 2000);
	});

	$(document).on('click', '.delete-time', function() {
		clearInputTimes();
		let id = $(this).parents(".wrap-times-row").data("id");
		let taxonomy = $(this).parents(".wrap-times-row").data("taxonomy");

		if (id == 0) {
			let tempId = $(this).parents(".wrap-times-row").data("tempid");
			$("#popup-times-id").val(id);
			$("#popup-times-tempId").val(tempId);
		} else {
			$("#popup-times-id").val(id);
			$("#popup-times-taxonomy").val(taxonomy);
		}
	});

	$(document).on('click', '.yes-times', function() {
		let id = $("#popup-times-id").val();
		let taxonomy = $("#popup-times-taxonomy").val();
		if (id == 0) {
			let tempId = $("#popup-times-tempId").val();
			$('.wrap-times-row[data-tempid="' + tempId + '"]').remove();
			$('#deleteTimes').modal('toggle');
		} else {
			$.ajax({
				type: "GET",
				dataType: 'html',
				url: "./wp-admin/admin-ajax.php",
				data: {
					action: "deleteTaxonomy",
					id: id,
					taxonomy: taxonomy
				},
				beforeSend: function() {

				},
				success: function(response) {
					$('#deleteTimes').modal('toggle');
					location.reload();
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(errorThrown);
				}
			});
		}
	});

	$(document).on('click', '.button-fill-all', function() {
		let fillAll = $(".fill-all").val();
		$(".wrap-times-row").each(function(index, obj) {
			$(this).children(".seats").children().val(fillAll);
		});
	});

	function clearInputTimes() {
		$("#popup-times-id").val("");
		$("#popup-times-taxonomy").val("");
		$("#popup-times-tempId").val("");
	}
});

// ======================================== Tab2 ======================================== \\
// Header
$(document).ready(function() {
	$('#headerColor').on('input', function() {
		$('#hexHeaderColor').val(this.value);
	});
	$('#hexHeaderColor').on('input', function() {
		$('#headerColor').val(this.value);
	});
	
	$('#textColor').on('input', function() {
		$('#hexTextColor').val(this.value);
	});
	$('#hexTextColor').on('input', function() {
		$('#textColor').val(this.value);
	});

	$(document).on('click', '.save-header', function() {
		$('#loading').modal('toggle');

		let headerColor = $(".header-color").val();
		let keyHeaderColor = $(".header-color").data("key");

		let textColor = $(".text-color").val();
		let keyTextColor = $(".text-color").data("key");

		let additionalMenu = $(".additional-menu").val();
		let keyadditionalMenu = $(".additional-menu").data("key");

		let linkMenu = $(".link-menu").val();
		let keyLinkMenu = $(".link-menu").data("key");

		let youtubeHeader = $(".youtube-header").val();
		let keyYoutubeHeader = $(".youtube-header").data("key");

		let keyFile = $("#fileinput").data("key");

		var data_form = new FormData();
		if ($(".output-image ").attr('src') == '') {
			console.log("empty");
			data_form.append('keyFile', keyFile);
			data_form.append('file', "");
		} else {
			let file = $("#fileinput").prop('files')[0];
			data_form.append('keyFile', keyFile);
			data_form.append('file', file);
		}

		data_form.append('keyHeaderColor', keyHeaderColor);
		data_form.append('keyTextColor', keyTextColor);
		data_form.append('keyadditionalMenu', keyadditionalMenu);
		data_form.append('keyLinkMenu', keyLinkMenu);
		data_form.append('keyYoutubeHeader', keyYoutubeHeader);

		data_form.append('headerColor', headerColor);
		data_form.append('textColor', textColor);
		data_form.append('additionalMenu', additionalMenu);
		data_form.append('linkMenu', linkMenu);
		data_form.append('youtubeHeader', youtubeHeader);


		data_form.append('action', 'header');
		jQuery.ajax({
			type: "post",
			url: "./wp-admin/admin-ajax.php",
			processData: false,
			contentType: false,
			data: data_form,
			beforeSend: function() {

			},
			success: function(response) {
				localStorage.setItem("isFinish", 1);
				location.reload();
			},
			error: function(request, status, error) {
				console.log(error);
			},
		});
	});
});

// Body
$(document).ready(function() {
	$('#backgroundColor').on('input', function() {
		$('#hexBackgroundColor').val(this.value);
	});
	$('#hexBackgroundColor').on('input', function() {
		$('#backgroundColor').val(this.value);
	});
	
	$('#textColorBody').on('input', function() {
		$('#hexTextColorBody').val(this.value);
	});
	$('#hexTextColorBody').on('input', function() {
		$('#textColorBody').val(this.value);
	});
	
	$('#buttonColor').on('input', function() {
		$('#hexButtonColor').val(this.value);
	});
	$('#hexButtonColor').on('input', function() {
		$('#buttonColor').val(this.value);
	});
	
	$('#textColorButtonBody').on('input', function() {
		$('#hexTextColorButtonBody').val(this.value);
	});
	$('#hexTextColorButtonBody').on('input', function() {
		$('#textColorButtonBody').val(this.value);
	});

	$(document).on('click', '.save-body', function() {
		$('#loading').modal('toggle');
	
		let backgroundColor = $(".background-color").val();
		let keyBackgroundColor = $(".background-color").data("key");
		
		let textColorBody = $(".text-color-body").val();
		let keyTextColorBody = $(".text-color-body").data("key");

		let buttonColor = $(".button-color").val();
		let keyButtonColor = $(".button-color").data("key");
		
		let textColorButtonBody = $(".text-color-button-body").val();
		let keyTextColorButtonBody = $(".text-color-button-body").data("key");
	
		let titleWelcome = $(".title-welcome").val();
		let keyTitleWelcome = $(".title-welcome").data("key");
	
		let contentWelcome = $(".content-welcome").val();
		let keyContentWelcome = $(".content-welcome").data("key");
	
		var data_form = new FormData();
		data_form.append('backgroundColor', backgroundColor);
		data_form.append('keyBackgroundColor', keyBackgroundColor);

		data_form.append('textColorBody', textColorBody);
		data_form.append('keyTextColorBody', keyTextColorBody);
	
		data_form.append('buttonColor', buttonColor);
		data_form.append('keyButtonColor', keyButtonColor);
	
		data_form.append('textColorButtonBody', textColorButtonBody);
		data_form.append('keyTextColorButtonBody', keyTextColorButtonBody);
	
		data_form.append('titleWelcome', titleWelcome);
		data_form.append('keyTitleWelcome', keyTitleWelcome);
	
		data_form.append('contentWelcome', contentWelcome);
		data_form.append('keyContentWelcome', keyContentWelcome);
	
		for (let i = 1; i <= 5; i++) {
			let url = "#output" + i;
			let keyFile = $("#fileinput" + i).data("key");
			
			if ($(url).attr('src') == '') {
				data_form.append('keyFile' + i, keyFile);
				data_form.append('file' + i, '');
	
			} else {
				let file = $("#fileinput" + i).prop('files')[0];

				data_form.append('keyFile' + i, keyFile);
				data_form.append('file' + i, file);
			}
		}
	
		data_form.append('action', 'body');
	
		jQuery.ajax({
			type: "post",
			url: "./wp-admin/admin-ajax.php",
			processData: false,
			contentType: false,
			data: data_form,
			beforeSend: function() {
	
			},
			success: function(response) {
				localStorage.setItem("isFinish", 1);
				location.reload();
			},
			error: function(request, status, error) {
				console.log(error);
			},
		});
	});
});

// Client's Reviews or Your Notifications
$(document).ready(function() {
	$('#backgroundColorReviews').on('input', function() {
		$('#hexBackgroundColorReviews').val(this.value);
	});
	$('#hexBackgroundColorReviews').on('input', function() {
		$('#backgroundColorReviews').val(this.value);
	});
	
	$('#textColorReivews').on('input', function() {
		$('#hexTextColorReviews').val(this.value);
	});
	$('#hexTextColorReviews').on('input', function() {
		$('#textColorReivews').val(this.value);
	});

	$(document).on('click', '.save-reviews', function() {
		$('#loading').modal('toggle');
	
		let valueBackgroundColorReviews = $("#backgroundColorReviews").val();
		let keyBackgroundColorReviewss = $("#backgroundColorReviews").data("key");
	
		let valueTextColorReivews = $("#textColorReivews").val();
		let keyTextColorReivews = $("#textColorReivews").data("key");
	
		let valueTitleReviews = $(".title-reviews").val();
		let keyTitleReviews = $(".title-reviews").data("key");
		console.log(valueTitleReviews);
	
		var data_form = new FormData();
		data_form.append('keyBackgroundColorReviews', keyBackgroundColorReviewss);
		data_form.append('backgroundColorReviews', valueBackgroundColorReviews);
	
		data_form.append('keyTextColorReviews', keyTextColorReivews);
		data_form.append('textColorReviews', valueTextColorReivews);
	
		data_form.append('keyTitleReviews', keyTitleReviews);
		data_form.append('titleReviews', valueTitleReviews);
	

		for (let i = 1; i <= 3; i++) {
			let classReviews = ".textBodyReviews" + i;
	
			let key = $(classReviews).data("key");
			let value = tinyMCE.get(key).getContent();
	
			data_form.append('keyTextBodyReviews' + i, key);
			data_form.append('textBodyReviews' + i, value);
		}
	
		data_form.append('action', 'reviews')
	
		jQuery.ajax({
			type: "post",
			url: "./wp-admin/admin-ajax.php",
			processData: false,
			contentType: false,
			data: data_form,
			beforeSend: function() {
	
			},
			success: function(response) {
				localStorage.setItem("isFinish", 1);
				location.reload();
			},
			error: function(request, status, error) {
				console.log(error);
			},
		});
	});
});

// Gift Cards
$(document).ready(function() {
	$(document).on('click', '.save-gift', function() {
		$('#loading').modal('toggle');
	
		let keyTitleGift = $('.title-gift').data("key");
		let titleGift = $('.title-gift').val();
	
		let keyContentGift = $('.content-gift').data("key");
		let contentGift = $('.content-gift').val();
	
	
		var data_form = new FormData();
		data_form.append('keyTitleGift', keyTitleGift);
		data_form.append('titleGift', titleGift);
	
		data_form.append('keyContentGift', keyContentGift);
		data_form.append('contentGift', contentGift);
	
	
	
		let keyFile = $("#fileinputGift").data("key");
	
		if ($("#outputGift").attr('src') == '') {
			data_form.append('keyFile', keyFile);
			data_form.append('file', '');
		} else {
			let file = $("#fileinputGift").prop('files')[0];
	
			data_form.append('keyFile', keyFile);
			data_form.append('file', file);
		}
	
		data_form.append('action', 'gift');
	
	
		jQuery.ajax({
			type: "post",
			url: "./wp-admin/admin-ajax.php",
			processData: false,
			contentType: false,
			data: data_form,
			beforeSend: function() {
	
			},
			success: function(response) {
				localStorage.setItem("isFinish", 1);
				location.reload();
			},
			error: function(request, status, error) {
				console.log(error);
			},
		});
	});
});

$(document).ready(function() {
	$(document).on('click', '.save-map', function() {
		$('#loading').modal('toggle');
		let value = $(".map-iframe").val();
		let key = $(".map-iframe").data("key");
		var data_form = new FormData();
		data_form.append('keyMap', key);
		data_form.append('map', value);
		data_form.append('action', 'map');

		jQuery.ajax({
			type: "post",
			url: "./wp-admin/admin-ajax.php",
			processData: false,
			contentType: false,
			data: data_form,
			beforeSend: function() {

			},
			success: function(response) {
				localStorage.setItem("isFinish", 1);
				location.reload();
			},
			error: function(request, status, error) {
				console.log(error);
			},
		});
	});
});

// Footer
$(document).ready(function() {
	$('#footerColor').on('input', function() {
		$('#hexFooterColor').val(this.value);
	});
	$('#hexFooterColor').on('input', function() {
		$('#footerColor').val(this.value);
	});
	
	$('#textColorFooter').on('input', function() {
		$('#hexTextColorFooter').val(this.value);
	});
	$('#hexTextColorFooter').on('input', function() {
		$('#textColorFooter').val(this.value);
	});

	$(document).on('click', '.save-footer', function() {
		$('#loading').modal('toggle');

		let footerColor = $(".footer-color").val();
		let keyFooterColor = $(".footer-color").data("key");

		let textColorFooter = $(".text-color-footer").val();
		let keyTextColorFooter = $(".text-color-footer").data("key");

		let textAboutUs = $(".content-about-us").val();
		let keyTextAboutUs = $(".content-about-us").data("key");

		let terms = tinyMCE.get('terms_id').getContent();
		let keyTerm = $("#terms").data("key");
		let privacyPolicy = tinyMCE.get('privacyPolicy_id').getContent();
		let keyPolicy= $("#policy").data("key");
		
		var data_form = new FormData();
		data_form.append('keyFooterColor', keyFooterColor);
		data_form.append('footerColor', footerColor);

		data_form.append('keyTextColorFooter', keyTextColorFooter);
		data_form.append('textColorFooter', textColorFooter);

		data_form.append('keyContentAboutUs', keyTextAboutUs);
		data_form.append('contentAboutUs', textAboutUs);

		data_form.append('terms', terms);
		data_form.append('termsId', keyTerm);
		data_form.append('privacyPolicy', privacyPolicy);
		data_form.append('privacyPolicyId', keyPolicy);
		

		data_form.append('action', 'footer');
		jQuery.ajax({
			type: "post",
			url: "./wp-admin/admin-ajax.php",
			processData: false,
			contentType: false,
			data: data_form,
			beforeSend: function() {

			},
			success: function(response) {
				localStorage.setItem("isFinish", 1);
				location.reload();
			},
			error: function(request, status, error) {
				console.log(error);
			},
		});
	   
	});
});

// Common
$(document).ready(function() {
	// Finish save
	let isFinish = localStorage.getItem('isFinish');
	if (isFinish == 1) {
		$('#finish').modal('toggle');
		localStorage.setItem("isFinish", 0);
	}

	// Save tabs
	$(function() {
		$('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
			localStorage.setItem('lastTab', $(this).attr('href'));
		});
		var lastTab = localStorage.getItem('lastTab');
	
		if (lastTab) {
			$('[href="' + lastTab + '"]').tab('show');
		}
	});

	$(".file-input").on("change",function(){
		var $input = $(this);
		let previewImage = $(this).parents(".upload-image").children(".preview-image");
        var reader = new FileReader(); 
        reader.onload = function(){
			previewImage.attr("src", reader.result);
			$input.parents(".upload-image").children(".remove-image").css("display", "block");
        } 
        reader.readAsDataURL($input[0].files[0]);
	});

	$(".remove-image").click(function() {
		$(this).parents(".upload-image").children(".preview-image").attr("src", "");
		$(this).parents(".upload-image").children(".file-input").val("");
		$(this).css("display", "none");
	});
});
