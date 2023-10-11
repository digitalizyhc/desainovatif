import * as FilePond from 'filepond';
import 'filepond/dist/filepond.min.css';
// Import the plugin filepond
import FilePondPluginFileEncode from 'filepond-plugin-file-encode';
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';
import FilePondPluginImageExifOrientation from 'filepond-plugin-image-exif-orientation'
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import FilePondPluginImageCrop from 'filepond-plugin-image-crop'
import FilePondPluginImageResize from 'filepond-plugin-image-resize';
import FilePondPluginImageTransform from 'filepond-plugin-image-transform';

// Import the plugin styles
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css';

// Register the plugin
FilePond.registerPlugin(
    FilePondPluginFileEncode,
    FilePondPluginFileValidateType,
    FilePondPluginImageExifOrientation,
    FilePondPluginImagePreview,
    FilePondPluginImageCrop,
    FilePondPluginImageResize,
    FilePondPluginImageTransform,
    );
const inputAvatar = document.querySelector('input[name="avatar"].filepond');
const inputImage = document.querySelector('input[name="image"].filepond');
const inputMultiImage = document.querySelector('input[name="image[]"].filepond');
const inputGallery = document.querySelector('input[name="gallery[]"].filepond');
const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

FilePond.create(inputAvatar).setOptions({
    server: {
        url: "/filepond",
        // url: "{{ config('filepond.server.url') }}",
        headers: {
            'X-CSRF-TOKEN': csrfToken,
        }
    },
    acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
    imagePreviewHeight: 120,
    imageCropAspectRatio: '1:1',
    imageResizeTargetWidth: 200,
    imageResizeTargetHeight: 200,
    stylePanelLayout: 'compact circle',
    styleLoadIndicatorPosition: 'center bottom',
    styleButtonRemoveItemPosition: 'center bottom',
});

FilePond.create(inputImage).setOptions({
    server: {
        url: "/filepond",
        headers: {
            'X-CSRF-TOKEN': csrfToken,
        }
    },
    acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
    imagePreviewHeight: 200,
    styleLoadIndicatorPosition: 'center bottom',
    styleButtonRemoveItemPosition: 'center bottom',
});

FilePond.create(inputMultiImage, {chunkUploads: true}).setOptions({
    server: {
        url: "/filepond",
        headers: {
            'X-CSRF-TOKEN': csrfToken,
        }
    },
    acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
    imagePreviewHeight: 200,
    styleLoadIndicatorPosition: 'center bottom',
    styleButtonRemoveItemPosition: 'center bottom',
});

FilePond.create(inputGallery, {chunkUploads: true}).setOptions({
    server: {
        url: "/filepond",
        headers: {
            'X-CSRF-TOKEN': csrfToken,
        }
    },
    acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
    imagePreviewHeight: 200,
    styleLoadIndicatorPosition: 'center bottom',
    styleButtonRemoveItemPosition: 'center bottom',
});
