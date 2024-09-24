const CSRF_TOKEN = $('meta[name="csrf-token"]').attr("content");
$.ajaxSetup({ headers: { "X-CSRF-TOKEN": CSRF_TOKEN } });
let $savingLoader = '<div class="spinner-border spinner-border-sm" role="status"><span class="visually-hidden">Loading...</span></div>',

    $ajaxform = $(".ajaxform");
$ajaxform.initFormValidation(),
    $(document).on("submit", ".ajaxform", function (e) {
        e.preventDefault();
        let t = $(this).find(".submit-btn"),
            a = t.html();
        $ajaxform.valid() &&
        $.ajax({
            type: "POST",
            url: this.action,
            data: new FormData(this),
            dataType: "json",
            contentType: !1,
            cache: !1,
            processData: !1,
            beforeSend: function () {
                t.html($savingLoader).attr("disabled", !0);
            },
            success: function (e) {
                t.html(a).attr("disabled", false);
                Notify("success", null, e)
            },
            error: function (e) {
                t.html(a).attr("disabled", !1), Notify("error", e);
            },
        });
    });
let $ajaxform_instant_reload = $(".ajaxform_instant_reload");
$ajaxform_instant_reload.initFormValidation(),
    $(document).on("submit", ".ajaxform_instant_reload", function (e) {
        e.preventDefault();
        let t = $(this).find(".submit-btn"),
            a = t.html();
        $ajaxform_instant_reload.valid() &&
        $.ajax({
            type: "POST",
            url: this.action,
            data: new FormData(this),
            dataType: "json",
            contentType: !1,
            cache: !1,
            processData: !1,
            beforeSend: function () {
                t.html($savingLoader).addClass("disabled").attr("disabled", !0);
            },
            success: function (e) {
                t.html(a).removeClass("disabled").attr("disabled", !1), (window.sessionStorage.hasPreviousMessage = !0), (window.sessionStorage.previousMessage = e.message ?? null), e.redirect && (location.href = e.redirect);
            },
            error: function (e) {
                t.html(a).removeClass("disabled").attr("disabled", !1), showInputErrors(e.responseJSON), Notify("error", e);
            },
        });
    });
