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

/***/ "./resources/assets/extended/js/custom/user-management/roles/view/update-role.js":
/*!***************************************************************************************!*\
  !*** ./resources/assets/extended/js/custom/user-management/roles/view/update-role.js ***!
  \***************************************************************************************/
/***/ (() => {

eval(" // Class definition\n\nvar KTUsersUpdatePermissions = function () {\n  // Shared variables\n  var element = document.getElementById('kt_modal_update_role');\n  var form = element.querySelector('#kt_modal_update_role_form');\n  var modal = new bootstrap.Modal(element); // Init add schedule modal\n\n  var initUpdatePermissions = function initUpdatePermissions() {\n    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/\n    var validator = FormValidation.formValidation(form, {\n      fields: {\n        'role_name': {\n          validators: {\n            notEmpty: {\n              message: 'Role name is required'\n            }\n          }\n        }\n      },\n      plugins: {\n        trigger: new FormValidation.plugins.Trigger(),\n        bootstrap: new FormValidation.plugins.Bootstrap5({\n          rowSelector: '.fv-row',\n          eleInvalidClass: '',\n          eleValidClass: ''\n        })\n      }\n    }); // Close button handler\n\n    var closeButton = element.querySelector('[data-kt-roles-modal-action=\"close\"]');\n    closeButton.addEventListener('click', function (e) {\n      e.preventDefault();\n      Swal.fire({\n        text: \"Are you sure you would like to close?\",\n        icon: \"warning\",\n        showCancelButton: true,\n        buttonsStyling: false,\n        confirmButtonText: \"Yes, close it!\",\n        cancelButtonText: \"No, return\",\n        customClass: {\n          confirmButton: \"btn btn-primary\",\n          cancelButton: \"btn btn-active-light\"\n        }\n      }).then(function (result) {\n        if (result.value) {\n          modal.hide(); // Hide modal\t\t\t\t\n        }\n      });\n    }); // Cancel button handler\n\n    var cancelButton = element.querySelector('[data-kt-roles-modal-action=\"cancel\"]');\n    cancelButton.addEventListener('click', function (e) {\n      e.preventDefault();\n      Swal.fire({\n        text: \"Are you sure you would like to cancel?\",\n        icon: \"warning\",\n        showCancelButton: true,\n        buttonsStyling: false,\n        confirmButtonText: \"Yes, cancel it!\",\n        cancelButtonText: \"No, return\",\n        customClass: {\n          confirmButton: \"btn btn-primary\",\n          cancelButton: \"btn btn-active-light\"\n        }\n      }).then(function (result) {\n        if (result.value) {\n          form.reset(); // Reset form\t\n\n          modal.hide(); // Hide modal\t\t\t\t\n        } else if (result.dismiss === 'cancel') {\n          Swal.fire({\n            text: \"Your form has not been cancelled!.\",\n            icon: \"error\",\n            buttonsStyling: false,\n            confirmButtonText: \"Ok, got it!\",\n            customClass: {\n              confirmButton: \"btn btn-primary\"\n            }\n          });\n        }\n      });\n    }); // Submit button handler\n\n    var submitButton = element.querySelector('[data-kt-roles-modal-action=\"submit\"]');\n    submitButton.addEventListener('click', function (e) {\n      // Prevent default button action\n      e.preventDefault(); // Validate form before submit\n\n      if (validator) {\n        validator.validate().then(function (status) {\n          console.log('validated!');\n\n          if (status == 'Valid') {\n            // Show loading indication\n            submitButton.setAttribute('data-kt-indicator', 'on'); // Disable button to avoid multiple click \n\n            submitButton.disabled = true; // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/\n\n            setTimeout(function () {\n              // Remove loading indication\n              submitButton.removeAttribute('data-kt-indicator'); // Enable button\n\n              submitButton.disabled = false; // Show popup confirmation \n\n              Swal.fire({\n                text: \"Form has been successfully submitted!\",\n                icon: \"success\",\n                buttonsStyling: false,\n                confirmButtonText: \"Ok, got it!\",\n                customClass: {\n                  confirmButton: \"btn btn-primary\"\n                }\n              }).then(function (result) {\n                if (result.isConfirmed) {\n                  modal.hide();\n                }\n              }); //form.submit(); // Submit form\n            }, 2000);\n          } else {\n            // Show popup warning. For more info check the plugin's official documentation: https://sweetalert2.github.io/\n            Swal.fire({\n              text: \"Sorry, looks like there are some errors detected, please try again.\",\n              icon: \"error\",\n              buttonsStyling: false,\n              confirmButtonText: \"Ok, got it!\",\n              customClass: {\n                confirmButton: \"btn btn-primary\"\n              }\n            });\n          }\n        });\n      }\n    });\n  }; // Select all handler\n\n\n  var handleSelectAll = function handleSelectAll() {\n    // Define variables\n    var selectAll = form.querySelector('#kt_roles_select_all');\n    var allCheckboxes = form.querySelectorAll('[type=\"checkbox\"]'); // Handle check state\n\n    selectAll.addEventListener('change', function (e) {\n      // Apply check state to all checkboxes\n      allCheckboxes.forEach(function (c) {\n        c.checked = e.target.checked;\n      });\n    });\n  };\n\n  return {\n    // Public functions\n    init: function init() {\n      initUpdatePermissions();\n      handleSelectAll();\n    }\n  };\n}(); // On document ready\n\n\nKTUtil.onDOMContentLoaded(function () {\n  KTUsersUpdatePermissions.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2V4dGVuZGVkL2pzL2N1c3RvbS91c2VyLW1hbmFnZW1lbnQvcm9sZXMvdmlldy91cGRhdGUtcm9sZS5qcy5qcyIsIm1hcHBpbmdzIjoiQ0FFQTs7QUFDQSxJQUFJQSx3QkFBd0IsR0FBRyxZQUFZO0FBQ3ZDO0FBQ0EsTUFBTUMsT0FBTyxHQUFHQyxRQUFRLENBQUNDLGNBQVQsQ0FBd0Isc0JBQXhCLENBQWhCO0FBQ0EsTUFBTUMsSUFBSSxHQUFHSCxPQUFPLENBQUNJLGFBQVIsQ0FBc0IsNEJBQXRCLENBQWI7QUFDQSxNQUFNQyxLQUFLLEdBQUcsSUFBSUMsU0FBUyxDQUFDQyxLQUFkLENBQW9CUCxPQUFwQixDQUFkLENBSnVDLENBTXZDOztBQUNBLE1BQUlRLHFCQUFxQixHQUFHLFNBQXhCQSxxQkFBd0IsR0FBTTtBQUU5QjtBQUNBLFFBQUlDLFNBQVMsR0FBR0MsY0FBYyxDQUFDQyxjQUFmLENBQ1pSLElBRFksRUFFWjtBQUNJUyxNQUFBQSxNQUFNLEVBQUU7QUFDSixxQkFBYTtBQUNUQyxVQUFBQSxVQUFVLEVBQUU7QUFDUkMsWUFBQUEsUUFBUSxFQUFFO0FBQ05DLGNBQUFBLE9BQU8sRUFBRTtBQURIO0FBREY7QUFESDtBQURULE9BRFo7QUFXSUMsTUFBQUEsT0FBTyxFQUFFO0FBQ0xDLFFBQUFBLE9BQU8sRUFBRSxJQUFJUCxjQUFjLENBQUNNLE9BQWYsQ0FBdUJFLE9BQTNCLEVBREo7QUFFTFosUUFBQUEsU0FBUyxFQUFFLElBQUlJLGNBQWMsQ0FBQ00sT0FBZixDQUF1QkcsVUFBM0IsQ0FBc0M7QUFDN0NDLFVBQUFBLFdBQVcsRUFBRSxTQURnQztBQUU3Q0MsVUFBQUEsZUFBZSxFQUFFLEVBRjRCO0FBRzdDQyxVQUFBQSxhQUFhLEVBQUU7QUFIOEIsU0FBdEM7QUFGTjtBQVhiLEtBRlksQ0FBaEIsQ0FIOEIsQ0EyQjlCOztBQUNBLFFBQU1DLFdBQVcsR0FBR3ZCLE9BQU8sQ0FBQ0ksYUFBUixDQUFzQixzQ0FBdEIsQ0FB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QWxCQSxlQUFrQixHQUFNO0FBQzFCO0FBQ0EsUUFBTUMsU0FBUyxHQUFHcEQsSUFBSSxDQUFDQyxhQUFMLENBQW1CLHNCQUFuQixDQUFsQjtBQUNBLFFBQU1vRCxhQUFhLEdBQUdyRCxJQUFJLENBQUNzRCxnQkFBTCxDQUFzQixtQkFBdEIsQ0FBdEIsQ0FIMEIsQ0FLMUI7O0FBQ0FGLElBQUFBLFNBQVMsQ0FBQy9CLGdCQUFWLENBQTJCLFFBQTNCLEVBQXFDLFVBQUFDLENBQUMsRUFBSTtBQUV0QztBQUNBK0IsTUFBQUEsYUFBYSxDQUFDRSxPQUFkLENBQXNCLFVBQUFDLENBQUMsRUFBSTtBQUN2QkEsUUFBQUEsQ0FBQyxDQUFDQyxPQUFGLEdBQVluQyxDQUFDLENBQUNvQyxNQUFGLENBQVNELE9BQXJCO0FBQ0gsT0FGRDtBQUdILEtBTkQ7QUFPSCxHQWJEOztBQWVBLFNBQU87QUFDSDtBQUNBRSxJQUFBQSxJQUFJLEVBQUUsZ0JBQVk7QUFDZHRELE1BQUFBLHFCQUFxQjtBQUNyQjhDLE1BQUFBLGVBQWU7QUFDbEI7QUFMRSxHQUFQO0FBT0gsQ0E5SzhCLEVBQS9CLEMsQ0FnTEE7OztBQUNBUyxNQUFNLENBQUNDLGtCQUFQLENBQTBCLFlBQVk7QUFDbENqRSxFQUFBQSx3QkFBd0IsQ0FBQytELElBQXpCO0FBQ0gsQ0FGRCIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvZXh0ZW5kZWQvanMvY3VzdG9tL3VzZXItbWFuYWdlbWVudC9yb2xlcy92aWV3L3VwZGF0ZS1yb2xlLmpzP2Q2ODYiXSwic291cmNlc0NvbnRlbnQiOlsiXCJ1c2Ugc3RyaWN0XCI7XHJcblxyXG4vLyBDbGFzcyBkZWZpbml0aW9uXHJcbnZhciBLVFVzZXJzVXBkYXRlUGVybWlzc2lvbnMgPSBmdW5jdGlvbiAoKSB7XHJcbiAgICAvLyBTaGFyZWQgdmFyaWFibGVzXHJcbiAgICBjb25zdCBlbGVtZW50ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2t0X21vZGFsX3VwZGF0ZV9yb2xlJyk7XHJcbiAgICBjb25zdCBmb3JtID0gZWxlbWVudC5xdWVyeVNlbGVjdG9yKCcja3RfbW9kYWxfdXBkYXRlX3JvbGVfZm9ybScpO1xyXG4gICAgY29uc3QgbW9kYWwgPSBuZXcgYm9vdHN0cmFwLk1vZGFsKGVsZW1lbnQpO1xyXG5cclxuICAgIC8vIEluaXQgYWRkIHNjaGVkdWxlIG1vZGFsXHJcbiAgICB2YXIgaW5pdFVwZGF0ZVBlcm1pc3Npb25zID0gKCkgPT4ge1xyXG5cclxuICAgICAgICAvLyBJbml0IGZvcm0gdmFsaWRhdGlvbiBydWxlcy4gRm9yIG1vcmUgaW5mbyBjaGVjayB0aGUgRm9ybVZhbGlkYXRpb24gcGx1Z2luJ3Mgb2ZmaWNpYWwgZG9jdW1lbnRhdGlvbjpodHRwczovL2Zvcm12YWxpZGF0aW9uLmlvL1xyXG4gICAgICAgIHZhciB2YWxpZGF0b3IgPSBGb3JtVmFsaWRhdGlvbi5mb3JtVmFsaWRhdGlvbihcclxuICAgICAgICAgICAgZm9ybSxcclxuICAgICAgICAgICAge1xyXG4gICAgICAgICAgICAgICAgZmllbGRzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgJ3JvbGVfbmFtZSc6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgdmFsaWRhdG9yczoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbm90RW1wdHk6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtZXNzYWdlOiAnUm9sZSBuYW1lIGlzIHJlcXVpcmVkJ1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgIH0sXHJcblxyXG4gICAgICAgICAgICAgICAgcGx1Z2luczoge1xyXG4gICAgICAgICAgICAgICAgICAgIHRyaWdnZXI6IG5ldyBGb3JtVmFsaWRhdGlvbi5wbHVnaW5zLlRyaWdnZXIoKSxcclxuICAgICAgICAgICAgICAgICAgICBib290c3RyYXA6IG5ldyBGb3JtVmFsaWRhdGlvbi5wbHVnaW5zLkJvb3RzdHJhcDUoe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICByb3dTZWxlY3RvcjogJy5mdi1yb3cnLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICBlbGVJbnZhbGlkQ2xhc3M6ICcnLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICBlbGVWYWxpZENsYXNzOiAnJ1xyXG4gICAgICAgICAgICAgICAgICAgIH0pXHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICApO1xyXG5cclxuICAgICAgICAvLyBDbG9zZSBidXR0b24gaGFuZGxlclxyXG4gICAgICAgIGNvbnN0IGNsb3NlQnV0dG9uID0gZWxlbWVudC5xdWVyeVNlbGVjdG9yKCdbZGF0YS1rdC1yb2xlcy1tb2RhbC1hY3Rpb249XCJjbG9zZVwiXScpO1xyXG4gICAgICAgIGNsb3NlQnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZSA9PiB7XHJcbiAgICAgICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuXHJcbiAgICAgICAgICAgIFN3YWwuZmlyZSh7XHJcbiAgICAgICAgICAgICAgICB0ZXh0OiBcIkFyZSB5b3Ugc3VyZSB5b3Ugd291bGQgbGlrZSB0byBjbG9zZT9cIixcclxuICAgICAgICAgICAgICAgIGljb246IFwid2FybmluZ1wiLFxyXG4gICAgICAgICAgICAgICAgc2hvd0NhbmNlbEJ1dHRvbjogdHJ1ZSxcclxuICAgICAgICAgICAgICAgIGJ1dHRvbnNTdHlsaW5nOiBmYWxzZSxcclxuICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b25UZXh0OiBcIlllcywgY2xvc2UgaXQhXCIsXHJcbiAgICAgICAgICAgICAgICBjYW5jZWxCdXR0b25UZXh0OiBcIk5vLCByZXR1cm5cIixcclxuICAgICAgICAgICAgICAgIGN1c3RvbUNsYXNzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgY29uZmlybUJ1dHRvbjogXCJidG4gYnRuLXByaW1hcnlcIixcclxuICAgICAgICAgICAgICAgICAgICBjYW5jZWxCdXR0b246IFwiYnRuIGJ0bi1hY3RpdmUtbGlnaHRcIlxyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXN1bHQpIHtcclxuICAgICAgICAgICAgICAgIGlmIChyZXN1bHQudmFsdWUpIHtcclxuICAgICAgICAgICAgICAgICAgICBtb2RhbC5oaWRlKCk7IC8vIEhpZGUgbW9kYWxcdFx0XHRcdFxyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9KTtcclxuICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgLy8gQ2FuY2VsIGJ1dHRvbiBoYW5kbGVyXHJcbiAgICAgICAgY29uc3QgY2FuY2VsQnV0dG9uID0gZWxlbWVudC5xdWVyeVNlbGVjdG9yKCdbZGF0YS1rdC1yb2xlcy1tb2RhbC1hY3Rpb249XCJjYW5jZWxcIl0nKTtcclxuICAgICAgICBjYW5jZWxCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBlID0+IHtcclxuICAgICAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cclxuICAgICAgICAgICAgU3dhbC5maXJlKHtcclxuICAgICAgICAgICAgICAgIHRleHQ6IFwiQXJlIHlvdSBzdXJlIHlvdSB3b3VsZCBsaWtlIHRvIGNhbmNlbD9cIixcclxuICAgICAgICAgICAgICAgIGljb246IFwid2FybmluZ1wiLFxyXG4gICAgICAgICAgICAgICAgc2hvd0NhbmNlbEJ1dHRvbjogdHJ1ZSxcclxuICAgICAgICAgICAgICAgIGJ1dHRvbnNTdHlsaW5nOiBmYWxzZSxcclxuICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b25UZXh0OiBcIlllcywgY2FuY2VsIGl0IVwiLFxyXG4gICAgICAgICAgICAgICAgY2FuY2VsQnV0dG9uVGV4dDogXCJObywgcmV0dXJuXCIsXHJcbiAgICAgICAgICAgICAgICBjdXN0b21DbGFzczoge1xyXG4gICAgICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b246IFwiYnRuIGJ0bi1wcmltYXJ5XCIsXHJcbiAgICAgICAgICAgICAgICAgICAgY2FuY2VsQnV0dG9uOiBcImJ0biBidG4tYWN0aXZlLWxpZ2h0XCJcclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzdWx0KSB7XHJcbiAgICAgICAgICAgICAgICBpZiAocmVzdWx0LnZhbHVlKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgZm9ybS5yZXNldCgpOyAvLyBSZXNldCBmb3JtXHRcclxuICAgICAgICAgICAgICAgICAgICBtb2RhbC5oaWRlKCk7IC8vIEhpZGUgbW9kYWxcdFx0XHRcdFxyXG4gICAgICAgICAgICAgICAgfSBlbHNlIGlmIChyZXN1bHQuZGlzbWlzcyA9PT0gJ2NhbmNlbCcpIHtcclxuICAgICAgICAgICAgICAgICAgICBTd2FsLmZpcmUoe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB0ZXh0OiBcIllvdXIgZm9ybSBoYXMgbm90IGJlZW4gY2FuY2VsbGVkIS5cIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgaWNvbjogXCJlcnJvclwiLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICBidXR0b25zU3R5bGluZzogZmFsc2UsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b25UZXh0OiBcIk9rLCBnb3QgaXQhXCIsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGN1c3RvbUNsYXNzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uOiBcImJ0biBidG4tcHJpbWFyeVwiLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIH0pO1xyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICAvLyBTdWJtaXQgYnV0dG9uIGhhbmRsZXJcclxuICAgICAgICBjb25zdCBzdWJtaXRCdXR0b24gPSBlbGVtZW50LnF1ZXJ5U2VsZWN0b3IoJ1tkYXRhLWt0LXJvbGVzLW1vZGFsLWFjdGlvbj1cInN1Ym1pdFwiXScpO1xyXG4gICAgICAgIHN1Ym1pdEJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XHJcbiAgICAgICAgICAgIC8vIFByZXZlbnQgZGVmYXVsdCBidXR0b24gYWN0aW9uXHJcbiAgICAgICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuXHJcbiAgICAgICAgICAgIC8vIFZhbGlkYXRlIGZvcm0gYmVmb3JlIHN1Ym1pdFxyXG4gICAgICAgICAgICBpZiAodmFsaWRhdG9yKSB7XHJcbiAgICAgICAgICAgICAgICB2YWxpZGF0b3IudmFsaWRhdGUoKS50aGVuKGZ1bmN0aW9uIChzdGF0dXMpIHtcclxuICAgICAgICAgICAgICAgICAgICBjb25zb2xlLmxvZygndmFsaWRhdGVkIScpO1xyXG5cclxuICAgICAgICAgICAgICAgICAgICBpZiAoc3RhdHVzID09ICdWYWxpZCcpIHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgLy8gU2hvdyBsb2FkaW5nIGluZGljYXRpb25cclxuICAgICAgICAgICAgICAgICAgICAgICAgc3VibWl0QnV0dG9uLnNldEF0dHJpYnV0ZSgnZGF0YS1rdC1pbmRpY2F0b3InLCAnb24nKTtcclxuXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIC8vIERpc2FibGUgYnV0dG9uIHRvIGF2b2lkIG11bHRpcGxlIGNsaWNrIFxyXG4gICAgICAgICAgICAgICAgICAgICAgICBzdWJtaXRCdXR0b24uZGlzYWJsZWQgPSB0cnVlO1xyXG5cclxuICAgICAgICAgICAgICAgICAgICAgICAgLy8gU2ltdWxhdGUgZm9ybSBzdWJtaXNzaW9uLiBGb3IgbW9yZSBpbmZvIGNoZWNrIHRoZSBwbHVnaW4ncyBvZmZpY2lhbCBkb2N1bWVudGF0aW9uOiBodHRwczovL3N3ZWV0YWxlcnQyLmdpdGh1Yi5pby9cclxuICAgICAgICAgICAgICAgICAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyBSZW1vdmUgbG9hZGluZyBpbmRpY2F0aW9uXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdWJtaXRCdXR0b24ucmVtb3ZlQXR0cmlidXRlKCdkYXRhLWt0LWluZGljYXRvcicpO1xyXG5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8vIEVuYWJsZSBidXR0b25cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN1Ym1pdEJ1dHRvbi5kaXNhYmxlZCA9IGZhbHNlO1xyXG5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8vIFNob3cgcG9wdXAgY29uZmlybWF0aW9uIFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgU3dhbC5maXJlKHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0OiBcIkZvcm0gaGFzIGJlZW4gc3VjY2Vzc2Z1bGx5IHN1Ym1pdHRlZCFcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpY29uOiBcInN1Y2Nlc3NcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBidXR0b25zU3R5bGluZzogZmFsc2UsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY29uZmlybUJ1dHRvblRleHQ6IFwiT2ssIGdvdCBpdCFcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjdXN0b21DbGFzczoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uOiBcImJ0biBidG4tcHJpbWFyeVwiXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzdWx0KSB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKHJlc3VsdC5pc0NvbmZpcm1lZCkge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtb2RhbC5oaWRlKCk7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfSk7XHJcblxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgLy9mb3JtLnN1Ym1pdCgpOyAvLyBTdWJtaXQgZm9ybVxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9LCAyMDAwKTtcclxuICAgICAgICAgICAgICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAvLyBTaG93IHBvcHVwIHdhcm5pbmcuIEZvciBtb3JlIGluZm8gY2hlY2sgdGhlIHBsdWdpbidzIG9mZmljaWFsIGRvY3VtZW50YXRpb246IGh0dHBzOi8vc3dlZXRhbGVydDIuZ2l0aHViLmlvL1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBTd2FsLmZpcmUoe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dDogXCJTb3JyeSwgbG9va3MgbGlrZSB0aGVyZSBhcmUgc29tZSBlcnJvcnMgZGV0ZWN0ZWQsIHBsZWFzZSB0cnkgYWdhaW4uXCIsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBpY29uOiBcImVycm9yXCIsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBidXR0b25zU3R5bGluZzogZmFsc2UsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uVGV4dDogXCJPaywgZ290IGl0IVwiLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY3VzdG9tQ2xhc3M6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uOiBcImJ0biBidG4tcHJpbWFyeVwiXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH0pO1xyXG4gICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgIH0pO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcblxyXG4gICAgLy8gU2VsZWN0IGFsbCBoYW5kbGVyXHJcbiAgICBjb25zdCBoYW5kbGVTZWxlY3RBbGwgPSAoKSA9PiB7XHJcbiAgICAgICAgLy8gRGVmaW5lIHZhcmlhYmxlc1xyXG4gICAgICAgIGNvbnN0IHNlbGVjdEFsbCA9IGZvcm0ucXVlcnlTZWxlY3RvcignI2t0X3JvbGVzX3NlbGVjdF9hbGwnKTtcclxuICAgICAgICBjb25zdCBhbGxDaGVja2JveGVzID0gZm9ybS5xdWVyeVNlbGVjdG9yQWxsKCdbdHlwZT1cImNoZWNrYm94XCJdJyk7XHJcblxyXG4gICAgICAgIC8vIEhhbmRsZSBjaGVjayBzdGF0ZVxyXG4gICAgICAgIHNlbGVjdEFsbC5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCBlID0+IHtcclxuXHJcbiAgICAgICAgICAgIC8vIEFwcGx5IGNoZWNrIHN0YXRlIHRvIGFsbCBjaGVja2JveGVzXHJcbiAgICAgICAgICAgIGFsbENoZWNrYm94ZXMuZm9yRWFjaChjID0+IHtcclxuICAgICAgICAgICAgICAgIGMuY2hlY2tlZCA9IGUudGFyZ2V0LmNoZWNrZWQ7XHJcbiAgICAgICAgICAgIH0pO1xyXG4gICAgICAgIH0pO1xyXG4gICAgfVxyXG5cclxuICAgIHJldHVybiB7XHJcbiAgICAgICAgLy8gUHVibGljIGZ1bmN0aW9uc1xyXG4gICAgICAgIGluaXQ6IGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAgICAgaW5pdFVwZGF0ZVBlcm1pc3Npb25zKCk7XHJcbiAgICAgICAgICAgIGhhbmRsZVNlbGVjdEFsbCgpO1xyXG4gICAgICAgIH1cclxuICAgIH07XHJcbn0oKTtcclxuXHJcbi8vIE9uIGRvY3VtZW50IHJlYWR5XHJcbktUVXRpbC5vbkRPTUNvbnRlbnRMb2FkZWQoZnVuY3Rpb24gKCkge1xyXG4gICAgS1RVc2Vyc1VwZGF0ZVBlcm1pc3Npb25zLmluaXQoKTtcclxufSk7Il0sIm5hbWVzIjpbIktUVXNlcnNVcGRhdGVQZXJtaXNzaW9ucyIsImVsZW1lbnQiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwiZm9ybSIsInF1ZXJ5U2VsZWN0b3IiLCJtb2RhbCIsImJvb3RzdHJhcCIsIk1vZGFsIiwiaW5pdFVwZGF0ZVBlcm1pc3Npb25zIiwidmFsaWRhdG9yIiwiRm9ybVZhbGlkYXRpb24iLCJmb3JtVmFsaWRhdGlvbiIsImZpZWxkcyIsInZhbGlkYXRvcnMiLCJub3RFbXB0eSIsIm1lc3NhZ2UiLCJwbHVnaW5zIiwidHJpZ2dlciIsIlRyaWdnZXIiLCJCb290c3RyYXA1Iiwicm93U2VsZWN0b3IiLCJlbGVJbnZhbGlkQ2xhc3MiLCJlbGVWYWxpZENsYXNzIiwiY2xvc2VCdXR0b24iLCJhZGRFdmVudExpc3RlbmVyIiwiZSIsInByZXZlbnREZWZhdWx0IiwiU3dhbCIsImZpcmUiLCJ0ZXh0IiwiaWNvbiIsInNob3dDYW5jZWxCdXR0b24iLCJidXR0b25zU3R5bGluZyIsImNvbmZpcm1CdXR0b25UZXh0IiwiY2FuY2VsQnV0dG9uVGV4dCIsImN1c3RvbUNsYXNzIiwiY29uZmlybUJ1dHRvbiIsImNhbmNlbEJ1dHRvbiIsInRoZW4iLCJyZXN1bHQiLCJ2YWx1ZSIsImhpZGUiLCJyZXNldCIsImRpc21pc3MiLCJzdWJtaXRCdXR0b24iLCJ2YWxpZGF0ZSIsInN0YXR1cyIsImNvbnNvbGUiLCJsb2ciLCJzZXRBdHRyaWJ1dGUiLCJkaXNhYmxlZCIsInNldFRpbWVvdXQiLCJyZW1vdmVBdHRyaWJ1dGUiLCJpc0NvbmZpcm1lZCIsImhhbmRsZVNlbGVjdEFsbCIsInNlbGVjdEFsbCIsImFsbENoZWNrYm94ZXMiLCJxdWVyeVNlbGVjdG9yQWxsIiwiZm9yRWFjaCIsImMiLCJjaGVja2VkIiwidGFyZ2V0IiwiaW5pdCIsIktUVXRpbCIsIm9uRE9NQ29udGVudExvYWRlZCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/extended/js/custom/user-management/roles/view/update-role.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/extended/js/custom/user-management/roles/view/update-role.js"]();
/******/ 	
/******/ })()
;