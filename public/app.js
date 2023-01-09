if (document.getElementById('successEditEmail') != null) {
    if (document.getElementById('successEditEmail').value == "200") {
        Swal.fire(
            {
                text: "تم تغيير بريدك الإلكتروني بنجاح.", icon: "success", buttonsStyling: !1, confirmButtonText: "تم !", customClass: { confirmButton: "btn font-weight-bold btn-light-primary" }
            }
        );
    }
}
if (document.getElementById('successEditPassword') != null) {
    if (document.getElementById('successEditPassword').value == "200") {
        Swal.fire(
            {
                text: "تم تغيير كلمة المرور بنجاح.", icon: "success", buttonsStyling: !1, confirmButtonText: "تم !", customClass: { confirmButton: "btn font-weight-bold btn-light-primary" }
            }
        );
    }
}
if (document.getElementById('statusChangeInfo') != null) {
    if (document.getElementById('statusChangeInfo').value == "200") {
        Swal.fire(
            {
                text: "تم تعديل المعلومات الشخصية بنجاح!.", icon: "success", buttonsStyling: !1, confirmButtonText: "تم !", customClass: { confirmButton: "btn font-weight-bold btn-light-primary" }
            }
        );
    }
}
if (document.getElementById('editBeneficiarieInfo') != null) {
    if (document.getElementById('editBeneficiarieInfo').value == "200") {
        Swal.fire(
            {
                text: "تم تعديل معلومات المستفيد بنجاح!.", icon: "success", buttonsStyling: !1, confirmButtonText: "تم !", customClass: { confirmButton: "btn font-weight-bold btn-light-primary" }
            }
        );
    }
}
if (document.getElementById('editSupporterInfo') != null) {
    if (document.getElementById('editSupporterInfo').value == "200") {
        Swal.fire(
            {
                text: "تم تعديل معلومات الداعم بنجاح!.", icon: "success", buttonsStyling: !1, confirmButtonText: "تم !", customClass: { confirmButton: "btn font-weight-bold btn-light-primary" }
            }
        );
    }
}
if (document.getElementById('addBeneficiarieSkills') != null) {
    if (document.getElementById('addBeneficiarieSkills').value == "200") {
        Swal.fire(
            {
                text: "تمت اضافة المهارة الجديدة!.", icon: "success", buttonsStyling: !1, confirmButtonText: "تم !", customClass: { confirmButton: "btn font-weight-bold btn-light-primary" }
            }
        );
    }
}

