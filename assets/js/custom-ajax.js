jQuery(document).ready(function($) {
    $('#custom-search-form').on('submit', function(e) {
        e.preventDefault();

        var searchQuery = $('#search-input').val();
        var postType = $('#post-type').val();

        $.ajax({
            url: customAjax.ajaxUrl,
            type: 'POST',
            data: {
                action: 'custom_search',
                searchQuery: searchQuery,
                postType: postType
            },
            success: function(response) {
                $('#search-results').html(response);
            }
        });
    });
});