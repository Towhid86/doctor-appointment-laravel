////////////////////////////////////////////////////////////////////////////////////////////////////

$('.view-btn').each(function () {
    let container = $(this);
    let id = container.data('id');

    // User View Modal
    $('#user_view_' + id).on('click', function () {
        $('#user_view_business_category').text($('#user_view_' + id).data('business_category'));
        $('#user_view_business_name').text($('#user_view_' + id).data('business_name'));

        let imageSrc = $('#user_view_' + id).data('image');
        $('#user_view_image').attr('src', imageSrc);
        $('#user_view_name').text($('#user_view_' + id).data('name'));
        $('#user_view_role').text($('#user_view_' + id).data('role'));
        $('#user_view_email').text($('#user_view_' + id).data('email'));
        $('#user_view_phone').text($('#user_view_' + id).data('phone'));
        $('#user_view_address').text($('#user_view_' + id).data('address'));
        $('#user_view_country_id').text($('#user_view_' + id).data('country_id'));
        $('#user_view_statfeatures-listus').text($('#user_view_' + id).data('status') == 1 ? 'Active' : 'Deactive');    });

    // Plan View Modal
    $('#plan_view_' + id).on('click', function () {
        let features =$('#plan_view_' + id).data('features');
        let featuresList = $('#features-list');

        featuresList.empty();

        features.forEach(feature => {
            let featureHtml = `
                <div class="row align-items-center mt-3 feature-entry">
                    <div class="col-md-1">
                        <p id="plan_view_features_yes">
                            ${feature.value == 1 ? '<i class="fas fa-check-circle"></i>' : '<i class="fas fa-times-circle"></i>'}
                        </p>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-md-7">
                        <p id="plan_view_features_name">${feature.name}</p>
                    </div>
                </div>
            `;

            featuresList.append(featureHtml);
        });
    });

    // Category View
    $('#category_view_' + id).on('click', function () {
        $('#category_view_name').text($('#category_view_' + id).data('name'));
        $('#category_view_description').text($('#category_view_' + id).data('description'));
        $('#category_view_status').text($('#category_view_' + id).data('status') == 1 ? 'Active' : 'Deactive');
    });
    // Faqs view
    $('#faqs_view_' + id).on('click', function () {
        $('#faqs_view_question').text($('#faqs_view_' + id).data('question'));
        $('#faqs_view_answer').text($('#faqs_view_' + id).data('answer'));
        $('#faqs_view_status').text($('#faqs_view_' + id).data('status') == 1 ? 'Active' : 'Deactive');
    });

});

