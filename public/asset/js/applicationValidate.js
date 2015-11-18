$(document).ready(function() {
    $('.application').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'fa fa-thumbs-up fa-2x',
            invalid: 'fa fa-thumbs-down fa-2x',
            validating: 'fa fa-spinner fa-2x'
        },
        fields: {
            name: {
                message: 'The name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 50,
                        message: 'The name must be more than 6 and less than 50 characters long'
                    }
                }
            },
            email: {
                validators: {

                    regexp: {
                        regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                        message: 'The value is not a valid email address'
                    }
                }
            },
            cover_letter: {
                validators: {
                    notEmpty: {
                        message: 'The cover letter is required and cannot be empty'
                    },
                    stringLength: {
                        min: 20,
                        message: 'The name must be more than 20 characters'
                    }
                }
            },
            resume_file: {
                validators: {
                    file: {
                        extension: 'doc,docx,pdf,rtf',
                        type: 'application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf,application/rtf',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'file not valid | only pdf,doc,docx,rtf | max file size 2MB'
                    },
                    notEmpty: {
                        message: 'resume(cv) is required'
                    }
                }
            }
        }
    });
});