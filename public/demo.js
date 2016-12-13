/**
 * Created by liang on 2016/11/22.
 */
$("#input-pd").fileinput({
    uploadUrl: "/article/uploads1",
    uploadAsync: false,
    minFileCount: 2,
    maxFileCount: 5,
    overwriteInitial: false,
    initialPreview: [
        // IMAGE DATA
        "http://kartik-v.github.io/bootstrap-fileinput-samples/samples/Desert.jpg",
        // IMAGE DATA
        "http://kartik-v.github.io/bootstrap-fileinput-samples/samples/Lighthouse.jpg",
        // VIDEO DATA
        "http://kartik-v.github.io/bootstrap-fileinput-samples/samples/small.mp4",
        // PDF DATA
        'http://kartik-v.github.io/bootstrap-fileinput-samples/samples/pdf-sample.pdf',
        // TEXT DATA
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut mauris ut libero fermentum feugiat eu et dui. Mauris condimentum rhoncus enim, sed semper neque vestibulum id. Nulla semper, turpis ut consequat imperdiet, enim turpis aliquet orci, eget venenatis elit sapien non ante. Aliquam neque ipsum, rhoncus id ipsum et, volutpat tincidunt augue. Maecenas dolor libero, gravida nec est at, commodo tempor massa. Sed id feugiat massa. Pellentesque at est eu ante aliquam viverra ac sed est.",
        // HTML DATA

    ],
    initialPreviewAsData: true, // identify if you are sending preview data only and not the raw markup
    initialPreviewFileType: 'image', // image is the default and can be overridden in config below
    initialPreviewConfig: [
        {caption: "Desert.jpg", size: 827000, width: "120px", url: "/file-upload-batch/2", key: 1},
        {caption: "Lighthouse.jpg", size: 549000, width: "120px", url: "/file-upload-batch/2", key: 2},
        {type: "video", size: 375000, filetype: "video/mp4", caption: "KrajeeSample.mp4", url: "/file-upload-batch/2", key: 3},
        {type: "pdf", size: 8000, caption: "About.pdf", url: "/file-upload-batch/2", key: 4},
        {type: "text", size: 1430, caption: "LoremIpsum.txt", url: "/file-upload-batch/2", key: 5},
        {type: "html", size: 3550, caption: "LoremIpsum.html", url: "/file-upload-batch/2", key: 6}
    ],
    purifyHtml: true, // this by default purifies HTML data for preview
    uploadExtraData: {
        img_key: "1000",
        img_keywords: "happy, places",
    }
}).on('filesorted', function(e, params) {
    console.log('File sorted params', params);
}).on('fileuploaded', function(e, params) {
    console.log('File uploaded params', params);
});
