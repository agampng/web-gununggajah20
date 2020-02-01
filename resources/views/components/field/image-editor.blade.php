<?php

$value = ($model && $model->{$name}) ? $model->{$name} : null;
$data = $data + ['ratio' => '16:9', 'width' => '100%'];
$id = uniqid('image-editor-');
?>

<div class="field {{ isset($data['required']) ? 'required' : null }}" style="width: {{ $data['width'] }}" id="{{ $id }}">
    <label for="">{{ $label }}</label>
    <input type="file" accept="image/*" data-image-editor name="{{ $name }}" data-fileuploader-listInput="uploader[{{ $name }}]"/>
</div>

{{-- {{dd($value)}} --}}
@push('script')
    <script>
        $(document).ready(function() {

            var getUrl = window.location;
            var baseUrl = getUrl .protocol + "//" + getUrl.host + "/";
            var baseImage = baseUrl + "uploadedImage" + "/" + '{{$value}}'
            // console.log(baseImage)
            // enable fileupload plugin
            $('#{{ $id }} input[data-image-editor]').fileuploader({
                limit: 1,
                extensions: ['jpg', 'jpeg', 'png'],
                changeInput: ' ',
                theme: 'thumbnails',
                enableApi: true,
                addMore: true,
                @if($value)
                files: [{
                    name: '{{ basename($value) }}',
                    size: 1000,
                    type: 'image/png',
                    file: baseImage,
                    data: {
                        thumbnail: baseImage,
                        url: baseImage
                    }
                }],
                @endif
                thumbnails: {
                    box: '<div class="fileuploader-items">' +
                        '<ul class="fileuploader-items-list">' +
                        '<li class="fileuploader-thumbnails-input"><div class="fileuploader-thumbnails-input-inner"><i>+</i></div></li>' +
                        '</ul>' +
                        '</div>',
                    item: '<li class="fileuploader-item file-has-popup">' +
                        '<div class="fileuploader-item-inner" style="width: {{ $data['width'] }}">' +
                        '<div class="actions-holder">' +
                        '<a class="fileuploader-action fileuploader-action-remove" title="${captions.remove}"><i></i></a>' +
                        '</div>' +
                        '<div class="thumbnail-holder">' +
                        '${image}' +
                        '<span class="fileuploader-action-popup"></span>' +
                        '</div>' +
                        '<div class="progress-holder">${progressBar}</div>' +
                        '</div>' +
                        '</li>',
                    item2: '<li class="fileuploader-item file-has-popup">' +
                        '<div class="fileuploader-item-inner" style="width: {{ $data['width'] }}">' +
                        '<div class="actions-holder">' +
                        // '<a href="${file}" class="fileuploader-action fileuploader-action-download" title="${captions.download}" download><i></i></a>' +
                        '<a class="fileuploader-action fileuploader-action-remove" title="${captions.remove}"><i></i></a>' +
                        '</div>' +
                        '<div class="thumbnail-holder">' +
                        '${image}' +
                        '<span class="fileuploader-action-popup"></span>' +
                        '</div>' +
                        '<div class="progress-holder">${progressBar}</div>' +
                        '</div>' +
                        '</li>',
                    startImageRenderer: true,
                    removeConfirmation: false,
                    canvasImage: false,
                    _selectors: {
                        list: '.fileuploader-items-list',
                        item: '.fileuploader-item',
                        start: '.fileuploader-action-start',
                        retry: '.fileuploader-action-retry',
                        remove: '.fileuploader-action-remove'
                    },
                    onItemShow: function(item, listEl, parentEl, newInputEl, inputEl) {
                        var plusInput = listEl.find('.fileuploader-thumbnails-input'),
                            api = $.fileuploader.getInstance(inputEl.get(0));

                        plusInput.insertAfter(item.html)[api.getOptions().limit && api.getChoosedFiles().length >= api.getOptions().limit ? 'hide' : 'show']();

                        if(item.format == 'image') {
                            item.html.find('.fileuploader-item-icon').hide();
                        }

                        if(api.getFiles().length == api.getOptions().limit) {
                            plusInput.hide();
                        }
                    },
                    onItemRemove: function(html, listEl, parentEl, newInputEl, inputEl) {
                        var plusInput = listEl.find('.fileuploader-thumbnails-input'),
                            api = $.fileuploader.getInstance(inputEl.get(0));

                        html.children().animate({'opacity': 0}, 200, function() {
                            setTimeout(function() {
                                html.remove();

                                if(api.getFiles().length - 1 < api.getOptions().limit) {
                                    plusInput.show();
                                }
                            }, 100);
                        });

                    }
                },
                dragDrop: {
                    container: '.fileuploader-thumbnails-input'
                },
                afterRender: function(listEl, parentEl, newInputEl, inputEl) {
                    var plusInput = listEl.find('.fileuploader-thumbnails-input'),
                        api = $.fileuploader.getInstance(inputEl.get(0));

                    plusInput.on('click', function() {
                        api.open();
                    });
                }
            });

        });
    </script>
@endpush
