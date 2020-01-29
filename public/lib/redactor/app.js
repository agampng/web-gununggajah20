$(function () {
    $('.redactor').each(function(index, elm){
        $(elm).redactor({
            buttons: ['format', 'bold', 'italic', 'lists', 'image', 'file', 'link', 'horizontalrule'],
            plugins: ['source', 'table', 'alignment', 'fontcolor', 'video', 'clips'],
            direction: $(this).data('direction'),
            minHeight: 500,
            toolbarFixedTopOffset: 60,
            linebreaks: true,
            imageUpload: APP.media.storeUrl,
            imageResizable: true,
            imagePosition: true,
            imageUploadFields: {
                '_token': APP.token
            },
            fileUpload: APP.media.storeUrl,
            fileUploadFields: {
                '_token': APP.token
            }
        });
    });
});