if (document.getElementById('destroyBeneficiarieSkills') != null) {
    if (document.getElementById('destroyBeneficiarieSkills').value == "200") {
        Swal.fire(
            {
                text: "تم حذف المهارة !.", icon: "success", buttonsStyling: !1, confirmButtonText: "تم !", customClass: { confirmButton: "btn font-weight-bold btn-light-primary" }
            }
        );
    }
}
if (document.getElementById('addBeneficiarieCertificate') != null) {
    if (document.getElementById('addBeneficiarieCertificate').value == "200") {
        Swal.fire(
            {
                text: "تمت اضافة شهادة الجديدة!.", icon: "success", buttonsStyling: !1, confirmButtonText: "تم !", customClass: { confirmButton: "btn font-weight-bold btn-light-primary" }
            }
        );
    }
}
if (document.getElementById('destroyBeneficiarieCertificate') != null) {
    if (document.getElementById('destroyBeneficiarieCertificate').value == "200") {
        Swal.fire(
            {
                text: "تم حذف الشهادة !.", icon: "success", buttonsStyling: !1, confirmButtonText: "تم !", customClass: { confirmButton: "btn font-weight-bold btn-light-primary" }
            }
        );
    }
}
if (document.getElementById('addBeneficiarieNecessity') != null) {
    if (document.getElementById('addBeneficiarieNecessity').value == "200") {
        Swal.fire(
            {
                text: "تمت اضافة احتياج جديد!.", icon: "success", buttonsStyling: !1, confirmButtonText: "تم !", customClass: { confirmButton: "btn font-weight-bold btn-light-primary" }
            }
        );
    }
}
if (document.getElementById('destroyBeneficiarieNecessity') != null) {
    if (document.getElementById('destroyBeneficiarieNecessity').value == "200") {
        Swal.fire(
            {
                text: "تم حذف الاحتياج !.", icon: "success", buttonsStyling: !1, confirmButtonText: "تم !", customClass: { confirmButton: "btn font-weight-bold btn-light-primary" }
            }
        );
    }
}
if (document.getElementById('addBeneficiarieExperience') != null) {
    if (document.getElementById('addBeneficiarieExperience').value == "200") {
        Swal.fire(
            {
                text: "تمت اضافة تجربة جديدة!.", icon: "success", buttonsStyling: !1, confirmButtonText: "تم !", customClass: { confirmButton: "btn font-weight-bold btn-light-primary" }
            }
        );
    }
}
if (document.getElementById('destroyBeneficiarieExperience') != null) {
    if (document.getElementById('destroyBeneficiarieExperience').value == "200") {
        Swal.fire(
            {
                text: "تم حذف التجربة المهنية بنجاح !.", icon: "success", buttonsStyling: !1, confirmButtonText: "تم !", customClass: { confirmButton: "btn font-weight-bold btn-light-primary" }
            }
        );
    }
}
if (document.getElementById('addvolunteer') != null) {
    if (document.getElementById('addvolunteer').value == "200") {
        Swal.fire(
            {
                text: "تم تفعيل خاصية التطوع!.", icon: "success", buttonsStyling: !1, confirmButtonText: "تم !", customClass: { confirmButton: "btn font-weight-bold btn-light-primary" }
            }
        );
    }
}
if (document.getElementById('editSupporterInfo') != null) {
    if (document.getElementById('editSupporterInfo').value == "200") {
        Swal.fire(
            {
                text: "تم ارسال الاقتراح!.", icon: "success", buttonsStyling: !1, confirmButtonText: "تم !", customClass: { confirmButton: "btn font-weight-bold btn-light-primary" }
            }
        );
    }
}




"use strict";

