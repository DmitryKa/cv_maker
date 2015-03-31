Drupal.behaviors.addValidation = function() {
    (function($){
        $('#new-cv-form').validate({
            rules: {
                first_name: 'required',
                last_name: 'required',
                content: 'required'
            },
            messages: {
                first_name: 'Enter your first name',
                last_name: 'Enter your last name',
                content: 'Enter your CV'
            }
        });
    })(jq1112)
}