// edit modal
$('.edit-btn').each(function () {
    let container = $(this);
    let service = container.data('id');
    let id = service;

    $('#payment_type_edit_'+service).on('click',function () {
        $('#payment_type_edit_name').val($('#payment_type_edit_'+service).data('name'));
        $('#payment_type_edit_status').prop('checked', $('#payment_type_edit_'+service).data('status') == 1);
        $('.dynamic-text').text($('#payment_type_edit_'+service).data('status') == 1 ? 'Active' : 'Deactive');

        let edit_action_route = $(this).data('url');
        $('#payment_type_edit_form').attr('action', edit_action_route+'/'+id);
    });

    $('#menu_edit_'+service).on('click',function () {
        $('#menu_edit_name').val($('#menu_edit_'+service).data('name'));
        $('#menu_edit_menu_id').val($('#menu_edit_'+service).data('menu_id')).prop('selected', true);
        $('#menu_edit_position').val($('#menu_edit_'+service).data('position')).prop('selected', true);
        $('.dynamic-text').text($('#menu_edit_'+service).data('status') == 1 ? 'Active' : 'Deactive');
        let edit_action_route = $(this).data('url');
        $('#menu_edit_form').attr('action', edit_action_route+'/'+id);
    });
    $('#company_edit_'+service).on('click',function () {
        $('#name').val($('#company_edit_'+service).data('name'));
        $('#email').val($('#company_edit_'+service).data('email'));
        $('#phone').val($('#company_edit_'+service).data('phone'));
        $('#address').val($('#company_edit_'+service).data('address'));
        $('#address_map').val($('#company_edit_'+service).data('address-map'));
        $('#office_time').val($('#company_edit_'+service).data('office-time'));
        $('#facebook').val($('#company_edit_'+service).data('facebook'));
        $('#linkedin').val($('#company_edit_'+service).data('linkedin'));
        $('#instagram').val($('#company_edit_'+service).data('instagram'));
        $('#x').val($('#company_edit_'+service).data('x'));
        $('#company_edit_company_id').val($('#company_edit_'+service).data('company_id')).prop('selected', true);
        $('.dynamic-text').text($('#company_edit_'+service).data('status') == 1 ? 'Active' : 'Deactive');
        let edit_action_route = $(this).data('url');
        $('#company_edit_form').attr('action', edit_action_route+'/'+id);

    });
    $('#study_section_edit_'+service).on('click',function () {
        $('#name').val($('#study_section_edit_'+service).data('name'));
        let edit_action_route = $(this).data('url');
        $('#study_section_edit_form').attr('action', edit_action_route+'/'+id);

    });
    $('#banner_edit_'+service).on('click',function () {
        $('#title').val($('#banner_edit_'+service).data('title'));
        $('#sub_title').val($('#banner_edit_'+service).data('sub-title'));
        $('#description').val($('#banner_edit_'+service).data('description'));
        //$('#banner').attr('src').empty();
        //let banner = $('#banner_edit_'+service).data('banner');
        var bannerUrl = $('#banner_edit_'+service).data('banner');
                 if (bannerUrl) {
                    $('#banner-edit').attr('src',bannerUrl);
                }

        let edit_action_route = $(this).data('url');
        $('#banner_edit_form').attr('action', edit_action_route+'/'+id);

    });

    $('#partner_edit_'+service).on('click',function () {
        $('#name').val($('#partner_edit_'+service).data('name'));
        //$('#partner').attr('src').empty();
        //let partner = $('#partner_edit_'+service).data('partner');
        var logoUrl = $('#partner_edit_'+service).data('logo');
                 if (logoUrl) {
                    $('#logo-edit').attr('src',logoUrl);
                }

        let edit_action_route = $(this).data('url');
        $('#partner_edit_form').attr('action', edit_action_route+'/'+id);

    });

});

/** Subscriptions Plan start */

function updateSalesPrice() {
    let price = parseFloat($('.price').val()) || 0;
    let discount = parseFloat($('.discount').val()) || 0;

    if (discount > 100) {
        toastr.warning('Discount cannot be more than the 100.', 'Warning');
        return;
    }

    // Calculate the sales price based on discount
    let salesPrice = 0;
    let savedPrice = 0;
    let discountAmount = price * (discount / 100);
    salesPrice = price - discountAmount;
    savedPrice = price - salesPrice;
    $('#sales_price').val(salesPrice.toFixed(2));
    $('#saved_price').val(savedPrice.toFixed(2));
}

// updateSalesPrice will be called when these fields change
$('.price, .discount').on('input change', updateSalesPrice);

//dynamic btn
$("#feature-btn").click(function(e){
    e.preventDefault();
    var index = $('.feature-list').children().length;
    var name = $('.add-feature-name').val();
    var details = $('.add-feature-details').val();
    if (name !=='' && details !== '') {
        $('.feature-list').append(`
            <div class="col-md-6 remove-list">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <div class="feature-add-wrp accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${index}" aria-expanded="true" aria-controls="collapse${index}">
                        <div class="form-control d-flex justify-content-between align-items-center">
                            <input type="text" name="features[${index}][name][]" value="${name}" class="form-control">
                            <label class="switch">
                                <input type="checkbox" class="plan-checkbox"  name="features[${index}][status][]" checked>
                                <span class="slider round"></span>
                            </label>
                        </div>
                        <button type="button" class="remove-one"><i class="fas fa-trash-alt"></i></button>
                    </div>
                    </h2>
                    <div id="collapse${index}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="col-lg-12 mt-1">
                                <input type="text" name="features[${index}][details][]" value="${details}"  class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `);
        $('.add-feature').val('');
    }
});
$(function () {
    $("body").on("click", ".remove-one", function () {
        $(this).closest(".remove-list").remove();
    });
});
/** Subscriptions Plan end */

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