let $ajaxform_reset_form = $(".ajaxform_reset_form");
function notification(e, t) {
    let a;
    (a = "success" == e ? "fa fa-check-circle" : "error" == e ? "fa fa-times-circle" : "fa fa-info-circle"),
        Lobibox.notify(e, {
            pauseDelayOnHover: !0,
            continueDelayOnInactiveTab: !1,
            icon: a,
            sound: !1,
            position: "top right",
            showClass: "zoomIn",
            hideClass: "zoomOut",
            size: "mini",
            rounded: !0,
            width: 250,
            height: "auto",
            delay: 2e3,
            msg: t,
        });
}
function ajaxSuccess(e, t) {
    e.redirect ? (e.message && ((window.sessionStorage.hasPreviousMessage = !0), (window.sessionStorage.previousMessage = e.message ?? null)), (location.href = e.redirect)) : e.message && Notify("success", e);
}
function clean(e) {
    return (e = (e = e.replace(/ /g, "-")).replace(/[^A-Za-z0-9\-]/, "")).toLowerCase();
}
$ajaxform_reset_form.initFormValidation(),
    $(document).on("submit", ".ajaxform_reset_form", function (e) {
        e.preventDefault();
        let t = $(this),
            a = t.find(".submit-button"),
            s = a.html();
        $ajaxform_reset_form.valid() &&
        $.ajax({
            type: "POST",
            url: this.action,
            data: new FormData(this),
            dataType: "json",
            contentType: !1,
            cache: !1,
            processData: !1,
            beforeSend: function () {
                a.html($savingLoader).attr("disabled", !0);
            },
            success: function (e) {
                a.html(s).attr("disabled", !1), t.trigger("reset"), Notify("success", e);
            },
            error: function (e) {
                a.html(s).attr("disabled", !1), showInputErrors(e.responseJSON), Notify("error", e);
            },
        });
    }),
    $(".init_form_validation").initFormValidation(),
    $(document).on("click", ".action-confirm", function (e) {
        e.preventDefault();
        let t = $(this),
            a = t.data("title") ?? "Heads Up!",
            s = t.data("type") ?? "DELETE",
            n = t.data("icon") ?? "warning",
            r = t.data("content") ?? "Are you sure to delete?",
            o = t.attr("href") ?? t.data("action"),
            i = t.html();
        swal({ title: a, text: r, icon: n, buttons: !0, dangerMode: !0 }).then((e) => {
            if (!e) return 0;
            $.ajax({
                url: o,
                data: { _token: CSRF_TOKEN },
                type: s,
                beforeSend: function () {
                    t.html($savingLoader).addClass("disabled").attr("disabled", !0);
                },
                success: function (e) {
                    t.html(i).removeClass("disabled").attr("disabled", !1), ajaxSuccess(e, t);
                },
                error: function (e) {
                    t.html(i).removeClass("disabled").attr("disabled", !1), Notify(e);
                },
            });
        });
    }),
    $(document).on("click", ".order-action", function (e) {
        e.preventDefault();
        let t = $(this),
            a = t.data("id"),
            s = t.data("status"),
            n = t.data("content") ?? "Are you sure?",
            r = t.attr("href") ?? t.data("action"),
            o = t.html();
        swal({ title: "Are you sure?", text: n, icon: "warning", buttons: !0, dangerMode: !0 }).then((e) => {
            if (!e) return 0;
            $.ajax({
                url: r,
                data: { id: a, status: s, _token: CSRF_TOKEN },
                type: "GET",
                beforeSend: function () {
                    t.html($savingLoader).addClass("disabled").attr("disabled", !0);
                },
                success: function (e) {
                    t.html(o).removeClass("disabled").attr("disabled", !1), ajaxSuccess(e, t);
                },
                error: function (e) {
                    t.html(o).removeClass("disabled").attr("disabled", !1), Notify(e);
                },
            });
        });
    });


//PREVIEW IMAGE
function previewImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            var inputId = $(input).attr('id');

            // Select the image element based on the input's ID
            var imageElement = $('img.product-img').filter(function() {
                return $(this).closest('label').attr('for') === inputId;
            });
            imageElement.attr('src', e.target.result);
            imageElement.hide().fadeIn(650);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// Status button Change
$(".change-text").change(function() {
    var $dynamicText = $(this).closest('.form-control').find('.dynamic-text');

    if (this.checked) {
        $dynamicText.text("Active");
    } else {
        $dynamicText.text("Deactive");
    }
});

// Status button Change
$(".cnge-text").change(function() {
    var $test = $(this).closest('.form-control').find('.is-live-text');

    if (this.checked) {
        $test.text("Yes");
    } else {
        $test.text("No");
    }
});

/** STATUS CHANGE */
$('.status').on('change', function() {
    let checkbox = $(this);
    let status = checkbox.prop('checked') ? 1 : 0;
    let url = checkbox.data('url');
    let model =  checkbox.data('model');

    $.ajax({
        url: url,
        type: 'POST',
        data: {
            status: status, model: model
        },
        success: function(response) {
            if(status === 1){
                toastr.success(response.message + ' status published');
            }
            else{
                toastr.success(response.message + ' status unpublished');
            }
        },
        error: function(xhr, status, error) {
            console.log(error)
            toastr.error('Something Went Wrong');
        }
    });
});