var KTAccountSettingsProfileDetails = function () {
    var form;
    var submitButton;
    var validation;

    var initValidation = function () {
        validation = FormValidation.formValidation(
            form,
            {
                fields: {
                    first_name: {
                        validators: {
                            notEmpty: {
                                message: 'الاسم الشخصي مطلوب'
                            }
                        }
                    },
                    last_name: {
                        validators: {
                            notEmpty: {
                                message: 'الاسم العائلي مطلوب'
                            }
                        }
                    },
                    phone: {
                        validators: {
                            notEmpty: {
                                message: 'الهاتق مطلوب'
                            }
                        }
                    },
                    country: {
                        validators: {
                            notEmpty: {
                                message: 'الدولة حقل مطلوب'
                            }
                        }
                    },
                    timezone: {
                        validators: {
                            notEmpty: {
                                message: 'الرجاء تحديد منطقة زمنية'
                            }
                        }
                    },
                    language: {
                        validators: {
                            notEmpty: {
                                message: 'يرجى تحديد لغة'
                            }
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );

        // Select2 validation integration
        $(form.querySelector('[name="country"]')).on('change', function () {
            // Revalidate the color field when an option is chosen
            validation.revalidateField('country');
        });

        $(form.querySelector('[name="language"]')).on('change', function () {
            // Revalidate the color field when an option is chosen
            validation.revalidateField('language');
        });

        $(form.querySelector('[name="timezone"]')).on('change', function () {
            // Revalidate the color field when an option is chosen
            validation.revalidateField('timezone');
        });
    }

    var handleForm = function () {
        submitButton.addEventListener('click', function (e) {
            e.preventDefault();

            // Validate form
            validation.validate().then(function (status) {
                if (status === 'Valid') {
                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    submitButton.disabled = true;


                    document.getElementById('kt_account_profile_details_formm').submit();

                } else {
                    // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "معذرة ، يبدو أنه تم اكتشاف بعض الأخطاء ، يرجى المحاولة مرة أخرى.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "تم!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
            });
        });
    }

    // Public methods
    return {
        init: function () {
            form = document.getElementById('kt_account_profile_details_formm');
            submitButton = form.querySelector('#kt_account_profile_details_submitt');

            initValidation();
            handleForm();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTAccountSettingsProfileDetails.init();
});



var KTAccountSettingsBeneficiarieDetails = function () {
    var form;
    var submitButton;
    var validation;

    var initValidation = function () {
        validation = FormValidation.formValidation(
            form,
            {
                fields: {
                    membership_id: {
                        validators: {
                            notEmpty: {
                                message: 'رقم العضوية مطلوب'
                            }
                        }
                    },
                    id_occupation: {
                        validators: {
                            notEmpty: {
                                message: 'المهنة حقل مطلوب'
                            }
                        }
                    },
                    date_of_birth: {
                        validators: {
                            notEmpty: {
                                message: 'التاريخ مطلوب'
                            }
                        }
                    },
                    marital_status: {
                        validators: {
                            notEmpty: {
                                message: 'الحالة العائلية مطلوبة'
                            }
                        }
                    },
                    education_level: {
                        validators: {
                            notEmpty: {
                                message: 'مستوى التعليم مطلوب'
                            }
                        }
                    },
                    major: {
                        validators: {
                            notEmpty: {
                                message: 'التخصص مطلوب'
                            }
                        }
                    },
                    address: {
                        validators: {
                            notEmpty: {
                                message: 'العنوان مطلوب'
                            }
                        }
                    },
                    house_ownership: {
                        validators: {
                            notEmpty: {
                                message: 'ملكية المنزل مطلوب'
                            }
                        }
                    },
                    house_type: {
                        validators: {
                            notEmpty: {
                                message: 'نوع المنزل مطلوب'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );

    }

    var handleForm = function () {
        submitButton.addEventListener('click', function (e) {
            e.preventDefault();

            // Validate form
            validation.validate().then(function (status) {
                if (status === 'Valid') {
                    // Show loading indication
                    submitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    submitButton.disabled = true;


                    document.getElementById('kt_account_profile_beneficiarie_form').submit();

                } else {
                    // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "معذرة ، يبدو أنه تم اكتشاف بعض الأخطاء ، يرجى المحاولة مرة أخرى.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "تم!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
            });
        });
    }

    // Public methods
    return {
        init: function () {
            form = document.getElementById('kt_account_profile_beneficiarie_form');
            submitButton = form.querySelector('#kt_account_profile_beneficiarie_submit');

            initValidation();
            handleForm();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTAccountSettingsBeneficiarieDetails.init();
});

$('#kt_modal_add_customer_close').click(function () {
    $('#kt_modal_add_customer').modal('hide');
});
$('#kt_modal_add_customer_cancel').click(function () {
    $('#kt_modal_add_customer').modal('hide');
});

$('#kt_modal_add_volunteer_close').click(function () {
    $('#kt_modal_add_volunteer').modal('hide');
});
$('#kt_modal_add_volunteer_cancel').click(function () {
    $('#kt_modal_add_volunteer').modal('hide');
});

function getFile() {
    document.getElementById("upfile").click();
}

function sub(obj) {
    var file = obj.value;
    var fileName = file.split("\\");
    document.getElementById("yourBtn").innerHTML = fileName[fileName.length - 1];
    document.myForm.submit();
    event.preventDefault();
}

$('#send_message_form').on('submit', function () {

    document.getElementById('message').value = document.getElementById('msg').innerHTML;

    return true;
});