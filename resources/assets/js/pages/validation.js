'use strict';
$(document).ready(function() {
    $('#clear').on('click', function() {
        $('#tryitForm1,  #tryitForm').bootstrapValidator("resetForm");
    });

    $('#tryitForm1').bootstrapValidator({
        fields: {
            
            name: {
                validators: {
                    notEmpty: {
                        message: 'Role name is required'
                    }
                }
            },
            displayname: {
                validators: {
                    notEmpty: {
                        message: 'Display name is required'
                    }
                }
            },
            description: {
                validators: {
                    notEmpty: {
                        message: 'description number is required'
                    }
                }
            }
        },
        submitHandler: function(form) {
            if ($('#tryitForm1').valid()) {
                console.log("now we enable the submit button!");
            }
        }
    }).on('success.form.bv', function(e) {
        e.preventDefault();
        swal({
            title: "Success.",
            text: "Successfully Added",
            type: "success",
            allowOutsideClick: false
        }).then(function() {
            location.reload();
        });
    });

    $('#tryitForm').bootstrapValidator({
        fields: {
         name: {
                validators: {
                    notEmpty: {
                        message: 'Role name is required'
                    }
                }
            },
            displayname: {
                validators: {
                    notEmpty: {
                        message: 'Display name is required'
                    }
                }
            },
            description: {
                validators: {
                    notEmpty: {
                        message: 'description number is required'
                    }
                }
            } 
        },
        submitHandler: function(form) {
            if ($('#tryitForm').valid()) {
                console.log("now we enable the submit button!");
            }
        }
    });
});