/** DELETE ACTION */
$(document).on("click", ".delete-confirm", function (e) {
    e.preventDefault();
    let t = $(this),
        o = t.attr("href") ?? t.data("action"),
        i = t.html();

    // Create modal dynamically
    let confirmationModal = `
        <div class="modal fade" id="delete-confirmation-modal" tabindex="-1" aria-labelledby="delete-confirmation-modal-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="text-end">
                        <button type="button" class="btn-close m-3 mb-0" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0">
                        <div class="delete-modal">
                            <h5>Are You Sure?</h5>
                            <p>You won't be able to revert this!</p>
                        </div>
                        <div class="button-group">
                            <button class="btn reset-btn" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn theme-btn delete-confirmation-button">Yes, Delete It!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;

    $('body').append(confirmationModal); // Append modal to the body
    $('#delete-confirmation-modal').modal('show');

    // handle dynamic modal
    $('.delete-confirmation-button').on('click', function () {
        $.ajax({
            url: o,
            data: { _token: CSRF_TOKEN },
            type: "DELETE",
            beforeSend: function () {
                t.html($savingLoader).addClass("disabled").attr("disabled", true);
            },
            success: function (e) {
                t.html(i).removeClass("disabled").attr("disabled", false);
                ajaxSuccess(e, t);
            },
            error: function (e) {
                t.html(i).removeClass("disabled").attr("disabled", false);
                Notify(e);
            },
        });

        // Hide and remove modal
        $('#delete-confirmation-modal').modal('hide');
        $('#delete-confirmation-modal').remove();
    });
});

$(document).ready(function () {
    /** SEARCH */
    $(".searchForm").on("submit", function (e) {
        e.preventDefault();
        const searchText = $(".searchInput").val();
        const url = $(this).attr("action");
        $.ajax({
            url: url,
            type: "GET",
            data: {search: searchText},
            success: function (response) {
                $(".searchResults").html(response);
            },
            error: function (xhr) {
                console.log(xhr.responseText);
            },
        });
    });

    // Handle the "x" icon click event
    $(".clearSearchInput").on("click", function () {
        $(".searchInput").val(""); // Clear the search input
        // $(".searchForm").submit(); // Submit the form to show the full list of items
        $(".clearSearchInput").addClass('d-none');
        $(this).closest('.searchForm').submit();
    });

    // Show/hide "delete" button based on input value
    $(".searchInput").on("input", function () {
        if ($(this).val().trim() !== "") {
            $(".clearSearchInput").removeClass('d-none');
        } else {
            $(".clearSearchInput").addClass('d-none');
        }
    });


});

/** CHECKBOX FOR DELETE ALL */
$(document).ready(function () {
    // Select all checkboxes when the checkbox in the header is clicked
    $(".selectAllCheckbox").on("click", function () {
        $(".checkbox-item").prop("checked", this.checked);
    });

    // Perform the delete action for selected elements when the delete icon is clicked
    $(".delete-selected").on("click", function (e) {
        var checkedCheckboxes = $(".checkbox-item:checked");
        if (checkedCheckboxes.length === 0) {
            toastr.error('No items selected. Please select at least one item to delete.');
        } else {
            $('#multi-delete-modal').modal('show');
        }
    });


    $('.multi-delete-btn').on('click', function() {
        var ids = $(".checkbox-item:checked").map(function() {
            return $(this).val();
        }).get();

        let submitButton = $(this);
        let originalButtonText = submitButton.html();
        let del_url = $('.checkbox-item').data('url');

        $.ajax({
            type: "POST",
            url: del_url,
            data: {
                ids
            },
            dataType: "json",
            beforeSend: function () {
                submitButton.html($savingLoader).attr('disabled', true);
            },
            success: function (res) {
                submitButton.html(originalButtonText).attr('disabled', false);
                window.sessionStorage.hasPreviousMessage = true;
                window.sessionStorage.previousMessage = res.message ?? null;
                res.redirect && (location.href = res.redirect);
            },
            error: function (xhr) {
                submitButton.html(originalButtonText).attr('disabled', false);
                Notify('error', xhr);
            }
        });
    });
});



/** system setting start */
    // Initial label text
var initialLabelText = $("#mail-driver-type-select option:selected").val();

$("#mail-driver-type-select").on("change", function () {
    var selectedOptionValue = $(this).val();
    $("#mail-driver-label").text(selectedOptionValue);
});

$("#mail-driver-label").text(initialLabelText);

/** system setting end */
