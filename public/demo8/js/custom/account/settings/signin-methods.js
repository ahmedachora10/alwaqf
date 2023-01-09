/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/assets/extended/js/custom/account/settings/signin-methods.js":
/*!********************************************************************************!*\
  !*** ./resources/assets/extended/js/custom/account/settings/signin-methods.js ***!
  \********************************************************************************/
/***/ (() => {

eval(" // Class definition\n\nvar KTAccountSettingsSigninMethods = function () {\n  // Private functions\n  var initSettings = function initSettings() {\n    // UI elements\n    var signInMainEl = document.getElementById('kt_signin_email');\n    var signInEditEl = document.getElementById('kt_signin_email_edit');\n    var passwordMainEl = document.getElementById('kt_signin_password');\n    var passwordEditEl = document.getElementById('kt_signin_password_edit'); // button elements\n\n    var signInChangeEmail = document.getElementById('kt_signin_email_button');\n    var signInCancelEmail = document.getElementById('kt_signin_cancel');\n    var passwordChange = document.getElementById('kt_signin_password_button');\n    var passwordCancel = document.getElementById('kt_password_cancel'); // toggle UI\n\n    signInChangeEmail.querySelector('button').addEventListener('click', function () {\n      toggleChangeEmail();\n    });\n    signInCancelEmail.addEventListener('click', function () {\n      toggleChangeEmail();\n    });\n    passwordChange.querySelector('button').addEventListener('click', function () {\n      toggleChangePassword();\n    });\n    passwordCancel.addEventListener('click', function () {\n      toggleChangePassword();\n    });\n\n    var toggleChangeEmail = function toggleChangeEmail() {\n      signInMainEl.classList.toggle('d-none');\n      signInChangeEmail.classList.toggle('d-none');\n      signInEditEl.classList.toggle('d-none');\n    };\n\n    var toggleChangePassword = function toggleChangePassword() {\n      passwordMainEl.classList.toggle('d-none');\n      passwordChange.classList.toggle('d-none');\n      passwordEditEl.classList.toggle('d-none');\n    };\n  };\n\n  var handleChangeEmail = function handleChangeEmail(e) {\n    var validation; // form elements\n\n    var form = document.getElementById('kt_signin_change_email');\n    var submitButton = form.querySelector('#kt_signin_submit');\n    validation = FormValidation.formValidation(form, {\n      fields: {\n        email: {\n          validators: {\n            notEmpty: {\n              message: 'البريد الالكتروني مطلوب'\n            },\n            emailAddress: {\n              message: 'القيمة ليست عنوان بريد إلكتروني صالحًا'\n            }\n          }\n        },\n        password: {\n          validators: {\n            notEmpty: {\n              message: 'كلمة المرور مطلوبة'\n            }\n          }\n        }\n      },\n      plugins: {\n        //Learn more: https://formvalidation.io/guide/plugins\n        trigger: new FormValidation.plugins.Trigger(),\n        bootstrap: new FormValidation.plugins.Bootstrap5({\n          rowSelector: '.fv-row'\n        })\n      }\n    });\n    submitButton.addEventListener('click', function (e) {\n      e.preventDefault();\n      validation.validate().then(function (status) {\n        if (status === 'Valid') {\n          // Show loading indication\n          submitButton.setAttribute('data-kt-indicator', 'on'); // Disable button to avoid multiple click\n\n          submitButton.disabled = true; // Send ajax request\n\n          axios.post(form.getAttribute('action'), new FormData(form)).then(function (response) {\n            // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/\n            Swal.fire({\n              text: \"تم تغيير بريدك الإلكتروني بنجاح.\",\n              icon: \"success\",\n              buttonsStyling: false,\n              confirmButtonText: \"تم !\",\n              customClass: {\n                confirmButton: \"btn font-weight-bold btn-light-primary\"\n              }\n            });\n          })[\"catch\"](function (error) {\n            var dataMessage = error.response.data.message;\n            var dataErrors = error.response.data.errors;\n\n            for (var errorsKey in dataErrors) {\n              if (!dataErrors.hasOwnProperty(errorsKey)) continue;\n              dataMessage += \"\\r\\n\" + dataErrors[errorsKey];\n            }\n\n            if (error.response) {\n              Swal.fire({\n                text: dataMessage,\n                icon: \"error\",\n                buttonsStyling: false,\n                confirmButtonText: \"تم !\",\n                customClass: {\n                  confirmButton: \"btn btn-primary\"\n                }\n              });\n            }\n          }).then(function () {\n            // always executed\n            // Hide loading indication\n            submitButton.removeAttribute('data-kt-indicator'); // Enable button\n\n            submitButton.disabled = false;\n          });\n        } else {\n          Swal.fire({\n            text: \"Sorry, looks like there are some errors detected, please try again.\",\n            icon: \"error\",\n            buttonsStyling: false,\n            confirmButtonText: \"تم !\",\n            customClass: {\n              confirmButton: \"btn font-weight-bold btn-light-primary\"\n            }\n          });\n        }\n      });\n    });\n  };\n\n  var handleChangePassword = function handleChangePassword(e) {\n    var validation; // form elements\n\n    var form = document.getElementById('kt_signin_change_password');\n    var submitButton = form.querySelector('#kt_password_submit');\n    validation = FormValidation.formValidation(form, {\n      fields: {\n        current_password: {\n          validators: {\n            notEmpty: {\n              message: 'Current Password is required'\n            }\n          }\n        },\n        password: {\n          validators: {\n            notEmpty: {\n              message: 'New Password is required'\n            }\n          }\n        },\n        password_confirmation: {\n          validators: {\n            notEmpty: {\n              message: 'Confirm Password is required'\n            },\n            identical: {\n              compare: function compare() {\n                return form.querySelector('[name=\"password\"]').value;\n              },\n              message: 'The password and its confirm are not the same'\n            }\n          }\n        }\n      },\n      plugins: {\n        //Learn more: https://formvalidation.io/guide/plugins\n        trigger: new FormValidation.plugins.Trigger(),\n        bootstrap: new FormValidation.plugins.Bootstrap5({\n          rowSelector: '.fv-row'\n        })\n      }\n    });\n    submitButton.addEventListener('click', function (e) {\n      e.preventDefault();\n      validation.validate().then(function (status) {\n        if (status == 'Valid') {\n          // Show loading indication\n          submitButton.setAttribute('data-kt-indicator', 'on'); // Disable button to avoid multiple click\n\n          submitButton.disabled = true; // Send ajax request\n\n          axios.post(form.getAttribute('action'), new FormData(form)).then(function (response) {\n            // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/\n            Swal.fire({\n              text: \"Your password has been successfully reset.\",\n              icon: \"success\",\n              buttonsStyling: false,\n              confirmButtonText: \"Ok, got it!\",\n              customClass: {\n                confirmButton: \"btn font-weight-bold btn-light-primary\"\n              }\n            });\n          })[\"catch\"](function (error) {\n            var dataMessage = error.response.data.message;\n            var dataErrors = error.response.data.errors;\n\n            for (var errorsKey in dataErrors) {\n              if (!dataErrors.hasOwnProperty(errorsKey)) continue;\n              dataMessage += \"\\r\\n\" + dataErrors[errorsKey];\n            }\n\n            if (error.response) {\n              Swal.fire({\n                text: dataMessage,\n                icon: \"error\",\n                buttonsStyling: false,\n                confirmButtonText: \"تم !\",\n                customClass: {\n                  confirmButton: \"btn btn-primary\"\n                }\n              });\n            }\n          }).then(function () {\n            // always executed\n            // Hide loading indication\n            submitButton.removeAttribute('data-kt-indicator'); // Enable button\n\n            submitButton.disabled = false;\n          });\n        } else {\n          Swal.fire({\n            text: \"Sorry, looks like there are some errors detected, please try again.\",\n            icon: \"error\",\n            buttonsStyling: false,\n            confirmButtonText: \"تم !\",\n            customClass: {\n              confirmButton: \"btn font-weight-bold btn-light-primary\"\n            }\n          });\n        }\n      });\n    });\n  }; // Public methods\n\n\n  return {\n    init: function init() {\n      initSettings();\n      handleChangeEmail();\n      handleChangePassword();\n    }\n  };\n}(); // On document ready\n\n\nKTUtil.onDOMContentLoaded(function () {\n  KTAccountSettingsSigninMethods.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2V4dGVuZGVkL2pzL2N1c3RvbS9hY2NvdW50L3NldHRpbmdzL3NpZ25pbi1tZXRob2RzLmpzLmpzIiwibWFwcGluZ3MiOiJDQUVBOztBQUNBLElBQUlBLDhCQUE4QixHQUFHLFlBQVk7QUFDN0M7QUFDQSxNQUFJQyxZQUFZLEdBQUcsU0FBZkEsWUFBZSxHQUFZO0FBRTNCO0FBQ0EsUUFBSUMsWUFBWSxHQUFHQyxRQUFRLENBQUNDLGNBQVQsQ0FBd0IsaUJBQXhCLENBQW5CO0FBQ0EsUUFBSUMsWUFBWSxHQUFHRixRQUFRLENBQUNDLGNBQVQsQ0FBd0Isc0JBQXhCLENBQW5CO0FBQ0EsUUFBSUUsY0FBYyxHQUFHSCxRQUFRLENBQUNDLGNBQVQsQ0FBd0Isb0JBQXhCLENBQXJCO0FBQ0EsUUFBSUcsY0FBYyxHQUFHSixRQUFRLENBQUNDLGNBQVQsQ0FBd0IseUJBQXhCLENBQXJCLENBTjJCLENBUTNCOztBQUNBLFFBQUlJLGlCQUFpQixHQUFHTCxRQUFRLENBQUNDLGNBQVQsQ0FBd0Isd0JBQXhCLENBQXhCO0FBQ0EsUUFBSUssaUJBQWlCLEdBQUdOLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixrQkFBeEIsQ0FBeEI7QUFDQSxRQUFJTSxjQUFjLEdBQUdQLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QiwyQkFBeEIsQ0FBckI7QUFDQSxRQUFJTyxjQUFjLEdBQUdSLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixvQkFBeEIsQ0FBckIsQ0FaMkIsQ0FjM0I7O0FBQ0FJLElBQUFBLGlCQUFpQixDQUFDSSxhQUFsQixDQUFnQyxRQUFoQyxFQUEwQ0MsZ0JBQTFDLENBQTJELE9BQTNELEVBQW9FLFlBQVk7QUFDNUVDLE1BQUFBLGlCQUFpQjtBQUNwQixLQUZEO0FBSUFMLElBQUFBLGlCQUFpQixDQUFDSSxnQkFBbEIsQ0FBbUMsT0FBbkMsRUFBNEMsWUFBWTtBQUNwREMsTUFBQUEsaUJBQWlCO0FBQ3BCLEtBRkQ7QUFJQUosSUFBQUEsY0FBYyxDQUFDRSxh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TUFvRE87QUFDSE0sVUFBQUEsSUFBSSxDQUFDQyxJQUFMLENBQVU7QUFDTkMsWUFBQUEsSUFBSSxFQUFFLHFFQURBO0FBRU5DLFlBQUFBLElBQUksRUFBRSxPQUZBO0FBR05DLFlBQUFBLGNBQWMsRUFBRSxLQUhWO0FBSU5DLFlBQUFBLGlCQUFpQixFQUFFLE1BSmI7QUFLTkMsWUFBQUEsV0FBVyxFQUFFO0FBQ1RDLGNBQUFBLGFBQWEsRUFBRTtBQUROO0FBTFAsV0FBVjtBQVNIO0FBQ0osT0FoRUQ7QUFpRUgsS0FwRUQ7QUFxRUgsR0F4SEQsQ0E3SjZDLENBdVI3Qzs7O0FBQ0EsU0FBTztBQUNIZSxJQUFBQSxJQUFJLEVBQUUsZ0JBQVk7QUFDZHRFLE1BQUFBLFlBQVk7QUFDWmlCLE1BQUFBLGlCQUFpQjtBQUNqQitDLE1BQUFBLG9CQUFvQjtBQUN2QjtBQUxFLEdBQVA7QUFPSCxDQS9Sb0MsRUFBckMsQyxDQWlTQTs7O0FBQ0FPLE1BQU0sQ0FBQ0Msa0JBQVAsQ0FBMEIsWUFBWTtBQUNsQ3pFLEVBQUFBLDhCQUE4QixDQUFDdUUsSUFBL0I7QUFDSCxDQUZEIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9leHRlbmRlZC9qcy9jdXN0b20vYWNjb3VudC9zZXR0aW5ncy9zaWduaW4tbWV0aG9kcy5qcz84MjljIl0sInNvdXJjZXNDb250ZW50IjpbIlwidXNlIHN0cmljdFwiO1xyXG5cclxuLy8gQ2xhc3MgZGVmaW5pdGlvblxyXG52YXIgS1RBY2NvdW50U2V0dGluZ3NTaWduaW5NZXRob2RzID0gZnVuY3Rpb24gKCkge1xyXG4gICAgLy8gUHJpdmF0ZSBmdW5jdGlvbnNcclxuICAgIHZhciBpbml0U2V0dGluZ3MgPSBmdW5jdGlvbiAoKSB7XHJcblxyXG4gICAgICAgIC8vIFVJIGVsZW1lbnRzXHJcbiAgICAgICAgdmFyIHNpZ25Jbk1haW5FbCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdrdF9zaWduaW5fZW1haWwnKTtcclxuICAgICAgICB2YXIgc2lnbkluRWRpdEVsID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2t0X3NpZ25pbl9lbWFpbF9lZGl0Jyk7XHJcbiAgICAgICAgdmFyIHBhc3N3b3JkTWFpbkVsID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2t0X3NpZ25pbl9wYXNzd29yZCcpO1xyXG4gICAgICAgIHZhciBwYXNzd29yZEVkaXRFbCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdrdF9zaWduaW5fcGFzc3dvcmRfZWRpdCcpO1xyXG5cclxuICAgICAgICAvLyBidXR0b24gZWxlbWVudHNcclxuICAgICAgICB2YXIgc2lnbkluQ2hhbmdlRW1haWwgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgna3Rfc2lnbmluX2VtYWlsX2J1dHRvbicpO1xyXG4gICAgICAgIHZhciBzaWduSW5DYW5jZWxFbWFpbCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdrdF9zaWduaW5fY2FuY2VsJyk7XHJcbiAgICAgICAgdmFyIHBhc3N3b3JkQ2hhbmdlID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2t0X3NpZ25pbl9wYXNzd29yZF9idXR0b24nKTtcclxuICAgICAgICB2YXIgcGFzc3dvcmRDYW5jZWwgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgna3RfcGFzc3dvcmRfY2FuY2VsJyk7XHJcblxyXG4gICAgICAgIC8vIHRvZ2dsZSBVSVxyXG4gICAgICAgIHNpZ25JbkNoYW5nZUVtYWlsLnF1ZXJ5U2VsZWN0b3IoJ2J1dHRvbicpLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICB0b2dnbGVDaGFuZ2VFbWFpbCgpO1xyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICBzaWduSW5DYW5jZWxFbWFpbC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAgICAgdG9nZ2xlQ2hhbmdlRW1haWwoKTtcclxuICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgcGFzc3dvcmRDaGFuZ2UucXVlcnlTZWxlY3RvcignYnV0dG9uJykuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgIHRvZ2dsZUNoYW5nZVBhc3N3b3JkKCk7XHJcbiAgICAgICAgfSk7XHJcblxyXG4gICAgICAgIHBhc3N3b3JkQ2FuY2VsLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICB0b2dnbGVDaGFuZ2VQYXNzd29yZCgpO1xyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICB2YXIgdG9nZ2xlQ2hhbmdlRW1haWwgPSBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgIHNpZ25Jbk1haW5FbC5jbGFzc0xpc3QudG9nZ2xlKCdkLW5vbmUnKTtcclxuICAgICAgICAgICAgc2lnbkluQ2hhbmdlRW1haWwuY2xhc3NMaXN0LnRvZ2dsZSgnZC1ub25lJyk7XHJcbiAgICAgICAgICAgIHNpZ25JbkVkaXRFbC5jbGFzc0xpc3QudG9nZ2xlKCdkLW5vbmUnKTtcclxuICAgICAgICB9XHJcblxyXG4gICAgICAgIHZhciB0b2dnbGVDaGFuZ2VQYXNzd29yZCA9IGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAgICAgcGFzc3dvcmRNYWluRWwuY2xhc3NMaXN0LnRvZ2dsZSgnZC1ub25lJyk7XHJcbiAgICAgICAgICAgIHBhc3N3b3JkQ2hhbmdlLmNsYXNzTGlzdC50b2dnbGUoJ2Qtbm9uZScpO1xyXG4gICAgICAgICAgICBwYXNzd29yZEVkaXRFbC5jbGFzc0xpc3QudG9nZ2xlKCdkLW5vbmUnKTtcclxuICAgICAgICB9XHJcbiAgICB9XHJcblxyXG4gICAgdmFyIGhhbmRsZUNoYW5nZUVtYWlsID0gZnVuY3Rpb24gKGUpIHtcclxuICAgICAgICB2YXIgdmFsaWRhdGlvbjtcclxuXHJcbiAgICAgICAgLy8gZm9ybSBlbGVtZW50c1xyXG4gICAgICAgIHZhciBmb3JtID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2t0X3NpZ25pbl9jaGFuZ2VfZW1haWwnKTtcclxuICAgICAgICB2YXIgc3VibWl0QnV0dG9uID0gZm9ybS5xdWVyeVNlbGVjdG9yKCcja3Rfc2lnbmluX3N1Ym1pdCcpO1xyXG5cclxuICAgICAgICB2YWxpZGF0aW9uID0gRm9ybVZhbGlkYXRpb24uZm9ybVZhbGlkYXRpb24oXHJcbiAgICAgICAgICAgIGZvcm0sXHJcbiAgICAgICAgICAgIHtcclxuICAgICAgICAgICAgICAgIGZpZWxkczoge1xyXG4gICAgICAgICAgICAgICAgICAgIGVtYWlsOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHZhbGlkYXRvcnM6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIG5vdEVtcHR5OiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbWVzc2FnZTogJ9in2YTYqNix2YrYryDYp9mE2KfZhNmD2KrYsdmI2YbZiiDZhdi32YTZiNioJ1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGVtYWlsQWRkcmVzczoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1lc3NhZ2U6ICfYp9mE2YLZitmF2Kkg2YTZitiz2Kog2LnZhtmI2KfZhiDYqNix2YrYryDYpdmE2YPYqtix2YjZhtmKINi12KfZhNit2YvYpydcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgIH0sXHJcblxyXG4gICAgICAgICAgICAgICAgICAgIHBhc3N3b3JkOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHZhbGlkYXRvcnM6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIG5vdEVtcHR5OiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbWVzc2FnZTogJ9mD2YTZhdipINin2YTZhdix2YjYsSDZhdi32YTZiNio2KknXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICB9LFxyXG5cclxuICAgICAgICAgICAgICAgIHBsdWdpbnM6IHsgLy9MZWFybiBtb3JlOiBodHRwczovL2Zvcm12YWxpZGF0aW9uLmlvL2d1aWRlL3BsdWdpbnNcclxuICAgICAgICAgICAgICAgICAgICB0cmlnZ2VyOiBuZXcgRm9ybVZhbGlkYXRpb24ucGx1Z2lucy5UcmlnZ2VyKCksXHJcbiAgICAgICAgICAgICAgICAgICAgYm9vdHN0cmFwOiBuZXcgRm9ybVZhbGlkYXRpb24ucGx1Z2lucy5Cb290c3RyYXA1KHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgcm93U2VsZWN0b3I6ICcuZnYtcm93J1xyXG4gICAgICAgICAgICAgICAgICAgIH0pXHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICApO1xyXG5cclxuICAgICAgICBzdWJtaXRCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xyXG4gICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XHJcblxyXG4gICAgICAgICAgICB2YWxpZGF0aW9uLnZhbGlkYXRlKCkudGhlbihmdW5jdGlvbiAoc3RhdHVzKSB7XHJcbiAgICAgICAgICAgICAgICBpZiAoc3RhdHVzID09PSAnVmFsaWQnKSB7XHJcblxyXG4gICAgICAgICAgICAgICAgICAgIC8vIFNob3cgbG9hZGluZyBpbmRpY2F0aW9uXHJcbiAgICAgICAgICAgICAgICAgICAgc3VibWl0QnV0dG9uLnNldEF0dHJpYnV0ZSgnZGF0YS1rdC1pbmRpY2F0b3InLCAnb24nKTtcclxuXHJcbiAgICAgICAgICAgICAgICAgICAgLy8gRGlzYWJsZSBidXR0b24gdG8gYXZvaWQgbXVsdGlwbGUgY2xpY2tcclxuICAgICAgICAgICAgICAgICAgICBzdWJtaXRCdXR0b24uZGlzYWJsZWQgPSB0cnVlO1xyXG5cclxuICAgICAgICAgICAgICAgICAgICAvLyBTZW5kIGFqYXggcmVxdWVzdFxyXG4gICAgICAgICAgICAgICAgICAgIGF4aW9zLnBvc3QoZm9ybS5nZXRBdHRyaWJ1dGUoJ2FjdGlvbicpLCBuZXcgRm9ybURhdGEoZm9ybSkpXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIC50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gU2hvdyBtZXNzYWdlIHBvcHVwLiBGb3IgbW9yZSBpbmZvIGNoZWNrIHRoZSBwbHVnaW4ncyBvZmZpY2lhbCBkb2N1bWVudGF0aW9uOiBodHRwczovL3N3ZWV0YWxlcnQyLmdpdGh1Yi5pby9cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIFN3YWwuZmlyZSh7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dDogXCLYqtmFINiq2LrZitmK2LEg2KjYsdmK2K/ZgyDYp9mE2KXZhNmD2KrYsdmI2YbZiiDYqNmG2KzYp9itLlwiLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGljb246IFwic3VjY2Vzc1wiLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJ1dHRvbnNTdHlsaW5nOiBmYWxzZSxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uVGV4dDogXCLYqtmFICFcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjdXN0b21DbGFzczoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uOiBcImJ0biBmb250LXdlaWdodC1ib2xkIGJ0bi1saWdodC1wcmltYXJ5XCJcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTtcclxuICAgICAgICAgICAgICAgICAgICAgICAgfSlcclxuICAgICAgICAgICAgICAgICAgICAgICAgLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IGRhdGFNZXNzYWdlID0gZXJyb3IucmVzcG9uc2UuZGF0YS5tZXNzYWdlO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IGRhdGFFcnJvcnMgPSBlcnJvci5yZXNwb25zZS5kYXRhLmVycm9ycztcclxuXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBmb3IgKGNvbnN0IGVycm9yc0tleSBpbiBkYXRhRXJyb3JzKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKCFkYXRhRXJyb3JzLmhhc093blByb3BlcnR5KGVycm9yc0tleSkpIGNvbnRpbnVlO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGFNZXNzYWdlICs9IFwiXFxyXFxuXCIgKyBkYXRhRXJyb3JzW2Vycm9yc0tleV07XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XHJcblxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGVycm9yLnJlc3BvbnNlKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgU3dhbC5maXJlKHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dDogZGF0YU1lc3NhZ2UsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGljb246IFwiZXJyb3JcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYnV0dG9uc1N0eWxpbmc6IGZhbHNlLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uVGV4dDogXCLYqtmFICFcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY3VzdG9tQ2xhc3M6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b246IFwiYnRuIGJ0bi1wcmltYXJ5XCJcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9KVxyXG4gICAgICAgICAgICAgICAgICAgICAgICAudGhlbihmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyBhbHdheXMgZXhlY3V0ZWRcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8vIEhpZGUgbG9hZGluZyBpbmRpY2F0aW9uXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdWJtaXRCdXR0b24ucmVtb3ZlQXR0cmlidXRlKCdkYXRhLWt0LWluZGljYXRvcicpO1xyXG5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8vIEVuYWJsZSBidXR0b25cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN1Ym1pdEJ1dHRvbi5kaXNhYmxlZCA9IGZhbHNlO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICAgICAgICAgIFN3YWwuZmlyZSh7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHRleHQ6IFwiU29ycnksIGxvb2tzIGxpa2UgdGhlcmUgYXJlIHNvbWUgZXJyb3JzIGRldGVjdGVkLCBwbGVhc2UgdHJ5IGFnYWluLlwiLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICBpY29uOiBcImVycm9yXCIsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGJ1dHRvbnNTdHlsaW5nOiBmYWxzZSxcclxuICAgICAgICAgICAgICAgICAgICAgICAgY29uZmlybUJ1dHRvblRleHQ6IFwi2KrZhSAhXCIsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGN1c3RvbUNsYXNzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uOiBcImJ0biBmb250LXdlaWdodC1ib2xkIGJ0bi1saWdodC1wcmltYXJ5XCJcclxuICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgIH0pO1xyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9KTtcclxuICAgICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgICB2YXIgaGFuZGxlQ2hhbmdlUGFzc3dvcmQgPSBmdW5jdGlvbiAoZSkge1xyXG4gICAgICAgIHZhciB2YWxpZGF0aW9uO1xyXG5cclxuICAgICAgICAvLyBmb3JtIGVsZW1lbnRzXHJcbiAgICAgICAgdmFyIGZvcm0gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgna3Rfc2lnbmluX2NoYW5nZV9wYXNzd29yZCcpO1xyXG4gICAgICAgIHZhciBzdWJtaXRCdXR0b24gPSBmb3JtLnF1ZXJ5U2VsZWN0b3IoJyNrdF9wYXNzd29yZF9zdWJtaXQnKTtcclxuXHJcbiAgICAgICAgdmFsaWRhdGlvbiA9IEZvcm1WYWxpZGF0aW9uLmZvcm1WYWxpZGF0aW9uKFxyXG4gICAgICAgICAgICBmb3JtLFxyXG4gICAgICAgICAgICB7XHJcbiAgICAgICAgICAgICAgICBmaWVsZHM6IHtcclxuICAgICAgICAgICAgICAgICAgICBjdXJyZW50X3Bhc3N3b3JkOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHZhbGlkYXRvcnM6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIG5vdEVtcHR5OiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbWVzc2FnZTogJ0N1cnJlbnQgUGFzc3dvcmQgaXMgcmVxdWlyZWQnXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICB9LFxyXG5cclxuICAgICAgICAgICAgICAgICAgICBwYXNzd29yZDoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB2YWxpZGF0b3JzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBub3RFbXB0eToge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1lc3NhZ2U6ICdOZXcgUGFzc3dvcmQgaXMgcmVxdWlyZWQnXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICB9LFxyXG5cclxuICAgICAgICAgICAgICAgICAgICBwYXNzd29yZF9jb25maXJtYXRpb246IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgdmFsaWRhdG9yczoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbm90RW1wdHk6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtZXNzYWdlOiAnQ29uZmlybSBQYXNzd29yZCBpcyByZXF1aXJlZCdcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZGVudGljYWw6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb21wYXJlOiBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiBmb3JtLnF1ZXJ5U2VsZWN0b3IoJ1tuYW1lPVwicGFzc3dvcmRcIl0nKS52YWx1ZTtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1lc3NhZ2U6ICdUaGUgcGFzc3dvcmQgYW5kIGl0cyBjb25maXJtIGFyZSBub3QgdGhlIHNhbWUnXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAgICAgfSxcclxuXHJcbiAgICAgICAgICAgICAgICBwbHVnaW5zOiB7IC8vTGVhcm4gbW9yZTogaHR0cHM6Ly9mb3JtdmFsaWRhdGlvbi5pby9ndWlkZS9wbHVnaW5zXHJcbiAgICAgICAgICAgICAgICAgICAgdHJpZ2dlcjogbmV3IEZvcm1WYWxpZGF0aW9uLnBsdWdpbnMuVHJpZ2dlcigpLFxyXG4gICAgICAgICAgICAgICAgICAgIGJvb3RzdHJhcDogbmV3IEZvcm1WYWxpZGF0aW9uLnBsdWdpbnMuQm9vdHN0cmFwNSh7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHJvd1NlbGVjdG9yOiAnLmZ2LXJvdydcclxuICAgICAgICAgICAgICAgICAgICB9KVxyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgKTtcclxuXHJcbiAgICAgICAgc3VibWl0QnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcclxuICAgICAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cclxuICAgICAgICAgICAgdmFsaWRhdGlvbi52YWxpZGF0ZSgpLnRoZW4oZnVuY3Rpb24gKHN0YXR1cykge1xyXG4gICAgICAgICAgICAgICAgaWYgKHN0YXR1cyA9PSAnVmFsaWQnKSB7XHJcblxyXG4gICAgICAgICAgICAgICAgICAgIC8vIFNob3cgbG9hZGluZyBpbmRpY2F0aW9uXHJcbiAgICAgICAgICAgICAgICAgICAgc3VibWl0QnV0dG9uLnNldEF0dHJpYnV0ZSgnZGF0YS1rdC1pbmRpY2F0b3InLCAnb24nKTtcclxuXHJcbiAgICAgICAgICAgICAgICAgICAgLy8gRGlzYWJsZSBidXR0b24gdG8gYXZvaWQgbXVsdGlwbGUgY2xpY2tcclxuICAgICAgICAgICAgICAgICAgICBzdWJtaXRCdXR0b24uZGlzYWJsZWQgPSB0cnVlO1xyXG5cclxuICAgICAgICAgICAgICAgICAgICAvLyBTZW5kIGFqYXggcmVxdWVzdFxyXG4gICAgICAgICAgICAgICAgICAgIGF4aW9zLnBvc3QoZm9ybS5nZXRBdHRyaWJ1dGUoJ2FjdGlvbicpLCBuZXcgRm9ybURhdGEoZm9ybSkpXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIC50aGVuKGZ1bmN0aW9uIChyZXNwb25zZSkge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gU2hvdyBtZXNzYWdlIHBvcHVwLiBGb3IgbW9yZSBpbmZvIGNoZWNrIHRoZSBwbHVnaW4ncyBvZmZpY2lhbCBkb2N1bWVudGF0aW9uOiBodHRwczovL3N3ZWV0YWxlcnQyLmdpdGh1Yi5pby9cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIFN3YWwuZmlyZSh7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dDogXCJZb3VyIHBhc3N3b3JkIGhhcyBiZWVuIHN1Y2Nlc3NmdWxseSByZXNldC5cIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpY29uOiBcInN1Y2Nlc3NcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBidXR0b25zU3R5bGluZzogZmFsc2UsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY29uZmlybUJ1dHRvblRleHQ6IFwiT2ssIGdvdCBpdCFcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjdXN0b21DbGFzczoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uOiBcImJ0biBmb250LXdlaWdodC1ib2xkIGJ0bi1saWdodC1wcmltYXJ5XCJcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTtcclxuICAgICAgICAgICAgICAgICAgICAgICAgfSlcclxuICAgICAgICAgICAgICAgICAgICAgICAgLmNhdGNoKGZ1bmN0aW9uIChlcnJvcikge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IGRhdGFNZXNzYWdlID0gZXJyb3IucmVzcG9uc2UuZGF0YS5tZXNzYWdlO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IGRhdGFFcnJvcnMgPSBlcnJvci5yZXNwb25zZS5kYXRhLmVycm9ycztcclxuXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBmb3IgKGNvbnN0IGVycm9yc0tleSBpbiBkYXRhRXJyb3JzKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKCFkYXRhRXJyb3JzLmhhc093blByb3BlcnR5KGVycm9yc0tleSkpIGNvbnRpbnVlO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGFNZXNzYWdlICs9IFwiXFxyXFxuXCIgKyBkYXRhRXJyb3JzW2Vycm9yc0tleV07XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XHJcblxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGVycm9yLnJlc3BvbnNlKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgU3dhbC5maXJlKHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dDogZGF0YU1lc3NhZ2UsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGljb246IFwiZXJyb3JcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYnV0dG9uc1N0eWxpbmc6IGZhbHNlLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uVGV4dDogXCLYqtmFICFcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY3VzdG9tQ2xhc3M6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b246IFwiYnRuIGJ0bi1wcmltYXJ5XCJcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9KVxyXG4gICAgICAgICAgICAgICAgICAgICAgICAudGhlbihmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyBhbHdheXMgZXhlY3V0ZWRcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8vIEhpZGUgbG9hZGluZyBpbmRpY2F0aW9uXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdWJtaXRCdXR0b24ucmVtb3ZlQXR0cmlidXRlKCdkYXRhLWt0LWluZGljYXRvcicpO1xyXG5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8vIEVuYWJsZSBidXR0b25cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN1Ym1pdEJ1dHRvbi5kaXNhYmxlZCA9IGZhbHNlO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICAgICAgICAgIFN3YWwuZmlyZSh7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHRleHQ6IFwiU29ycnksIGxvb2tzIGxpa2UgdGhlcmUgYXJlIHNvbWUgZXJyb3JzIGRldGVjdGVkLCBwbGVhc2UgdHJ5IGFnYWluLlwiLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICBpY29uOiBcImVycm9yXCIsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGJ1dHRvbnNTdHlsaW5nOiBmYWxzZSxcclxuICAgICAgICAgICAgICAgICAgICAgICAgY29uZmlybUJ1dHRvblRleHQ6IFwi2KrZhSAhXCIsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGN1c3RvbUNsYXNzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uOiBcImJ0biBmb250LXdlaWdodC1ib2xkIGJ0bi1saWdodC1wcmltYXJ5XCJcclxuICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgIH0pO1xyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9KTtcclxuICAgICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgICAvLyBQdWJsaWMgbWV0aG9kc1xyXG4gICAgcmV0dXJuIHtcclxuICAgICAgICBpbml0OiBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgIGluaXRTZXR0aW5ncygpO1xyXG4gICAgICAgICAgICBoYW5kbGVDaGFuZ2VFbWFpbCgpO1xyXG4gICAgICAgICAgICBoYW5kbGVDaGFuZ2VQYXNzd29yZCgpO1xyXG4gICAgICAgIH1cclxuICAgIH1cclxufSgpO1xyXG5cclxuLy8gT24gZG9jdW1lbnQgcmVhZHlcclxuS1RVdGlsLm9uRE9NQ29udGVudExvYWRlZChmdW5jdGlvbiAoKSB7XHJcbiAgICBLVEFjY291bnRTZXR0aW5nc1NpZ25pbk1ldGhvZHMuaW5pdCgpO1xyXG59KTtcclxuIl0sIm5hbWVzIjpbIktUQWNjb3VudFNldHRpbmdzU2lnbmluTWV0aG9kcyIsImluaXRTZXR0aW5ncyIsInNpZ25Jbk1haW5FbCIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJzaWduSW5FZGl0RWwiLCJwYXNzd29yZE1haW5FbCIsInBhc3N3b3JkRWRpdEVsIiwic2lnbkluQ2hhbmdlRW1haWwiLCJzaWduSW5DYW5jZWxFbWFpbCIsInBhc3N3b3JkQ2hhbmdlIiwicGFzc3dvcmRDYW5jZWwiLCJxdWVyeVNlbGVjdG9yIiwiYWRkRXZlbnRMaXN0ZW5lciIsInRvZ2dsZUNoYW5nZUVtYWlsIiwidG9nZ2xlQ2hhbmdlUGFzc3dvcmQiLCJjbGFzc0xpc3QiLCJ0b2dnbGUiLCJoYW5kbGVDaGFuZ2VFbWFpbCIsImUiLCJ2YWxpZGF0aW9uIiwiZm9ybSIsInN1Ym1pdEJ1dHRvbiIsIkZvcm1WYWxpZGF0aW9uIiwiZm9ybVZhbGlkYXRpb24iLCJmaWVsZHMiLCJlbWFpbCIsInZhbGlkYXRvcnMiLCJub3RFbXB0eSIsIm1lc3NhZ2UiLCJlbWFpbEFkZHJlc3MiLCJwYXNzd29yZCIsInBsdWdpbnMiLCJ0cmlnZ2VyIiwiVHJpZ2dlciIsImJvb3RzdHJhcCIsIkJvb3RzdHJhcDUiLCJyb3dTZWxlY3RvciIsInByZXZlbnREZWZhdWx0IiwidmFsaWRhdGUiLCJ0aGVuIiwic3RhdHVzIiwic2V0QXR0cmlidXRlIiwiZGlzYWJsZWQiLCJheGlvcyIsInBvc3QiLCJnZXRBdHRyaWJ1dGUiLCJGb3JtRGF0YSIsInJlc3BvbnNlIiwiU3dhbCIsImZpcmUiLCJ0ZXh0IiwiaWNvbiIsImJ1dHRvbnNTdHlsaW5nIiwiY29uZmlybUJ1dHRvblRleHQiLCJjdXN0b21DbGFzcyIsImNvbmZpcm1CdXR0b24iLCJlcnJvciIsImRhdGFNZXNzYWdlIiwiZGF0YSIsImRhdGFFcnJvcnMiLCJlcnJvcnMiLCJlcnJvcnNLZXkiLCJoYXNPd25Qcm9wZXJ0eSIsInJlbW92ZUF0dHJpYnV0ZSIsImhhbmRsZUNoYW5nZVBhc3N3b3JkIiwiY3VycmVudF9wYXNzd29yZCIsInBhc3N3b3JkX2NvbmZpcm1hdGlvbiIsImlkZW50aWNhbCIsImNvbXBhcmUiLCJ2YWx1ZSIsImluaXQiLCJLVFV0aWwiLCJvbkRPTUNvbnRlbnRMb2FkZWQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/extended/js/custom/account/settings/signin-methods.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/extended/js/custom/account/settings/signin-methods.js"]();
/******/ 	
/******/ })()
;